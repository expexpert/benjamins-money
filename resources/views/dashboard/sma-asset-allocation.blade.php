@extends('layouts.app')

@section('title', 'Sma Asset Allocation')

@section('content')

<div class="heading-bar d-flex justify-space-between">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Liquidity Workflow
        </p>

    </div>
    <ul class="status d-flex gap-14">
        <li class="active d-flex gap-10 align-center">
            <div class="icon">

            </div>
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
        <div class="card-outer d-flex gap-48 align-flex-start flex-col w-100">
            <div class="d-flex gap-8 w-100 flex-col">
                <h2 class="f-24 white lh-26 uppercase">
                    PLATINUM ALPHA SMA — HOLDINGS & ASSET ALLOCATION
                </h2>
                <p class="f-15 lh-16 clr-99ACB6">
                    Your diversified destination: 500+ global equities and bonds managed for risk-adjusted growth.
                </p>
            </div>

            <div class="d-grid gap-20 col-lg-4 w-100">
                <div class="p-24 bg-060F13 br-12 border-23B05B d-flex gap-12 flex-col">
                    <p class="f-14 lh-16 clr-99ACB6 uppercase">
                        Total SMA Value
                    </p>
                    <h2 class="f-38 lh-40 clr-23B05B bold">
                        $6,300,000
                    </h2>
                    <p class="f-13 lh-14 white-50">
                        Target Pipeline: $11.1M
                    </p>
                </div>

                <div class="p-24 bg-060F13 br-12 border-23B05B d-flex gap-12 flex-col">
                    <p class="f-14 lh-16 clr-99ACB6 uppercase">
                        YTD Cumulative Return
                    </p>
                    <h2 class="f-38 lh-40 clr-23B05B bold">
                        +8.4%
                    </h2>
                    <p class="f-13 lh-14 white-50">
                        vs. Benchmark S&P: +7.1%
                    </p>
                </div>

                <div class="p-24 bg-060F13 br-12 border-E9E7DD-15 d-flex gap-12 flex-col">
                    <p class="f-14 lh-16 clr-99ACB6 uppercase">
                        Risk Rating Score
                    </p>
                    <h2 class="f-38 lh-40 white bold">
                        32 / 100
                    </h2>
                    <p class="f-13 lh-14 white-50">
                        Moderate-Conservative Profile
                    </p>
                </div>

                <div class="p-24 bg-060F13 br-12 border-E9E7DD-15 d-flex gap-12 flex-col">
                    <p class="f-14 lh-16 clr-99ACB6 uppercase">
                        Expense Ratio
                    </p>
                    <h2 class="f-38 lh-40 white bold">
                        0.42%
                    </h2>
                    <p class="f-13 lh-14 white-50">
                        Net advisory fee included
                    </p>
                </div>

            </div>

            <div class="d-grid col-1-13 w-100 gap-24">
                <div class="bg-060F13 br-12 border-E9E7DD-15 p-24 d-flex gap-20 flex-col">
                    <h2 class="f-16 lh-18 white">
                        Portfolio Distribution
                    </h2>
                    <div class="img center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 180 180" fill="none">
                            <path d="M180 90C180 106.598 175.41 122.873 166.738 137.025C158.065 151.177 145.648 162.655 130.859 170.191C116.07 177.726 99.4855 181.025 82.9387 179.723C66.3918 178.42 50.5274 172.568 37.0993 162.812L55.6146 137.327C64.3428 143.669 74.6547 147.473 85.4101 148.32C96.1656 149.166 106.946 147.022 116.558 142.124C126.171 137.226 134.242 129.765 139.879 120.566C145.517 111.367 148.5 100.789 148.5 90H180Z" fill="#2F80ED" />
                            <path d="M37.0993 162.812C18.6677 149.42 6.0007 129.537 1.65355 107.173L32.5748 101.162C35.4005 115.699 43.634 128.623 55.6146 137.327L37.0993 162.812Z" fill="#1E6B8A" />
                            <path d="M1.65355 107.173C-1.56442 90.6178 -0.0660774 73.4916 5.97777 57.7469C12.0216 42.0021 22.3678 28.2723 35.8367 18.1228L54.7938 43.2798C46.039 49.877 39.314 58.8014 35.3856 69.0355C31.4571 79.2696 30.4831 90.4015 32.5748 101.162L1.65355 107.173Z" fill="#23B05B" />
                            <path d="M35.8367 18.1228C47.1796 9.57525 60.3845 3.83361 74.3717 1.3673C88.3588 -1.09901 102.731 -0.219961 116.313 3.93258L107.104 34.0562C98.2752 31.357 88.9333 30.7856 79.8416 32.3887C70.7499 33.9918 62.1668 37.7239 54.7938 43.2798L35.8367 18.1228Z" fill="#FECA2A" />
                            <path d="M116.313 3.93258C134.746 9.56793 150.882 20.9719 162.347 36.466C173.812 51.96 180 70.7254 180 90L148.5 90C148.5 77.4715 144.478 65.274 137.026 55.2029C129.573 45.1318 119.085 37.7192 107.104 34.0562L116.313 3.93258Z" fill="#FFDD99" />
                        </svg>
                    </div>
                    <ul class="d-flex flex-col gap-8">
                        <li class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-2F80ED br-100">

                                </div>
                                <div class="icon-cont f-13 lh-14 white">
                                    US Large Cap
                                </div>
                            </div>
                            <span class="f-13 lh-14 clr-99ACB6">
                               35% ($2.2M)
                            </span>
                        </li>

                        <li class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-1E6B8A br-100">

                                </div>
                                <div class="icon-cont f-13 lh-14 white">
                                    US Mid/Small Cap
                                </div>
                            </div>
                            <span class="f-13 lh-14 clr-99ACB6">
                               12% ($756k)
                            </span>
                        </li>

                        <li class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-23B05B br-100">

                                </div>
                                <div class="icon-cont f-13 lh-14 white">
                                    International Developed
                                </div>
                            </div>
                            <span class="f-13 lh-14 clr-99ACB6">
                                18% ($1.1M)
                            </span>
                        </li>

                        <li class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-FECA2A br-100">

                                </div>
                                <div class="icon-cont f-13 lh-14 white">
                                    US Fixed Income
                                </div>
                            </div>
                            <span class="f-13 lh-14 clr-99ACB6">
                                15% ($945k)
                            </span>
                        </li>

                        <li class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-FFDD99 br-100">

                                </div>
                                <div class="icon-cont f-13 lh-14 white">
                                    Alternatives / cash
                                </div>
                            </div>
                            <span class="f-13 lh-14 clr-99ACB6">
                               20% ($1.2M)
                            </span>
                        </li>


                    </ul>
                </div>
                <div class="bg-060F13 br-12 border-E9E7DD-15 p-24">

                </div>
            </div>

            <div class="d-flex gap-16 justify-end w-100">
                <a href="" class="btn border-E9E7DD-15 br-100 clr-99ACB6">Request Portfolio Rebalance</a>
                <a href="#" class="btn bg-23B05B p-10-21 f-14 d-flex clr-101010 justify-center bold">Download Holdings Report</a>
            </div>

        </div>
    </div>
</div>

@endsection