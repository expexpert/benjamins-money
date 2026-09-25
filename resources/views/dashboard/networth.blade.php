@extends('layouts.app')

@section('title','Networth')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-14">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Net Worth
        </p>
    </div>
    <ul class="status d-flex gap-14">
        <li class="active d-flex gap-10 align-center">
            <div class="icon"></div>
            <div class="icon-description f-14">
                Trading Window: Open
            </div>
        </li>

        <li class="d-flex gap-10 align-center">
            <div class="icon"></div>
            <div class="icon-description f-14">
                SmartGuard: ACTIVE
            </div>
            <div class="tooltip">
                <img src="{{ asset('images/tooltip-icon.svg') }}" alt="Tooltip icon">
                <div class="tooltip-content">
                    SmartGuard continuously monitors your portfolio, taxes, compliance,
                    and planning opportunities. When meaningful changes occur, you'll
                    receive actionable insights, not unnecessary notifications.
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="dash-cont-outer">
    <div class="dash-cont-inner">
        <div class="card-outer d-flex gap-24 align-flex-start flex-col">

            {{-- Top Consolidated Net Worth Banner --}}
            <div class="bg-0B1417 p-32 br-12 border-E9E7DD-24 d-flex justify-space-between gap-10 w-100 mb-24">
                <div>
                    <div class="d-flex gap-8 align-center mb-28">
                        <p class="f-13 uppercase lh-14 clr-99ACB6">
                            CONSOLIDATED NET WORTH
                        </p>
                        <span class="bg-C5A059-10 br-4 p-4-8 f-14 lh-14 clr-C5A059">
                            Q2 REPORT
                        </span>
                    </div>
                    <div>
                        <h3 class="h3 f-24 lh-26 white mb-12">
                            ${{ number_format($currentNetWorth) }}
                        </h3>

                        <div class="d-flex gap-8 align-center">
                            <p class="f-16 lh-18 {{ $netWorthChange >= 0 ? 'clr-7BD09D' : 'text-danger' }}">
                                {{ $netWorthChange >= 0 ? '▲ +' : '▼ ' }}${{ number_format(abs($netWorthChange)) }} ({{ ($netWorthChangePct >= 0 ? '+' : '') . number_format($netWorthChangePct, 2) }}%)
                            </p>
                            <p class="f-14 lh-16 neutral-300">
                                vs. Prior Period ({{ $priorPeriodDate }})
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 6-Period Trend Chart --}}
                <div class="d-flex flex-col gap-8" style="min-width: 420px;">
                    <div class="d-flex align-center justify-space-between mb-8">
                        <p class="f-13 clr-99ACB6">
                            Valuation Frequency: <strong class="white">Six-Period Interval</strong>
                        </p>
                        <span class="bg-C5A059-10 br-4 p-4-8 f-12 lh-12 clr-7BD09D border-7BD09D font-semibold">
                            LATEST: ${{ number_format($currentNetWorth / 1000000, 2) }}M
                        </span>
                    </div>

                    <div class="trend-chart-wrapper" style="height: 120px; position: relative;">
                        <canvas id="trendChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="bg-0B1417 p-24 br-12 border-E9E7DD-24 w-100 mb-24">
                <p class="f-14 lh-16 white font-medium mb-16">
                    Net Worth Composition Stack
                </p>

                <div class="d-flex align-center justify-space-between gap-16">
                    {{-- Total Assets --}}
                    <div class="bg-000A0F p-12 br-8 border-E9E7DD-15 flex-1" style="min-width: 260px;">
                        <p class="f-12 uppercase lh-14 clr-99ACB6 uppercase mb-16">TOTAL ASSETS</p>
                        <h4 class="f-24 lh-26 clr-99D5FF bold">${{ number_format($totalAssets) }}</h4>
                    </div>

                    {{-- Minus Operator --}}
                    <div class="br-100 bg-white-7 d-flex align-center justify-center clr-99ACB6 font-bold f-18 w-40 h-40">
                        −
                    </div>

                    {{-- Total Liabilities --}}
                    <div class="bg-000A0F p-12 br-8 border-E9E7DD-15 flex-1" style="min-width: 260px;">
                        <p class="f-12 uppercase lh-14 clr-99ACB6 uppercase mb-16">TOTAL LIABILITIES</p>
                        <h4 class="f-24 lh-26 clr-yellow-300 bold">${{ number_format($totalLiabilities) }}</h4>
                    </div>

                    {{-- Equals Operator --}}
                    <div class="br-100 bg-white-7 d-flex align-center justify-center clr-99ACB6 font-bold f-18 w-40 h-40">
                        =
                    </div>

                    {{-- Net Worth Value --}}
                    <div class="bg-23B05B-7 p-12 br-8 border-A7DFBD-24 flex-1" style="min-width: 260px;">
                        <p class="f-12 uppercase lh-14 clr-A7DFBD bold mb-16">NET WORTH VALUE</p>
                        <h4 class="f-24 lh-26 clr-A7DFBD bold">${{ number_format($currentNetWorth) }}</h4>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-24 col-lg-2 w-100">

                {{-- Total Assets Block --}}
                <div class="bg-0B1417 p-32 br-12 border-E9E7DD-24 d-flex justify-space-between gap-24 w-100 flex-col">
                    <div class="d-flex gap-10 justify-space-between w-100">
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-4 flex-col">
                                <p class="f-14 clr-99ACB6 lh-16 ls-054">
                                    TOTAL ASSETS
                                </p>
                                <h3 class="f-24 lh-26 white">
                                    ${{ number_format($totalAssets) }}
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex flex-col gap-4">
                            <p class="f-14 lh-16 {{ $assetChangePct >= 0 ? 'clr-7BD09D' : 'text-danger' }} right">
                                {{ $assetChangePct >= 0 ? '▲ +' : '▼ ' }}{{ number_format(abs($assetChangePct), 1) }}%
                            </p>
                            <p class="f-11 lh-12 clr-99ACB6 right">
                                vs. Q1
                            </p>
                        </div>
                    </div>
                    <div class="d-grid gap-60 asset-grid chart-body">
                        <div class="chart-canvas-wrapper">
                            <canvas class="total-assets" id="assetsChart"></canvas>
                            <div class="chart-center-text">ASSETS</div>
                        </div>
                        <div class="assets-content d-flex gap-10 justify-space-between align-center flex-col w-100">
                            @foreach($assetBreakdown as $asset)
                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    {{-- Color dot using the color key passed from controller --}}
                                    <span class="w-8 h-8 d-inline-block br-2" style="background-color: {{ $asset['color'] ?? '#78909C' }}; flex-shrink: 0;"></span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            {{ $asset['type'] }}
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        {{ number_format($asset['percentage'], 2) }}%
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-bottom-334155"></div>
                    <a href="#" class="cus-link gap-4 f-14 d-flex">View Asset Details <span>→</span></a>
                </div>

                {{-- Total Liabilities Block --}}
                <div class="bg-0B1417 p-32 br-12 border-E9E7DD-24 d-flex justify-space-between gap-24 w-100 flex-col">
                    <div class="d-flex gap-10 justify-space-between w-100">
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-4 flex-col">
                                <p class="f-14 clr-99ACB6 lh-16 ls-054">
                                    TOTAL LIABILITIES
                                </p>
                                <h3 class="f-24 lh-26 white">
                                    ${{ number_format($totalLiabilities) }}
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex flex-col gap-4">
                            <p class="f-14 lh-16 {{ $liabilityChangePct <= 0 ? 'clr-7BD09D' : 'clr-yellow-300' }} right">
                                {{ $liabilityChangePct >= 0 ? '▲ +' : '▼ ' }}{{ number_format($liabilityChangePct, 1) }}%
                            </p>
                            <p class="f-11 lh-12 clr-99ACB6 right">
                                vs. Q1
                            </p>
                        </div>
                    </div>
                    <div class="d-grid gap-24 asset-grid chart-body">
                        <div class="chart-canvas-wrapper">
                            <canvas class="total-assets" id="liabilitiesChart"></canvas>
                            <div class="chart-center-text">DEBT</div>
                        </div>
                        <div class="assets-content d-flex gap-10 justify-space-between align-center flex-col w-100">
                            @php
                            $liabilityColors = ['bg-blue-400', 'bg-indigo', 'bg-EE60E0', 'light-pink', 'bg-AFCCA1'];
                            @endphp
                            @foreach($liabilityBreakdown as $index => $liability)
                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="{{ $liabilityColors[$index % count($liabilityColors)] }} w-8 h-8"></span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            {{ $liability['type'] }}
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        {{ $liability['percentage'] }}%
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-bottom-334155"></div>
                    <a href="#" class="cus-link gap-4 f-14 d-flex">View Liability Details <span>→</span></a>
                </div>
            </div>

            {{-- Key Financial Indicators & Alerts Section --}}
            <div class="d-grid gap-24 col-lg-2 w-100 align-flex-start">
                <div class="bg-0B1417 border-E9E7DD-24 p-32-24 d-flex flex-col gap-20 br-12">
                    <h2 class="f-16 lh-12 white-80">
                        Key Financial Health Indicators
                    </h2>
                    <div class="d-grid gap-16 col-lg-3">

                        {{-- Liquidity Ratio --}}
                        <div class="{{ $indicators['liquidity']['is_warning'] ? 'bg-C5A059-5 border-C5A059-30' : 'bg-0B1417 border-334155' }} br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">Liquidity Ratio</p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">{{ $indicators['liquidity']['value'] }}</p>
                                @if($indicators['liquidity']['is_warning'])
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                                @endif
                            </div>
                            <p class="f-13 lh-18 white-80">{{ $indicators['liquidity']['target'] }}</p>
                        </div>

                        {{-- Debt-to-Asset --}}
                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">Debt-to-Asset</p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">{{ $indicators['debt_to_asset']['value'] }}</p>
                            </div>
                            <p class="f-13 lh-18 white-80">{{ $indicators['debt_to_asset']['subtext'] }}</p>
                        </div>

                        {{-- Concentration Risk --}}
                        <div class="{{ $indicators['concentration']['is_warning'] ? 'bg-C5A059-5 border-C5A059-30' : 'bg-0B1417 border-334155' }} br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">Concentration Risk</p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">{{ $indicators['concentration']['value'] }}</p>
                                @if($indicators['concentration']['is_warning'])
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                                @endif
                            </div>
                            <p class="f-13 lh-18 white-80">{{ $indicators['concentration']['subtext'] }}</p>
                        </div>

                        {{-- Fixed / Variable Rate --}}
                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">Fixed / Variable Rate</p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">{{ $indicators['fixed_variable']['value'] }}</p>
                            </div>
                            <p class="f-13 lh-18 white-80">{{ $indicators['fixed_variable']['subtext'] }}</p>
                        </div>

                        {{-- Undrawn Credit --}}
                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">Undrawn Credit</p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">{{ $indicators['undrawn_credit']['value'] }}</p>
                            </div>
                            <p class="f-13 lh-18 white-80">{{ $indicators['undrawn_credit']['subtext'] }}</p>
                        </div>

                        {{-- 12-Mo Maturities --}}
                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">12-Mo Maturities</p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">{{ $indicators['maturities_12mo']['value'] }}</p>
                            </div>
                            <p class="f-13 lh-18 white-80">{{ $indicators['maturities_12mo']['subtext'] }}</p>
                        </div>

                    </div>
                </div>

                <div class="bg-0B1417 border-E9E7DD-24 p-32-24 d-flex flex-col gap-20 br-12">
                    <h2 class="f-16 lh-12 white-80">
                        Alerts & Items Requiring Attention
                    </h2>
                    <div class="d-flex gap-12 flex-col">
                        @forelse($alerts as $alert)
                        <div class="d-flex gap-12 p-12 align-center bg-000A0F br-8 border-C5A059-30">
                            <div class="danger-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                            </div>
                            <div class="cont f-13 lh-20 white">
                                {{ $alert }}
                            </div>
                        </div>
                        @empty
                        <p class="f-13 lh-20 clr-99ACB6">No active alerts requiring attention.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="d-grid col-lg-3 gap-16 bg-0B1417 p-32-24">
                <div class="cont">
                    <p class="f-12 lh-20 clr-EDECE4">
                        CONFIDENTIAL REPORT • BM Private Office • Strictly Private & Confidential. Unauthorized distribution prohibited.
                    </p>
                </div>
                <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-18 d-flex justify-center bold">Download Full Statement (PDF)</a>
                <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-18 d-flex justify-center bold">Schedule Portfolio Review</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Line Trend Chart
        const ctx = document.getElementById('trendChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($chartLabels),
                datasets: [{
                    data: @json($chartData),
                    borderColor: '#7BD09D',
                    borderWidth: 2,
                    pointBackgroundColor: '#7BD09D',
                    pointRadius: 3,
                    tension: 0.3,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#99ACB6',
                            font: {
                                size: 10
                            }
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(233, 231, 221, 0.1)'
                        },
                        ticks: {
                            color: '#99ACB6',
                            font: {
                                size: 10
                            },
                            callback: function(val) {
                                return (val / 1000000).toFixed(0) + 'M';
                            }
                        }
                    }
                }
            }
        });

        // 2. Asset Donut Chart
        const assetBreakdown = @json($assetBreakdown);
        const assetsCtx = document.getElementById('assetsChart').getContext('2d');
        new Chart(assetsCtx, {
            type: 'doughnut',
            data: {
                labels: assetBreakdown.map(item => item.type),
                datasets: [{
                    data: assetBreakdown.map(item => item.percentage),
                    backgroundColor: assetBreakdown.map(item => item.color ?? '#78909C'),
                    borderWidth: 0
                }]
            },
            options: {
                cutout: '75%',
                plugins: {
                    legend: {
                        display: false
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // 3. Liabilities Donut Chart
        const liabilityBreakdown = @json($liabilityBreakdown);
        const liabilitiesCtx = document.getElementById('liabilitiesChart').getContext('2d');
        new Chart(liabilitiesCtx, {
            type: 'doughnut',
            data: {
                labels: liabilityBreakdown.map(item => item.type),
                datasets: [{
                    data: liabilityBreakdown.map(item => item.percentage),
                    backgroundColor: ['#60A5FA', '#6366F1', '#EE60E0', '#F472B6', '#AFCCA1'],
                    borderWidth: 0
                }]
            },
            options: {
                cutout: '75%',
                plugins: {
                    legend: {
                        display: false
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>

@endsection