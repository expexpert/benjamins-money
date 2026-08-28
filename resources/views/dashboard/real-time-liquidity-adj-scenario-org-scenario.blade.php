@extends('layouts.app')

@section('title','Real Time Liquidity - Adjusted Scenario / Original Scenario')

@section('content')

<div class="heading-bar d-flex justify-space-between">
    <div class="breadcrumb">
        <a class="d-flex gap-8 f-16 neutral-300" href="{{ url('/compliance') }}">
            <img src="{{ asset('images/prev-arrow.svg') }}" alt="search icon">
            Compliance
        </a>
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
        <div class="d-flex flex-col gap-48">
            <div class="p-32 bg-060F13 br-12 border-E9E7DD-24 d-flex flex-col gap-32">
                <div class="d-flex gap-10 justify-space-between">
                    <div class="d-flex gap-16 align-center">
                        <div class="notification-outer">
                            <img src="{{ asset('images/planning.svg') }}" alt="search icon">
                        </div>
                        <div class="card-cont">
                            <h3 class="f-16 mb-8 white">
                                Early Retirement Impact
                            </h3>
                            <p class="f-12 lh-12 ls-1 clr-99ACB6 uppercase">
                                BASED ON DEPARTURE: 06/01/2026
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-16 justify-end align-center">
                        <div class="bg-23B05B-10 br-4 p-10 f-14 lh-17 white">
                            Baseline Comparison (Original Scenario)
                        </div>
                        <a href="#" class="btn btn-green-outlined p-8-18 f-14 lh-14 d-flex justify-center bold gap-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.75 2.25C7.95979 2.25 6.2429 2.96116 4.97703 4.22703C3.71116 5.4929 3 7.20979 3 9H0.75L3.6675 11.9175L3.72 12.0225L6.75 9H4.5C4.5 7.60761 5.05312 6.27226 6.03769 5.28769C7.02226 4.30312 8.35761 3.75 9.75 3.75C11.1424 3.75 12.4777 4.30312 13.4623 5.28769C14.4469 6.27226 15 7.60761 15 9C15 10.3924 14.4469 11.7277 13.4623 12.7123C12.4777 13.6969 11.1424 14.25 9.75 14.25C8.3025 14.25 6.99 13.6575 6.045 12.705L4.98 13.77C5.60371 14.4003 6.34675 14.9001 7.16575 15.24C7.98474 15.58 8.86326 15.7533 9.75 15.75C11.5402 15.75 13.2571 15.0388 14.523 13.773C15.7888 12.5071 16.5 10.7902 16.5 9C16.5 7.20979 15.7888 5.4929 14.523 4.22703C13.2571 2.96116 11.5402 2.25 9.75 2.25Z" fill="#4FC07C" />
                            </svg>
                            Restore Scenario </a>
                    </div>
                </div>

                <div class="d-grid col-2-1 gap-28">
                    <div class="big-box d-grid align-center gap-12">
                        <div class="border-23B05B-25 p-32-24 d-flex flex-col gap-16 br-12">
                            <h4 class="f-16 lh-22 white">
                                Current Plan
                            </h4>
                            <div class="d-flex flex-col gap-12">
                                <h3 class="f-24 lh-19 clr-23B05B">
                                    95%
                                </h3>
                                <p class="f-14 lh-19 clr-99ACB6">
                                    Highly confident
                                </p>
                            </div>
                            <div class="bg-23B05B-15 p-12 f-14 lh-17 clr-EDECE4-80 br-4">
                                Your plan is on track to meet your retirement goals
                            </div>
                        </div>
                        <div class="vs f-14 lh-16 white-50">
                            vs
                        </div>
                        <div class="border-FFCC66-20 bg-FFCC66-5 p-32-24 d-flex flex-col gap-16 br-12">
                            <h4 class="f-16 lh-22 white">
                                Early Retirement
                            </h4>
                            <div class="d-flex flex-col gap-12">
                                <h3 class="f-24 lh-19 clr-FBBC05">
                                    72%
                                </h3>
                                <p class="f-14 lh-19 clr-99ACB6">
                                    At Risk
                                </p>
                            </div>
                            <div class="bg-FBBC05-15 p-12 f-14 lh-17 clr-EDECE4-80 br-4">
                                Your plan faces a higher chance of falling short of your goals
                            </div>
                        </div>
                    </div>
                    <div class="small-box bg-E9E7DD-5 p-32-24 br-12 d-flex flex-col gap-16">
                        <h4 class="f-16 lh-22 white">
                            Total Opportunity cost
                        </h4>
                        <div class="d-flex flex-col gap-12">
                            <h3 class="f-24 lh-19 clr-23B05B">
                                $8,652,000
                            </h3>
                            <p class="f-14 lh-19 clr-99ACB6">
                                In today’s dollars
                            </p>
                        </div>
                        <div class="bg-E9E7DD-8 p-12 f-14 lh-17 clr-EDECE4-80 br-4">
                            Projected impact to your future wealth
                        </div>
                    </div>
                </div>

                <div class="bg-108476-15 p-8-32 br-16 d-flex gap-12 align-center f-15 lh-16 neutral-300">
                    <img src="{{ asset('images/information-line.svg') }}" alt="search icon">
                    Results are based on Monte Carlo simulations with 10,000 market scenarios using current assumptions
                </div>

            </div>

            <div class="d-grid col-2-1 gap-17">

                <div class="left-box d-flex gap-30 flex-col">
                    <div class="bg-060F13 br-8 border-E9E7DD-24 p-32">
                        <div class="d-flex gap-10 justify-space-between align-center mb-20">
                            <div class="d-flex flex-col gap-8">
                                <h5 class="f-16 lh-12 white">
                                    Projected Net Worth Trajectory
                                </h5>
                                <p class="f-12 ls-8 clr-99ACB6">
                                    (MONTE CARLO SIMULATION OVERVIEW) 
                                </p>
                            </div>
                            <div class="d-flex gap-10">
                                <div class="border-E9E7DD-24 p-6-12 br-4 d-flex align-center gap-4">
                                    <div class="w-13 h-2 bg-23B05B br-65">

                                    </div>
                                    <p class="f-12 lh-12 white">
                                        Current Plan
                                    </p>
                                </div>
                                <div class="border-E9E7DD-24 p-6-12 br-4 d-flex align-center gap-4">
                                    <div class="w-13 h-2 bg-FFCC66 br-65">

                                    </div>
                                    <p class="f-12 lh-12 white">
                                        Early Retirement
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-box">
                            <img class="w-100" src="{{ asset('images/net-worth-trajectory.svg') }}" alt="search icon">
                        </div>
                    </div>

                    <div class="bg-0B1417-50 border-E9E7DD-24 p-32 br-12">
                        <p class="f-14 lh-16 clr-99ACB6 ls-042 mb-12 uppercase">
                            Recovery Planner (Adjust & see impact)
                        </p>
                        <p class="f-16 lh-12 white mb-32">
                            Adjust your Scenario
                        </p>
                        <div class="retirement-controls d-grid col-lg-2 gap-26 w-100">
                            <!-- Departure Date -->
                            <div class="control-item d-flex gap-10 flex-col">
                                <div class="control-header d-flex justify-space-between align-center">
                                    <span class="f-14 lh-14 white">Adjust Departure Date</span>
                                    <span class="f-14 lh-14 clr-A7DFBD">Jun 1, 2028</span>
                                </div>

                                <input
                                    type="range"
                                    class="custom-range"
                                    min="0"
                                    max="100"
                                    value="50">

                                <div class="range-labels">
                                    <span class="f-12 lh-14 ls-018 clr-E9E7DD-40">Jun 1, 2026</span>
                                    <span>Jun 1, 2028</span>
                                </div>
                            </div>

                            <!-- Spending -->
                            <div class="control-item d-flex gap-10 flex-col">
                                <div class="control-header d-flex justify-space-between align-center">
                                    <span class="f-14 lh-14 white">Post-Retirement Spending</span>
                                    <span class="f-14 lh-14 clr-A7DFBD">$120,000/yr</span>
                                </div>

                                <input
                                    type="range"
                                    class="custom-range"
                                    min="100000"
                                    max="160000"
                                    value="120000">

                                <div class="range-labels">
                                    <span>$100,000</span>
                                    <span>$160,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-box bg-060F13 border-E9E7DD-24 br-8 p-32-24">
                    <div class="d-flex gap-10 justify-space-between align-center mb-32">
                        <p class="f-16 lh-20 white">
                            Adjusted Scenario Results
                        </p>
                        <div class="bg-AFCCA1-10 br-8 p-8-12 d-flex gap-10 align-center ">
                            <div class="w-9 h-9 br-100 bg-A7DFBD">

                            </div>
                            <p class="f-14 lh-14 clr-A7DFBD">
                                Live
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-col gap-16 justify-space-between align-center mb-56">
                        <div class="d-flex gap-12 justify-space-between align-center flex-col w-100">
                            <div class="d-flex align-center justify-space-between w-100">
                                <p class="f-14 f-14 white">
                                    Success Rate
                                </p>
                                <p class="f-16 lh-18 white">
                                    84%
                                </p>
                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <p class="f-12 lh-12 clr-AEC2C7">
                                    (In today’s dollars)
                                </p>
                                <p class="f-12 lh-12 clr-A7DFBD d-flex gap-6 align-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="10" viewBox="0 0 8 10" fill="none">
                                        <path d="M4.18359 8.51562V9.01562H3.18359V8.51562H3.68359H4.18359ZM3.33004 0.146461C3.5253 -0.0488005 3.84189 -0.0488005 4.03715 0.146461L7.21913 3.32844C7.41439 3.5237 7.41439 3.84029 7.21913 4.03555C7.02387 4.23081 6.70728 4.23081 6.51202 4.03555L3.68359 1.20712L0.855167 4.03555C0.659904 4.23081 0.343322 4.23081 0.14806 4.03555C-0.0472023 3.84029 -0.0472023 3.5237 0.14806 3.32844L3.33004 0.146461ZM3.68359 8.51562H3.18359V0.500015H3.68359H4.18359V8.51562H3.68359Z" fill="#A7DFBD" />
                                    </svg>12 pp improvement
                                </p>
                            </div>
                        </div>
                        <div class="border-bottom-E9E7DD-24 w-100">

                        </div>
                        <div class="d-flex gap-12 justify-space-between align-center flex-col w-100">
                            <div class="d-flex align-center justify-space-between w-100">
                                <p class="f-14 f-14 white">
                                    Recovered Value
                                </p>
                                <p class="f-16 lh-18 white">
                                    +$4.12M
                                </p>
                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <p class="f-12 lh-12 clr-AEC2C7">
                                    (In today’s dollars)
                                </p>
                                <p class="f-12 lh-12 clr-A7DFBD d-flex gap-6 align-center">
                                    Recovered
                                </p>
                            </div>
                        </div>
                        <div class="border-bottom-E9E7DD-24 w-100">

                        </div>
                        <div class="d-flex gap-12 justify-space-between align-center flex-col w-100">
                            <div class="d-flex align-center justify-space-between w-100">
                                <p class="f-14 f-14 white">
                                    Remaining Opportunity Cost
                                </p>
                                <p class="f-16 lh-18 white">
                                    $4.53M
                                </p>
                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <p class="f-12 lh-12 clr-AEC2C7">
                                    (In today’s dollars)
                                </p>
                                <p class="f-12 lh-12 clr-yellow-300 d-flex gap-6 align-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="10" viewBox="0 0 8 10" fill="none">
                                        <path d="M4.18359 0.5V0H3.18359V0.5H3.68359H4.18359ZM3.33004 8.86916C3.5253 9.06443 3.84189 9.06443 4.03715 8.86916L7.21913 5.68718C7.41439 5.49192 7.41439 5.17534 7.21913 4.98008C7.02387 4.78481 6.70728 4.78481 6.51202 4.98008L3.68359 7.8085L0.855167 4.98008C0.659904 4.78481 0.343322 4.78481 0.14806 4.98008C-0.0472023 5.17534 -0.0472023 5.49192 0.14806 5.68718L3.33004 8.86916ZM3.68359 0.5H3.18359V8.51561H3.68359H4.18359V0.5H3.68359Z" fill="#FFCC66" />
                                    </svg> 48%
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold mb-40">Review with Advisor</a>
                    <p class="f-12 lh-18 neutral-300">
                        Projections are hypothetical and not gauranteed. Results may vary with market conditions and changes to your plan
                    </p>
                </div>

            </div>



        </div>
    </div>
</div>

@endsection