@extends('layouts.app')

@section('title','Dashboard')

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
            <div class="bar-heading">
                <h2 class="f-24">
                    Executive Wealth Command
                </h2>
            </div>
            <ul class="status d-flex gap-14">
                <li class="active d-flex gap-10 align-center">
                    <div class="icon">

                    </div>
                    <div class="icon-description">
                        Trading Window: Open
                    </div>
                </li>

                <li class="d-flex gap-10 align-center">
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

        <div class="card-outer d-flex gap-48 align-flex-start flex-col">
            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-12 upperacase">
                        Financial Snapshot
                    </h3>
                </div>
                <div class="d-grid col-lg-4 gap-19 w-100">
                    <div class="card p-24">
                        <div class="d-flex gap-12 mb-24">
                            <div class="notification-outer">
                                <img src="{{ asset('images/net-worth.svg') }}" alt="net worth icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 mb-4">
                                    Net Worth
                                </h3>
                                <p class="f-12 upperacase">
                                    Total Estate
                                </p>
                            </div>
                        </div>
                        <div class="stats mb-32">
                            <h2 class="f-24 mb-8 blue">
                                $18,500,000
                            </h2>
                            <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div>
                        </div>
                        <a href="#" class="cus-link gap-14 f-16 d-flex">View Breakdown <img
                                src="{{ asset('images/btn-arrow.svg') }}" alt="btn icon"></a>
                    </div>
                    <div class="card p-24">
                        <div class="d-flex gap-12 mb-24">
                            <div class="notification-outer">
                                <img src="{{ asset('images/real-time.svg') }}" alt="real-time icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 mb-4">
                                    Real-Time Liquidity
                                </h3>
                                <p class="f-12 upperacase">
                                    Net after - Tax
                                </p>
                            </div>
                        </div>
                        <div class="stats mb-32">
                            <h2 class="f-24 mb-8 white">
                                $14,200,000
                            </h2>
                            <div class="d-flex gap-4 f-12">

                                <p> 76.8% Liquid</p>
                            </div>
                        </div>
                        <a href="#" class="cus-link gap-14 f-16 d-flex">View Liquidity <img
                                src="{{ asset('images/btn-arrow.svg') }}" alt="btn icon"></a>
                    </div>
                    <div class="card p-24">
                        <div class="d-flex gap-12 mb-24">
                            <div class="notification-outer">
                                <img src="{{ asset('images/cash-releases.svg') }}" alt="cash-releases icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 mb-4">
                                    Cash Reserves
                                </h3>
                                <p class="f-12 upperacase">
                                    12 month RUNWAY
                                </p>
                            </div>
                        </div>
                        <div class="stats mb-32">
                            <h2 class="f-24 mb-8 white">
                                $250,000
                            </h2>
                            <div class="d-flex gap-4 f-12">
                                <p> Available Today</p>
                            </div>
                        </div>
                        <a href="#" class="cus-link gap-14 f-16 d-flex">View Runway <img
                                src="{{ asset('images/btn-arrow.svg') }}" alt="btn icon"></a>
                    </div>
                    <div class="card p-24">
                        <div class="d-flex gap-12 mb-24">
                            <div class="notification-outer">
                                <img src="{{ asset('images/tax-rate.svg') }}" alt="tax-rate icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 mb-4">
                                    Effective Tax Rate
                                </h3>
                                <p class="f-12 upperacase">
                                    Combined Tax Rate
                                </p>
                            </div>
                        </div>
                        <div class="stats mb-32">
                            <h2 class="f-24 mb-8 white">
                                40.2%
                            </h2>
                            <div class="d-grid gap-4 f-12 col-lg-2">
                                <div>
                                    <p> Federal: <span class="blue">37.0%</span> </p>
                                </div>
                                <div>
                                    <p> State + Local: <span class="blue">8.95%</span> </p>
                                </div>

                                <div>
                                    <p>NIIT: <span class="blue">3.8%</span> </p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cus-link gap-14 f-16 d-flex">View Tax Analysis<img
                                src="{{ asset('images/btn-arrow.svg') }}" alt="btn icon"></a>
                    </div>
                </div>
            </div>

            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-12 upperacase">
                        Equity & Liquidity Engine
                    </h3>
                </div>
                <div class="d-grid col-lg-2 gap-19 w-100">
                    <div class="card p-24">
                        <div class="d-flex gap-12 mb-24">
                            <div class="notification-outer">
                                <img src="{{ asset('images/after-tax.svg') }}" alt="after-tax icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 mb-4">
                                    Net-After-Tax Liqiudity
                                </h3>
                                <p class="f-12 upperacase">
                                    Independence runway
                                </p>
                            </div>
                        </div>

                        <div class="d-grid gap-12 col-lg-6-4">
                            <div class="left-col">
                                <div class="d-grid gap-17 f-12 col-lg-2">
                                    <div>
                                        <p> Shares Vested <span class="white f-16">8,340</span> </p>
                                    </div>
                                    <div>
                                        <p> AMZN Price<span class="white f-16">$89.50</span> </p>
                                    </div>

                                    <div>
                                        <p>Vested Value <span class="white f-16">$746,530</span> </p>
                                    </div>

                                    <div>
                                        <p>Net After-Tax <span class="white f-16">$14.2M</span> </p>
                                    </div>
                                </div>
                                <div class="mt-21 bg-gray p-28-14">
                                    <div class="d-flex gap-12 mb-24">
                                        <div class="notification-outer">
                                            <img src="{{ asset('images/handcufs.svg') }}" alt="GOLDEN HANDCUFFS icon">
                                        </div>
                                        <div class="card-cont">
                                            <h3 class="f-16 mb-4">
                                                GOLDEN HANDCUFFS (Forfeiture)
                                            </h3>
                                            <p class="f-12 upperacase">
                                                At risk if you leave today
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-12 justify-space-between">
                                        <h2 class="f-20 white">
                                            $8,240,000
                                        </h2>
                                        <a href="#">
                                            <img src="{{ asset('images/btn-rounded-arrow.svg') }}" alt="button arrow icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-col">
                                <h2 class="f-12 center">
                                    Liquidity Status
                                </h2>
                                <div class="img center mb-12">
                                    <img src="{{ asset('images/stats-img.svg') }}" alt="stats image">
                                </div>
                                <a href="#" class="cus-btn f-12">View Strategy</a>
                            </div>
                        </div>


                    </div>
                    <div class="card p-24">
                        <div class="d-flex gap-12 mb-24">
                            <div class="notification-outer">
                                <img src="{{ asset('images/Scenario-Planning.svg') }}" alt="real-time icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 mb-4">
                                    Scenario Planning
                                </h3>
                                <p class="f-12 upperacase">
                                    ACCELERATOR MODE
                                </p>
                            </div>
                        </div>
                        <div class="planning mb-15">
                            <div class="plan-head d-flex justify-space-between mb-8">
                                <h3 class="f-14 white">Planning Timeline</h3>
                                <div class="selected-value f-16 white" id="selectedValue">Year 3</div>
                            </div>

                            <div class="slidecontainer w-100">
                                <input type="range" min="1" max="5" value="3" class="slider w-100" id="myRange">
                            </div>

                            <div class="range-labels f-12">
                                <span>Now</span>
                                <span id="middleLabel">Year 3</span>
                                <span>Year 5</span>
                            </div>
                        </div>
                        <div class="bg-blue p-15-24 br-8">

                            <div class="d-grid col-lg-7-3 gap-10">
                                <div class="bg-left">
                                    <div class="d-flex gap-12 mb-15">
                                        <div class="notification-outer br-3">
                                            <img src="{{ asset('images/outcome.svg') }}" alt="real-time icon">
                                        </div>
                                        <div class="card-cont">
                                            <h3 class="f-14 upperacase mb-0">
                                                Projected Outcome (Year 3)
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-8 mb-12">
                                        <div class="img">
                                            <img src="{{ asset('images/move-to-fl.svg') }}" alt="fl-icon">
                                        </div>
                                        <div class="cont light-blue f-12">Move to FL (Goal #3): +$1.2M Net Savings
                                        </div>
                                    </div>


                                    <div class="ipo-select">
                                        <div class="ipo-header d-flex align-center gap-5" id="ipoHeader">
                                            <div class="d-flex align-center gap-8">
                                                <img src="{{ asset('images/ipo.svg') }}" alt="">
                                                <span id="selectedCount" class="white f-12">IPO/Exit Scenario: 0
                                                    selected</span>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6"
                                                viewBox="0 0 11 6" fill="none">
                                                <path
                                                    d="M9.95951 0.795C10.0648 0.689531 10.124 0.546563 10.124 0.3975C10.124 0.248437 10.0648 0.105469 9.95951 0H0.164505C0.059167 0.105469 0 0.248437 0 0.3975C0 0.546563 0.059167 0.689531 0.164505 0.795L4.66451 5.295C4.76997 5.40034 4.91294 5.4595 5.06201 5.4595C5.21107 5.4595 5.35404 5.40034 5.4595 5.295L9.95951 0.795Z"
                                                    fill="#23B05B" />
                                            </svg>
                                        </div>

                                        <div class="ipo-dropdown">
                                            <label class="f-14"><input type="checkbox" value="RSU Vesting">RSU
                                                Vesting</label>
                                            <label class="f-14"><input type="checkbox"
                                                    value="Stock Option Exercise">Stock Option
                                                Exercise</label>
                                            <label class="f-14"><input type="checkbox" value="Bonus Payout">Bonus
                                                Payout</label>
                                            <label class="f-14"><input type="checkbox" value="ESPP Sale">ESPP
                                                Sale</label>
                                            <label class="f-14"><input type="checkbox"
                                                    value="10b5-1 Scheduled Sale">10b5-1
                                                Scheduled Sale</label>
                                            <label class="f-14"><input type="checkbox"
                                                    value="Promotion / Compensation Increase">Promotion /
                                                Compensation Increase</label>
                                            <label class="f-14"><input type="checkbox"
                                                    value="Retirement">Retirement</label>
                                            <label class="f-14"><input type="checkbox" value="Custom Event">Custom
                                                Event</label>
                                        </div>

                                        <div class="selected-tags" id="selectedTags"></div>
                                    </div>

                                </div>
                                <div class="bg-right pt-10">
                                    <h3 class="f-24 mb-4">
                                        $32.0M
                                    </h3>
                                    <p class="f-14">
                                        Net Liquidity
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-12 upperacase">
                        Allocation and wealth goals
                    </h3>
                </div>
                <div class="d-grid col-lg-2 gap-19 w-100">
                    <div class="card p-24 bg-060F13">
                        <div class="d-flex gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12 mb-24">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/carbon_financial-assets.svg') }}" alt="assets icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 mb-4">
                                        Asset Allocation
                                    </h3>
                                    <p class="f-12 upperacase">
                                        Wharton-Backed SMA
                                    </p>
                                </div>
                            </div>
                            <div class="btn-col">
                                <a href="#" class="btn btn-red p-5-11 f-14 d-flex">66.7% Concentration Risk</a>
                            </div>
                        </div>

                        <div class="d-grid gap-12 col-lg-4-6 align-center">
                            <div class="right-col b-0 p-0">
                                <div class="img center mb-12">
                                    <img src="{{ asset('images/asset-allocation-graph.svg') }}" alt="asset Allocation image">
                                </div>
                                <h2 class="f-12 center white mb-4">
                                    33.3% (Diversified Pool)
                                </h2>
                                <p class="f-10 neutral-300 center">Target 80%</p>
                            </div>
                            <ul class="left-col">
                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-5 align-center">
                                        <div class="icon-square light-pink">

                                        </div>
                                        <div class="icon-cont f-14 neutral-300">
                                            Single Stock (AMZN)
                                        </div>
                                    </div>
                                    <span class="f-16 white">
                                        66.7%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-5 align-center">
                                        <div class="icon-square light-orange">

                                        </div>
                                        <div class="icon-cont f-14 neutral-300">
                                            Diversified Equity
                                        </div>
                                    </div>
                                    <span class="f-16 white">
                                        15%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-5 align-center">
                                        <div class="icon-square sea-green">

                                        </div>
                                        <div class="icon-cont f-14 neutral-300">
                                            Fixed Income
                                        </div>
                                    </div>
                                    <span class="f-16 white">
                                        10%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-5 align-center">
                                        <div class="icon-square light-purple">

                                        </div>
                                        <div class="icon-cont f-14 neutral-300">
                                            Alts / PE
                                        </div>
                                    </div>
                                    <span class="f-16 white">
                                        5%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-5 align-center">
                                        <div class="icon-square peach">

                                        </div>
                                        <div class="icon-cont f-14 neutral-300">
                                            Cash
                                        </div>
                                    </div>
                                    <span class="f-16 white">
                                        3.3%
                                    </span>
                                </li>


                            </ul>
                        </div>


                    </div>
                    <div class="card p-24 bg-060F13">
                        <div class="d-flex gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12 mb-24">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/mage_goals.svg') }}" alt="goals icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-14 mb-4">
                                        WEALTH GOALS
                                    </h3>
                                    <p class="f-12 upperacase">
                                        Funding Progress
                                    </p>
                                </div>
                            </div>
                            <div class="btn-col">
                                <a href="#" class="btn btn-green-outlined p-5-11 f-14 d-flex">Adjust goals &
                                    cashflows</a>
                            </div>
                        </div>
                        <ul class="goals-card pl-40 list-unstyled m-0">

                            <li class="goal-item">
                                <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                    <h3 class="f-12 white">Retirement (2030)</h3>
                                    <span class="f-12 white">72%</span>
                                </div>

                                <div class="progress mb-4">
                                    <div class="progress-bar blue" style="width:72%;"></div>
                                </div>

                                <div class="goal-bottom d-flex align-center justify-space-between">
                                    <span class="f-10 neutral-300 upperacase">$5.8M / $8M TARGET</span>
                                    <span class="f-10 neutral-300 upperacase">ON TRACK</span>
                                </div>
                            </li>

                            <li class="goal-item">
                                <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                    <h3 class="f-12 white">Education Fund</h3>
                                    <span class="f-12 white">91%</span>
                                </div>

                                <div class="progress mb-4">
                                    <div class="progress-bar light-blue" style="width:91%;"></div>
                                </div>

                                <div class="goal-bottom d-flex align-center justify-space-between">
                                    <span class="f-10 neutral-300 upperacase">$455K / $500K</span>
                                    <span class="f-10 neutral-300 upperacase">NEARLY FUNDED</span>
                                </div>
                            </li>

                            <li class="goal-item">
                                <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                    <h3 class="f-12 white upperacase">Vacation Property</h3>
                                    <span class="f-12 white upperacase">44%</span>
                                </div>

                                <div class="progress mb-4">
                                    <div class="progress-bar purple" style="width:44%;"></div>
                                </div>

                                <div class="goal-bottom d-flex align-center justify-space-between">
                                    <span class="f-10 neutral-300 upperacase">$880K / $2M</span>
                                    <span class="f-10 neutral-300 upperacase">NEEDS FUNDING</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-12 upperacase">
                        tax protection, automatic diversification & compliance
                    </h3>
                </div>
                <div class="d-grid col-lg-2 gap-19 w-100">
                    <div class="card p-24 bg-060F13">
                        <div class="d-grid col-lg-6-4 mb-24 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/weight.svg') }}" alt="weight icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 mb-4">
                                        Stock → SMA Workflow
                                    </h3>
                                    <p class="f-12 upperacase">
                                        ENERGY FLOW
                                    </p>
                                </div>
                            </div>
                            <div class="btn-col">
                                <div class="d-flex align-center gap-8">
                                    <div class="live-icon d-flex align-center justify-center">
                                        <div class="live-icon-inner">

                                        </div>
                                    </div>
                                    <div class="f-12 live-head">
                                        Live Flow Monitoring
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="plan-card gap-10 align-center mb-45">
                            <div class="plan-item">
                                <span class="plan-label f-10 neutral-300 upperacase mb-12">UNVESTED PLAN</span>
                                <h2 class="clr-C8AD98 f-24">$11.1M</h2>
                                <p class="f-12 neutral-300">Future Pipe</p>
                            </div>

                            <div class="plan-arrow d-flex align-center justify-center">
                                <img src="{{ asset('images/plane-arrow.svg') }}" alt="plane arrow">
                            </div>

                            <div class="plan-item text-end">
                                <span class="plan-label f-10 neutral-300 upperacase mb-12">PLATINUM ALPHA SMA</span>
                                <h2 class="clr-7BD09D f-24">$6.3M</h2>
                                <p class="f-12 neutral-300">The Engine</p>
                            </div>
                        </div>

                        <div class="stock-bottom mb-28">
                            <h4 class="f-12 neutral-300 upperacase l-1px mb-17">
                                AUTOPILOT (Compliance)
                            </h4>
                            <ul class="list-unstyled p-0">
                                <li class="d-flex justify-space-between">
                                    <span class="f-12 neutral-300">
                                        Next Sale
                                    </span>
                                    <span class="f-14 white">
                                        June 01 (1,000 Shars)
                                    </span>
                                </li>
                                <li class="d-flex justify-space-between">
                                    <span class="f-12 neutral-300">
                                        Remaining
                                    </span>
                                    <span class="f-14 white">
                                        4,000 Shrs this FY
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex gap-30">
                            <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-prm-900">View Liquidity
                                Workflow</a>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex">Trade Compliance
                                Audit</a>
                        </div>

                    </div>
                    <div class="card p-24 bg-060F13">
                        <div class="d-grid col-lg-6-4 mb-24 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12 mb-24">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/real-tme.svg') }}" alt="goals icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-14 mb-4">
                                        Real-Time Tax Alpha
                                    </h3>
                                    <p class="f-12 upperacase">
                                        SENTRY MODE
                                    </p>
                                </div>
                            </div>
                            <div class="btn-col">
                                <div class="d-flex align-center gap-8">
                                    <div class="live-icon d-flex align-center justify-center">
                                        <div class="live-icon-inner">

                                        </div>
                                    </div>
                                    <div class="f-12 live-head">
                                        Live Flow Monitoring
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled m-0 d-flex gap-11">

                            <li class="p-10-40 bg-10181C">
                                <span class="f-9-white-90 mb-11">
                                    Tax-Loss Harvesting (YTD)
                                </span>
                                <div class="w-250">
                                    
                                </div>
                            </li>




                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection