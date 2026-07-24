@extends('layouts.app')

@section('title','Locked')

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
                <a class="d-flex gap-8 f-16 neutral-300" href="/">
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

        <div class="d-grid col-lg-2 gap-32 mb-80">
            <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                <div class="d-flex gap-16 mb-24 align-center">
                    <div class="notification-outer">
                        <img src="{{ asset('images/locked.svg') }}" alt="locked-icon">
                    </div>
                    <div class="card-cont-inner">
                        <h3 class="f-18 lh-12 mb-8 clr-cat-brown">
                            Locked
                        </h3>
                        <p class="f-12 lh-11 uppercase white-80">
                            Plan locked until cooling-off ends
                        </p>
                    </div>
                </div>

                <div class="d-flex gap-16 flex-col">
                    <div class="d-flex gap-10 justify-space-between align-center">
                        <h4 class="f-12 neutral-300 uppercase">
                            Plan adoption date
                        </h4>
                        <h3 class="f-16 white">
                            April 15, 2026
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between align-center">
                        <h4 class="f-12 neutral-300 uppercase">
                            Affirmative Defense system
                        </h4>
                        <h3 class="f-16 white">
                            Active
                        </h3>
                    </div>

                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between align-center">
                        <h4 class="f-12 neutral-300 uppercase">
                            legal counter party
                        </h4>
                        <h3 class="f-16 white">
                            Amazon, General Counsel
                        </h3>
                    </div>
                </div>

            </div>

            <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                <div class="d-flex gap-10 justify-space-between">
                    <div class="d-flex gap-16 mb-24 align-center">
                        <div class="bg-e9e7dd1a w-30 h-30 br-6 d-flex align-center justify-center">
                            <div class="w-15 h-15 bg-23B05B br-100">

                            </div>
                        </div>
                        <h3 class="f-12 white uppercase">
                            Status
                        </h3>
                    </div>
                    <div class="f-16 clr-23B05B">
                        Compliant
                    </div>
                </div>

                <div class="d-flex gap-16 flex-col">
                    <div class="d-flex gap-10 justify-space-between align-center">
                        <h4 class="f-12 neutral-300 uppercase">
                            Rule 10b5-1
                        </h4>
                        <h3 class="f-16 white">
                            Active
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between align-center">
                        <h4 class="f-12 neutral-300 uppercase">
                            Broker Activation
                        </h4>
                        <h3 class="f-16 white">
                            Pending
                        </h3>
                    </div>

                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between align-center">
                        <h4 class="f-12 neutral-300 uppercase">
                            Plan
                        </h4>
                        <h3 class="f-16 white">
                            Locked
                        </h3>
                    </div>


                </div>


            </div>
        </div>

        <div class="d-grid col-lg-2 gap-32 mb-80">
            <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24 gap-24">
                <h4 class="f-14 neutral-300 uppercase">
                    Plan timeline
                </h4>
                <div class="timeline locked-timeline">
                    <div class="timeline-progress"></div>

                    <div class="timeline-item active timeline-start">
                        <div class="dot"></div>
                        <div class="content">
                            <h4 class="f-14 clr-DADADA text-left">APR 15</h4>
                            <p class="f-12 clr-DADADA-6 text-left">Adoption</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="content">
                            <h4 class="f-14 clr-DADADA">MAY 26</h4>
                            <p class="f-12 clr-DADADA-6">Today</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="dot"></div>
                        <div class="content">
                            <h4 class="f-14 clr-DADADA">JUL 15</h4>
                            <p class="f-12 clr-DADADA-6">Live</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-end">
                        <div class="dot"></div>
                        <div class="content">
                            <h4 class="f-14 clr-DADADA text-right">AUG 15</h4>
                            <p class="f-12 clr-DADADA-6 text-right">Next Sale</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-125D34 p-32 br-8">
                <div class="d-flex gap-10 justify-space-between flex-col">
                    <p class="f-14 lh-22 white">
                        Note
                    </p>
                    <div class="d-flex gap-4 flex-col">
                        <p class="f-14 white">
                            This plan is legally binding and locked. No changes can be made to the trade instructions.
                        </p>
                        <div class="border-E9E7DD-40"></div>
                        <p class="f-14 white">
                            This plan meets the requirements for SEC Rule 10b5-1 affirmative defense.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-grid gap-16">
            <div class="f-14 lh-16 neutral-300 uppercase">
                Call to action
            </div>

            <div class="d-grid col-lg-2 gap-32 mb-48">


                <div class="col-outer">
                    <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">

                        <h3 class="f-16 white mb-8">
                            Download Full Plan (PDF)
                        </h3>

                        <p class="f-16 neutral-300 mb-40">
                            Downloads the stamped, legal document for the executive’s personal files or CPA.
                        </p>

                        <div class="btn-outer d-flex gap-10">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-16 d-flex justify-center w-auto m-fit-content">Download Report</a>
                        </div>
                    </div>


                </div>

                <div class="col-outer">
                    <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                        <h3 class="f-16 white mb-8">
                            View Compliance Certificate
                        </h3>

                        <p class="f-16 neutral-300 mb-40">
                            Opens a 1-page summary for the executive to show they are in “Good Faith” compliance with Rule 10b5-1.
                        </p>

                        <div class="btn-outer d-flex gap-10">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-16 d-flex justify-center w-auto m-fit-content">Download Report</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

@endsection