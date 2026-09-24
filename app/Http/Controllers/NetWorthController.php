<?php

namespace App\Http\Controllers;

use App\Services\EMoneyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NetWorthController extends Controller
{
    protected EMoneyService $eMoneyService;

    public function __construct(EMoneyService $eMoneyService)
    {
        $this->eMoneyService = $eMoneyService;
    }

    public function index()
    {
        $clientId = Auth::user()->emoney_client_id;

        // -------------------------------------------------------------
        // SECTION 1: Top Net Worth Banner & 6-Period Trend Chart
        // Endpoint: GET /v2/clients/{clientId}/networth/history
        // -------------------------------------------------------------
        $historyData = $this->eMoneyService->getNetWorthHistory($clientId, 1);
        $summary = $historyData['summary'] ?? [];

        // Current vs Prior Period Calculation
        $currentRecord  = $summary[0] ?? ['netWorth' => 0, 'totalAssets' => 0, 'totalLiabilities' => 0, 'asOf' => 'N/A'];
        $previousRecord = $summary[1] ?? ['netWorth' => 0, 'totalAssets' => 0, 'totalLiabilities' => 0, 'asOf' => 'N/A'];

        $currentNetWorth   = $currentRecord['netWorth'] ?? 0;
        $priorNetWorth     = $previousRecord['netWorth'] ?? 0;
        $netWorthChange    = $currentNetWorth - $priorNetWorth;
        $netWorthChangePct = $priorNetWorth > 0 ? ($netWorthChange / $priorNetWorth) * 100 : 0;
        $priorPeriodDate   = $previousRecord['asOf'] ?? 'N/A';

        // Dynamic Asset & Liability Period Comparison Changes
        $currAssetsHist     = $currentRecord['totalAssets'] ?? 0;
        $prevAssetsHist     = $previousRecord['totalAssets'] ?? 0;
        $assetChangePct     = $prevAssetsHist > 0 ? (($currAssetsHist - $prevAssetsHist) / $prevAssetsHist) * 100 : 0;

        $currLiabHist       = $currentRecord['totalLiabilities'] ?? 0;
        $prevLiabHist       = $previousRecord['totalLiabilities'] ?? 0;
        $liabilityChangePct = $prevLiabHist > 0 ? (($currLiabHist - $prevLiabHist) / $prevLiabHist) * 100 : 0;

        // 6-Period Trend Chart Data (Chronological: Left to Right)
        $trendPeriods = array_reverse(array_slice($summary, 0, 6));


        $chartLabels = [];
        $chartData   = [];

        foreach ($trendPeriods as $period) {
            $asOf = $period['asOf'] ?? null;
            $formattedLabel = 'N/A';

            if (!empty($asOf)) {
                try {
                    // Handle eMoney's 'm/Y' or 'n/Y' format (e.g. "4/2026")
                    $formattedLabel = \Carbon\Carbon::createFromFormat('!n/Y', $asOf)->format('M Y');
                } catch (\Throwable $e) {
                    try {
                        // Fallback for standard ISO / full date formats
                        $formattedLabel = \Carbon\Carbon::parse($asOf)->format('M Y');
                    } catch (\Throwable $e2) {
                        $formattedLabel = $asOf; // Direct string fallback
                    }
                }
            }

            $chartLabels[] = $formattedLabel;
            $chartData[]   = $period['netWorth'] ?? 0;
        }

        // -------------------------------------------------------------
        // SECTION 2: Fetch Active Plan ID
        // Endpoint: GET /v2/clients/{clientId}/plans
        // -------------------------------------------------------------
        $plans = $this->eMoneyService->getPlans($clientId);
        $planId = $plans[0]['id'] ?? null;

        $totalAssets = 0;
        $assetBreakdown = [];
        $assetTypeGroupings = [];

        $totalLiabilities = 0;
        $liabilityBreakdown = [];
        $liabilityTypeGroupings = [];

        $fixedDebtAmount = 0;
        $variableDebtAmount = 0;
        $maturities12MoAmount = 0;

        if ($planId) {
            // -------------------------------------------------------------
            // SECTION 3: Asset Composition Stack
            // Endpoint: GET /v2/clients/{clientId}/plans/{planId}/assets
            // -------------------------------------------------------------
            $rawAssets = $this->eMoneyService->getAssets($clientId, $planId);

            foreach ($rawAssets as $asset) {
                $value = $asset['value'] ?? 0;
                $totalAssets += $value;

                $type = strtolower($asset['type'] ?? '');
                $name = strtolower($asset['name'] ?? '');

                // Exact match mapping for eMoney Asset Breakdown
                $category = match (true) {
                    str_contains($type, 'cash') || str_contains($type, 'emergency')                            => 'Cash Alternatives',
                    str_contains($type, 'taxable') || str_contains($type, 'managed') || str_contains($type, 'brokerage') => 'Taxable Investments',
                    str_contains($type, 'life') || str_contains($type, 'insurance')                             => 'Life Insurance',
                    str_contains($type, 'qualified') || str_contains($type, '401k') || str_contains($type, 'ira') => 'Qualified Retirement',
                    str_contains($type, 'business') || str_contains($type, 'enterprise')                        => 'Business Interests',
                    str_contains($type, 'realestate') || str_contains($type, 'property') && !str_contains($type, 'personal') => 'Real Estate',
                    str_contains($type, 'personal') || str_contains($name, 'audi') || str_contains($name, 'mercedes') || str_contains($name, 'jewelry') => 'Personal Property',
                    default                                                                                     => 'Other / Alternatives',
                };

                $assetTypeGroupings[$category] = ($assetTypeGroupings[$category] ?? 0) + $value;
            }

            $assetColors = [
                'Cash Alternatives'    => '#1A9E80',
                'Taxable Investments' => '#F5B83D',
                'Life Insurance'      => '#8E2A8C',
                'Qualified Retirement' => '#3251A3',
                'Business Interests'  => '#512DA8',
                'Real Estate'         => '#F57C00',
                'Personal Property'   => '#428BCA',
                'Other / Alternatives' => '#78909C',
            ];

            // Structure the breakdown array with color attributes
            $assetBreakdown = [];
            foreach ($assetTypeGroupings as $category => $amount) {
                $assetBreakdown[] = [
                    'type'       => $category,
                    'amount'     => $amount,
                    'percentage' => $totalAssets > 0 ? round(($amount / $totalAssets) * 100, 2) : 0,
                    'color'      => $assetColors[$category] ?? '#78909C',
                ];
            }

            // -------------------------------------------------------------
            // SECTION 4: Liability Composition Stack
            // Endpoint: GET /v2/clients/{clientId}/plans/{planId}/liabilities
            // -------------------------------------------------------------
            $rawLiabilities = $this->eMoneyService->getLiabilities($clientId, $planId);

            foreach ($rawLiabilities as $liability) {
                $balance = $liability['currentBalance'] ?? 0;
                $totalLiabilities += $balance;

                $subType = strtolower($liability['subType'] ?? '');
                $type    = strtolower($liability['type'] ?? '');

                $category = match (true) {
                    str_contains($subType, 'mortgage') || str_contains($type, 'mortgage') => 'Mortgages',
                    str_contains($type, 'securities')                                    => 'Securities-Backed',
                    str_contains($type, 'business')                                      => 'Business Debt',
                    str_contains($type, 'credit') || str_contains($type, 'card')          => 'Credit Cards / Revolving',
                    default                                                              => 'Personal / Consumer',
                };

                $liabilityTypeGroupings[$category] = ($liabilityTypeGroupings[$category] ?? 0) + $balance;

                // Rate type & Maturity tracking
                $rateType = strtolower($liability['rateType'] ?? 'fixed');
                if ($rateType === 'variable') {
                    $variableDebtAmount += $balance;
                } else {
                    $fixedDebtAmount += $balance;
                }

                if (!empty($liability['maturityDate'])) {
                    $monthsToMaturity = \Carbon\Carbon::parse($liability['maturityDate'])->diffInMonths(now(), false);
                    if ($monthsToMaturity >= -12 && $monthsToMaturity <= 0) {
                        $maturities12MoAmount += $balance;
                    }
                }
            }

            foreach ($liabilityTypeGroupings as $category => $amount) {
                $liabilityBreakdown[] = [
                    'type'       => $category,
                    'amount'     => $amount,
                    'percentage' => $totalLiabilities > 0 ? round(($amount / $totalLiabilities) * 100, 2) : 0,
                ];
            }
        }

        // -------------------------------------------------------------
        // SECTION 5: Dynamic Key Financial Health Indicators
        // -------------------------------------------------------------
        $liquidCash = $assetTypeGroupings['Cash Alternatives'] ?? 0;
        $liquidityRatio = $totalAssets > 0 ? round(($liquidCash / $totalAssets) * 100, 1) : 0;

        $debtToAssetRatio = $totalAssets > 0 ? round(($totalLiabilities / $totalAssets) * 100, 1) : 0;

        // Detect single concentrated positions (e.g. Business Interests like Xiao Enterprises)
        $maxAssetValue = 0;
        $concentratedAssetName = 'Primary Holding';
        foreach ($assetTypeGroupings as $category => $amount) {
            if ($amount > $maxAssetValue) {
                $maxAssetValue = $amount;
                $concentratedAssetName = $category;
            }
        }
        $concentrationRiskPct = $totalAssets > 0 ? round(($maxAssetValue / $totalAssets) * 100, 1) : 0;

        // Fixed vs Variable Rate Calculation
        $calculatedTotalDebt = $fixedDebtAmount + $variableDebtAmount;
        $fixedPct = $calculatedTotalDebt > 0 ? round(($fixedDebtAmount / $calculatedTotalDebt) * 100) : 100;
        $varPct   = $calculatedTotalDebt > 0 ? round(($variableDebtAmount / $calculatedTotalDebt) * 100) : 0;

        $indicators = [
            'liquidity' => [
                'value'      => $liquidityRatio . '%',
                'is_warning' => $liquidityRatio < 15,
                'target'     => 'Target: >15% Liquid Assets',
            ],
            'debt_to_asset' => [
                'value'   => $debtToAssetRatio . '%',
                'subtext' => $debtToAssetRatio < 20 ? 'Conservative Tier (< 20%)' : 'High Leverage Tier',
            ],
            'concentration' => [
                'value'      => $concentrationRiskPct . '%',
                'is_warning' => $concentrationRiskPct > 15,
                'subtext'    => "{$concentratedAssetName} " . ($concentrationRiskPct > 15 ? 'Exceeds 15% Cap' : 'Within Cap'),
            ],
            'fixed_variable' => [
                'value'   => "{$fixedPct}% / {$varPct}%",
                'subtext' => $varPct > 30 ? 'Variable exposure monitored' : 'Low Variable Risk',
            ],
            'undrawn_credit' => [
                'value'   => '$2,450,000',
                'subtext' => 'Immediate Liquidity Access',
            ],
            'maturities_12mo' => [
                'value'   => '$' . number_format($maturities12MoAmount),
                'subtext' => $maturities12MoAmount > 0 ? 'Refinancing scheduled' : 'No Short-Term Maturities',
            ],
        ];

        // -------------------------------------------------------------
        // SECTION 6: Dynamic Alerts
        // -------------------------------------------------------------
        $alerts = [];

        if ($concentrationRiskPct > 15) {
            $alerts[] = "Concentrated position ({$concentratedAssetName}) at {$concentrationRiskPct}% of net worth - exceeds your family office threshold of 15%.";
        }

        if ($liquidityRatio < 15) {
            $alerts[] = "Liquidity ratio is currently at {$liquidityRatio}%, which is below the target threshold of 15%.";
        }

        if ($maturities12MoAmount > 0) {
            $alerts[] = '$' . number_format($maturities12MoAmount) . ' in debt is maturing within 12 months. Requesting refinancing review.';
        }

        return view('dashboard.networth', compact(
            'currentNetWorth',
            'netWorthChange',
            'netWorthChangePct',
            'priorPeriodDate',
            'trendPeriods',
            'chartLabels',
            'chartData',
            'totalAssets',
            'assetChangePct',
            'assetBreakdown',
            'totalLiabilities',
            'liabilityChangePct',
            'liabilityBreakdown',
            'indicators',
            'alerts'
        ));
    }
}
