@extends('layouts.app')

@section('title', 'Liquidity Workflow')

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

            <div class="d-flex gap-8 flex-col">
                <h2 class="f-24 lh-26 white uppercase">
                    TRADE COMPLIANCE AUDIT
                </h2>
                <p class="f-15 lh-18 clr-99ACB6">
                    Complete 10b5-1 execution history, SEC compliance verification, and insider trading window log.
                </p>
            </div>

            <div class="d-grid gap-12 col-lg-4">
                <div class="bg-060F13 border-E9E7DD-15 br-12 d-flex flex-col gap-12 p-24">
                    <span class="f-14 lh-16 uppercase clr-99ACB6">
                        Total Trades Executed
                    </span>
                    <h3 class="f-38 lh-40 white">
                        12
                    </h3>
                    <p class="f-13 lh-16 white-50">
                        8 systematic (10b5-1), 4 manual (pre-cleared)
                    </p>
                </div>

                <div class="bg-060F13 border-23B05B br-12 d-flex flex-col gap-12 p-24">
                    <span class="f-14 lh-16 uppercase clr-99ACB6">
                        Compliance Score
                    </span>
                    <h3 class="f-38 lh-40 clr-23B05B">
                        100%
                    </h3>
                    <p class="f-13 lh-16 white-50">
                        All trades within approved windows
                    </p>
                </div>

                <div class="bg-060F13 border-E9E7DD-15 br-12 d-flex flex-col gap-12 p-24">
                    <span class="f-14 lh-16 uppercase clr-99ACB6">
                        Tax Alpha Captured
                    </span>
                    <h3 class="f-38 lh-40 white">
                        $42,900
                    </h3>
                    <p class="f-13 lh-16 white-50">
                        YTD tax-loss harvesting savings
                    </p>
                </div>

                <div class="bg-060F13 border-23B05B br-12 d-flex flex-col gap-12 p-24">
                    <span class="f-14 lh-16 uppercase clr-99ACB6">
                        Open Violations
                    </span>
                    <h3 class="f-38 lh-40 clr-23B05B">
                        0
                    </h3>
                    <p class="f-13 lh-16 white-50">
                        No pending compliance flags
                    </p>
                </div>
            </div>

            <div class="d-grid col-2-1 gap-24 w-100">
                <div class="d-flex flex-col gap-24 w-100">
                    <div class="p-24 bg-060F13 br-12 d-flex gap-16 flex-col w-100 border-E9E7DD-15">
                        <div class="d-flex align-center gap-10 justify-space-between">
                            <h2 class="f-16 lh-18 white">
                                Active Plan Specifications
                            </h2>
                            <span class="f-12 lh-14 p-4-10 clr-23B05B border-23B05B br-12 bg-23B05B-10">
                                ACTIVE — Affirmative Defense: VALID
                            </span>
                        </div>
                        <div class="d-flex gap-12 flex-col">
                            <div class="d-flex gap-10 justify-space-between">
                                <div>
                                    <p class="f-14 lh-16 clr-99ACB6">
                                        Plan Identifier
                                    </p>
                                </div>
                                <div>
                                    <p class="f-14 lh-16 white">
                                        AMZN-EXEC-2026-004 (Alpha-Diversify-2026)
                                    </p>
                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="d-flex gap-10 justify-space-between">
                                <div>
                                    <p class="f-14 lh-16 clr-99ACB6">
                                        Plan Adoption Date
                                    </p>
                                </div>
                                <div>
                                    <p class="f-14 lh-16 white">
                                        April 15, 2026
                                    </p>
                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="d-flex gap-10 justify-space-between">
                                <div>
                                    <p class="f-14 lh-16 clr-99ACB6">
                                        Cooling-Off Period Completion
                                    </p>
                                </div>
                                <div>
                                    <p class="f-14 lh-16 white">
                                        July 15, 2026
                                    </p>
                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="d-flex gap-10 justify-space-between">
                                <div>
                                    <p class="f-14 lh-16 clr-99ACB6">
                                        Execution Price Floor
                                    </p>
                                </div>
                                <div>
                                    <p class="f-14 lh-16 white">
                                        $85.00 (Market-to-Limit Execution Rule)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-060F13 br-12">
                        <div class="p-20 border-bottom-E9E7DD-15">
                            <h2 class="f-16 lh-18 white">
                                Plan Execution History
                            </h2>
                        </div>
                    </div>

                </div>

                <div class="d-flex gap-24 flex-col">
                    <div class="bg-060F13 br-12 border-E9E7DD-15 p-24 d-flex flex-col gap-16">
                        <h2 class="f-16 lh-18 white">
                            regulatory SEC Filing checklist
                        </h2>
                        <div class="d-flex flex-col gap-12">
                            <div class="d-flex gap-12">
                                <div class="bg-23B05B-10 br-12 d-flex align-center justify-center w-24 h-24">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M9.9992 3L4.49975 8.4996L2 5.99978" stroke="#23B05B" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="d-flex gap-2 flex-col">
                                    <h2 class="f-14 lh-16 white">
                                        Form 144: Filed & Active
                                    </h2>
                                    <p class="f-12 lh-14 clr-99ACB6">
                                        Submitted 04/15/2026 for AMZN tranche
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-12">
                                <div class="bg-23B05B-10 br-12 d-flex align-center justify-center w-24 h-24">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M9.9992 3L4.49975 8.4996L2 5.99978" stroke="#23B05B" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="d-flex gap-2 flex-col">
                                    <h2 class="f-14 lh-16 white">
                                        10b5-1 Exhibit: Verified
                                    </h2>
                                    <p class="f-12 lh-14 clr-99ACB6">
                                        Plan rules annexed correctly to corporate record
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-12">
                                <div class="bg-23B05B-10 br-12 d-flex align-center justify-center w-24 h-24">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M9.9992 3L4.49975 8.4996L2 5.99978" stroke="#23B05B" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="d-flex gap-2 flex-col">
                                    <h2 class="f-14 lh-16 white">
                                        GC Pre-Clearance: Approved
                                    </h2>
                                    <p class="f-12 lh-14 clr-99ACB6">
                                        General Counsel pre-approval on file
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-12">
                                <div class="bg-23B05B-10 br-12 d-flex align-center justify-center w-24 h-24">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M9.9992 3L4.49975 8.4996L2 5.99978" stroke="#23B05B" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="d-flex gap-2 flex-col">
                                    <h2 class="f-14 lh-16 white">
                                        Officer Certification: Executed
                                    </h2>
                                    <p class="f-12 lh-14 clr-99ACB6">
                                        Valid non-insider information covenant signed
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex gap-16 w-100 flex-col">
                        <a href="#" class="btn bg-23B05B p-10-21 f-14 d-flex clr-101010 justify-center bold">Export Full Audit PDF</a>
                        <a href="" class="btn border-23B05B br-100 clr-23B05B p-10-21 f-14 d-flex  justify-center bold">Request GC Review</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection