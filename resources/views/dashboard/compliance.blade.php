@extends('layouts.app')

@section('title','Compliance')

@section('content')

<div class="dashboard-outer">

    @include('partials.sidebar')
    <div class="dashboard-content">
        <div class="dashboard-header">
            <div class="user-info-left">
                <div class="top-bar">
                    <h1 class="f-20">Good Morning, <b>John Smith</b></h1>
                    <div class="sync-time f-14">
                        Updated 2 mins ago
                    </div>
                </div>
                <div class="bottom-bar f-14">
                    Tax Residency • Bethesda, MD
                </div>
            </div>
            <div class="user-info-right">
                <form>
                    <input id="search" type="text" placeholder="Search plans, accounts, documents..." class="f-14">
                    <button type="submit">
                        <img src="{{ asset('images/search.svg') }}" alt="search icon">
                    </button>
                </form>
                <div class="notification-outer">
                    <img src="{{ asset('images/notification.svg') }}" alt="notification-icon">
                    <div class="notification-count">
                        <span class="f-10">3</span>
                    </div>
                </div>
                <div class="profile">
                    <div class="profile-img" id="profileToggle">
                        <img src="{{ asset('images/user-image.png') }}" alt="User Profile">
                    </div>

                    <div class="profile-dropdown" id="profileDropdown">
                        <ul>
                            <li class="active">
                                <a href="#" class="f-16">
                                    My Profile
                                    <span class="caret">
                                        <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="f-16">Advisor Team
                                    <span class="caret">
                                        <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="f-16">Documents
                                    <span class="caret">
                                        <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="f-16">Settings
                                    <span class="caret">
                                        <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="f-16">Security
                                    <span class="caret">
                                        <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="f-16">Sign out
                                    <span class="caret">
                                        <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="heading-bar d-flex justify-space-between">
            <div class="breadcrumb">
                <a class="d-flex gap-8 f-16 neutral-300" href="#">
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

        <div class="d-grid col-lg-2 gap-32 mb-48">
            <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                <div class="d-flex gap-32 justify-space-between mb-16">
                    <div class="d-flex flex-col gap-6">
                        <div class="f-12 neutral-300">
                            Plan ID: AMZN-EXEC-2026-004
                        </div>
                        <div class="f-16 white">
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

                <div class="bg-E9E7DD-5 p-20-22 d-flex gap-24 flex-col br-8 mb-16">
                    <div class="f-14 white">
                        Execution Radar (Cooling-Off & Windows)
                    </div>

                    <div class="timeline">
                        <div class="timeline-progress"></div>

                        <div class="timeline-item active">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-14 clr-DADADA">APR 15</h4>
                                <p class="mb-4 f-12 clr-DADADA-6">Adoption</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-14 clr-DADADA">MAY 26</h4>
                                <p class="mb-4 f-12 clr-DADADA-6">Today</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-14 clr-DADADA">JUL 15</h4>
                                <p class="mb-4 f-12 clr-DADADA-6">Live</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="dot"></div>
                            <div class="content">
                                <h4 class="f-14 clr-DADADA">AUG 15</h4>
                                <p class="mb-4 f-12 clr-DADADA-6">Next Sale</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-grid col-lg-2 gap-16">
                    <div class="border-white-24 p-16-24 br-8">
                        <p class="f-10 neutral-300 mb-4 uppercase">
                            Cooling Off Period
                        </p>
                        <h2 class="f-16 lh-20 clr-blue-300 mb-8">
                            49 Days Remaining
                        </h2>
                        <p class="f-14 lh-10 neutral-80">
                            Locked until Jul 15
                        </p>
                    </div>

                    <div class="border-white-24 p-16-24 br-8">
                        <p class="f-10 neutral-300 mb-4 uppercase">
                            Execution Window Opens
                        </p>
                        <h2 class="f-16 lh-20 clr-blue-300 mb-8">
                            Next Trade
                        </h2>
                        <p class="f-14 lh-10 neutral-80">
                            1,200 Shares on Aug 15
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                <p class="f-9 neutral-300 uppercase mb-24">
                    Affirmative Defense Checklist (SEC Rule 10b5-1)
                </p>
                <div class="d-flex gap-16 flex-col">
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300">
                            Overlapping Plans
                        </h4>
                        <h3 class="f-14 white">
                            None Detected
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300">
                            Single-Trade Plan
                        </h4>
                        <h3 class="f-14 white">
                            N/A (Systematic recurring plan)
                        </h3>
                    </div>

                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300">
                            Officer Certifications
                        </h4>
                        <h3 class="f-14 white">
                            Signed and filed with General<br>
                            Counsel on 04/15
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300">
                            Good Faith Requirement
                        </h4>
                        <h3 class="f-14 white">
                            No modifications made in the <br>
                            last 120 days
                        </h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex gap-16 flex-col mb-48">
            <div class="f-14 neutral-300 uppercase">
                SCHEDULED EXECUTIONS
            </div>
            <div class="bg-seconday-dark-900 p-40-32 br-11 border-E9E7DD-24">
                <div class="d-flex gap-10px justify-space-between align-flex-start mb-16">
                    <div class="d-flex gap-12">
                        <div class="notification-outer">
                            <img src="{{ asset('images/weight.svg') }}" alt="goals icon">
                        </div>
                        <div class="card-cont">
                            <h3 class="f-14 mb-4">
                                Post Tax / FL Residency </h3>
                            <p class="f-12 uppercase">
                                Net Proceeds
                            </p>
                        </div>
                    </div>
                    <div class="btn-col">
                        <p class="f-32 white lh-18">
                            $482,400
                        </p>
                    </div>
                </div>

                <div class="bg-seconday-dark-900 border-white-24 p-32-40 br-16">
                    <div class="d-flex gap-34 flex-col">
                        <div class="table-row d-grid col-lg-5 align-center gap-10">
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Date
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Volume
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Price floor
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Instruction
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase center">
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
                                <div class="f-14 lh-16 clr-23B05B center">
                                    View Specs
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
                                    View Specs
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
                                    View Specs
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="d-grid col-lg-2 gap-32">

            <div class="col-outer">
                <h3 class="f-14 neutral-300 uppercase mb-16">
                    INSIDER TRADING WINDOW
                </h3>
                <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-10px justify-space-between align-center mb-14">
                        <div class="d-flex gap-12">
                            <div class="notification-outer">
                                <img src="{{ asset('images/weight.svg') }}" alt="search icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-14 mb-4">
                                    Clear to Trade (Open Window)
                                </h3>
                                <p class="f-12 uppercase">
                                    Current state
                                </p>
                            </div>
                        </div>
                        <div class="btn-col">
                            <a href="#" class="btn-yellow-outlined p-8-10 f-12 lh-16 gap-4 d-flex flex-col uppercase align-center justify-center br-9">Window Closes<span class="f-16 lh-16 clr-yellow-400 capitalize">12 Days</span></a>
                        </div>
                    </div>

                    <div class="bg-6C6C6C-10 br-9 p-16-24 mb-48">
                        <div class="f-14 lh-22 white mb-12">
                            Note: Manual trades permitted for vested shares outside of 10b5-1 subject to General Counsel approval. Your 10b5-1 plan is exempt from blackout periods and will execute regardless of earnings news.
                        </div>
                        <a href="#" class="f-14 clr-23B05B d-flex gap-12 align-center">Modify Plan <img src="{{ asset('images/btn-arrow-sm.svg') }}" alt="btn arrow icon"></a>
                    </div>

                    <div class="d-grid col-lg-2 gap-30">
                        <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-prm-900 justify-center">Request Pre Clearance</a>
                        <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center">Log Private Trade</a>
                    </div>

                </div>
            </div>

            <div class="col-outer">
                <h3 class="f-14 neutral-300 uppercase mb-16">
                    Audit trail & Filings
                </h3>
                <div class="bg-seconday-dark-900 p-32-32-48 br-11 border-E9E7DD-24 d-flex gap-22 flex-col">

                    <div class="d-flex justify-space-between gap-10">
                        <div class="d-flex gap-16 align-center">
                            <div class="notification-outer">
                                <img src="{{ asset('images/pdf.svg') }}" alt="pdf icon">
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
                            <div class="notification-outer">
                                <img src="{{ asset('images/pdf.svg') }}" alt="pdf icon">
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
                            <div class="notification-outer">
                                <img src="{{ asset('images/pdf.svg') }}" alt="pdf icon">
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

@endsection