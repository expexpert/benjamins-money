@extends('layouts.app')

@section('title','Dashboard')

@section('content')

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
    <div class="dash-cont-inner">
        <div class="card-outer d-flex gap-48 align-flex-start flex-col">
            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-16 lh-11">
                        Financial Snapshot
                    </h3>
                </div>
                <div class="d-grid col-lg-4 gap-13 w-100">
                    <div class="card p-32-24">
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
                    <div class="card p-32-24">
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
                    <div class="card p-32-24">
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
                    <div class="card p-32-24">
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
                    <div class="card p-32-24 d-flex flex-col gap-16 border-white-15 bg-0B1417">
                        <div class="d-flex gap-12 mb-4 align-center justify-space-between">
                            <div class="d-flex gap-16 align-center">

                                <div class="notification-outer">
                                    <!-- <img src="{{ asset('images/net-after.svg') }}" alt="net worth icon"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.2502 8.317V8C11.2502 7.80109 11.3292 7.61032 11.4699 7.46967C11.6105 7.32902 11.8013 7.25 12.0002 7.25C12.1991 7.25 12.3899 7.32902 12.5305 7.46967C12.6712 7.61032 12.7502 7.80109 12.7502 8V8.312C12.9272 8.346 13.1002 8.395 13.2772 8.465C13.6752 8.623 14.0412 8.869 14.4532 9.181C14.6118 9.30114 14.7162 9.47937 14.7434 9.67647C14.7706 9.87357 14.7184 10.0734 14.5982 10.232C14.4781 10.3906 14.2998 10.495 14.1027 10.5222C13.9056 10.5494 13.7058 10.4971 13.5472 10.377C13.1592 10.083 12.9252 9.939 12.7232 9.859C12.5392 9.786 12.3412 9.75 12.0002 9.75C11.5072 9.75 11.1762 9.867 10.9902 10.002C10.9137 10.0519 10.8514 10.1208 10.8093 10.2019C10.7673 10.2831 10.7469 10.3737 10.7502 10.465C10.7502 10.702 10.8402 10.831 11.0662 10.957C11.3392 11.11 11.7182 11.193 12.1232 11.26C12.5192 11.326 13.1392 11.438 13.6662 11.734C14.2412 12.055 14.7502 12.626 14.7502 13.534C14.7536 13.8627 14.6771 14.1874 14.5273 14.48C14.3775 14.7727 14.1589 15.0245 13.8902 15.214C13.5632 15.45 13.1722 15.604 12.7502 15.683V16C12.7502 16.1989 12.6712 16.3897 12.5305 16.5303C12.3899 16.671 12.1991 16.75 12.0002 16.75C11.8013 16.75 11.6105 16.671 11.4699 16.5303C11.3292 16.3897 11.2502 16.1989 11.2502 16V15.688C11.0702 15.6532 10.8938 15.602 10.7232 15.535C10.3252 15.377 9.95921 15.131 9.54721 14.819C9.46868 14.7595 9.40264 14.6851 9.35285 14.6001C9.30306 14.5151 9.27051 14.4211 9.25704 14.3235C9.22985 14.1264 9.28207 13.9266 9.40221 13.768C9.52235 13.6094 9.70058 13.505 9.89768 13.4778C10.0948 13.4506 10.2946 13.5029 10.4532 13.623C10.8412 13.917 11.0752 14.061 11.2772 14.141C11.4612 14.214 11.6592 14.25 12.0002 14.25C12.4932 14.25 12.8242 14.133 13.0102 13.998C13.0867 13.9481 13.149 13.8792 13.1911 13.7981C13.2331 13.7169 13.2535 13.6263 13.2502 13.535C13.2502 13.298 13.1602 13.169 12.9342 13.043C12.6612 12.89 12.2812 12.807 11.8772 12.74C11.4812 12.674 10.8612 12.562 10.3342 12.266C9.75921 11.945 9.25021 11.374 9.25021 10.466C9.25021 9.764 9.57321 9.176 10.1102 8.786C10.4507 8.54692 10.8401 8.38671 11.2502 8.317Z" fill="#108476" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.764 3.25C15.571 3.25 13.761 3.768 12.033 4.262L11.944 4.287C10.179 4.792 8.483 5.267 6.391 5.267C5.319 5.267 4.32 5.054 3.235 4.745C2.96446 4.66563 2.68072 4.64155 2.40067 4.67419C2.12063 4.70683 1.85003 4.79553 1.605 4.935C1.34508 5.08389 1.12912 5.29881 0.97898 5.558C0.828837 5.8172 0.749845 6.11146 0.75 6.411V17.645C0.75 18.257 0.925 18.789 1.263 19.225C1.593 19.65 2.04 19.935 2.51 20.129C3.505 20.549 4.336 20.75 6.236 20.75C8.429 20.75 10.239 20.232 11.967 19.738L12.056 19.713C13.821 19.208 15.517 18.733 17.609 18.733C18.681 18.733 19.68 18.946 20.765 19.255C21.323 19.415 21.919 19.345 22.395 19.065C22.884 18.776 23.25 18.256 23.25 17.589V6.355C23.25 5.743 23.075 5.211 22.737 4.775C22.407 4.35 21.96 4.065 21.49 3.871C20.495 3.451 19.665 3.25 17.764 3.25ZM6.39 6.767C8.715 6.767 10.594 6.233 12.356 5.729L12.383 5.722C14.145 5.218 15.782 4.75 17.763 4.75C19.509 4.75 20.133 4.927 20.908 5.254L20.912 5.255C21.225 5.385 21.427 5.535 21.551 5.695C21.666 5.843 21.749 6.044 21.749 6.355V17.59C21.749 17.662 21.722 17.72 21.633 17.773C21.563 17.8095 21.4866 17.8317 21.408 17.8386C21.3294 17.8455 21.2502 17.8368 21.175 17.813C20.036 17.489 18.883 17.234 17.608 17.234C15.283 17.234 13.404 17.768 11.642 18.272L11.615 18.279C9.853 18.783 8.216 19.251 6.235 19.251C4.489 19.251 3.865 19.074 3.09 18.747L3.086 18.746C2.773 18.616 2.571 18.466 2.447 18.306C2.332 18.158 2.249 17.957 2.249 17.646V6.41C2.249 6.338 2.276 6.28 2.365 6.227C2.43496 6.19055 2.51143 6.16826 2.59002 6.16139C2.66861 6.15453 2.74778 6.16323 2.823 6.187C3.962 6.511 5.115 6.766 6.39 6.766" fill="#108476" />
                                    </svg>
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
                    <div class="card p-32-24 border-white-15 bg-0B1417">
                        <div class="d-flex gap-12 mb-28 align-center justify-space-between">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/planning.svg') }}" alt="net worth icon">
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
                                            <img src="{{ asset('images/outcome-org.svg') }}" alt="real-time icon">
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
                                <div class="bg-right pt-10 d-flex flex-col align-end">
                                    <h3 class="f-24 mb-4">
                                        $32.0M
                                    </h3>
                                    <p class="f-14">
                                        Net Liquidity
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cus-btn f-14 bg-light-green d-flex gap-10 align-center justify-center border-none"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round" />
                            </svg>View Scenario Planning</a>
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
                    <div class="card p-32-24 border-white-15 bg-0B1417 d-flex flex-col gap-22">
                        <div class="d-flex gap-10px justify-space-between align-center">
                            <div class="d-flex gap-12 align-center">
                                <div class="notification-outer">
                                    <img src="./images/pie-chart.svg" alt="assets icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 lh-18 mb-4 white">
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
                                    <img class="w-100" src="./images/diversified.svg" alt="asset Allocation image">
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
                                        <div class="icon-cont f-14 clr-99ACB6">
                                            Single Stock (AMZN)
                                        </div>
                                    </div>
                                    <span class="f-14 white">
                                        66.7%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-8 align-center">
                                        <div class="icon-square light-orange">

                                        </div>
                                        <div class="icon-cont f-14 clr-99ACB6">
                                            Diversified Equity
                                        </div>
                                    </div>
                                    <span class="f-14 white">
                                        15%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-8 align-center">
                                        <div class="icon-square sea-green">

                                        </div>
                                        <div class="icon-cont f-14 clr-99ACB6">
                                            Fixed Income
                                        </div>
                                    </div>
                                    <span class="f-14 white">
                                        10%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-8 align-center">
                                        <div class="icon-square light-purple">

                                        </div>
                                        <div class="icon-cont f-14 clr-99ACB6">
                                            Alts / PE
                                        </div>
                                    </div>
                                    <span class="f-14 white">
                                        5%
                                    </span>
                                </li>

                                <li class="d-flex gap-10 justify-space-between">
                                    <div class="d-flex gap-8 align-center">
                                        <div class="icon-square peach">

                                        </div>
                                        <div class="icon-cont f-14 clr-99ACB6">
                                            Cash
                                        </div>
                                    </div>
                                    <span class="f-14 white">
                                        3.3%
                                    </span>
                                </li>


                            </ul>
                        </div>

                        <div class="bg-neutral-10 p-12 center f-12 lh-14 white br-8">
                            Target pool diversification is <span class="clr-A7DFBD">80%</span> • Action required to rebalance.
                        </div>

                        <a href="#" class="border-none cus-btn f-14 lh-14 d-flex gap-6 align-center justify-center">View Asset Allocation Details <img class="w-14 h-14" src="{{ asset('images/long-arw.svg') }}" alt="long arrow"></a>

                    </div>
                    <div class="card p-32-24 border-white-15 bg-0B1417">
                        <div class="d-flex gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12 mb-24">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/flag.svg') }}" alt="goals icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 lh-18 mb-4 white">
                                        Wealth Goals
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
                                    <h3 class="f-15 white">Retirement (2030)</h3>
                                    <span class="f-14 white">72%</span>
                                </div>

                                <div class="progress mb-8">
                                    <div class="progress-bar blue" style="width:72%;"></div>
                                </div>

                                <div class="goal-bottom d-flex align-center justify-space-between">
                                    <span class="f-13 white-80 uppercase">$5.8M / $8M TARGET</span>
                                    <span class="f-13 clr-A7DFBD ls-054">On Track</span>
                                </div>
                            </li>

                            <li class="goal-item">
                                <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                    <h3 class="f-15 white">Education Fund</h3>
                                    <span class="f-14 white">91%</span>
                                </div>

                                <div class="progress mb-8">
                                    <div class="progress-bar light-blue" style="width:91%;"></div>
                                </div>

                                <div class="goal-bottom d-flex align-center justify-space-between">
                                    <span class="f-13 white-80 uppercase">$455K / $500K</span>
                                    <span class="f-13 clr-A7DFBD ls-054">Nearly Funded</span>
                                </div>
                            </li>

                            <li class="goal-item">
                                <div class="goal-top mb-8 d-flex align-center justify-space-between">
                                    <h3 class="f-15 white">Vacation Property</h3>
                                    <span class="f-14 white">44%</span>
                                </div>

                                <div class="progress mb-8">
                                    <div class="progress-bar purple" style="width:44%;"></div>
                                </div>

                                <div class="goal-bottom d-flex align-center justify-space-between">
                                    <span class="f-13 white-80 uppercase">$880K / $2M</span>
                                    <span class="f-13 clr-FFDD99 ls-054">Needs Funding</span>
                                </div>
                            </li>

                        </ul>
                        <a href="#" class="cus-btn f-14 bg-light-green d-flex justify-center mb-16">View All Goals</a>
                        <a href="#" class="cus-btn f-14 bg-light-green d-flex justify-center">Add Goal</a>
                    </div>
                </div>
            </div>


            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-16 lh-11">
                        Guardian Guardrails
                    </h3>
                </div>
                <div class="d-grid col-lg-2 justify-space-between gap-19 w-100">
                    <div class="card p-32-24 border-white-15 bg-0B1417 d-flex flex-col gap-16">
                        <div class="d-flex gap-10px justify-space-between align-center">
                            <div class="d-flex gap-12 align-center">
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
                                    <span class="w-6 h-6 bg-71521A  br-100"></span>
                                    Blackout Window
                                </a>
                            </div>
                        </div>
                        <div class="d-flex gap-4 justify-space-between align-center">
                            <p class="f-16 clr-99ACB6">
                                AMZN Sell Cap
                            </p>
                            <h2 class="f-24 lh-24 white">
                                > $185 / Oct 15
                            </h2>
                        </div>
                        <div class="bg-sec-900 border-E9E7DD-40 p-18-16 br-12 d-flex flex-col gap-16 mb-8">
                            <div class="d-grid col-lg-3 gap-10">
                                <span class="f-12 lh-15 clr-AEC2C7">
                                    Projected Proceeds
                                </span>
                                <span class="f-12 lh-15 clr-AEC2C7">
                                    Rate / Source
                                </span>
                                <span class="f-12 lh-15 clr-AEC2C7 right">
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
                        <a href="#" class="border-none cus-btn f-14 lh-14 d-flex gap-6 align-center justify-center p-0">View Details <img class="w-14 h-14" src="http://127.0.0.1:8000/images/long-arw.svg" alt="long arrow"></a>
                    </div>
                    <div class="card p-32-24 border-white-15 bg-0B1417 d-flex flex-col gap-22">
                        <div class="d-flex gap-10px justify-space-between align-center">
                            <div class="d-flex gap-12 align-center">
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
                        <div class="d-flex flex-col gap-4 mb-26">
                            <h2 class="f-28 white">
                                4.2%
                            </h2>
                            <p class="f-14 clr-64748B">
                                Portfolio Drift
                            </p>
                        </div>

                        <div class="d-flex gap-14 flex-col">
                            <a href="#" class="cus-btn f-14 bg-light-green d-flex justify-center border-none">View</a>
                            <a href="#" class="border-none cus-btn f-14 lh-14">Download Latest IPS Report</a>
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
                    <div class="card p-32-24 bg-0B1417">
                        <div class="d-grid col-lg-6-4 mb-24 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12 align-center">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/flow-tree-icon.svg') }}" alt="weight icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 lh-18 mb-4 white">
                                        Stock → SMA Workflow
                                    </h3>
                                    <p class="f-12 uppercase clr-99ACB6">
                                       PLANNING OVERVIEW
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
                                <span class="plan-label f-10 clr-99ACB6 uppercase mb-12">UNVESTED PLAN</span>
                                <h2 class="clr-EDB37E f-24 bold">$11.1M</h2>
                                <p class="f-12 white-80">Future Pipe</p>
                            </div>

                            <div class="plan-arrow d-flex align-center justify-center">
                                <img src="./images/double-arw.svg" alt="plane arrow">
                            </div>

                            <div class="plan-item text-end">
                                <span class="plan-label f-10 clr-99ACB6 uppercase mb-12">PLATINUM ALPHA SMA</span>
                                <h2 class="clr-A7DFBD f-24">$6.3M</h2>
                                <p class="f-12 white-80">The Engine</p>
                            </div>
                        </div>

                        <div class="stock-bottom mb-28">
                            <h4 class="f-12 clr-99ACB6 uppercase l-1px mb-12">
                                Compliance & Execution Schedule
                            </h4>
                            <ul class="list-unstyled bg-15793D-10 p-12 br-8">
                                <li class="d-flex justify-space-between">
                                    <span class="f-12 lh-14 clr-99ACB6">
                                        Next Planned Sale
                                    </span>
                                    <span class="f-14 lh-14 white">
                                        June 01 (1,000 Shars)
                                    </span>
                                </li>
                                <li class="d-flex justify-space-between">
                                    <span class="f-12 lh-14 clr-99ACB6">
                                        Remaining Balance
                                    </span>
                                    <span class="f-14 lh-14 white">
                                        4,000 Shrs this FY
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="d-grid col-lg-2 align-center gap-12">
                            <a href="#" class="cus-btn f-14">View Liquidity Workflow</a>
                            <!-- <a href="#" class="cus-btn f-14 bg-light-green">Track Compliance Audit</a> -->
                            <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-101010 justify-center bold">Track Compliance Audit</a>
                        </div>
                        <!-- <div class="h-1 border-bottom-white-24 mb-12">

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
                            </div> -->

                    </div>
                    <div class="card p-32-24 bg-0B1417">
                        <div class="d-grid col-lg-6-4 mb-24 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12 align-center">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/alpha.svg') }}" alt="goals icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 lh-18 mb-4">
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
                        <ul class="list-unstyled m-0 d-flex gap-12 flex-col mb-22">

                            <li class="p-16-24 bg-10181C br-8 w-100 border-4FC07C-20">
                                <div class="f-12 lh-12 clr-99ACB6 mb-12 uppercase">
                                    Tax-Loss Harvesting (YTD)
                                </div>
                                <div class="d-flex flex-col justify-space-between gap-8">
                                    <div class="inner-div d-flex gap-10 align-center justify-space-between">
                                        <div class="f-12 lh-12 clr-99ACB6">
                                            Realized Losses
                                        </div>
                                        <div class="white f-16 lh-16">
                                            $142,300
                                        </div>
                                    </div>
                                    <div class="inner-div d-flex gap-10 align-center justify-space-between">
                                        <div class="f-12 lh-12 clr-99ACB6">
                                            Tax Alpha Created
                                        </div>
                                        <div class="f-16 lh-16 clr-7BD09D">
                                            $42,900
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="p-16-24 bg-10181C br-8 d-flex align-center justify-space-between border-4FC07C-20">
                                <div class="f-12 lh-12 clr-99ACB6">
                                    Wash Sale Monitor
                                </div>
                                <h2 class="f-16 lh-18 clr-A7DFBD">
                                    Compliant
                                </h2>
                            </li>

                            <li class="p-16-24 bg-10181C br-8 w-100 border-4FC07C-20">
                                <div class="f-12 lh-12 clr-99ACB6 mb-5 uppercase ls-054">
                                    Upcoming Opportunities
                                </div>
                                <h2 class="f-14 lh-18 white">
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
                <div class="d-grid col-lg-3 gap-19 w-100">
                    <div class="card p-32-24 bg-0B1417-50 border-white-24">
                        <div class="d-flex mb-16 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12">
                                <!-- <div class="notification-outer">
                                    <img src="{{ asset('images/tabler_cash-plus.svg') }}" alt="Risk & Insurance icon">
                                </div> -->
                                <div class="card-cont">
                                    <h3 class="f-16 lh-16 white mb-8">
                                        Risk & Insurance
                                    </h3>
                                    <h2 class="f-12 lh-12 uppercase clr-99ACB6">
                                        Protect what matters
                                    </h2>
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

                        <div class="d-flex flex-col gap-10 mb-20">
                            <div class="d-flex gap-10 justify-space-between">
                                <h4 class="f-14 lh-14 clr-99ACB6">
                                    Core Exposure
                                </h4>
                                <h3 class="f-16 lh-16 white">
                                    $45M
                                </h3>
                            </div>
                            <div class="border-bottom-white-24 h-1">

                            </div>
                            <div class="d-flex gap-10 justify-space-between">
                                <h4 class="f-14 lh-14 clr-99ACB6">
                                    Umbrella Coverage
                                </h4>
                                <h3 class="f-16 lh-16 white">
                                    $10M
                                </h3>
                            </div>
                            <div class="border-bottom-white-24 h-1">

                            </div>
                            <div class="d-flex gap-10 justify-space-between mb-6">
                                <h4 class="f-14 lh-14 clr-red-300">
                                    Coverage Gap
                                </h4>
                                <h3 class="f-16 lh-16 clr-red-300 bold">
                                    $35M
                                </h3>
                            </div>
                            <div class="d-flex flex-col gap-8">
                                <div class="progress progress-6 d-flex align-center">
                                    <div class="progress-bar bg-red-300" style="width:72%;"></div>
                                </div>
                                <h2 class="f-12 neutral-300">
                                    57% protected
                                </h2>
                            </div>
                        </div>
                        <!-- <a href="#" class="cus-btn f-14 d-flex justify-center">View Insurance Audit</a> -->
                        <a href="#" class="border-none cus-btn f-14 lh-14 bold">View Insurance Audit</a>
                    </div>
                    <div class="card p-32-24 bg-0B1417-50 border-white-24">
                        <div class="d-flex mb-16 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12">
                                <!-- <div class="card-cont">
                                        <h2 class="f-14 lh-16 uppercase neutral-300 mb-4">
                                            Estate & Legacy
                                        </h2>
                                        <h3 class="f-20 lh-22 white">
                                            Prepare Legacy
                                        </h3>
                                    </div> -->



                                <div class="card-cont">
                                    <h3 class="f-16 lh-16 white mb-8">
                                        Estate & Legacy
                                    </h3>
                                    <h2 class="f-12 lh-12 uppercase clr-99ACB6">
                                        Prepare Legacy
                                    </h2>
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
                        <div class="d-grid gap-10 col-lg-1 mb-25">
                            <div class="d-flex align-center justify-space-between gap-10">
                                <p class="f-14 clr-99ACB6 lh-14">Gross Estate</p>
                                <span class="white f-16 lh-18">$45.5M</span>
                            </div>
                            <div class="d-flex align-center justify-space-between gap-10">
                                <p class="f-14 clr-99ACB6 lh-14">Projected Tax (Current)</p>
                                <span class="white f-16 lh-18">$12.4M</span>
                            </div>

                            <div class="d-flex align-center justify-space-between gap-10">
                                <p class="f-14 clr-99ACB6 lh-14">Net to Heirs</p>
                                <span class="clr-4FC07C f-16 lh-18">$33.1M</span>
                            </div>


                        </div>
                        <div class="d-flex gap-18 flex-col">
                            <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-131927 justify-center bold">Launch Interactive Scenario</a>
                            <a href="#" class="border-none cus-btn f-14 d-flex justify-center bold">Need to check</a>
                        </div>
                    </div>
                    <div class="card p-32-24 bg-0B1417-50 border-white-24">
                        <div class="d-flex mb-16 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12">
                                <!-- <div class="card-cont">
                                        <h2 class="f-14 lh-16 uppercase neutral-300 mb-4">
                                            Protect what matters
                                        </h2>
                                        <h3 class="f-20 lh-22 white">
                                            Risk & Insurance
                                        </h3>
                                    </div> -->



                                <div class="card-cont">
                                    <h3 class="f-16 lh-16 white mb-8">
                                        Asset Protection
                                    </h3>
                                    <h2 class="f-12 lh-12 uppercase clr-99ACB6">
                                        Asset Protection
                                    </h2>
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

                        <div class="d-grid col-lg-2 gap-12 mb-20">

                            <div class="bg-white-3 br-6 p-10">
                                <p class="f-12 clr-99ACB6 lh-14 mb-6 uppercase">
                                    Score
                                </p>
                                <h2 class="f-16 lh-16 clr-A7DFBD">
                                    85%
                                </h2>
                            </div>

                            <div class="bg-white-3 br-6 p-10">
                                <p class="f-12 clr-99ACB6 lh-14 mb-6 uppercase">
                                    Entities
                                </p>
                                <h2 class="f-16 lh-18 white">
                                    2 lLC+1 FLP
                                </h2>
                            </div>

                        </div>

                        <div class="d-flex align-center justify-space-between gap-10 mb-32">
                            <p class="f-12 clr-99ACB6 lh-14">Vulnerabilities</p>
                            <span class="clr-red-400 f-14 lh-16">1 Uninsulated</span>
                        </div>
                        <!-- <a href="#" class="cus-btn f-14 d-flex justify-center">View Protection Map</a> -->
                        <a href="#" class="cus-btn f-14 bg-light-green d-flex justify-center border-none">View Protection Map</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection