@extends('layouts.app')

@section('title','Scenario Planning')

@section('content')

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
    <div class="dash-cont-inner">
        <div class="card-outer d-flex gap-48 align-flex-start flex-col">
            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-16 lh-11">
                        Financial Snapshot
                    </h3>
                </div>
                <div class="d-grid col-lg-4 gap-13 w-100">
                    <div class="card p-24 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="notification-outer w-38 h-38">
                                <img src="{{ asset('images/guardian.svg') }}" alt="weight icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 lh-16">
                                    Total Savings
                                </h3>
                            </div>
                        </div>
                        <div class="stats">
                            <h2 class="f-24 lh-24 mb-8 clr-7BD09D">
                                $1.33M
                            </h2>
                            <div class="d-flex gap-4 f-12 ls-042">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> Vs Current State</p>
                            </div>
                        </div>

                    </div>
                    <div class="card p-24 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="notification-outer w-38 h-38">
                                <img src="{{ asset('images/guardian.svg') }}" alt="weight icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 lh-16">
                                    Net Worth Impact
                                </h3>
                            </div>
                        </div>
                        <div class="stats">
                            <h2 class="f-24 lh-24 mb-8 clr-7BD09D">
                                +21.4%
                            </h2>
                            <div class="d-flex gap-4 f-12 ls-042">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> Increase</p>
                            </div>
                        </div>

                    </div>
                    <div class="card p-24 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="notification-outer w-38 h-38">
                                <img src="{{ asset('images/guardian.svg') }}" alt="weight icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 lh-16">
                                    Estate Tax Rate
                                </h3>
                            </div>
                        </div>
                        <div class="stats">
                            <h2 class="f-24 lh-24 mb-8 clr-7BD09D">
                                92 / 100
                            </h2>
                            <div class="d-flex gap-4 f-12 ls-042">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> Very Strong</p>
                            </div>
                        </div>

                    </div>
                    <div class="card p-24 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="notification-outer w-38 h-38">
                                <img src="{{ asset('images/guardian.svg') }}" alt="weight icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 lh-16">
                                    Estate Tax Savings
                                </h3>
                            </div>
                        </div>
                        <div class="stats">
                            <h2 class="f-24 lh-24 mb-8 clr-7BD09D">
                                $18,500,000
                            </h2>
                            <div class="d-flex gap-4 f-12 ls-042">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p>Potential Savings</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="card-internal d-flex flex-col gap-24  align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-16 lh-11">
                        Quick Select Profiles
                    </h3>
                </div>
                <div class="d-grid col-lg-2 gap-16 w-100">
                    <div class="bg-23B05B-6 br-12 border-E9E7DD-10 p-24 d-flex gap-12 flex-col">
                        <div class="d-flex align-center justify-space-between gap-12 w-100">
                            <div class="d-flex flex-col gap-8">
                                <p class="f-13 lh-16 clr-AEC2C7 uppercase w-100">
                                    Safety & trust
                                </p>
                                <ul class="location d-flex gap-20 w-100">
                                    <li class="f-15 lh-18 white">
                                        Delaware
                                    </li>
                                    <li class="f-15 lh-18 white">
                                        Wyoming
                                    </li>
                                    <li class="f-15 lh-18 white">
                                        South Dakota
                                    </li>
                                </ul>
                            </div>
                            <div class="arrow-box">
                                <img src="{{ asset('images/arrow.svg') }}" alt="Arrow icon">
                            </div>

                        </div>
                        <p class="f-14 lh-22 neutral-300">
                            Asset protection focus with 0% income tax & strong trust laws.
                        </p>
                    </div>

                    <div class="bg-23B05B-6 br-12 border-E9E7DD-10 p-24 d-flex gap-12 flex-col">
                        <div class="d-flex align-center justify-space-between gap-12 w-100">
                            <div class="d-flex flex-col gap-8">
                                <p class="f-13 lh-16 clr-AEC2C7 uppercase w-100">
                                    Proximity
                                </p>
                                <ul class="location d-flex gap-20 w-100">
                                    <li class="f-15 lh-18 white">
                                        Nevada
                                    </li>
                                    <li class="f-15 lh-18 white">
                                        Washington
                                    </li>
                                </ul>
                            </div>
                            <div class="arrow-box">
                                <img src="{{ asset('images/arrow.svg') }}" alt="Arrow icon">
                            </div>

                        </div>
                        <p class="f-14 lh-22 neutral-300">
                            Ideal for West Coast executives seeking proximity & 0% tax.
                        </p>
                    </div>
                </div>


                <div class="d-grid col-lg-2 gap-16 w-100">
                    <div class="bg-23B05B-6 br-12 border-E9E7DD-10 p-24 d-flex gap-12 flex-col">
                        <div class="d-flex align-center justify-space-between gap-12 w-100">
                            <div class="d-flex flex-col gap-8">
                                <p class="f-13 lh-16 clr-AEC2C7 uppercase w-100">
                                    lifestyle & growth
                                </p>
                                <ul class="location d-flex gap-20 w-100">
                                    <li class="f-15 lh-18 white">
                                        Florida
                                    </li>
                                    <li class="f-15 lh-18 white">
                                        Tennessee
                                    </li>
                                </ul>
                            </div>
                            <div class="arrow-box">
                                <img src="{{ asset('images/arrow.svg') }}" alt="Arrow icon">
                            </div>

                        </div>
                        <p class="f-14 lh-22 neutral-300">
                            Low cost of living. 0% tax and higher quality of life.
                        </p>
                    </div>

                    <div class="bg-23B05B-6 br-12 border-E9E7DD-10 p-24 d-flex gap-12 flex-col">
                        <div class="d-flex align-center justify-space-between gap-12 w-100">
                            <div class="d-flex flex-col gap-8">
                                <p class="f-13 lh-16 clr-AEC2C7 uppercase w-100">
                                    nuclear option
                                </p>
                                <ul class="location d-flex gap-20 w-100">
                                    <li class="f-15 lh-18 white">
                                        puerto rico (Act 600)
                                    </li>
                                </ul>
                            </div>
                            <div class="arrow-box">
                                <img src="{{ asset('images/arrow.svg') }}" alt="Arrow icon">
                            </div>

                        </div>
                        <p class="f-14 lh-22 neutral-300">
                            0% Federal & State tax on capital gains, dividends & interests.
                        </p>
                    </div>
                </div>

                <div class="d-grid col-2-1 gap-25 w-100">
                    <div class="d-flex flex-col gap-12">
                        <h2 class="f-16 lh-18 white-80 mb-4">
                            State Comparison Snapshot
                        </h2>
                        <div class="bg-0B1417 br-12 border-E9E7DD-15 p-32-24 d-flex gap-14 flex-col">
                            <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20">
                                <div class="date-outer">
                                    <p class="f-11 lh-12 white-50 uppercase">
                                        State
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-11 lh-12 white-50 uppercase center">
                                        Income Tax
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-11 lh-12 white-50 uppercase center">
                                        Capital Tax
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-11 lh-12 white-50 uppercase center">
                                        Estate Tax
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-11 lh-12 white-50 uppercase center">
                                        Est. Savings
                                    </p>
                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20">
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white bold">
                                        Florida
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        None
                                    </p>
                                </div>
                                <div class="date-outer d-flex align-center justify-center">
                                    <p class="f-12 lh-14 center bg-108476-15 p-4-8 br-4 clr-7BD09D">
                                        +$1.33M
                                    </p>

                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20">
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white bold">
                                        Nevada
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        None
                                    </p>
                                </div>
                                <div class="date-outer d-flex align-center justify-center">
                                    <p class="f-12 lh-14 center bg-108476-15 p-4-8 br-4 clr-7BD09D">
                                        +$1.34M
                                    </p>

                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20">
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white bold">
                                        Tennessee
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        None
                                    </p>
                                </div>
                                <div class="date-outer d-flex align-center justify-center">
                                    <p class="f-12 lh-14 center bg-108476-15 p-4-8 br-4 clr-7BD09D">
                                        +$1.28M
                                    </p>

                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20">
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white bold">
                                        Washington
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        7.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        Yes
                                    </p>
                                </div>
                                <div class="date-outer d-flex align-center justify-center">
                                    <p class="f-12 lh-14 center bg-FBBC05-15 p-4-8 br-4 clr-yellow-400">
                                        +$0.92M
                                    </p>

                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20">
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white bold">
                                        Wyoming
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        None
                                    </p>
                                </div>
                                <div class="date-outer d-flex align-center justify-center">
                                    <p class="f-12 lh-14 center bg-108476-15 p-4-8 br-4 clr-7BD09D">
                                        +$1.38M
                                    </p>

                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-15">

                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20">
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white bold mb-2">
                                        Puerto Rico
                                    </p>
                                    <p class="f-10 lh-12 white-50">(Act 60)</p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        0.0%
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-14 white-70 center">
                                        None
                                    </p>
                                </div>
                                <div class="date-outer d-flex align-center justify-center">
                                    <p class="f-12 lh-14 center bg-108476-15 p-4-8 br-4 clr-7BD09D">
                                        +$5.03M
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="bg-125D34-20 p-12 br-6">
                            <p class="f-11 lh-15 white">
                                Washington: 7% on capital gains over $250k. Puerto Rico: Requires Act 60 decree and bona fide residency.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex flex-col gap-12">
                        <h2 class="f-16 lh-18 white-80 mb-4">
                            Net Profit Impact on $10m Liquidity Event
                        </h2>
                        <div class="bg-0B1417 br-12 border-E9E7DD-15 p-32-24 d-flex gap-24 flex-col tax-comparison">
                            <!-- Legend -->
                            <div class="tax-legend d-flex gap-12 align-center">
                                <div class="legend-item d-flex gap-6 align-center">
                                    <div class="legend-color net w-10 h-10 br-2"></div>
                                    <span class="f-11 lh-12 white-70">Net to you</span>
                                </div>

                                <div class="legend-item d-flex gap-6 align-center">
                                    <div class="legend-color federal w-10 h-10 br-2"></div>
                                    <span class="f-11 lh-12 white-70">Federal Tax</span>
                                </div>

                                <div class="legend-item d-flex gap-6 align-center">
                                    <div class="legend-color state w-10 h-10 br-2"></div>
                                    <span class="f-11 lh-12 white-70">State Tax</span>
                                </div>

                                <div class="legend-item d-flex align-center gap-6">
                                    <div class="legend-color other w-10 h-10 br-2"></div>
                                    <span class="f-11 lh-12 white-70">Other Taxes</span>
                                </div>
                            </div>

                            <div class="d-flex gap-16 flex-col">
                                <!-- Puerto Rico -->
                                <div class="tax-row">
                                    <div class="tax-heading">
                                        <h3 class="f-13 lh-14 white">Puerto Rico (Act 60)</h3>
                                        <span class="f-13 lh-14 clr-7BD09D">$10.00M Net</span>
                                    </div>

                                    <div class="tax-bar">
                                        <div class="bar-segment net" style="width: 100%;"></div>
                                    </div>
                                </div>

                                <!-- Florida -->
                                <div class="tax-row">
                                    <div class="tax-heading">
                                        <h3 class="f-13 lh-14 white">Florida</h3>
                                        <span class="net-value f-13 lh-14 white">$6.30M Net</span>
                                    </div>

                                    <div class="tax-bar">
                                        <div class="bar-segment net" style="width: 64%;"></div>
                                        <div class="bar-segment federal" style="width: 30%;"></div>
                                        <div class="bar-segment other" style="width: 6%;"></div>
                                    </div>
                                </div>

                                <!-- California -->
                                <div class="tax-row">
                                    <div class="tax-heading">
                                        <h3 class="f-13 lh-14 white">California</h3>
                                        <span class="net-value f-13 lh-14 white">$4.90M Net</span>
                                    </div>

                                    <div class="tax-bar">
                                        <div class="bar-segment net" style="width: 50%;"></div>
                                        <div class="bar-segment federal" style="width: 30%;"></div>
                                        <div class="bar-segment state" style="width: 17%;"></div>
                                        <div class="bar-segment other" style="width: 3%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-125D34-20 p-12 br-6 border-E9E7DD-15">
                            <ul class="list-unstyled">
                                <li class="f-12 lh-18 d-flex gap-8 white-70 align-center">
                                    <div class="bg-E9E7DD w-4 h-4 br-100">

                                    </div>
                                    <div> Moving from California to Florida adds <span class="clr-7BD09D">$1.33M (21.4%)</span> more to your pocket</div>
                                </li>
                                <li class="f-12 lh-18 d-flex gap-8 white-70 align-center">
                                    <div class="bg-E9E7DD w-4 h-4 br-100">

                                    </div>
                                    <div> Choosing Puerto Rico (Act 60) adds <span class="clr-7BD09D">$5.03M (101.2%)</span> more versus California</div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="d-grid col-lg-2 gap-32 w-100">

                    <div class="col-outer">
                        <h3 class="f-16 lh-11 white-80 mb-16">
                            Call to Action
                        </h3>

                        <div class="bg-0B1417 p-32 br-11 border-E9E7DD-15">
                            <div class="d-flex gap-16 justify-space-between align-center mb-40 flex-col">
                                <div class="d-flex gap-12 align-center w-100">
                                    <div class="notification-outer">
                                        <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                    </div>
                                    <div class="card-cont">
                                        <h3 class="f-16 lh-18 white">
                                            Protect your <span class="clr-A7DFBD">$1.33M </span>Savings
                                        </h3>
                                    </div>
                                </div>
                                <p class="f-14 neutral-300">
                                    Start residency compliance tracking to protect your relocation strategy and avoid clawback risk
                                </p>
                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Consult your Tax Advisor</a>

                        </div>
                    </div>


                </div>

                <div class="bg-E9E7DD-5 br-16 p-20-52 d-flex gap-14 align-center f-14 lh-16 neutral-300">
                    <img src="{{ asset('images/information-line.svg') }}" alt="search icon"> Please Note: All projections are estimates based on current tax laws and a $10M liquidity event. Consult your tax advisor for specific guidance.
                </div>
            </div>



        </div>
    </div>
</div>

@endsection