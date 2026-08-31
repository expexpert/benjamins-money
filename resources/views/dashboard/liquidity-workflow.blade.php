@extends('layouts.app')

@section('title', 'Liquidity Workflow')

@section('content')

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
    <div class="dash-cont-inner">
        <div class="card-outer d-flex gap-48 align-flex-start flex-col">
            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-16 lh-11">
                        The Transformation Flow
                    </h3>
                </div>
                <div class="d-grid col-lg-3 gap-30 w-100 mb-8">
                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-16 align-center">
                            <div class="notification-outer w-38 h-38">
                                <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0 mb-4">
                                    Company Stock
                                </p>
                                <h3 class="f-12 lh-12 clr-99ACB6 uppercase">
                                    Source
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 clr-7BD09D">
                                $11.1M
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                Future Pipe Risk: Extreme (84%)
                            </div>

                        </div>

                    </div>

                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-16 align-center">
                            <div class="notification-outer w-38 h-38">
                                <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0 mb-4">
                                    Tax Aplha Filter
                                </p>
                                <h3 class="f-12 lh-12 clr-99ACB6 uppercase">
                                    Filter
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 white">
                                +$42,000
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                YTD Savings
                            </div>

                        </div>

                    </div>

                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-16 align-center">
                            <div class="notification-outer w-38 h-38">
                                <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0 mb-4">
                                    Platinum Alpha SMA
                                </p>
                                <h3 class="f-12 lh-12 clr-99ACB6 uppercase">
                                    Destination
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 white">
                                $6.3M
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                The Engine Risk: Secure (20%)
                            </div>

                        </div>

                    </div>

                </div>
                <div class="bg-0B1417 p-32-24 gap-84 stages-outer d-grid col-lg-3 w-100 br-12">
                    <div class="stage-inner">
                        <p class="f-12 lh-12 uppercase clr-99ACB6 mb-12">
                            Stage 1
                        </p>
                        <p class="f-16 lh-16 white mb-24">
                            Liquidation (The Sell)
                        </p>
                        <p class="f-16 lh-20 white mb-8">
                            Automated 10b5-1 / RSU Vest Sale
                        </p>
                        <p class="f-14 lh-20 neutral-300 mb-16">
                            Selling 1,000 shares on June 01 at Market (Est. $142,000).
                        </p>
                        <a href="#" class="border-7BD09D clr-7BD09D p-4-24 f-13 lh-18 d-inline-flex justify-center uppercase br-48">STATUS: ACTIVE</a>
                    </div>
                    <div class="stage-inner">
                        <p class="f-12 lh-12 uppercase clr-99ACB6 mb-12">
                            Stage 2
                        </p>
                        <p class="f-16 lh-16 white mb-24">
                            Tax Optimization (The Filter)
                        </p>
                        <p class="f-16 lh-20 white mb-8">
                            Real-time Sentry Monitoring.
                        </p>
                        <p class="f-14 lh-20 neutral-300 mb-16">
                            Offsetting gains with the $142,300 in realized losses.
                        </p>
                        <a href="#" class="border-white white p-4-24 f-13 lh-18 d-inline-flex justify-center uppercase br-48">IMPACT: EST. $42,900 TAX SAVINGS</a>
                    </div>
                    <div class="stage-inner">
                        <p class="f-12 lh-12 uppercase clr-99ACB6 mb-12">
                            Stage 3
                        </p>
                        <p class="f-16 lh-16 white mb-24">
                            Diversified Re-entry (The Invest)
                        </p>
                        <p class="f-16 lh-20 white mb-8">
                            Destination: Platinum Alpha SMA.
                        </p>
                        <p class="f-14 lh-20 neutral-300 mb-16">
                            Funds are split across 500+ global equities and bonds.
                        </p>
                        <a href="#" class="border-white white p-4-24 f-13 lh-18 d-inline-flex justify-center uppercase br-48">CURRENT ENGINE VALUE: $6.3M</a>
                    </div>
                </div>
            </div>


            <div class="d-flex gap-16 flex-col w-100">
                <h3 class="f-16 lh-11 white-80">
                    Concentration meter
                </h3>
                <div class="p-32-24 border-E9E7DD-24 br-12 bg-060F13 d-grid col-2-1 gap-88">
                    <div class="d-flex flex-col gap-20">

                        <div class="table-row d-grid meter-grid align-center gap-10 p-14-20">
                            <div class="date-outer">
                                <p class="f-12 lh-10 ls-042 clr-99ACB6 uppercase">
                                    STATE
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-11 lh-12 ls-042 clr-99ACB6 uppercase">
                                    concentration
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-11 lh-12 ls-042 clr-99ACB6 uppercase">
                                    DIVERSIFICATION INSIGHT
                                </p>
                            </div>

                        </div>

                        <div class="table-row d-grid meter-grid align-center gap-10 p-14-20">
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    Current State
                                </p>
                            </div>
                            <div class="date-outer d-flex gap-8 align-center">
                                <p class="f-16 lh-16 white center">
                                    84%
                                </p>
                                <a href="#" class="br-8 p-5-11 btn-light-red f-12 lh-12">
                                    Extreme
                                </a>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white ">
                                    Urgent diversification recommended
                                </p>
                            </div>

                        </div>

                        <div class="border-bottom-E9E7DD-15">

                        </div>

                        <div class="table-row d-grid meter-grid align-center gap-10 p-14-20">
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    Post Trade State
                                </p>
                            </div>
                            <div class="date-outer d-flex gap-8 align-center">
                                <p class="f-16 lh-16 white center">
                                    72%
                                </p>
                                <a href="#" class="br-8 p-5-11 btn-light-yellow f-11 lh-14 d-inline-flex gap-6 align-center">
                                    Exposed
                                </a>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white ">
                                    After June 1 sale of 1,000 shares
                                </p>
                            </div>

                        </div>

                        <div class="border-bottom-E9E7DD-15">

                        </div>
                        <div class="table-row d-grid meter-grid align-center gap-10 p-14-20">
                            <div class="date-outer">
                                <p class="f-16 lh-16 white">
                                    Target State
                                </p>
                            </div>
                            <div class="date-outer d-flex gap-8 align-center">
                                <p class="f-16 lh-16 white center">
                                    20%
                                </p>
                                <a href="#" class="br-8 p-5-11 btn-light-green f-11 lh-14 d-inline-flex gap-6 align-center">
                                    Secure
                                </a>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-16 white ">
                                    Optimal long-term diversification target
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="d-grid col-62-37 gap-12 align-center">
                        <div class="img-box">
                            <img src="{{ asset('images/meter-graph.svg') }}" alt="meter icon">
                        </div>
                        <div class="d-flex flex-col gap-6">
                            <div class="d-flex gap-6 align-center">
                                <span class="bg-red-400 w-8 h-8 br-100">

                                </span>
                                <p class="f-11 lh-12 clr-99ACB6">
                                    Extreme (76%+)
                                </p>
                            </div>
                            <div class="d-flex gap-6 align-center">
                                <span class="bg-FECA2A w-8 h-8 br-100">

                                </span>
                                <p class="f-11 lh-12 clr-99ACB6">
                                    Exposed (60%-75%)
                                </p>
                            </div>
                            <div class="d-flex gap-6 align-center">
                                <span class="bg-94C530 w-8 h-8 br-100">

                                </span>
                                <p class="f-11 lh-12 clr-99ACB6">
                                    Strategic (21%-59%)
                                </p>
                            </div>
                            <div class="d-flex gap-6 align-center">
                                <span class="bg-4FC07C w-8 h-8 br-100">

                                </span>
                                <p class="f-11 lh-12 clr-99ACB6">
                                    Secure (0%-20%)
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-grid gap-16 col-2-1">
                <div class="d-flex gap-16 flex-col">
                    <h3 class="f-16 lh-11 white-80">
                        Goal Impact Ledger
                    </h3>
                    <div class="bg-060F13 br-12 border-E9E7DD-24 p-32-24 d-flex flex-col mb-8">
                        <div class="table-row d-grid col-lg-4 align-center gap-40 p-14-20 mb-24">
                            <div class="date-outer">
                                <p class="f-12 lh-12 clr-99ACB6 ls-042 uppercase">
                                    Destination goal
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-11 lh-12 clr-99ACB6 ls-042 uppercase ">
                                    allocation
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-11 lh-12 clr-99ACB6 ls-042 uppercase ">
                                    amount
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-11 lh-12 clr-99ACB6 ls-042 uppercase center">
                                    New goal Progress
                                </p>
                            </div>
                        </div>
                        <div class="table-row d-grid col-lg-4 align-center gap-40 p-14-20 mb-16">
                            <div class="date-outer">
                                <p class="f-16 lh-24 white ls-042 ">
                                    Retirement (FI)
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-24 white">
                                    60%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-24 ls-042 clr-7BD09D">
                                    $85,200
                                </p>
                            </div>
                            <div class="date-outer d-flex gap-10 align-center justify-center">
                                <p class="f-16 lh-24 white ls-042 center">
                                    72.1%
                                </p>
                                <img src="{{ asset('images/triangle.svg') }}" alt="Triangle icon">
                            </div>
                        </div>
                        <div class="border-bottom-E9E7DD-15 mb-16">

                        </div>
                        <div class="table-row d-grid col-lg-4 align-center gap-40 p-14-20 mb-16">
                            <div class="date-outer">
                                <p class="f-16 lh-24 white ls-042 ">
                                    College Funding
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-24 white ls-042">
                                    10%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-24 ls-042 clr-7BD09D ">
                                    $14,200
                                </p>
                            </div>
                            <div class="date-outer d-flex gap-10 align-center justify-center">
                                <p class="f-16 lh-24 white ls-042">
                                    43.2%
                                </p>
                                <img src="{{ asset('images/triangle.svg') }}" alt="Triangle icon">
                            </div>
                        </div>
                        <div class="border-bottom-E9E7DD-15 mb-16">

                        </div>
                        <div class="table-row d-grid col-lg-4 align-center gap-40 p-14-20">
                            <div class="date-outer">
                                <p class="f-16 lh-24 white ls-042">
                                    Vacation Home
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-24 white ls-042">
                                    30%
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-24 ls-042 clr-7BD09D">
                                    $42,600
                                </p>
                            </div>
                            <div class="date-outer d-flex gap-10 align-center justify-center">
                                <p class="f-16 lh-24 white ls-042 center">
                                    31.5%
                                </p>
                                <img src="{{ asset('images/triangle.svg') }}" alt="Triangle icon">
                            </div>
                        </div>
                    </div>
                    <div class="bg-060F13 br-12 border-E9E7DD-24 p-32-24 d-flex flex-col">
                        <div class="d-flex align-center justify-space-between gap-10 w-100 mb-12">
                            <div class="left-box d-flex flex-col gap-12">
                                <h3 class="f-16 lh-12 white">
                                    Benjamins Money Tax-Smart SMA™
                                </h3>
                                <p class="f-12 lh-12 uppercase ls-042 clr-99ACB6">
                                    The engine
                                </p>
                            </div>
                            <div class="right-box d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 white bold">
                                    $6.3M
                                </h2>
                                <p class="f-12 lh-14 ls-042 clr-99ACB6">
                                    YTD Savings
                                </p>
                            </div>
                        </div>
                        <div class="bg-108476-10  br-12 p-8-10 d-flex gap-10 align-center mb-32">
                            <img src="{{ asset('images/information-line.svg') }}" alt="Information icon">
                            <p class="f-13 lh-24 white-80">
                                Invested across 35–45 stocks seeking S&P alpha
                            </p>
                        </div>
                        <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-101010 justify-center bold">View SMA Asset Allocation</a>
                    </div>
                </div>

                <div class="d-flex gap-16 flex-col">
                    <h3 class="f-16 lh-11 white-80">
                        Active Liquidation Workflow
                    </h3>

                    <div class="right-box bg-060F13 border-E9E7DD-24 br-8 p-32-24">
                        <div class="d-flex gap-10 justify-space-between align-center mb-24">
                            <div class="d-flex flex-col gap-12">
                                <p class="f-16 lh-12 white">
                                    Energy Flow
                                </p>
                                <p class="f-12 lh-12 uppercase clr-99ACB6">
                                    upcoming event
                                </p>
                            </div>
                            <div class="bg-AFCCA1-10 br-8 p-8-12 d-flex gap-10 align-center ">
                                <div class="w-9 h-9 br-100 bg-23B05B">

                                </div>
                                <p class="f-14 lh-14 clr-23B05B">
                                    Compliant
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-col gap-16 justify-space-between mb-40">
                            <div class="d-flex gap-12 justify-space-between flex-col w-100">
                                <div class="d-flex align-center justify-space-between w-100">
                                    <p class="f-14 f-16 clr-99ACB6 uppercase w-50">
                                        Next Scheduled Event
                                    </p>
                                    <p class="f-16 lh-24 white w-50 right">
                                        June 01, 2026
                                    </p>
                                </div>

                            </div>
                            <div class="border-bottom-E9E7DD-24 w-100">

                            </div>

                            <div class="d-flex gap-12 justify-space-between flex-col w-100">
                                <div class="d-flex justify-space-between w-100">
                                    <p class="f-14 f-16 clr-99ACB6 uppercase w-50">
                                        Action
                                    </p>
                                    <p class="f-16 lh-24 white w-50 right">
                                        Sell 1,000 Shares (Est. $142,000 Gross)
                                    </p>
                                </div>

                            </div>
                            <div class="border-bottom-E9E7DD-24 w-100">

                            </div>

                            <div class="d-flex gap-12 justify-space-between flex-col w-100">
                                <div class="d-flex justify-space-between w-100">
                                    <p class="f-14 f-16 clr-99ACB6 uppercase">
                                        Tax Strategy
                                    </p>
                                    <div class="d-flex flex-col w-50">
                                        <p class="f-16 lh-24 white right">
                                            Sentry Mode active.
                                        </p>
                                        <p class="f-14 lh-20 white-80 right">
                                            (Offsetting gains with $142,300 realized losses to achieve $0 capital gains tax on this tranche.)
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="d-flex gap-12 flex-col">
                            <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-131927 justify-center">Download Trade Compliance Audit</a>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center">Adjust Diversification Velocity</a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="border-E9E7DD-15 p-32 br-16 d-flex flex-col gap-16">
                <h3 class="f-16 lh-11 white-80">
                    Connect with us
                </h3>

                <div class="p-40 bg-0B1417">
                    <div class="d-grid col-lg-2 gap-40">
                        <div class="left d-flex gap-12 flex-col">
                            <h3 class="f-20 lh-22 white">
                                Connect with your advisor
                            </h3>
                            <p class="f-16 lh-20 clr-4FC07C">
                                Your portfolio remains high concentration in Amazon stock.
                            </p>
                            <p class="f-14 lh-22 white-80">
                                A review with your advisor can help evaluate diversification opportunities, tax considerations, and progress toward your long-term financial goals.
                            </p>
                        </div>

                        <div class="right-box d-flex gap-16 flex-col">
                            <div class="d-flex gap-12 align-center">
                                <span class="w-6 h-6 br-100 bg-4FC07C">

                                </span>
                                <p class="f-14 lh-18 white-80">Get tailored recommendations to align with your goals.</p>
                            </div>

                            <div class="d-flex gap-12 align-center">
                                <span class="w-6 h-6 br-100 bg-4FC07C">

                                </span>
                                <p class="f-14 lh-18 white-80">Explore ways to lower single-stock exposure.</p>
                            </div>

                            <div class="d-flex gap-12 align-center">
                                <span class="w-6 h-6 br-100 bg-4FC07C">

                                </span>
                                <p class="f-14 lh-18 white-80">Build a more balanced and resilient portfolio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection