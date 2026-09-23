<?php

namespace App\Http\Controllers;

use App\Services\EMoneyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    protected EMoneyService $eMoneyService;

    public function __construct(EMoneyService $eMoneyService)
    {
        $this->eMoneyService = $eMoneyService;
    }

    public function index()
    {
        $user = Auth::user();

        $currentNetWorth = null;
        $lastMonthNetWorth = null;

        if ($user && !empty($user->emoney_client_id)) {
            try {
                // 1. Fetch Net Worth History from eMoney
                $historyData = $this->eMoneyService->getNetWorthHistory($user->emoney_client_id, 1);
                $summary = $historyData['summary'] ?? [];

                if (!empty($summary)) {
                    $currentNetWorth = $summary[0]['netWorth'] ?? null;

                    $targetAsOf = now()->subMonth()->format('n/Y');

                    $lastMonthRecord = collect($summary)->firstWhere('asOf', $targetAsOf) ?? ($summary[1] ?? null);

                    if ($lastMonthRecord) {
                        $lastMonthNetWorth = $lastMonthRecord['netWorth'];
                    }
                }
            } catch (\Throwable $e) {
                Log::error('eMoney Net Worth load error on dashboard page load: ' . $e->getMessage());
            }
        }

        return view('dashboard.index', [
            'user'              => $user,
            'currentNetWorth'   => $currentNetWorth,
            'lastMonthNetWorth' => $lastMonthNetWorth,
        ]);
    }
}
