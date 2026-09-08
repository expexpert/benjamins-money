@extends('layouts.app')

@section('title', 'Diversification Velocity Control')

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
        <div class="card-outer d-flex gap-48 align-flex-start flex-col">
            <div class="d-flex gap-8 w-100 flex-col">
                <h2 class="f-24 white lh-26 uppercase">
                    DIVERSIFICATION VELOCITY CONTROL
                </h2>
                <p class="f-15 lh-16 clr-99ACB6">
                    Adjust the pace and strategy of your transition from concentrated stock to diversified portfolio.
                </p>
            </div>

            <div class="bg-060F13 p-24 br-12 border-E9E7DD-15 d-grid gap-24 col-12-1 bl-4">
                <div class="d-flex gap-8 flex-col">
                    <h5 class="f-16 lh-18 clr-23B05B">
                        Active Strategy: Moderate Systematic
                    </h5>
                    <p class="f-14 lh-16 white-50">
                        Currently selling ~1,200 shares per quarter to fund diversified SMA destinations under active tax optimization.
                    </p>
                </div>
                <div class="d-grid col-lg-3 gap-32">
                    <div class="d-flex flex-col gap-2">
                        <p class="f-11 lh-14 uppercase clr-99ACB6">
                            QUARTERLY VOLUME
                        </p>
                        <p class="f-16 lh-18 white inter">
                            1,200 shrs
                        </p>
                    </div>
                    <div class="d-flex flex-col gap-2">
                        <p class="f-11 lh-14 uppercase clr-99ACB6">
                            ANNUAL TARGET
                        </p>
                        <p class="f-16 lh-18 white inter">
                            4,800 shrs
                        </p>
                    </div>
                    <div class="d-flex flex-col gap-2">
                        <p class="f-11 lh-14 uppercase clr-99ACB6">
                            CURRENT CONCENTRATION
                        </p>
                        <p class="f-16 lh-18 clr-F8B4B2 inter">
                            84%
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-col gap-16 w-100">
                <h3 class="f-16 lh-18 white">
                    Select Velocity Preset
                </h3>
                <div class="d-grid gap-16 col-lg-3">
                    <div class="p-20 bg-060F13 br-12 border-E9E7DD-15 d-flex flex-col gap-12">
                        <p class="f-16 lh-18 white">
                            Conservative
                        </p>
                        <h4 class="f-20 lh-22 white">
                            600 shrs/quarter
                        </h4>
                        <div class="d-flex flex-col gap-4">
                            <p class="f-12 lh-14 clr-99ACB6">
                                Reach Secure State: Q2 2029
                            </p>
                            <p class="f-12 lh-14 clr-99ACB6">
                                Minimal market impact
                            </p>
                            <p class="f-12 lh-14 white-50">
                                Best for: Volatile markets
                            </p>
                        </div>
                    </div>

                    <div class="p-20 bg-060F13 br-12 border-2-23B05B d-flex flex-col gap-12">
                        <p class="f-16 lh-18 white d-flex gap-12 justify-space-between">
                            Moderate (Recommended)
                            <span class="w-8 h-8 bg-23B05B br-100">

                            </span>
                        </p>
                        <h4 class="f-20 lh-22 clr-23B05B">
                            1,200 shrs/quarter
                        </h4>
                        <div class="d-flex flex-col gap-4">
                            <p class="f-12 lh-14 clr-99ACB6">
                                Reach Secure State: Q4 2027
                            </p>
                            <p class="f-12 lh-14 clr-99ACB6">
                                Balanced tax optimization
                            </p>
                            <p class="f-12 lh-14 white-50">
                                Best for: Stable outlook
                            </p>
                        </div>
                    </div>

                    <div class="p-20 bg-060F13 br-12 border-E9E7DD-15 d-flex flex-col gap-12">
                        <p class="f-16 lh-18 white">
                            Aggressive
                        </p>
                        <h4 class="f-20 lh-22 white">
                            2,400 shrs/quarter
                        </h4>
                        <div class="d-flex flex-col gap-4">
                            <p class="f-12 lh-14 clr-99ACB6">
                                Reach Secure State: Q1 2027
                            </p>
                            <p class="f-12 lh-14 clr-99ACB6">
                                Faster risk reduction
                            </p>
                            <p class="f-12 lh-14 white-50">
                                Best for: High urgency / volatility
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection