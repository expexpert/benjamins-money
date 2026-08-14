@extends('layouts.app')

@section('title','Networth')

@section('content')

<div class="dashboard-outer">

    @include('partials.sidebar')
    <div class="dashboard-content">
        @include('partials.header')

        <div class="heading-bar d-flex justify-space-between">
            <div class="breadcrumb">
                <a class="d-flex gap-8 f-16 neutral-300" href="{{ url('/') }}">
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

        <div class="d-grid col-lg-3 gap-24 mb-48">
            <div class="p-24 br-11 border-E9E7DD-24">
                <div class="d-flex gap-16 mb-16 align-center">
                    <div class="notification-outer">
                        <img src="{{ asset('images/net-worth.svg') }}" alt="networth-icon">
                    </div>
                    <div class="card-cont-inner">
                        <h3 class="f-16 lh-12 white">
                            Total Assets
                        </h3>
                    </div>
                </div>

                <div class="d-flex gap-8 flex-col">
                    <h4 class="f-24 lh-22 white">
                        $16,125,000
                    </h4>
                    <p class="f-14 clr-4FC07C">
                        +$1,320,000 (8.9%) this year
                    </p>
                </div>

            </div>

            <div class="p-24 br-11 border-E9E7DD-24">
                <div class="d-flex gap-16 mb-16 align-center">
                    <div class="notification-outer">
                        <img src="{{ asset('images/real-time.svg') }}" alt="real-time icon">
                    </div>
                    <div class="card-cont-inner">
                        <h3 class="f-16 lh-12 white">
                            Total Liabilities
                        </h3>
                    </div>
                </div>

                <div class="d-flex gap-8 flex-col">
                    <h4 class="f-24 lh-22 white">
                        $1,382,000
                    </h4>
                    <p class="f-14 clr-red-400">
                        +$120,000 (8.0%) this year
                    </p>
                </div>

            </div>

            <div class="p-24 br-11 border-E9E7DD-24">
                <div class="d-flex gap-16 mb-16 align-center">
                    <div class="notification-outer">
                        <img src="{{ asset('images/cash-releases.svg') }}" alt="cash-releases icon">
                    </div>
                    <div class="card-cont-inner">
                        <h3 class="f-16 lh-12 white">
                            Net Worth
                        </h3>
                    </div>
                </div>

                <div class="d-flex gap-8 flex-col">
                    <h4 class="f-24 lh-22 white">
                        $14,743,000
                    </h4>
                    <p class="f-14 clr-4FC07C">
                        +$1,124,000 (8.2%) this year
                    </p>
                </div>

            </div>
        </div>

        <div class="d-flex gap-16 flex-col mb-48">
            <h5 class="f-14 lh-16 neutral-300">
                TOTAL ASSETS
            </h5>
            <div class="p-40-32 bg-060F13 border-E9E7DD-24 br-16 d-flex flex-col gap-16">
                <div class="d-flex gap-12 justify-space-between align-center">
                    <div class="d-flex gap-12 align-center">
                        <div class="notification-outer w-47 h-47 d-flex align-center justify-center">
                            <img src="{{ asset('images/net-worth.svg') }}" alt="net worth icon">
                        </div>
                        <div>
                            <h3 class="f-24 lh-24 mb-8 clr-23B05B bold">
                                $16,125,000
                            </h3>
                            <p class="f-18 lh-22 white">
                                Assets Breakdown
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-24 align-center">
                        <a href="#" class="btn btn-green-outlined p-6-16 f-14 d-flex">Add /connect account</a>
                        <a href="#" class="f-14 d-flex clr-4FC07C">View All</a>
                    </div>

                </div>
                <div class="bg-sec-900 border-E9E7DD-24 br-16 p-32">
                    <div class="d-flex gap-16 flex-col">
                        <div class="table-row d-grid col-lg-5 align-center gap-32 mb-8">
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Asset
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Percentage
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Current Value
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    allocation
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase center">
                                    Status
                                </p>
                            </div>
                        </div>

                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    Amazon Stock Awards
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-yellow-outlined bg-yellow-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connection Required</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    46.5%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $7,500,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    Ft. Lauderdale, FL Home
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-green-outlined bg-green-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connected</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    34.1%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $3,000,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    RBC Brokerage Account
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-green-outlined bg-green-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connected</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    17.1%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $2,750,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    Mclean, VA home
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-yellow-outlined bg-yellow-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connection Required</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    1.6%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $2500,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="25.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    RBC Brokerage Account
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-green-outlined bg-green-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connected</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    0.7%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $250,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    Bank of America CDs
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-green-outlined bg-green-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connected</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    0.2%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $125,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex gap-16 flex-col mb-32">
            <h5 class="f-14 lh-16 neutral-300">
                TOTAL LIABILITIES
            </h5>
            <div class="p-40-32 bg-060F13 border-E9E7DD-24 br-16 d-flex flex-col gap-16 liability">
                <div class="d-flex gap-12 justify-space-between align-center">
                    <div class="d-flex gap-12 align-center">
                        <div class="notification-outer w-47 h-47 d-flex align-center justify-center">
                            <img src="{{ asset('images/net-worth.svg') }}" alt="net worth icon">
                        </div>
                        <div>
                            <h3 class="f-24 lh-24 mb-8 clr-red-400 bold">
                                $1,382,000
                            </h3>
                            <p class="f-18 lh-22 white">
                                Liabilities Breakdown
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-24 align-center">
                        <a href="#" class="btn btn-green-outlined p-6-16 f-14 d-flex">Add /connect account</a>
                        <a href="#" class="f-14 d-flex clr-4FC07C">View All</a>
                    </div>

                </div>
                <div class="bg-sec-900 border-E9E7DD-24 br-16 p-32">
                    <div class="d-flex gap-16 flex-col">
                        <div class="table-row d-grid col-lg-5 align-center gap-32 mb-8">
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Asset
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Percentage
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    Current Value
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase">
                                    allocation
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 neutral-300 uppercase center">
                                    Status
                                </p>
                            </div>
                        </div>

                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    Auto Loans (Two Loans)
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-yellow-outlined bg-yellow-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connection Required</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    54.3%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $750,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    Mclean BOA Home Loan
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-green-outlined bg-green-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connected</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    36.2%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $500,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    FLL BB&T Home Loan
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-green-outlined bg-green-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connected</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    5.90%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $82,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="46.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-32 h-1"></div>
                        <div class="table-row d-grid col-lg-5 align-start gap-32">
                            <div class="date-outer d-flex gap-8 flex-col justify-start">
                                <p class="f-16 lh-18 white">
                                    Ft. Lauderdale, FL Home
                                </p>
                                <div class="f-12 lh-16">
                                    <a class="btn-yellow-outlined bg-yellow-400-15 p-3-16 br-48 d-inline-flex justify-start" href="#">Connection Required</a>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    3.60%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    $50,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <div class="seg-bar" data-pct="25.5">
                                    <div class="seg-inner"></div>
                                </div>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white center">
                                    Active
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="bg-E9E7DD-5 p-17-50 br-16 d-flex gap-12 align-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM9 5H11V7H9V5ZM9 9H11V15H9V9Z" fill="#E9E7DD" fill-opacity="0.6" />
            </svg>
            <p class="neutral-300 f-14 lh-25">
                API connections will sync automatically once linked. Redfin API updates property values in real time. New assets or loans added here will reflect in your net worth immediately.
            </p>
        </div>


        <div class="card">

            <div class="header">
                <div>
                    <p class="net-worth-label">NET WORTH</p>
                    <p class="net-worth-value">$14,743,000</p>
                    <div class="net-worth-change">
                        <span>&#8599;</span>
                        <span>+$1,124,000 (8.2%) this year</span>
                    </div>
                </div>

                <div class="range-toggle">
                    <button>1D</button>
                    <button>1W</button>
                    <button>1M</button>
                    <button>3M</button>
                    <button>YTD</button>
                    <button class="active">1Y</button>
                    <button>ALL</button>
                </div>
            </div>

            <div class="chart-wrap">
                <div class="tooltip">
                    <div class="amount">$14,600,00</div>
                    <div class="date">Nov26, 2025</div>
                </div>

                <svg viewBox="0 0 1220 480" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="fillGradient" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#1f6b4f" stop-opacity="0.55" />
                            <stop offset="100%" stop-color="#0a0f12" stop-opacity="0" />
                        </linearGradient>
                    </defs>

                    <!-- gridlines -->
                    <line x1="70" y1="30" x2="70" y2="400" stroke="#1b2226" stroke-width="1" />
                    <line x1="70" y1="400" x2="1200" y2="400" stroke="#1b2226" stroke-width="1" />

                    <!-- y axis labels -->
                    <text x="55" y="45" text-anchor="end" class="axis-label">$20M</text>
                    <text x="55" y="130" text-anchor="end" class="axis-label">$16M</text>
                    <text x="55" y="215" text-anchor="end" class="axis-label">$12M</text>
                    <text x="55" y="300" text-anchor="end" class="axis-label">$8M</text>

                    <!-- area fill -->
                    <path d="
        M 90,440
        C 130,380 150,260 200,260
        C 240,260 250,380 280,400
        C 310,420 330,340 360,340
        C 390,340 400,375 430,375
        C 460,375 470,300 500,265
        C 530,230 540,225 570,225
        C 600,225 610,335 645,360
        C 670,378 680,378 700,360
        C 715,347 720,335 730,300
        C 740,265 745,225 760,225
        C 775,225 785,265 800,320
        C 815,360 825,375 845,375
        C 865,375 875,340 890,340
        C 905,340 910,370 930,375
        C 950,380 960,300 985,255
        C 1010,210 1020,205 1040,205
        C 1060,205 1065,270 1080,300
        C 1095,330 1105,335 1120,335
        C 1135,335 1140,300 1155,275
        C 1170,250 1175,325 1190,380
        C 1200,415 1205,435 1210,445
        L 1210,440 L 90,440 Z"
                        fill="url(#fillGradient)" stroke="none" />

                    <!-- line -->
                    <path d="
        M 90,440
        C 130,380 150,260 200,260
        C 240,260 250,380 280,400
        C 310,420 330,340 360,340
        C 390,340 400,375 430,375
        C 460,375 470,300 500,265
        C 530,230 540,225 570,225
        C 600,225 610,335 645,360
        C 670,378 680,378 700,360
        C 715,347 720,335 730,300
        C 740,265 745,225 760,225
        C 775,225 785,265 800,320
        C 815,360 825,375 845,375
        C 865,375 875,340 890,340
        C 905,340 910,370 930,375
        C 950,380 960,300 985,255
        C 1010,210 1020,205 1040,205
        C 1060,205 1065,270 1080,300
        C 1095,330 1105,335 1120,335
        C 1135,335 1140,300 1155,275
        C 1170,250 1175,325 1190,380
        C 1200,415 1205,435 1210,445"
                        fill="none" stroke="#34d399" stroke-width="2.5" stroke-linecap="round" />

                    <!-- marker -->
                    <line x1="730" y1="300" x2="730" y2="440" stroke="#4a5459" stroke-width="1" stroke-dasharray="3,3" />
                    <circle cx="730" cy="300" r="5" fill="#f2f4f5" />

                    <!-- x axis labels -->
                    <text x="90" y="465" class="axis-label">May, 25</text>
                    <text x="180" y="465" class="axis-label">Jun, 25</text>
                    <text x="270" y="465" class="axis-label">Jul, 25</text>
                    <text x="360" y="465" class="axis-label">Aug, 25</text>
                    <text x="450" y="465" class="axis-label">Sep, 25</text>
                    <text x="545" y="465" class="axis-label">Oct, 25</text>
                    <text x="640" y="465" class="axis-label">Nov, 25</text>
                    <text x="730" y="465" class="axis-label">Dec, 25</text>
                    <text x="820" y="465" class="axis-label">Jan, 26</text>
                    <text x="915" y="465" class="axis-label">Feb, 26</text>
                    <text x="1010" y="465" class="axis-label">Mar, 26</text>
                    <text x="1105" y="465" class="axis-label">Apr, 26</text>
                    <text x="1180" y="465" class="axis-label">May, 26</text>
                </svg>
            </div>

            <div class="footer">
                <div class="stat-box">
                    <p class="stat-label">ASSETS</p>
                    <p class="stat-value">$16,125,000</p>
                    <div class="stat-bar assets-bar"><span></span></div>
                </div>
                <div class="stat-box">
                    <p class="stat-label">LIABILITIES</p>
                    <p class="stat-value">$1,382,000</p>
                    <div class="stat-bar liabilities-bar"><span></span></div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection