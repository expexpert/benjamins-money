@extends('layouts.app')

@section('title','Actionable Advisory Task Board')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Effective Tax Rate
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Actionable Advisory Task Board
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
        <div class="card-outer d-flex gap-32 align-flex-start flex-col w-100">
            <div class="d-flex gap-8 flex-col">
                <h3 class="f-16 lh-18 white">
                    Actionable Advisory Task Board
                </h3>
                <p class="f-16 lh-18 neutral-300">
                    Convert your What-If modeling numbers into operational action items
                </p>
            </div>
            <div class="d-grid col-lg-3 gap-24 w-100">
                <div class="d-flex gap-20 flex-col">
                    <div class="bg-0B1417 br-8 border-E9E7DD-24 p-16 d-flex align-center justify-space-between gap-10">
                        <div class="d-flex gap-10 align-center">
                            <div class="dot-yellow">

                            </div>
                            <p class="f-16 lh-16 white">
                                System Actions
                            </p>
                        </div>
                        <div class="bg-white-6 br-100px p-3-8 f-10 lh-12 clr-A7DFBD">
                            3 Tasks
                        </div>
                    </div>

                    <div class="d-flex gap-16 flex-col">
                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-FBBF24 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-FBBF24 uppercase">
                                        Pending
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-06B6D4">
                                        High Priority
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Approve automated Tax-Loss Harvesting routine
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    $42k savings pending
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Approve Routine</a>
                        </div>

                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-34D399 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-34D399 uppercase">
                                        Ready
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-06B6D4">
                                        High Priority
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Rebalance portfolio to maximize long-term capital gains treatment
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Shifting corporate security assets out of short-term brackets
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Review Allocations</a>
                        </div>

                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-FBBF24 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-FBBF24 uppercase">
                                        Pending
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-06B6D4">
                                        High Priority
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Trigger automated estimated tax payment for Q4 2026
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Scheduled payout targeting IRS deadline parameters
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Schedule Payment</a>
                        </div>

                    </div>
                </div>
                <div class="d-flex gap-20 flex-col">
                    <div class="bg-0B1417 br-8 border-E9E7DD-24 p-16 d-flex align-center justify-space-between gap-10">
                        <div class="d-flex gap-10 align-center">
                            <div class="dot-10B981">

                            </div>
                            <p class="f-16 lh-16 white">
                                Corporate Adjustments
                            </p>
                        </div>
                        <div class="bg-white-6 br-100px p-3-8 f-10 lh-12 clr-A7DFBD">
                            3 Tasks
                        </div>
                    </div>

                    <div class="d-flex gap-16 flex-col">
                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-34D399 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-34D399 uppercase">
                                        Ready
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-06B6D4">
                                        High Priority
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Sign digital payroll amendment for Deferred Comp
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Elevates pre-tax deferred compensation target share to 15%
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Sign Amendment</a>
                        </div>

                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-34D399 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-34D399 uppercase">
                                        Ready
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-818CF8">
                                        FIN PRIORITY
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Update W-4 withholding elections for state residency
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Configures incoming payroll runs to recognize Florida domicile status
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Update W-4</a>
                        </div>

                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-FBBF24 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-FBBF24 uppercase">
                                        Pending
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-818CF8">
                                        FIN PRIORITY
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Elect maximum 401(k) catch-up contribution for 2027
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Generates estimated additional $7,500 pre-tax deduction
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Elect Contribution</a>
                        </div>

                    </div>
                </div>

                <div class="d-flex gap-20 flex-col">
                    <div class="bg-0B1417 br-8 border-E9E7DD-24 p-16 d-flex align-center justify-space-between gap-10">
                        <div class="d-flex gap-10 align-center">
                            <div class="dot-6366F1">

                            </div>
                            <p class="f-16 lh-16 white">
                                Philanthropy Tracker
                            </p>
                        </div>
                        <div class="bg-white-6 br-100px p-3-8 f-10 lh-12 clr-A7DFBD">
                            3 Tasks
                        </div>
                    </div>

                    <div class="d-flex gap-16 flex-col">
                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-34D399 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-34D399 uppercase">
                                        Ready
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-06B6D4">
                                        High Priority
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Fund your Donor-Advised Fund (DAF) balance
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Stock transfer asset transfer targeting $250,000 optimization
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Initiate Transfer</a>
                        </div>

                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-94A3B8 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-94A3B8 uppercase">
                                        Planning
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-818CF8">
                                        FIN PRIORITY
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Schedule recurring charitable distributions from DAF
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Establishes quarterly payout targets to verified 501(c)(3) entities
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">
                                Configure DAF
                            </a>
                        </div>

                        <div class="bg-white-3 border-org-white-12 br-16 p-20 d-flex flex-col gap-16">
                            <div class="d-flex gap1-0 align-center justify-space-between w-100">
                                <div class="d-flex gap-6 align-center">
                                    <div class="w-6 h-6 bg-34D399 br-100">

                                    </div>
                                    <p class="f-12 lh-12 clr-34D399 uppercase">
                                        Ready
                                    </p>
                                </div>
                                <div>
                                    <p class="f-12 lh-12 uppercase clr-06B6D4">
                                        HIGH PRIORITY
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-6">
                                <div class="f-16 lh-22 org-white">
                                    Generate year-end charitable giving summary for CPA
                                </div>
                                <p class="f-14 lh-18 neutral-300">
                                    Aggregates and formats all operational DAF receipts for verification
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">
                                Generate Report
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection