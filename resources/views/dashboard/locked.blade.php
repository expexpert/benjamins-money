@extends('layouts.app')

@section('title','Locked')

@section('content')

<div class="dashboard-outer">

    @include('partials.sidebar')
    <div class="dashboard-content">
        @include('partials.header')

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
            <div class="d-grid col-lg-2 gap-32 mb-80">
                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-16 mb-24 align-center">
                        <div class="notification-outer w-30 h-30">
                            <img src="{{ asset('images/locked-blue.svg') }}" alt="locked-icon">
                        </div>
                        <div class="card-cont-inner">
                            <h3 class="f-18 lh-12 mb-8 clr-92B0EA">
                                Locked
                            </h3>
                            <p class="f-12 lh-12 uppercase clr-99ACB6">
                                Plan locked until cooling-off ends
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-16 flex-col">
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-13 lh-11 clr-99ACB6 uppercase">
                                Plan adoption date
                            </h4>
                            <h3 class="f-16 lh-13 white">
                                Oct15, 2026
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-13 lh-11 clr-99ACB6 uppercase">
                                Affirmative Defense system
                            </h4>
                            <h3 class="f-16 lh-13 white">
                                Active
                            </h3>
                        </div>

                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-13 lh-11 clr-99ACB6 uppercase">
                                legal counter party
                            </h4>
                            <h3 class="f-16 lh-13 white">
                                Amazon, General Counsel
                            </h3>
                        </div>
                    </div>

                </div>

                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-10 justify-space-between">
                        <div class="d-flex gap-16 mb-24 align-center">
                            <div class="bg-e9e7dd1a w-30 h-30 br-6 d-flex align-center justify-center">
                                <div class="w-15 h-15 bg-108476 br-100">

                                </div>
                            </div>
                            <h3 class="f-12 white uppercase">
                                Status
                            </h3>
                        </div>
                        <div class="f-16 lh-12 clr-7BD09D">
                            Compliant
                        </div>
                    </div>

                    <div class="d-flex gap-16 flex-col">
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-13 lh-11 clr-99ACB6 uppercase">
                                Rule 10b5-1
                            </h4>
                            <h3 class="f-16 lh-13 white">
                                Active
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-13 lh-11 clr-99ACB6 uppercase">
                                Broker Activation
                            </h4>
                            <h3 class="f-16 lh-13 white">
                                Pending
                            </h3>
                        </div>

                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-13 lh-11 clr-99ACB6 uppercase">
                                Plan
                            </h4>
                            <h3 class="f-16 lh-13 white">
                                Locked
                            </h3>
                        </div>


                    </div>


                </div>
            </div>

            <div class="d-grid col-lg-2 gap-32 mb-80">
                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24 gap-24">
                    <h4 class="f-14 lh-16 clr-99ACB6 uppercase">
                        Plan timeline
                    </h4>
                    <div class="timeline locked-timeline">
                        <div class="timeline-progress"></div>

                        <div class="timeline-item active timeline-start">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-15 lh-12 clr-DADADA text-left mb-8">APR 15, 2026</h4>
                                <p class="f-13 lh-10 clr-99ACB6 text-left">Plan Signed</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-15 lh-12 clr-DADADA mb-8">90 days</h4>
                                <p class="f-13 lh-10 clr-99ACB6">Cooling off period</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-15 lh-12 clr-DADADA mb-8">Active</h4>
                                <p class="f-13 lh-10 clr-99ACB6">Jul 14, 2026</p>
                            </div>
                        </div>

                        <div class="timeline-item timeline-end">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-15 lh-12 clr-DADADA text-right mb-8">Locked</h4>
                                <p class="f-13 lh-10 clr-99ACB6 text-right">Apr 15, 2026</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-072312 p-32-24 br-8">
                    <div class="d-flex gap-10 justify-space-between flex-col">
                        <p class="f-12 lh-13 clr-A7DFBD mb-4">
                            Note
                        </p>
                        <div class="d-flex gap-4 flex-col">
                            <p class="f-14 lh-18 white">
                                This plan is legally binding and locked. No changes can be made to the trade instructions.
                            </p>
                            <div class="border-E9E7DD-40"></div>
                            <p class="f-14 lh-18 white">
                                This plan meets the requirements for SEC Rule 10b5-1 affirmative defense.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-grid gap-16">
                <!-- <div class="f-14 lh-16 neutral-300 uppercase">
                    Call to action
                </div> -->

                <div class="d-grid col-lg-2 gap-32">


                    <div class="bg-0B1417 p-32-24 br-11 border-E9E7DD-24">

                        <h3 class="f-16 lh-18 white mb-8">
                            Download Full Plan (PDF)
                        </h3>

                        <p class="f-14 lh-22 clr-DADADA-6 mb-32">
                            Downloads the stamped, legal document for the executive’s personal files or CPA.
                        </p>

                        <div class="btn-outer d-flex gap-10">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-14 d-flex justify-center w-auto m-fit-content">Download Report</a>
                        </div>
                    </div>
                    <!-- <div class="col-outer">


                    </div> -->

                    <div class="bg-0B1417 p-32-24 br-11 border-E9E7DD-24">
                        <h3 class="f-16 lh-18 white mb-8">
                            View Compliance Certificate
                        </h3>

                        <p class="f-14 lh-22 clr-DADADA-6 mb-32">
                            Opens a 1-page summary for the executive to show they are in “Good Faith” compliance with Rule 10b5-1.
                        </p>

                        <div class="btn-outer d-flex gap-10">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-14 d-flex justify-center w-auto m-fit-content">Download Report</a>
                        </div>
                    </div>
                    <!-- <div class="col-outer">
                    </div> -->


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