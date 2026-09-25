<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Services\EMoneyService;

class AssetAllocationController extends Controller
{
    protected $eMoneyService;

    public function __construct(EMoneyService $eMoneyService)
    {
        $this->eMoneyService = $eMoneyService;
    }

    /**
     * Display Detailed Asset Allocation Page
     */
    public function show()
    {
        $user = Auth::user();
        $allocationData = null;

        if ($user && !empty($user->emoney_client_id)) {
            try {
                // 1. Get client's primary plan
                $plans = $this->eMoneyService->getPlans($user->emoney_client_id);
                $primaryPlanId = $plans[0]['id'] ?? null;

                if ($primaryPlanId) {
                    // 2. Get asset allocation breakdown
                    $allocationData = $this->eMoneyService->getAssetAllocation(
                        $user->emoney_client_id,
                        $primaryPlanId
                    );
                }
            } catch (\Throwable $e) {
                Log::error('Error loading detailed Asset Allocation page: ' . $e->getMessage());
            }
        }

        return view('asset-allocation.show', [
            'user'           => $user,
            'allocationData' => $allocationData,
        ]);
    }
}
