<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EMoneyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Exception;

class EMoneyController extends Controller
{
    protected EMoneyService $eMoneyService;

    public function __construct(EMoneyService $eMoneyService)
    {
        $this->eMoneyService = $eMoneyService;
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'client.firstName' => 'required|string',
            'client.lastName'  => 'required|string',
            'client.email'     => 'required|email',
            'client.cellPhone' => 'nullable|string',
        ]);

        try {
            $payload = [
                'client' => [
                    'firstName'         => $request->input('client.firstName'),
                    'lastName'          => $request->input('client.lastName'),
                    'dateOfBirth'       => $request->input('client.dateOfBirth', '1985-01-01'),
                    'gender'            => 'Male',
                    'specialNeeds'      => false,
                    'inGoodHealth'      => true,
                    'previousMarriages' => false,
                    'citizenship'       => 'USCitizen',
                    'email'             => $request->input('client.email'),
                    'cellPhone'         => $request->input('client.cellPhone'),
                ],
                'address' => [
                    'address1'   => '123 API Street',
                    'city'       => 'Radnor',
                    'state'      => 'PA',
                    'postalCode' => '19080',
                ],
                'maritalStatus' => 'Single',
                'designation'   => 'Traditional',
            ];

            $result = $this->eMoneyService->createClient($payload);

            return response()->json([
                'success' => true,
                'data'    => $result,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    public function show(string $id): JsonResponse
    {
        try {
            $client = $this->eMoneyService->getClient($id);

            return response()->json([
                'success' => true,
                'data'    => $client,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }


    public function getAuthClientDetails(): JsonResponse
    {
        try {
            /** @var \App\Models\User $user */
            $user = Auth::user();

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthenticated user.',
                ], 401);
            }

            // Fallback: If for any reason emoney_client_id was not populated during registration,
            // attempt to create/fetch it now dynamically.
            if (empty($user->emoney_client_id)) {
                $clientData = $this->eMoneyService->getClientByEmail($user->email);

                if (isset($clientData['id'])) {
                    $user->update(['emoney_client_id' => $clientData['id']]);
                }
            } else {
                // Primary path: Direct fetch using stored emoney_client_id
                $clientData = $this->eMoneyService->getClient($user->emoney_client_id);
            }

            return response()->json([
                'success' => true,
                'data'    => $clientData,
            ]);
        } catch (Exception $e) {
            Log::error('Failed to fetch authenticated eMoney client details', [
                'user_id' => Auth::id(),
                'error'   => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Unable to retrieve client profile from eMoney.',
                'error'   => $e->getMessage(),
            ], 400);
        }
    }
}
