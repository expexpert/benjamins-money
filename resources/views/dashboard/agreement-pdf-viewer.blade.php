@extends('layouts.app')

@section('title','Agreement Pdf Viewer')

@section('content')

<div class="heading-bar d-flex justify-space-between">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Real Time Liquidity
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Employment Agreement Terms
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
        <div class="card-outer d-flex gap-24 align-flex-start flex-col">
            <div class="bg-0B1417 p-20 br-12 border-E9E7DD-15 d-grid col-2-1 w-100 justify-space-between align-center">
                <div class="d-grid col-lg-4 gap-40">
                    <div class="d-flex flex-col gap-4">
                        <p class="f-11 lh-12 uppercase clr-99ACB6">
                            Document ID
                        </p>
                        <p class="f-15 lh-18 white">
                            EA-2021-0315-JS
                        </p>
                    </div>

                    <div class="d-flex flex-col gap-4 align-flex-start">
                        <p class="f-11 lh-12 uppercase clr-99ACB6">
                            Classification
                        </p>
                        <span class="f-13 lh-14 clr-yellow-300  p-6-8 bg-FFBB33-5 br-4 border-FFCC66 d-inline-flex">
                            Confidential
                        </span>
                    </div>

                    <div class="d-flex flex-col gap-4">
                        <p class="f-11 lh-12 uppercase clr-99ACB6">
                            Pages
                        </p>
                        <p class="f-15 lh-18 white">
                            24
                        </p>
                    </div>

                    <div class="d-flex flex-col gap-4">
                        <p class="f-11 lh-12 uppercase clr-99ACB6">
                            Last Amended
                        </p>
                        <p class="f-15 lh-18 white">
                            09/12/2024
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-end">
                    <a href="#" class="p-6-12 d-flex align-center gap-8 btn-7BD09D-outlined bg-108476-10 br-30 f-14 lh-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M9.9992 3L4.49975 8.4996L2 5.99978" stroke="#7BD09D" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Verified Fiduciary Vault copy</a>
                </div>
            </div>

            <div class="d-grid col-1-2 align-flex-start gap-24 w-100">
                <div class="bg-0B1417 br-24 border-E9E7DD-15 d-flex gap-20 flex-col p-24">
                    <h2 class="f-14 lh-16 clr-99ACB6">
                        Table of Contents
                    </h2>
                    <ul class="list-unstyled d-flex gap-10 flex-col agreement">
                        <li class="f-14 lh-16 white p-12-16 active br-8 d-flex align-center justify-space-between">
                            Article I — Definitions
                            <span class="icon w-6 h-6">

                            </span>
                        </li>
                        <li class="f-14 lh-16 white p-12-16 br-8 d-flex align-center justify-space-between">
                            Article II — Equity Compensation
                            <span class="icon w-6 h-6">

                            </span>
                        </li>
                        <li class="f-14 lh-16 white p-12-16 br-8 d-flex align-center justify-space-between">
                            Article III — Restrictive Covenants
                            <span class="icon w-6 h-6">

                            </span>
                        </li>
                        <li class="f-14 lh-16 white p-12-16 br-8 d-flex align-center justify-space-between">
                            Article IV — Change of Control
                            <span class="icon w-6 h-6">

                            </span>
                        </li>
                        <li class="f-14 lh-16 white p-12-16 br-8 d-flex align-center justify-space-between">
                            Article V — Termination
                            <span class="icon w-6 h-6">

                            </span>
                        </li>
                        <li class="f-14 lh-16 white p-12-16 br-8 d-flex align-center justify-space-between">
                            Article VI — Severance
                            <span class="icon w-6 h-6">

                            </span>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-col gap-20 w-100">
                    <div class="bg-0B1417 br-12 border-E9E7DD-15 risk-card risk-agreement">
                        <div class="risk-card-header p-24-24-16 d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-16">
                                <div class="bg-7BD09D br-2 w-4">

                                </div>
                                <h2 class="f-16 lh-18 white">
                                    Article I — Definitions & Employment Terms
                                </h2>
                            </div>
                            <span class="risk-card-arrow w-15 active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="risk-card-content p-0-24-24">
                            <div class="border-bottom-E9E7DD-15 mb-16">

                            </div>
                            <div class="pl-20 d-flex flex-col gap-12">
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Position:
                                    </span>
                                    Chief Technology Officer (Executive Level).
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Base Compensation:
                                    </span>
                                    $485,000 per annum, paid semi-monthly.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Start Date:
                                    </span>
                                    March 15, 2021.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Term:
                                    </span>
                                    At-will employment, subject to executive severance provisions detailed in Article VI.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-0B1417 br-12 border-E9E7DD-15 risk-card risk-agreement">
                        <div class="risk-card-header p-24-24-16 d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-16">
                                <div class="bg-7BD09D br-2 w-4">

                                </div>
                                <h2 class="f-16 lh-18 white">
                                    Article II — Equity Compensation
                                </h2>
                            </div>
                            <span class="risk-card-arrow w-15 active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="risk-card-content p-0-24-24">
                            <div class="border-bottom-E9E7DD-15 mb-16">

                            </div>
                            <div class="pl-20 d-flex flex-col gap-12">
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Initial RSU Grant:
                                    </span>
                                    45,000 shares of common stock, subject to a 4-year vesting schedule with a 1-year cliff.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Base Compensation:
                                    </span>
                                    Up to 30,000 shares eligible annually, subject to Board-approved performance metrics.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Stock Option Pool:
                                    </span>
                                    15,000 stock options granted at a strike price of $164/share.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-0B1417 br-12 border-E9E7DD-15 risk-card risk-agreement">
                        <div class="risk-card-header p-24-24-16 d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-16">
                                <div class="bg-7BD09D br-2 w-4">

                                </div>
                                <h2 class="f-16 lh-18 white">
                                    Article III — Restrictive Covenants
                                </h2>
                            </div>
                            <span class="risk-card-arrow w-15 active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="risk-card-content p-0-24-24">
                            <div class="border-bottom-E9E7DD-15 mb-16">

                            </div>
                            <div class="pl-20 d-flex flex-col gap-12">
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Non-Compete:
                                    </span>
                                    18 months post-separation restriction period. Geographic scope: United States.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Non-Solicitation:
                                    </span>
                                    24 months restriction on soliciting employees or clients post-departure.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Confidentiality:
                                    </span>
                                    Perpetual NDA covering proprietary code, trade secrets, and institutional data.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="bg-0B1417 br-12 border-E9E7DD-15 risk-card risk-agreement">
                        <div class="risk-card-header p-24-24-16 d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-16">
                                <div class="bg-7BD09D br-2 w-4">

                                </div>
                                <h2 class="f-16 lh-18 white">
                                    Article IV — Change of Control
                                </h2>
                            </div>
                            <span class="risk-card-arrow w-15 active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="risk-card-content p-0-24-24">
                            <div class="border-bottom-E9E7DD-15 mb-16">

                            </div>
                            <div class="pl-20 d-flex flex-col gap-12">
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Double-Trigger Acceleration:
                                    </span>
                                    Requires both a Change of Control (CIC) event and involuntary termination within 12 months.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Equity Acceleration:
                                    </span>
                                    Upon a qualifying termination event, 100% of all unvested outstanding equity shall vest immediately.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-0B1417 br-12 border-E9E7DD-15 risk-card risk-agreement">
                        <div class="risk-card-header p-24-24-16 d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-16">
                                <div class="bg-7BD09D br-2 w-4">

                                </div>
                                <h2 class="f-16 lh-18 white">
                                    Article V — Termination & Garden Leave
                                </h2>
                            </div>
                            <span class="risk-card-arrow w-15 active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="risk-card-content p-0-24-24">
                            <div class="border-bottom-E9E7DD-15 mb-16">

                            </div>
                            <div class="pl-20 d-flex flex-col gap-12">
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Notice Period:
                                    </span>
                                    90-day written notice required for voluntary separation.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Garden Leave:
                                    </span>
                                    Company may place the Executive on garden leave at full salary during the 90-day notice period.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Waiver Option:
                                    </span>
                                    The Company retains the unilateral right to waive the garden leave period.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-0B1417 br-12 border-E9E7DD-15 risk-card risk-agreement">
                        <div class="risk-card-header p-24-24-16 d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-16">
                                <div class="bg-7BD09D br-2 w-4">

                                </div>
                                <h2 class="f-16 lh-18 white">
                                    Article VI — Severance & Benefits
                                </h2>
                            </div>
                            <span class="risk-card-arrow w-15 active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="risk-card-content p-0-24-24">
                            <div class="border-bottom-E9E7DD-15 mb-16">

                            </div>
                            <div class="pl-20 d-flex flex-col gap-12">
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Involuntary Separation:
                                    </span>
                                    24 months base salary + pro-rata target annual bonus upon termination without cause.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        COBRA Continuation:
                                    </span>
                                    18 months of employer-subsidized health benefits coverage.
                                </p>
                                <p class="f-15 lh-18 white">
                                    <span class="clr-99ACB6">
                                        Outplacement Services:
                                    </span>
                                    Up to $25,000 in professional outplacement firm consulting coverage.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex gap-16 w-100 justify-end">
                <a href="#" class="bg-4FC07C p-12-24 f-14 lh-16 d-flex gap-8 align-center clr-101010 justify-center bold br-100px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M7 8.75V1.75M9.91667 5.83333L7 8.75L4.08333 5.83333M12.25 8.75V11.0833C12.25 11.3928 12.1271 11.6895 11.9083 11.9083C11.6895 12.1271 11.3928 12.25 11.0833 12.25H2.91667C2.60725 12.25 2.3105 12.1271 2.09171 11.9083C1.87292 11.6895 1.75 11.3928 1.75 11.0833V8.75" stroke="#101010" stroke-width="1.25" stroke-linecap="round" />
                    </svg>
                    Download PDF</a>
                <a href="" class="p-12-24 f-14 lh-16 border-4FC07C br-100px clr-4FC07C d-flex gap-8 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M3.50149 10.4981H2.33473C2.02528 10.4981 1.72851 10.3752 1.5097 10.1564C1.29089 9.9376 1.16797 9.64083 1.16797 9.33138V6.41448C1.16797 6.10504 1.29089 5.80827 1.5097 5.58946C1.72851 5.37065 2.02528 5.24772 2.33473 5.24772H11.6688C11.9783 5.24772 12.275 5.37065 12.4938 5.58946C12.7126 5.80827 12.8356 6.10504 12.8356 6.41448V9.33138C12.8356 9.64083 12.7126 9.9376 12.4938 10.1564C12.275 10.3752 11.9783 10.4981 11.6688 10.4981H10.502M3.50149 5.24772V1.74744C3.50149 1.59272 3.56295 1.44434 3.67236 1.33493C3.78176 1.22553 3.93015 1.16406 4.08487 1.16406H9.91867C10.0734 1.16406 10.2218 1.22553 10.3312 1.33493C10.4406 1.44434 10.502 1.59272 10.502 1.74744V5.24772M4.08487 8.16462H9.91867C10.2409 8.16462 10.502 8.42581 10.502 8.748V12.2483C10.502 12.5705 10.2409 12.8317 9.91867 12.8317H4.08487C3.76268 12.8317 3.50149 12.5705 3.50149 12.2483V8.748C3.50149 8.42581 3.76268 8.16462 4.08487 8.16462Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round" />
                    </svg>
                    Print Agreement
                </a>
            </div>

        </div>
    </div>
</div>

@endsection