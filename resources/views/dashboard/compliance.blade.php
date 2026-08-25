@extends('layouts.app')

@section('title','Compliance')

@section('content')

<div class="dashboard-outer">

    @include('partials.sidebar')
    <div class="dashboard-content">
        @include('partials.header')

        <div class="heading-bar d-flex justify-space-between">
            <div class="breadcrumb">
                <a class="d-flex gap-8 f-16 neutral-300" href="/">
                    <img src="{{ asset('images/prev-arrow.svg') }}" alt="search icon">
                    Dashboard
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

            <div class="card-outer d-flex gap-48 align-flex-start flex-col">
                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            Financial Snapshot
                        </h3>
                    </div>
                    <div class="d-grid col-lg-4 gap-13 w-100">
                        <div class="card p-24 border-E9E7DD-24">
                            <div class="d-flex gap-12 mb-20 align-center">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0">
                                        Total Savings
                                    </p>
                                    <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                                </div>
                            </div>
                            <div class="d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 clr-7BD09D">
                                    $1.33M
                                </h2>
                                <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                    <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                    Vs Current State
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>

                        </div>

                        <div class="card p-24 border-E9E7DD-24">
                            <div class="d-flex gap-12 mb-20 align-center">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0">
                                        Net Worth Impact
                                    </p>
                                    <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                                </div>
                            </div>
                            <div class="d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 clr-7BD09D">
                                    +21.4%
                                </h2>
                                <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                    <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                    Increase
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>

                        </div>

                        <div class="card p-24 border-E9E7DD-24">
                            <div class="d-flex gap-12 mb-20 align-center">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0">
                                        Estate Tax Rate
                                    </p>
                                    <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                                </div>
                            </div>
                            <div class="d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 clr-7BD09D">
                                    92 / 100
                                </h2>
                                <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                    <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                    Very Strong
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>

                        </div>

                        <div class="card p-24 border-E9E7DD-24">
                            <div class="d-flex gap-12 mb-20 align-center">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0">
                                        Estate Tax Rate
                                    </p>
                                    <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                                </div>
                            </div>
                            <div class="d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 clr-7BD09D">
                                    $18,500,000
                                </h2>
                                <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                    <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                    Potential Savings
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>

                        </div>

                    </div>
                </div>
                <div class="d-grid col-lg-2 gap-32 w-100 align-flex-start">
                    <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                        <div class="d-flex gap-32 justify-space-between mb-16">
                            <div class="d-flex flex-col gap-12">
                                <div class="f-13 lh-10 clr-AEC2C7 uppercase">
                                    Plan ID: AMZN-EXEC-2026-004
                                </div>
                                <div class="f-16 lh-20 white">
                                    10b5-1 Autopilot & Compliance
                                </div>
                            </div>
                            <ul class="status d-flex gap-14 align-center">
                                <li class="active d-flex gap-10 align-center">
                                    <div class="icon">

                                    </div>
                                    <div class="icon-description f-14 lh-14">
                                        Status: Active
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-E9E7DD-5 p-24-22 d-flex gap-24 flex-col br-8 mb-16">
                            <div class="f-14 white">
                                Execution Radar (Cooling-Off & Windows)
                            </div>

                            <div class="timeline">
                                <div class="timeline-progress"></div>

                                <div class="timeline-item active">
                                    <div class="dot"></div>
                                    <div class="content">
                                        <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">APR 15</h4>
                                        <p class="f-14 lh-12 clr-AEC2C7">Adoption</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="dot"></div>
                                    <div class="content">
                                        <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">MAY 26</h4>
                                        <p class="f-14 lh-12 clr-AEC2C7">Today</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="dot"></div>
                                    <div class="content">
                                        <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">JUL 15</h4>
                                        <p class="f-14 lh-12 clr-AEC2C7">Live</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="dot"></div>
                                    <div class="content">
                                        <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">AUG 15</h4>
                                        <p class="f-14 lh-12 clr-AEC2C7">Next Sale</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-grid col-lg-2 gap-16">
                            <div class="border-white-15 p-32-24 br-8">
                                <p class="f-10 lh-10 clr-99ACB6 mb-12 uppercase">
                                    Cooling Off Period
                                </p>
                                <h2 class="f-16 lh-20 clr-A7DFBD mb-8">
                                    49 Days Remaining
                                </h2>
                                <p class="f-14 lh-10 clr-99ACB6">
                                    Locked until Jul 15
                                </p>
                            </div>

                            <div class="border-white-15 p-32-24 br-8">
                                <p class="f-10 lh-10 clr-99ACB6 mb-12 uppercase">
                                    Execution Window Opens
                                </p>
                                <h2 class="f-16 lh-20 clr-A7DFBD mb-8">
                                    Next Trade
                                </h2>
                                <p class="f-14 lh-10 clr-99ACB6">
                                    1,200 Shares on Aug 15
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                        <p class="f-12 lh-10 clr-AEC2C7 uppercase mb-24">
                            Affirmative Defense Checklist (SEC Rule 10b5-1)
                        </p>
                        <div class="d-flex gap-16 flex-col">
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <h4 class="f-14 lh-10 clr-AEC2C7">
                                    Overlapping Plans
                                </h4>
                                <h3 class="f-15 lh-18 white right">
                                    None Detected
                                </h3>
                            </div>
                            <div class="border-bottom-white-24">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <h4 class="f-14 lh-10 clr-AEC2C7">
                                    Single-Trade Plan
                                </h4>
                                <h3 class="f-15 lh-18 white right">
                                    N/A (Systematic recurring plan)
                                </h3>
                            </div>

                            <div class="border-bottom-white-24">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <h4 class="f-14 lh-10 clr-AEC2C7">
                                    Officer Certifications
                                </h4>
                                <h3 class="f-15 lh-18 white right">
                                    Signed and filed with General<br>
                                    Counsel on 04/15
                                </h3>
                            </div>
                            <div class="border-bottom-white-24">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <h4 class="f-14 lh-10 clr-AEC2C7">
                                    Good Faith Requirement
                                </h4>
                                <h3 class="f-15 lh-18 white right">
                                    No modifications made in the <br>
                                    last 120 days
                                </h3>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex gap-16 flex-col w-100">
                    <div class="f-16 lh-11 white-80">
                        Scheduled Executions
                    </div>
                    <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                        <div class="d-flex gap-10px justify-space-between align-flex-start mb-24">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 white mb-4">
                                        Post Tax / FL Residency </h3>
                                    <p class="f-12 ls-1 clr-99ACB6 uppercase">
                                        Net Proceeds
                                    </p>
                                </div>
                            </div>
                            <div class="btn-col">
                                <p class="f-32 white lh-18 bold">
                                    $482,400
                                </p>
                            </div>
                        </div>

                        <div class="bg-0B1417 border-white-24 p-32-40 br-16">
                            <div class="d-flex gap-34 flex-col">
                                <div class="table-row d-grid col-lg-5 align-center gap-10">
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Date
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Volume
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Price floor
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Instruction
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase center">
                                            action
                                        </p>
                                    </div>
                                </div>
                                <div class="table-row d-grid col-lg-5 align-center gap-10">
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            08/15/2026
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            1,200
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            $85.00
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            Market order
                                        </p>
                                    </div>
                                    <div class="date-outer d-flex gap-4 flex-col justify-center center">
                                        <p class="f-16 lh-16 white center">
                                            Scheduled
                                        </p>
                                        <div class="f-14 lh-16  center">
                                            <a class="clr-primary-grn-400" href="{{ url('/scheduled') }}">View Specs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row d-grid col-lg-5 align-center gap-10">
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            11/15/2026
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            1,200
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            $85.00
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            Market order
                                        </p>
                                    </div>
                                    <div class="date-outer d-flex gap-4 flex-col justify-center center">
                                        <p class="f-16 lh-16 white center">
                                            Pending
                                        </p>
                                        <div class="f-14 lh-16 clr-23B05B center">
                                            <a href="{{ url('/pending') }}" class="clr-23B05B">View Specs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row d-grid col-lg-5 align-center gap-10">
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            02/15/2027
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            1,200
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            $92.00
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-16 lh-16 white">
                                            Limit order
                                        </p>
                                    </div>
                                    <div class="date-outer d-flex gap-4 flex-col justify-center center">
                                        <p class="f-16 lh-16 white center">
                                            Locked
                                        </p>
                                        <div class="f-14 lh-16 clr-23B05B center">
                                            <a href="{{ url('/locked') }}" class="clr-23B05B">View Specs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="d-grid col-lg-2 gap-32 w-100">

                    <div class="col-outer">
                        <h3 class="f-16 lh-11 white-80 mb-16">
                            Insider Trading Window
                        </h3>
                        <!-- <h3 class="f-14 neutral-300 uppercase mb-16">
                            INSIDER TRADING WINDOW
                        </h3> -->
                        <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                            <div class="d-flex gap-10px justify-space-between align-center mb-14">
                                <div class="d-flex gap-16">
                                    <div class="notification-outer">
                                        <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-16 white mb-4">
                                            Clear to Trade (Open Window)
                                        </h3>
                                        <p class="f-12 ls-1 clr-99ACB6 uppercase">
                                            Current state
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <a href="#" class="btn-yellow-outlined p-8-10 f-12 lh-16 gap-4 d-flex flex-col uppercase align-center justify-center br-9">Window Closes<span class="f-16 lh-16 clr-yellow-400 capitalize">12 Days</span></a>
                                </div>
                            </div>

                            <div class="bg-6C6C6C-10 br-9 p-16-32 mb-32">
                                <div class="f-14 lh-22 white mb-12">
                                    Note: Manual trades permitted for vested shares outside of 10b5-1 subject to General Counsel approval. Your 10b5-1 plan is exempt from blackout periods and will execute regardless of earnings news.
                                </div>
                                <a href="#" class="f-14 clr-23B05B d-flex gap-8 align-center">Modify Plan <img src="{{ asset('images/btn-arrow-sm.svg') }}" alt="btn arrow icon"></a>
                            </div>

                            <div class="d-grid col-lg-2 gap-16">
                                <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Log Private Trade</a>
                                <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-prm-900 justify-center bold">Request Pre Clearance</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-outer">
                        <h3 class="f-16 lh-11 white-80 mb-16">
                            Audit Trail & Filings
                        </h3>
                        <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24 d-flex gap-22 flex-col">

                            <div class="d-flex justify-space-between gap-10">
                                <div class="d-flex gap-16 align-center">
                                    <div class="notification-outer p-4-5 w-34 h-34 br-6">
                                        <img src="{{ asset('images/document-new.svg') }}" alt="pdf icon">
                                    </div>
                                    <div>
                                        <h3 class="f-16 lh-16 white">
                                            Form 144 (Draft Generated)
                                        </h3>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <a href="#" class="f-16 lh-16 clr-primary-grn-400">View</a>
                                </div>
                            </div>
                            <div class="border-bottom-white-24">
                            </div>

                            <div class="d-flex justify-space-between gap-10">
                                <div class="d-flex gap-16 align-center">
                                    <div class="notification-outer p-4-5 w-34 h-34 br-6">
                                        <img src="{{ asset('images/document-new.svg') }}" alt="pdf icon">
                                    </div>
                                    <div>
                                        <h3 class="f-16 lh-16 white">
                                            SEC Exhibit 10b5-1 (Current)
                                        </h3>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <a href="#" class="f-16 lh-16 clr-primary-grn-400">View</a>
                                </div>
                            </div>
                            <div class="border-bottom-white-24">
                            </div>

                            <div class="d-flex justify-space-between gap-10">
                                <div class="d-flex gap-16 align-center">
                                    <div class="notification-outer p-4-5 w-34 h-34 br-6">
                                        <img src="{{ asset('images/document-new.svg') }}" alt="pdf icon">
                                    </div>
                                    <div>
                                        <h3 class="f-16 lh-16 white">
                                            GC Pre-Clearance Approval
                                        </h3>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <a href="#" class="f-16 lh-16 clr-primary-grn-400">View</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer d-flex gap-20 flex-col">
            <div class="f-13 lh-20 clr-CCD6DB">
                © 2026 Benjamin's Money, Inc. All rights reserved. Benjamin's Money Executive Wealth Command, Tax Alpha Hub, Protection Hub, SmartGuard, and Scenario Modeling are proprietary tools of Benjamin's Money, Inc. All portfolio data, estate projections, and tax optimization strategies shown are specific to your account and generated in real time from connected custodial feeds.
            </div>
            <div class="f-13 lh-20 clr-CCD6DB">
                Wealth advisory services provided through Benjamin's Money Advisory, a registered investment adviser. 10b5-1 plan administration, equity liquidation strategies, and SMA workflows are managed by Benjamin's Money Securities, LLC (member FINRA/SIPC). Your Platinum Alpha SMA and Wharton-Backed SMA allocations are subject to the terms of your Investment Policy Statement (IPS). Concentration risk alerts, including AMZN position monitoring, are updated in real time and do not constitute a recommendation to buy or sell.
            </div>
            <div class="f-13 lh-20 clr-CCD6DB">
                Scenario modeling projections, independence runway estimates, and tax-loss harvesting opportunities displayed in this dashboard are for illustrative and planning purposes only. Actual outcomes may vary based on market conditions, tax law changes, and individual circumstances. SmartGuard monitoring and Guardian Guardrails are automated risk tools and do not replace professional fiduciary advice. Please consult your Benjamin's Money advisor before executing any equity liquidation, estate planning, or relocation strategy. | Support: advisory@benjaminsmoney.com • 1-800-BEN-MONEY
            </div>
        </div>
    </div>


</div>

@endsection