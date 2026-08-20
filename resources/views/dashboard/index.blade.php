@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<div class="dashboard-outer">

    @include('partials.sidebar')
    <div class="dashboard-content">
        @include('partials.header')

        <div class="heading-bar d-flex justify-space-between">
            <div class="bar-heading">
                <h2 class="f-24">
                    Executive Wealth Command
                </h2>
            </div>
            <ul class="status d-flex gap-14">
                <li class="active d-flex gap-10 align-center f-14 lh-14">
                    <div class="icon">

                    </div>
                    <div class="icon-description">
                        Trading Window: Open
                    </div>
                </li>

                <li class="d-flex gap-10 align-center f-14 lh-14">
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

        <div class="dash-cont-outer">
            <div class="card-outer d-flex gap-48 align-flex-start flex-col">
                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            Financial Snapshot
                        </h3>
                    </div>
                    <div class="d-grid col-lg-4 gap-13 w-100">
                        <div class="card p-24">
                            <div class="d-flex gap-16 mb-20">
                                <!-- <div class="notification-outer">
                                    <img src="{{ asset('images/net-after.svg') }}" alt="net worth icon">
                                </div> -->
                                <div class="card-cont">
                                    <p class="f-12 uppercase mb-4">
                                        Total Estate
                                    </p>
                                    <h3 class="f-16 white">
                                        Net Worth
                                    </h3>
                                </div>
                            </div>
                            <div class="stats mb-16">
                                <h2 class="f-28 mb-20 white">
                                    $18,500,000
                                </h2>
                                <div class="h-1 bg-1E2A30 mb-12">

                                </div>
                                <div class="p-2-8 bg-light-green br-6 clr-A7DFBD d-inline-flex f-12 lh-14">
                                    +$247,500 (1.35%) MTD
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>
                            <a href="#" class="cus-link gap-4 f-14 d-flex">View Details <img
                                    src="{{ asset('images/arrow-right.svg') }}" alt="btn icon"></a>
                        </div>
                        <div class="card p-24">
                            <div class="d-flex gap-16 mb-20">
                                <!-- <div class="notification-outer">
                                <img src="{{ asset('images/real-time.svg') }}" alt="net worth icon">
                            </div> -->
                                <div class="card-cont">
                                    <p class="f-12 uppercase mb-4">
                                        NET AFTER-TAX
                                    </p>
                                    <h3 class="f-16 white">
                                        Real-Time Liquidity
                                    </h3>
                                </div>
                            </div>
                            <div class="stats mb-16">
                                <h2 class="f-28 mb-20 white">
                                    $14,200,000
                                </h2>
                                <div class="h-1 bg-1E2A30 mb-12">

                                </div>
                                <div class="p-2-8 bg-light-green br-6 clr-A7DFBD d-inline-flex f-12 lh-14">
                                    76.8% Liquid
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>
                            <a href="#" class="cus-link gap-4 f-14 d-flex">View Liquidity <img
                                    src="{{ asset('images/arrow-right.svg') }}" alt="btn icon"></a>
                        </div>
                        <div class="card p-24">
                            <div class="d-flex gap-16 mb-20">
                                <!-- <div class="notification-outer">
                                <img src="{{ asset('images/cash-releases.svg') }}" alt="net worth icon">
                            </div> -->
                                <div class="card-cont">
                                    <p class="f-12 uppercase mb-4">
                                        12 MONTH RUNWAY
                                    </p>
                                    <h3 class="f-16 white">
                                        Cash Reserves
                                    </h3>
                                </div>
                            </div>
                            <div class="stats mb-16">
                                <h2 class="f-28 mb-20 white">
                                    $600,000
                                </h2>
                                <div class="h-1 bg-1E2A30 mb-12">

                                </div>
                                <div class="clr-D3EFDE f-12 lh-14">
                                    Available Today
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>
                            <a href="#" class="cus-link gap-4 f-14 d-flex">View Runway <img
                                    src="{{ asset('images/arrow-right.svg') }}" alt="btn icon"></a>
                        </div>
                        <div class="card p-24">
                            <div class="d-flex gap-16 mb-20">
                                <!-- <div class="notification-outer">
                                <img src="{{ asset('images/tax-rate.svg') }}" alt="net worth icon">
                            </div> -->
                                <div class="card-cont">
                                    <p class="f-12 uppercase mb-4">
                                        COMBINED TAX RATE
                                    </p>
                                    <h3 class="f-16 white">
                                        Effective Tax Rate
                                    </h3>
                                </div>
                            </div>
                            <div class="stats mb-16">
                                <h2 class="f-28 mb-20 white">
                                    40.2%
                                </h2>
                                <div class="h-1 bg-1E2A30 mb-12">

                                </div>
                                <div class="clr-D3EFDE f-12 lh-14">
                                    Fed: 37.0% | State: 8.95% | NIIT: 3.8%
                                </div>
                                <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                            </div>
                            <a href="#" class="cus-link gap-4 f-14 d-flex">View Tax Analysis <img
                                    src="{{ asset('images/arrow-right.svg') }}" alt="btn icon"></a>
                        </div>
                    </div>
                </div>

                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            Equity & Liquidity Engine
                        </h3>
                    </div>
                    <div class="d-grid col-lg-2 gap-19 w-100">
                        <div class="card p-24 d-flex flex-col gap-16 border-white-15 bg-0B1417">
                            <div class="d-flex gap-12 mb-4 align-center justify-space-between">
                                <div class="d-flex gap-16 align-center">

                                    <div class="notification-outer">
                                        <img src="{{ asset('images/net-after.svg') }}" alt="net worth icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-16 lh-16 mb-8">
                                            Net-After-Tax Liqiudity
                                        </h3>
                                        <p class="f-11 uppercase">
                                            Independence runway
                                        </p>
                                    </div>
                                </div>
                                <div class="p-5-11 br-89 clr-D3EFDE d-inline-flex f-11 lh-14 ls-042 active-ledger">
                                    Active Ledger
                                </div>
                            </div>

                            <div class="d-flex align-center gap-26 justify-space-between">
                                <div class="real-left d-flex flex-col gap-4">
                                    <div class="f-11 clr-99ACB6 ls-084 uppercase">
                                        REAL-TIME VALUATION
                                    </div>
                                    <h2 class="f-24 white ls-1 bold">
                                        $8,240,000
                                    </h2>
                                    <div class="clr-A7DFBD f-12 lh-14">
                                        +$247,500 (1.35%) MTD
                                    </div>
                                </div>
                                <div class="img center">
                                    <img src="{{ asset('images/stats-img.svg') }}" alt="stats image">
                                </div>
                            </div>

                            <div class="h-1 bg-374151">

                            </div>

                            <div class="left-col mb-16">
                                <div class="d-grid gap-8 col-lg-1">
                                    <div class="d-flex align-center justify-space-between gap-10">
                                        <p class="f-13 clr-99ACB6 lh-14"> Shares Vested </p>
                                        <span class="white f-13 lh-14">8,340</span>
                                    </div>
                                    <div class="d-flex align-center justify-space-between gap-10">
                                        <p class="f-13 clr-99ACB6 lh-14"> AMZN Price </p>
                                        <span class="org-white f-13 lh-14">$89.50</span>
                                    </div>

                                    <div class="d-flex align-center justify-space-between gap-10">
                                        <p class="f-13 clr-99ACB6 lh-14">Vested Value </p>
                                        <span class="org-white f-13 lh-14">$746,530</span>
                                    </div>

                                    <div class="d-flex align-center justify-space-between gap-10">
                                        <p class="f-13 clr-99ACB6 lh-14">Net After-Tax </p>
                                        <span class="org-white f-13 lh-14">$14.2M</span>
                                    </div>
                                    <div class="d-flex align-center justify-space-between gap-10">
                                        <p class="f-13 clr-99ACB6 lh-14">AMT Reserve Buffer </p>
                                        <span class="clr-A7DFBD f-13 lh-14">$142,000 Available</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="d-grid col-lg-2 align-center gap-12">
                                <a href="#" class="cus-btn f-14">View Strategy</a>
                                <a href="#" class="cus-btn f-14 bg-light-green">View Forfeiture Risk</a>
                            </div> -->
                            <div class="d-grid col-lg-2 align-center gap-12">
                                <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">View Strategy</a>
                                <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-101010 justify-center bold">View Forfeiture Risk</a>
                            </div>



                        </div>
                        <div class="card p-24 border-white-15 bg-0B1417">
                            <div class="d-flex gap-12 mb-28 align-center justify-space-between">
                                <div class="d-flex gap-16 align-center">
                                    <div class="notification-outer">
                                        <img src="{{ asset('images/net-after.svg') }}" alt="net worth icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-16 mb-8">
                                            Scenario Modeling
                                        </h3>
                                        <p class="f-11 uppercase">
                                            Accelerator mode
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="p-5-11 bg-light-green br-89 clr-10B981 d-inline-flex f-11 lh-14 ls-042">
                                Active Ledger
                            </div> -->
                            </div>
                            <div class="planning mb-15">
                                <div class="plan-head d-flex justify-space-between mb-4">
                                    <h3 class="f-16 clr-E5E7EB lh-18">Simulated Timeline</h3>
                                    <div class="selected-outer neutral-300 f-13 lh-14 d-flex align-center gap-4">
                                        <span>
                                            Selected:
                                        </span>
                                        <div class="selected-value clr-10B981" id="selectedValue"> Year 3 Target </div>
                                    </div>
                                </div>

                                <div class="slidecontainer w-100">
                                    <input type="range" min="1" max="5" value="3" class="slider w-100" id="myRange">
                                </div>

                                <div class="range-labels f-12 mb-15">
                                    <span>Now</span>
                                    <span id="middleLabel">Year 3</span>
                                    <span>Year 5</span>
                                </div>
                            </div>
                            <div class="bg-blue p-15-24 br-8 mb-18">
                                <div class="d-grid col-lg-7-3 gap-10">
                                    <div class="bg-left">
                                        <div class="d-flex gap-12 mb-15">
                                            <div class="notification-outer br-3">
                                                <img src="{{ asset('images/outcome.svg') }}" alt="real-time icon">
                                            </div>
                                            <div class="card-cont">
                                                <h3 class="f-14 uppercase mb-0">
                                                    Projected Outcome (Year 3)
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
                            <a href="#" class="cus-btn f-14 bg-light-green d-flex justify-center">View Scenario Planning</a>
                        </div>
                    </div>
                </div>

                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            Allocation and wealth goals
                        </h3>
                    </div>
                    <div class="d-grid col-lg-2 gap-19 w-100">
                        <div class="card p-24 border-white-15 bg-0B1417 d-flex flex-col gap-22">
                            <div class="d-flex gap-10px justify-space-between align-flex-start">
                                <div class="d-flex gap-12">
                                    <div class="notification-outer">
                                        <img src="./images/pie-chart.svg" alt="assets icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-17 mb-4 white">
                                            Asset Allocation
                                        </h3>
                                        <p class="f-12 uppercase white-80">
                                            Wharton-Backed SMA
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <!-- <a href="#" class="btn btn-red p-5-11 f-14 d-flex">66.7% Concentration Risk</a> -->
                                    <a href="#" class="br-8 p-5-11 btn-light-red f-11 lh-14">
                                        AMZN Concentration Risk
                                    </a>
                                </div>
                            </div>

                            <div class="d-grid gap-34 col-lg-4-6 align-center">
                                <div class="right-col b-0 p-0">
                                    <div class="img">
                                        <img class="w-100" src="./images/allocation.svg" alt="asset Allocation image">
                                    </div>
                                    <!-- <h2 class="f-12 center white mb-4">
                                    33.3% (Diversified Pool)
                                </h2>
                                <p class="f-10 neutral-300 center">Target 80%</p> -->
                                </div>
                                <ul class="left-col">
                                    <li class="d-flex gap-10 justify-space-between">
                                        <div class="d-flex gap-8 align-center">
                                            <div class="icon-square light-pink">

                                            </div>
                                            <div class="icon-cont f-14 white-80">
                                                Single Stock (AMZN)
                                            </div>
                                        </div>
                                        <span class="f-14 org-white">
                                            66.7%
                                        </span>
                                    </li>

                                    <li class="d-flex gap-10 justify-space-between">
                                        <div class="d-flex gap-8 align-center">
                                            <div class="icon-square light-orange">

                                            </div>
                                            <div class="icon-cont f-14 white-80">
                                                Diversified Equity
                                            </div>
                                        </div>
                                        <span class="f-14 org-white">
                                            15%
                                        </span>
                                    </li>

                                    <li class="d-flex gap-10 justify-space-between">
                                        <div class="d-flex gap-8 align-center">
                                            <div class="icon-square sea-green">

                                            </div>
                                            <div class="icon-cont f-14 white-80">
                                                Fixed Income
                                            </div>
                                        </div>
                                        <span class="f-14 org-white">
                                            10%
                                        </span>
                                    </li>

                                    <li class="d-flex gap-10 justify-space-between">
                                        <div class="d-flex gap-8 align-center">
                                            <div class="icon-square light-purple">

                                            </div>
                                            <div class="icon-cont f-14 white-80">
                                                Alts / PE
                                            </div>
                                        </div>
                                        <span class="f-14 org-white">
                                            5%
                                        </span>
                                    </li>

                                    <li class="d-flex gap-10 justify-space-between">
                                        <div class="d-flex gap-8 align-center">
                                            <div class="icon-square peach">

                                            </div>
                                            <div class="icon-cont f-14 white-80">
                                                Cash
                                            </div>
                                        </div>
                                        <span class="f-14 org-white">
                                            3.3%
                                        </span>
                                    </li>


                                </ul>
                            </div>

                            <div class="bg-1E2A30-40 p-12 center f-12 lh-14 neutral-300 br-8">
                                Target pool diversification is <span class="clr-108476">80%</span> • Action required to rebalance.
                            </div>

                            <a href="#" class="border-none cus-btn f-14 lh-14 d-flex gap-6 align-center justify-center">View Asset Allocation Details <img class="w-14 h-14" src="{{ asset('images/long-arw.svg') }}" alt="long arrow"></a>

                        </div>
                        <div class="card p-24 border-white-15 bg-0B1417">
                            <div class="d-flex gap-10px justify-space-between align-flex-start">
                                <div class="d-flex gap-12 mb-24">
                                    <div class="notification-outer">
                                        <img src="{{ asset('images/flag.svg') }}" alt="goals icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-17 mb-4 white">
                                            WEALTH GOALS
                                        </h3>
                                        <p class="f-12 uppercase white-80">
                                            Funding Progress
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="btn-col">
                                <a href="#" class="btn btn-green-outlined p-5-11 f-14 d-flex">Adjust goals &
                                    cashflows</a>
                            </div> -->
                            </div>
                            <ul class="goals-card list-unstyled mb-40">

                                <li class="goal-item">
                                    <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                        <h3 class="f-14 white">Retirement (2030)</h3>
                                        <span class="f-14 white">72%</span>
                                    </div>

                                    <div class="progress mb-8">
                                        <div class="progress-bar blue" style="width:72%;"></div>
                                    </div>

                                    <div class="goal-bottom d-flex align-center justify-space-between">
                                        <span class="f-12 white-80 uppercase">$5.8M / $8M TARGET</span>
                                        <span class="f-13 clr-23B05B uppercase ls-054">ON TRACK</span>
                                    </div>
                                </li>

                                <li class="goal-item">
                                    <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                        <h3 class="f-14 white">Education Fund</h3>
                                        <span class="f-14 white">91%</span>
                                    </div>

                                    <div class="progress mb-8">
                                        <div class="progress-bar light-blue" style="width:91%;"></div>
                                    </div>

                                    <div class="goal-bottom d-flex align-center justify-space-between">
                                        <span class="f-12 white-80 uppercase">$455K / $500K</span>
                                        <span class="f-13 clr-23B05B uppercase ls-054">NEARLY FUNDED</span>
                                    </div>
                                </li>

                                <li class="goal-item">
                                    <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                        <h3 class="f-14 white">Vacation Property</h3>
                                        <span class="f-14 white">44%</span>
                                    </div>

                                    <div class="progress mb-8">
                                        <div class="progress-bar purple" style="width:44%;"></div>
                                    </div>

                                    <div class="goal-bottom d-flex align-center justify-space-between">
                                        <span class="f-12 white-80 uppercase">$880K / $2M</span>
                                        <span class="f-13 clr-23B05B uppercase ls-054">NEEDS FUNDING</span>
                                    </div>
                                </li>

                            </ul>
                            <a href="#" class="cus-btn f-14 bg-light-green d-flex justify-center">View All Goals</a>
                        </div>
                    </div>
                </div>


                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            Guardian Guardrails
                        </h3>
                    </div>
                    <div class="d-grid col-lg-2 align-flex-start justify-space-between gap-19 w-100">
                        <div class="card p-24 border-white-15 bg-0B1417 d-flex flex-col gap-22">
                            <div class="d-flex gap-10px justify-space-between align-center mb-12">
                                <div class="d-flex gap-12">
                                    <div class="notification-outer">
                                        <img src="./images/guardian.svg" alt="assets icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-16 mb-4 white">
                                            10b5-1 Concentration Cap
                                        </h3>
                                        <p class="f-12 uppercase clr-64748B">
                                            EXECUTION COMPLIANCE
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <!-- <a href="#" class="btn btn-red p-5-11 f-14 d-flex">66.7% Concentration Risk</a> -->
                                    <a href="#" class="br-8 p-5-11 btn-light-yellow f-11 lh-14 d-inline-flex gap-6 align-center">
                                        <span class="w-6 h-6 bg-F59E0B br-100"></span>
                                        AMZN Concentration Risk
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-4">
                                <h2 class="f-28 white">
                                    > $185 / Oct 15
                                </h2>
                                <p class="f-14 clr-64748B">
                                    Blackout Window
                                </p>
                            </div>
                            <div class="bg-131E22 p-18-16 br-12 d-flex flex-col gap-16">
                                <div class="d-grid col-lg-3 gap-10">
                                    <span class="f-12 lh-15 clr-6C6C6C">
                                        Projected Proceeds
                                    </span>
                                    <span class="f-12 lh-15 clr-6C6C6C">
                                        Rate / Source
                                    </span>
                                    <span class="f-12 lh-15 clr-6C6C6C right">
                                        Quarterly Amount
                                    </span>
                                </div>
                                <div class="d-grid col-lg-3 gap-10">
                                    <span class="f-13 lh-15 clr-64748B">
                                        Gross Share Proceeds
                                    </span>
                                    <span class="f-13 lh-15 clr-334155">
                                        1357 Shares x $368.30
                                    </span>
                                    <span class="f-13 lh-15 white right">
                                        $499,783.10
                                    </span>
                                </div>
                                <div class="d-grid col-lg-3 gap-10">
                                    <span class="f-13 lh-15 clr-64748B">
                                        Net Liquid Cash Proceeds
                                    </span>
                                    <span class="f-13 lh-15 clr-334155">
                                        Take-Home Capital
                                    </span>
                                    <span class="f-13 lh-15 white right">
                                        $246,892.85
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="card p-24 border-white-15 bg-0B1417 d-flex flex-col gap-22">
                            <div class="d-flex gap-10px justify-space-between align-center mb-12">
                                <div class="d-flex gap-12">
                                    <div class="notification-outer">
                                        <img src="./images/percent.svg" alt="assets icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-16 mb-4 white">
                                            IPS Drift Rebalance
                                        </h3>
                                        <p class="f-12 uppercase clr-64748B">
                                            POLICY ADHERENCE
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <!-- <a href="#" class="btn btn-red p-5-11 f-14 d-flex">66.7% Concentration Risk</a> -->
                                    <a href="#" class="br-8 p-5-11 btn-light-green f-11 lh-14 d-inline-flex gap-6 align-center">
                                        <span class="w-6 h-6 bg-10B981 br-100"></span>
                                        Active (Limit: ±5%)
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-col gap-4">
                                <h2 class="f-28 white">
                                    4.2%
                                </h2>
                                <p class="f-14 clr-64748B">
                                    Portfolio Drift
                                </p>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            Tax Protection, Diversification & Compliance
                        </h3>
                    </div>
                    <div class="d-grid col-lg-2 gap-19 w-100">
                        <div class="card p-24 bg-0B1417">
                            <div class="d-grid col-lg-6-4 mb-24 gap-10px justify-space-between align-flex-start">
                                <div class="d-flex gap-12">
                                    <div class="notification-outer">
                                        <img src="{{ asset('images/weight.svg') }}" alt="weight icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-14 mb-4">
                                            Stock → SMA Workflow
                                        </h3>
                                        <p class="f-12 uppercase white-80">
                                            ENERGY FLOW
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <div class="d-flex align-center gap-8 justify-end">
                                        <div class="live-icon d-flex align-center justify-center">
                                            <div class="live-icon-inner">

                                            </div>
                                        </div>
                                        <div class="f-12 live-head">
                                            Active Flow
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="plan-card gap-10 align-center mb-24">
                                <div class="plan-item">
                                    <span class="plan-label f-10 neutral-300 uppercase mb-12">UNVESTED PLAN</span>
                                    <h2 class="clr-C8AD98 f-24">$11.1M</h2>
                                    <p class="f-12 neutral-300">Future Pipe</p>
                                </div>

                                <div class="plan-arrow d-flex align-center justify-center">
                                    <img src="./images/double-arw.svg" alt="plane arrow">
                                </div>

                                <div class="plan-item text-end">
                                    <span class="plan-label f-10 neutral-300 uppercase mb-12">PLATINUM ALPHA SMA</span>
                                    <h2 class="clr-7BD09D f-24">$6.3M</h2>
                                    <p class="f-12 neutral-300">The Engine</p>
                                </div>
                            </div>

                            <div class="stock-bottom mb-28">
                                <h4 class="f-12 white-80 uppercase l-1px mb-12">
                                    Compliance & Execution Schedule
                                </h4>
                                <ul class="list-unstyled bg-10181C p-12">
                                    <li class="d-flex justify-space-between">
                                        <span class="f-12 lh-14 white-80">
                                            Next Planned Sale
                                        </span>
                                        <span class="f-12 white">
                                            June 01 (1,000 Shars)
                                        </span>
                                    </li>
                                    <li class="d-flex justify-space-between">
                                        <span class="f-12 lh-14 neutral-300">
                                            Remaining Balance
                                        </span>
                                        <span class="f-14 white">
                                            4,000 Shrs this FY
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="d-grid col-lg-2 align-center gap-12 mb-22">
                                <a href="#" class="cus-btn f-14">View Liquidity Workflow</a>
                                <a href="#" class="cus-btn f-14 bg-light-green">Track Compliance Audit</a>
                            </div>
                            <div class="h-1 border-bottom-white-24 mb-12">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <div class="d-flex flex-col gap-2">
                                    <div class="f-10 lh-11 white-25">
                                        SECURE HASH: 9F8E2A7B...
                                    </div>
                                    <div class="f-10 lh-11 white-25">
                                        Exported on Jan 14, 2026, 08:32 UTC
                                    </div>
                                </div>
                                <div class="d-flex gap-4 align-center">
                                    <img src="{{ asset('images/shield.svg') }}" alt="shield icon">
                                    <span class="f-11 clr-7BD09D uppercase">
                                        SECURED COPY
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="card p-24 bg-0B1417">
                            <div class="d-grid col-lg-6-4 mb-24 gap-10px justify-space-between align-flex-start">
                                <div class="d-flex gap-12 mb-24">
                                    <div class="notification-outer">
                                        <img src="{{ asset('images/real-tme.svg') }}" alt="goals icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-14 mb-4">
                                            Real-Time Tax Alpha
                                        </h3>
                                        <p class="f-12 uppercase">
                                            SENTRY MODE
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <div class="d-flex align-center gap-8 justify-end">
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
                            <ul class="list-unstyled m-0 d-flex gap-12 flex-col mb-42">

                                <li class="p-10-40 bg-10181C br-8 w-100">
                                    <div class="f-12 lh-12 white-90 mb-11">
                                        Tax-Loss Harvesting (YTD)
                                    </div>
                                    <div class="w-250 d-flex justify-space-between gap-10">
                                        <div class="inner-div">
                                            <div class="f-12 white-80 mb-2">
                                                Realized Losses
                                            </div>
                                            <div class="white f-16">
                                                $142,300
                                            </div>
                                        </div>
                                        <div class="inner-div">
                                            <div class="f-12 white-80 mb-2">
                                                Tax Alpha Created
                                            </div>
                                            <div class="f-16 clr-7BD09D">
                                                $42,900
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="p-10-40 bg-10181C br-8 w-100">
                                    <div class="f-12 white-90 mb-5">
                                        Wash Sale Monitor
                                    </div>
                                    <h2 class="f-18 clr-7BD09D">
                                        Compliant
                                    </h2>
                                </li>

                                <li class="p-10-40 bg-10181C br-8 w-100">
                                    <div class="f-12 white-90 mb-5">
                                        Upcoming Opportunities
                                    </div>
                                    <h2 class="f-14 white">
                                        3 positions eligible for tax-loss harvesting in next 30 days
                                    </h2>
                                </li>


                            </ul>
                            <!-- <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-prm-900 w-100 justify-center">View Entity & Asset Protection Map</a> -->
                            <a href="#" class="border-none cus-btn f-14 lh-14 d-flex gap-6 align-center justify-center">View Entity & Asset Protection Map <img class="w-14 h-14" src="http://127.0.0.1:8000/images/long-arw.svg" alt="long arrow"></a>
                        </div>
                    </div>
                </div>

                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            Ptotection & Legacy Command center
                        </h3>
                    </div>
                    <div class="d-grid col-lg-3 gap-19 w-100 align-flex-start">
                        <div class="card p-24 bg-0B1417">
                            <div class="d-flex mb-16 gap-10px justify-space-between align-flex-start">
                                <div class="d-flex gap-12">
                                    <!-- <div class="notification-outer">
                                    <img src="{{ asset('images/tabler_cash-plus.svg') }}" alt="Risk & Insurance icon">
                                </div> -->
                                    <div class="card-cont">
                                        <h2 class="f-14 lh-16 uppercase neutral-300 mb-4">
                                            Protect what matters
                                        </h2>
                                        <h3 class="f-20 lh-22 white">
                                            Risk & Insurance
                                        </h3>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <!-- <a href="#" class="btn btn-F58F8C p-3-16 br-48 f-12 capitalize">
                                    Critical Gap
                                </a> -->
                                    <a href="#" class="br-8 p-5-11 btn-light-red f-11 lh-14">
                                        Critical Gap
                                    </a>
                                </div>
                            </div>
                            <div class="border-bottom-white-24 mb-16 h-1">

                            </div>

                            <div class="d-flex flex-col gap-10 mb-24">
                                <div class="d-flex gap-10 justify-space-between">
                                    <h4 class="f-14 neutral-300">
                                        Core Exposure
                                    </h4>
                                    <h3 class="f-16 white">
                                        $45M
                                    </h3>
                                </div>
                                <div class="border-bottom-white-24 h-1">

                                </div>
                                <div class="d-flex gap-10 justify-space-between">
                                    <h4 class="f-12 neutral-300">
                                        Umbrella Coverage
                                    </h4>
                                    <h3 class="f-16 white">
                                        $10M
                                    </h3>
                                </div>
                                <div class="border-bottom-white-24 h-1">

                                </div>
                                <div class="d-flex gap-10 justify-space-between mb-8">
                                    <h4 class="f-14 clr-red-400">
                                        Coverage Gap
                                    </h4>
                                    <h3 class="f-20 clr-red-400 bold">
                                        $35M
                                    </h3>
                                </div>
                                <div class="d-flex flex-col gap-16">
                                    <div class="progress progress-14 d-flex align-center">
                                        <div class="progress-bar bg-red-400" style="width:72%;"></div>
                                    </div>
                                    <h2 class="f-12 neutral-300">
                                        57% protected
                                    </h2>
                                </div>
                            </div>
                            <a href="#" class="cus-btn f-14 d-flex justify-center">View Insurance Audit</a>
                        </div>
                        <div class="card p-24 bg-0B1417">
                            <div class="d-flex mb-16 gap-10px justify-space-between align-flex-start">
                                <div class="d-flex gap-12">
                                    <div class="card-cont">
                                        <h2 class="f-14 lh-16 uppercase neutral-300 mb-4">
                                            Prepare Legacy
                                        </h2>
                                        <h3 class="f-20 lh-22 white">
                                            Estate & Legacy
                                        </h3>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <a href="#" class="br-8 p-5-11 btn-light-yellow f-11 lh-14">
                                        Review Needed
                                    </a>
                                </div>
                            </div>
                            <div class="border-bottom-white-24 mb-16 h-1">

                            </div>
                            <div class="d-grid gap-10 col-lg-1 mb-16">
                                <div class="d-flex align-center justify-space-between gap-10">
                                    <p class="f-14 neutral-300 lh-14">Gross Estate</p>
                                    <span class="white f-14">$45.5M</span>
                                </div>
                                <div class="d-flex align-center justify-space-between gap-10">
                                    <p class="f-14 neutral-300 lh-14">Projected Tax (Current)</p>
                                    <span class="white f-14 lh-14">$12.4M</span>
                                </div>

                                <div class="d-flex align-center justify-space-between gap-10">
                                    <p class="f-14 neutral-300 lh-14">Net to Heirs</p>
                                    <span class="clr-4FC07C f-14 lh-14">$33.1M</span>
                                </div>


                            </div>
                            <div class="d-flex gap-10 flex-col">
                                <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-131927 justify-center">Launch Interactive Scenario</a>
                                <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center">Launch Interactive Scenario</a>
                            </div>
                        </div>
                        <div class="card p-24 bg-0B1417">
                            <div class="d-flex mb-16 gap-10px justify-space-between align-flex-start">
                                <div class="d-flex gap-12">
                                    <div class="card-cont">
                                        <h2 class="f-14 lh-16 uppercase neutral-300 mb-4">
                                            Protect what matters
                                        </h2>
                                        <h3 class="f-20 lh-22 white">
                                            Risk & Insurance
                                        </h3>
                                    </div>
                                </div>
                                <div class="btn-col">
                                    <a href="#" class="br-8 p-5-11 btn-light-green f-11 lh-14">
                                        Strong
                                    </a>
                                </div>
                            </div>
                            <div class="border-bottom-white-24 mb-16 h-1">

                            </div>

                            <div class="d-grid col-lg-2 gap-12 mb-16">

                                <div class="bg-white-3 br-6 p-10">
                                    <p class="f-12 neutral-300 mb-6">
                                        Score
                                    </p>
                                    <h2 class="f-18 clr-4FC07C">
                                        85%
                                    </h2>
                                </div>

                                <div class="bg-white-3 br-6 p-10">
                                    <p class="f-12 neutral-300 mb-6">
                                        Entities
                                    </p>
                                    <h2 class="f-14 white">
                                        2 lLC+1 FLP
                                    </h2>
                                </div>

                            </div>

                            <div class="d-flex align-center justify-space-between gap-10 mb-16">
                                <p class="f-14 neutral-300 lh-14">Vulnerabilities</p>
                                <span class="clr-red-400 f-14">1 Uninsulated</span>
                            </div>
                            <a href="#" class="cus-btn f-14 d-flex justify-center">View Protection Map</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="footer d-flex gap-20 flex-col">
            <div class="f-13 lh-20 white-65">
                © 2026 Benjamin's Money, Inc. All rights reserved. Benjamin's Money Executive Wealth Command, Tax Alpha Hub, Protection Hub, SmartGuard, and Scenario Modeling are proprietary tools of Benjamin's Money, Inc. All portfolio data, estate projections, and tax optimization strategies shown are specific to your account and generated in real time from connected custodial feeds.
            </div>
            <div class="f-13 lh-20 white-50">
                Wealth advisory services provided through Benjamin's Money Advisory, a registered investment adviser. 10b5-1 plan administration, equity liquidation strategies, and SMA workflows are managed by Benjamin's Money Securities, LLC (member FINRA/SIPC). Your Platinum Alpha SMA and Wharton-Backed SMA allocations are subject to the terms of your Investment Policy Statement (IPS). Concentration risk alerts, including AMZN position monitoring, are updated in real time and do not constitute a recommendation to buy or sell.
            </div>
            <div class="f-13 lh-20 white-50">
                Scenario modeling projections, independence runway estimates, and tax-loss harvesting opportunities displayed in this dashboard are for illustrative and planning purposes only. Actual outcomes may vary based on market conditions, tax law changes, and individual circumstances. SmartGuard monitoring and Guardian Guardrails are automated risk tools and do not replace professional fiduciary advice. Please consult your Benjamin's Money advisor before executing any equity liquidation, estate planning, or relocation strategy. | Support: advisory@benjaminsmoney.com • 1-800-BEN-MONEY
            </div>
        </div>
    </div>
</div>

@endsection