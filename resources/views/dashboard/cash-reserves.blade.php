@extends('layouts.app')

@section('title','Cash Reserves')

@section('content')

<div class="heading-bar d-flex justify-space-between">
    <div class="bar-heading">
        <h2 class="f-24">
            Executive Wealth Command
        </h2>
    </div>
    <ul class="status d-flex gap-14">
        <li class="active d-flex gap-10 align-center f-14 lh-14">
            <div class="icon">

            </div>
            <div class="icon-description">
                Trading Window: Open
            </div>
        </li>

        <li class="d-flex gap-10 align-center f-14 lh-14">
            <div class="icon"></div>

            <div class="icon-description">
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
        <div class="d-flex flex-col gap-24">
            <div class="bg-0B1417 p-35-32 br-16 border-E9E7DD-15 d-flex gap-14 flex-col">
                <div class="d-flex gap-10 justify-space-between align-center">
                    <p class="f-14 lh-16 clr-AEC2C7 uppercase">
                        Total Available Cash Reserves
                    </p>
                    <div class="bg-0E4624 p-4-8 br-4 f-13 lh-14 clr-A7DFBD">
                        Target: $250,000
                    </div>
                </div>
                <h2 class="f-38 white ls-054 bold">
                    $600,000
                </h2>
                <div class="d-grid col-lg-3 gap-16">
                    <div class="border-E9E7DD-15 p-16 br-8">
                        <p class="f-12 lh-14 clr-AEC2C7 mb-4 uppercase">
                            Excess Above Goal
                        </p>
                        <h2 class="f-20 lh-22 bold white">
                            $180,000
                        </h2>
                    </div>
                    <div class="border-E9E7DD-15 p-16 br-8">
                        <p class="f-12 lh-14 clr-AEC2C7 mb-4 uppercase">
                            Monthly Expenses
                        </p>
                        <h2 class="f-20 lh-22 bold white">
                            $35,000
                        </h2>
                    </div>
                    <div class="border-E9E7DD-15 p-16 br-8">
                        <p class="f-12 lh-14 clr-AEC2C7 mb-4 uppercase">
                            Months Covered
                        </p>
                        <h2 class="f-20 lh-22 bold clr-A7DFBD">
                            17.14 mo
                        </h2>
                    </div>
                </div>
            </div>

            <div class="bg-0B1417 p-35-32 br-16 border-E9E7DD-15 d-flex gap-12 flex-col">
                <div class="expense-outer d-flex gap-14 align-center justify-space-between">
                    <div class="d-flex gap-8 align-center">

                        <div class="notification-outer">
                            <img src="{{ asset('images/guardian.svg') }}" alt="weight icon">
                        </div>
                        <div class="card-cont">
                            <h3 class="f-14 lh-16 white">
                                Months of Expense Covered
                            </h3>
                        </div>
                    </div>
                    <div class="month-value">
                        <h4 class="f-14 lh-14 clr-A7DFBD">
                            17.14 Months / 12mo Target
                        </h4>
                    </div>

                </div>
                <div class="progress-outer">

                    <div class="progress mb-8">
                        <div class="progress-bar progress-bar-A7DFBD" style="width:72%;"></div>
                    </div>
                    <div class="range-labels f-11">
                        <span class="clr-AEC2C7">0 Months</span>
                        <span class="clr-AEC2C7" id="middleLabel">12mo Goal (100%)</span>
                        <span class="clr-AEC2C7">24 Months</span>
                    </div>
                </div>
                <div class="br-6 bg-356674-15 p-10-14 d-flex gap-10 justify-space-between align-center">
                    <p class="f-12 lh-14 white">
                        Your cash reserves exceed the recommended 12-month safety buffer target.
                    </p>
                    <p class="f-12 lh-14 clr-A7DFBD">
                        142% of goal
                    </p>
                </div>
            </div>

            <div class="d-grid col-lg-6-3 gap-20 align-flex-start">
                <div class="d-grid gap-20 col-lg-2 align-flex-start">
                    <div class="bg-0B1417 p-35-32 br-16 border-E9E7DD-15">
                        <div class="d-flex gap-10 justify-space-between align-center mb-20">
                            <h5 class="f-14 lh-14 white">
                                Cash Liquidity Balance
                            </h5>
                            <a href="#" class="d-flex gap-10 align-center f-12 lh-12 clr-4FC07C br-6 p-6-12 border-4FC07C"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                    <path d="M0.542969 4.16406H7.4176" stroke="#4FC07C" stroke-width="1.08547" stroke-linecap="round" />
                                    <path d="M4.16016 7.41406V0.539431" stroke="#4FC07C" stroke-width="1.08547" stroke-linecap="round" />
                                </svg>Connect Account</a>
                        </div>

                        <div class="d-flex flex-col gap-20">
                            <div class="d-flex align-center justify-space-between">
                                <div class="d-flex gap-12 align-center">
                                    <div class="w-10 h-10 bg-0095FF br-100">

                                    </div>
                                    <div class="right-sec">
                                        <p class="f-14 lh-14 white bold mb-4">
                                            RBC Cash Account
                                        </p>
                                        <p class="f-11 lh-12 clr-A7DFBD">
                                            Connected • Real-time
                                        </p>
                                    </div>
                                </div>
                                <h5 class="f-15 white bold">
                                    $375,000
                                </h5>
                            </div>
                            <div class="border-E9E7DD-15"></div>
                            <div class="d-flex align-center justify-space-between">
                                <div class="d-flex gap-12 align-center">
                                    <div class="w-10 h-10 bg-89C6FF br-100">

                                    </div>
                                    <div class="right-sec">
                                        <p class="f-14 lh-14 white bold mb-4">
                                            Bank of America CDs
                                        </p>
                                        <p class="f-11 lh-12 clr-A7DFBD">
                                            Connected • Real-time
                                        </p>
                                    </div>
                                </div>
                                <h5 class="f-15 white bold">
                                    $225,000
                                </h5>
                            </div>
                            <div class="border-E9E7DD-15"></div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-14 lh-16 neutral-300">
                                    Total Cash Balance
                                </p>
                                <p class="f-18 lh-20 clr-A7DFBD">
                                    $600,000
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-0B1417 p-35-32 br-16 border-E9E7DD-15">
                        <div class="d-flex gap-10 justify-space-between align-center mb-28">
                            <h5 class="f-14 lh-14 white">
                                Allocation Breakdown
                            </h5>
                        </div>
                        <div class="d-grid col-lg-3-7 gap-24 align-center">
                            <div class="allocation-img">
                                <img src="{{ asset('images/allocation-breakdown.svg') }}" alt="Allocation Breakdown">
                            </div>
                            <div class="allocation-cont">
                                <div class="d-flex align-center justify-space-between mb-12">
                                    <div class="d-flex gap-8 align-center">
                                        <div class="w-10 h-10 bg-0095FF br-2">

                                        </div>
                                        <p class="f-13 lh-14 white neutral-300">
                                            RBC Cash
                                        </p>
                                    </div>
                                    <h5 class="f-13 lh-14 white bold">
                                        62.5%
                                    </h5>
                                </div>
                                <div class="d-flex align-center justify-space-between">
                                    <div class="d-flex gap-8 align-center">
                                        <div class="w-10 h-10 bg-89C6FF br-2">

                                        </div>
                                        <p class="f-13 lh-14 white neutral-300">
                                            BofA CDs
                                        </p>
                                    </div>
                                    <h5 class="f-13 lh-14 white bold">
                                        37.5%
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="insight">
                    <div class="br-12 p-32-24 bg-072312 mb-20 border-E9E7DD-15">
                        <p class="f-12 lh-14 clr-A7DFBD mb-16 uppercase ls-1">
                            Key Insight
                        </p>
                        <p class="f-14 lh-20 white">
                            You have 17.14 months of expenses covered, which is 5.14 months above your 12-month target. Your capital reserve is exceptionally secure.
                        </p>
                    </div>
                    <div class="border-E9E7DD-15 br-12 p-32-24 d-flex gap-16 flex-col">
                        <p class="f-12 lh-14 clr-A7DFBD uppercase ls-1">
                            Allocation Opportunity
                        </p>
                        <p class="f-14 lh-20 white">
                            You have <span class="clr-7BD09D">$180,000 </span>in excess cash above target. Consider deploying this to optimize wealth:
                        </p>
                        <div class="d-flex gap-14 flex-col">
                            <div class="d-flex align-center justify-space-between">
                                <div class="d-flex gap-8 align-center">
                                    <div class="w-6 h-6 bg-FFCC66 br-100">

                                    </div>
                                    <p class="f-13 lh-14 white ">
                                        Retirement Boost
                                    </p>
                                </div>
                                <h5 class="f-12 lh-14 clr-99ACB6">
                                    Tax-advantaged
                                </h5>
                            </div>
                            <div class="d-flex align-center justify-space-between">
                                <div class="d-flex gap-8 align-center">
                                    <div class="w-6 h-6 bg-FFCC66 br-100">

                                    </div>
                                    <p class="f-13 lh-14 white ">
                                        Education Planning
                                    </p>
                                </div>
                                <h5 class="f-12 lh-14 clr-99ACB6">
                                    529 Allocations
                                </h5>
                            </div>
                            <div class="d-flex align-center justify-space-between">
                                <div class="d-flex gap-8 align-center">
                                    <div class="w-6 h-6 bg-FFCC66 br-100">

                                    </div>
                                    <p class="f-13 lh-14 white ">
                                        Debt Reduction
                                    </p>
                                </div>
                                <h5 class="f-12 lh-14 clr-99ACB6">
                                    Pay down high-rate debt
                                </h5>
                            </div>
                            <div class="d-flex align-center justify-space-between">
                                <div class="d-flex gap-8 align-center">
                                    <div class="w-6 h-6 bg-FFCC66 br-100">

                                    </div>
                                    <p class="f-13 lh-14 white ">
                                        Direct Investment
                                    </p>
                                </div>
                                <h5 class="f-12 lh-14 clr-99ACB6">
                                    Deploy to Private Equity
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection