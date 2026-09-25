<?php

namespace App\Services;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Exception;

class EMoneyService
{
    protected string $clientId;
    protected string $apiKey;
    protected string $ownerId;
    protected string $tokenUrl;
    protected string $baseUrl;
    protected string $privateKeyPath;

    public function __construct()
    {
        $this->clientId       = config('services.emoney.client_id');
        $this->apiKey         = config('services.emoney.api_key');
        $this->ownerId        = config('services.emoney.owner_id');
        $this->tokenUrl       = config('services.emoney.token_url');
        $this->baseUrl        = config('services.emoney.base_url');
        $this->privateKeyPath = config('services.emoney.key_path');
    }

    /**
     * Generate RS256 Client Assertion JWT
     */
    private function generateJwtAssertion(): string
    {
        if (!file_exists($this->privateKeyPath)) {
            throw new Exception(
                "eMoney private key file not found at: {$this->privateKeyPath}"
            );
        }

        $privateKey = file_get_contents($this->privateKeyPath);

        $payload = [
            'sub' => $this->clientId,
            'iss' => $this->clientId,
            'aud' => $this->tokenUrl,
            'exp' => time() + 3600,
        ];

        return JWT::encode($payload, $privateKey, 'RS256');
    }

    /**
     * Get OAuth Bearer Access Token
     */
    public function getAccessToken(): string
    {
        return Cache::remember('emoney_access_token', 500, function () {

            $jwtAssertion = $this->generateJwtAssertion();

            $response = Http::asForm()->post($this->tokenUrl, [
                'grant_type'            => 'client_credentials',
                'client_assertion_type' => 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer',
                'client_assertion'      => $jwtAssertion,
                'scope'                 => 'API',
            ]);

            if ($response->failed()) {
                throw new Exception(
                    'eMoney Authentication Failed: ' . $response->body()
                );
            }

            return $response->json('access_token');
        });
    }

    /**
     * Common eMoney API headers
     */
    protected function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->getAccessToken(),
            'apikey'        => $this->apiKey,
            'Accept'        => 'application/json',
        ];
    }

    /**
     * Create authenticated HTTP client
     */
    protected function http()
    {
        return Http::withHeaders($this->getHeaders());
    }

    /**
     * Fetch Client Plans
     */
    public function getPlans(string $clientId): array
    {
        $response = $this->http()
            ->get("{$this->baseUrl}/public/v2/clients/{$clientId}/plans");

        if ($response->failed()) {
            throw new Exception(
                "Failed to fetch plans for client [{$clientId}]: " . $response->body()
            );
        }

        return $response->json('resources') ?? [];
    }

    /**
     * Fetch Liabilities for a specific Plan
     */
    public function getLiabilities(string $clientId, string $planId): array
    {
        $response = $this->http()
            ->get(
                "{$this->baseUrl}/public/v2/clients/{$clientId}/plans/{$planId}/liabilities"
            );

        if ($response->failed()) {
            throw new Exception(
                "Failed to fetch liabilities for client [{$clientId}]: " . $response->body()
            );
        }

        return $response->json('resources') ?? [];
    }

    /**
     * Fetch Assets for a specific Plan
     */
    public function getAssets(string $clientId, string $planId): array
    {
        $response = $this->http()
            ->get(
                "{$this->baseUrl}/public/v2/clients/{$clientId}/plans/{$planId}/assets"
            );

        if ($response->failed()) {
            throw new Exception(
                "Failed to fetch assets for client [{$clientId}]: " . $response->body()
            );
        }

        return $response->json('resources') ?? [];
    }


    /**
     * Get Client By Email
     */
    public function getClientByEmail(string $email): array
    {
        $response = $this->http()
            ->get("{$this->baseUrl}/public/v2/clients", [
                'email' => $email,
            ]);

        if ($response->failed()) {
            throw new Exception(
                "Failed to search eMoney client by email [{$email}]: " . $response->body()
            );
        }

        $clients = $response->json();

        $clientList = $clients['data'] ?? $clients;

        if (empty($clientList)) {
            throw new Exception(
                "No eMoney client found with email: {$email}"
            );
        }

        return is_array($clientList) && isset($clientList[0])
            ? $clientList[0]
            : $clientList;
    }

    /**
     * Create Client
     */
    public function createClient(array $clientData): array
    {
        if (!isset($clientData['ownerId'])) {
            $clientData['ownerId'] = $this->ownerId;
        }

        $response = $this->http()
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->post(
                "{$this->baseUrl}/public/v2/clients",
                $clientData
            );

        if ($response->failed()) {
            throw new Exception(
                'Failed to create eMoney client: ' . $response->body()
            );
        }

        return $response->json();
    }


    /**
     * Get Client
     */
    public function getClient(string $clientId): array
    {
        $response = $this->http()
            ->get("{$this->baseUrl}/public/v2/clients/{$clientId}");

        if ($response->failed()) {
            throw new Exception(
                "Failed to fetch eMoney client [{$clientId}]: " . $response->body()
            );
        }

        return $response->json();
    }


    /**
     * Update Client
     */
    public function updateClient(string $clientId, array $clientData): array
    {
        $response = $this->http()
            ->put("{$this->baseUrl}/public/v2/clients/{$clientId}", $clientData);

        if ($response->failed()) {
            throw new Exception(
                "Failed to update eMoney client [{$clientId}]: " . $response->body()
            );
        }

        return $response->json();
    }

    /**
     * Delete Client
     */
    public function deleteClient(string $clientId): bool
    {
        $response = $this->http()
            ->delete("{$this->baseUrl}/public/v2/clients/{$clientId}");

        if ($response->failed()) {
            throw new Exception(
                "Failed to delete eMoney client [{$clientId}]: " . $response->body()
            );
            return false;
        }

        return true;
    }

    /**
     * Get Client Net Worth
     */
    public function getClientNetWorth(string $clientId): array
    {
        $response = $this->http()
            ->get(
                "{$this->baseUrl}/public/v2/clients/{$clientId}/NetWorth"
            );

        if ($response->failed()) {
            throw new Exception(
                "Failed to fetch Net Worth for client [{$clientId}]: "
                    . $response->body()
            );
        }

        return $response->json();
    }

    /**
     * Get Client Net Worth History
     */
    public function getNetWorthHistory(
        string $clientId,
        int $timeHorizon = 1
    ): array {
        $response = $this->http()
            ->get(
                "{$this->baseUrl}/public/v2/clients/{$clientId}/networthhistory",
                [
                    'timeHorizon' => $timeHorizon,
                ]
            );

        if ($response->failed()) {
            throw new Exception(
                "Failed to fetch Net Worth History: "
                    . $response->body()
            );
        }

        return $response->json();
    }
}
