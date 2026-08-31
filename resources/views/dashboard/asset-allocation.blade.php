@extends('layouts.app')

@section('title', 'Asset Allocation')

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
                        Portfolio Allocation (By Source)
                    </h3>
                </div>
                <div class="d-grid col-2-1 gap-24 w-100">
                    <div class="left-box d-flex flex-col gap-32">
                        <div class="bg-0B1417 br-12 p-32 border-E9E7DD-24">
                            <div class="d-flex gap-12 align-center mb-32">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/portfolio.svg') }}" alt="net worth icon">
                                </div>
                                <div>
                                    <h3 class="f-16 lh-16 mb-8 white">
                                        Total Portfolio
                                    </h3>
                                    <p class="f-12 lh-12 ls-042 uppercase clr-99ACB6">
                                        5 Accounts
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex flex-col">
                                <div class="d-grid col-lg-3 gap-40 mb-24">
                                    <div>
                                        <p class="f-13 lh-15 uppercase clr-99ACB6">
                                            ASSET CLASS
                                        </p>
                                    </div>
                                    <div>
                                        <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                            VALUE
                                        </p>

                                    </div>
                                    <div>
                                        <p class="f-13 lh-15 clr-99ACB6 right">
                                            % OF PORTFOLIO
                                        </p>
                                    </div>
                                </div>

                                <div class="d-grid col-lg-3 gap-40 mb-16">
                                    <div>
                                        <p class="f-16 lh-15 white">
                                            Concentrated Stock
                                        </p>
                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white center">
                                            $7,750,000
                                        </p>

                                    </div>
                                    <div class="d-flex gap-8 align-center justify-end ">
                                        <img src="{{ asset('images/danger-triangle.svg') }}" alt="net worth icon">

                                        <p class="f-16 lh-15 clr-red-300">
                                            62.12%
                                        </p>
                                    </div>
                                </div>

                                <div class="border-bottom-E9E7DD-24 mb-16">

                                </div>

                                <div class="d-grid col-lg-3 gap-40 mb-24">
                                    <div>
                                        <p class="f-16 lh-15 white">
                                            Diversified Equity
                                        </p>
                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white center">
                                            $3,340,500
                                        </p>

                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white right">
                                            26.78%
                                        </p>
                                    </div>
                                </div>

                                <div class="border-bottom-E9E7DD-24 mb-16">

                                </div>

                                <div class="d-grid col-lg-3 gap-40 mb-16">
                                    <div>
                                        <p class="f-16 lh-15 white">
                                            Fixed Income
                                        </p>
                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white center">
                                            $1,187,000
                                        </p>

                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white right">
                                            9.52%
                                        </p>
                                    </div>
                                </div>

                                <div class="border-bottom-E9E7DD-24 mb-16">

                                </div>

                                <div class="d-grid col-lg-3 gap-40 mb-16">
                                    <div>
                                        <p class="f-16 lh-15 white">
                                            Alts / PE
                                        </p>
                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white center">
                                            $623,750
                                        </p>

                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white right">
                                            5%
                                        </p>
                                    </div>
                                </div>


                                <div class="border-bottom-E9E7DD-24 mb-16">

                                </div>
                                <div class="d-grid col-lg-3 gap-40 mb-16">
                                    <div>
                                        <p class="f-16 lh-15 white">
                                            Cash
                                        </p>
                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white center">
                                            $197,500
                                        </p>

                                    </div>
                                    <div>
                                        <p class="f-16 lh-15 white right">
                                            1.58%
                                        </p>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="d-flex gap-16 flex-col">
                            <h3 class="f-16 lh-11 white-80">
                                Asset Class Summary
                            </h3>
                            <div class="p-32 bg-0B1417 border-E9E7DD-24 br-12">
                                <div class="d-flex align-center justify-space-between w-100 mb-26">
                                    <div class="d-flex gap-12 align-center">
                                        <div class="notification-outer w-38 h-38">
                                            <img src="{{ asset('images/portfolio.svg') }}" alt="net worth icon">
                                        </div>
                                        <div>
                                            <h3 class="f-16 lh-16 white">
                                                Concentration Risk
                                            </h3>
                                        </div>
                                    </div>
                                    <a href="#" class="br-8 p-2-8 btn-light-yellow f-11 lh-14 d-inline-flex gap-6 align-center border-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M8.74963 6.125V10.25M8.74963 12.6852V12.3102M4.23463 7.8215C6.20563 3.94025 7.18963 2 8.74963 2C10.3096 2 11.2944 3.94025 13.2646 7.8215L13.5099 8.3045C15.1464 11.5295 15.9654 13.142 15.2251 14.321C14.4856 15.5 12.6556 15.5 8.99488 15.5H8.50438C4.84438 15.5 3.01363 15.5 2.27413 14.321C1.53463 13.142 2.35288 11.5295 3.98938 8.3045L4.23463 7.8215Z" stroke="#A06F11" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        High
                                    </a>
                                </div>
                                <div class="d-grid col-lg-2 gap-80 mb-45">
                                    <div class="left d-flex gap-15 flex-col">
                                        <div class="d-flex flex-col">
                                            <h2 class="f-16 lh-18 white">
                                                $7,750,000
                                            </h2>
                                            <p class="f-14 lh-20 clr-red clr-99ACB6">
                                                Amazon Exposure
                                            </p>
                                        </div>
                                        <div class="border-E9E7DD-24">

                                        </div>
                                        <div class="d-flex flex-col">
                                            <h2 class="f-16 lh-18 white">
                                                62.12%
                                            </h2>
                                            <p class="f-14 lh-20 clr-red clr-99ACB6">
                                                of portfolio
                                            </p>
                                        </div>
                                        <div class="border-E9E7DD-24">

                                        </div>
                                        <div class="d-flex flex-col">
                                            <h2 class="f-16 lh-18 white">
                                                6.2x
                                            </h2>
                                            <p class="f-14 lh-20 clr-red clr-99ACB6">
                                                above recommended
                                            </p>
                                        </div>
                                    </div>
                                    <div class="right">

                                        <img src="{{ asset('images/gauge-mount.svg') }}" alt="search icon">
                                    </div>
                                </div>

                                <div class="d-grid col-lg-4 gap-40">
                                    <div class="d-flex gap-6 align-center">
                                        <div class="w-8 h-8 bg-red-400 br-100">
                                        </div>
                                        <p class="f-11 lh-12 clr-99ACB6">
                                            Critical (76%+)
                                        </p>
                                    </div>
                                    <div class="d-flex gap-6 align-center">
                                        <div class="w-8 h-8 bg-FECA2A br-100">
                                        </div>
                                        <p class="f-11 lh-12 clr-99ACB6">
                                            Warning (60%-75%)
                                        </p>
                                    </div>
                                    <div class="d-flex gap-6 align-center">
                                        <div class="w-8 h-8 bg-94C530 br-100">
                                        </div>
                                        <p class="f-11 lh-12 clr-99ACB6">
                                            Monitor (21%-59%)
                                        </p>
                                    </div>
                                    <div class="d-flex gap-6 align-center">
                                        <div class="w-8 h-8 bg-4FC07C br-100">
                                        </div>
                                        <p class="f-11 lh-12 clr-99ACB6">
                                            Secure (0%-20%)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="right-box">
                        <div class="risk-card bg-0B1417 br-12 border-E9E7DD-24 p-32-24">
                            <div class="risk-card-header d-flex align-center gap-10 justify-space-between">
                                <div>
                                    <div class="risk-title f-14 lh-14 clr-99ACB6 uppercase mb-8">CONCENTRATED RISK</div>
                                    <div class="risk-value f-20 lh-22 white mb-16">$7,750,000</div>
                                    <p class="f-15 lh-15 clr-red-300 bold">
                                        62.12%
                                    </p>
                                </div>

                                <span class="risk-card-arrow w-15">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>

                            <div class="risk-card-content pt-24">
                                <div class="d-flex flex-col gap-15">
                                    <div class="d-grid gap-10 align-center">
                                        <div class="left">
                                            <p class="f-14 lh-16 clr-99ACB6 mb-8">
                                                Amazon Stock Awards, Fidelity
                                            </p>
                                            <p class="f-16 lh-16 white">
                                                $7,500,000
                                            </p>
                                        </div>
                                        <div class="right-col">
                                            <p class="f-18 lh-18 white">
                                                60.16%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border-bottom-E9E7DD-60">

                                    </div>
                                    <div class="d-grid gap-10 align-center">
                                        <div class="left">
                                            <p class="f-14 lh-16 clr-99ACB6 mb-8">
                                                AMZN Stock in 401k
                                            </p>
                                            <p class="f-16 lh-16 white">
                                                $250,000
                                            </p>
                                        </div>
                                        <div class="right-col">
                                            <p class="f-18 lh-18 white">
                                                2.00%
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="risk-card bg-0B1417 br-12 border-E9E7DD-24 p-32-24">
                            <div class="risk-card-header d-flex align-center gap-10 justify-space-between">
                                <div>
                                    <div class="risk-title f-14 lh-14 clr-99ACB6 uppercase mb-8">DIVERSIFIED EQUITY</div>
                                    <div class="risk-value f-20 lh-22 white mb-16">$3,340,500</div>
                                    <p class="f-15 lh-15 clr-red-300 bold">
                                        9.52%
                                    </p>
                                </div>

                                <span class="risk-card-arrow w-15">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>

                            <div class="risk-card-content pt-24">
                                <div class="d-flex flex-col gap-15">
                                    <div class="d-grid gap-10 align-center">
                                        <div class="left">
                                            <p class="f-14 lh-16 clr-99ACB6 mb-8">
                                                Amazon Fidelity Awards
                                            </p>
                                            <p class="f-16 lh-16 white">
                                                $7,500,000
                                            </p>
                                        </div>
                                        <div class="right-col">
                                            <p class="f-18 lh-18 white">
                                                60.16%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border-bottom-E9E7DD-60">

                                    </div>
                                    <div class="d-grid gap-10 align-center">
                                        <div class="left">
                                            <p class="f-14 lh-16 clr-99ACB6 mb-8">
                                                AMZN Stock in 401k
                                            </p>
                                            <p class="f-16 lh-16 white">
                                                $250,000
                                            </p>
                                        </div>
                                        <div class="right-col">
                                            <p class="f-18 lh-18 white">
                                                2.00%
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


<div class="risk-card-content pt-24">
                                <div class="d-flex flex-col gap-15">
                                    <div class="d-grid gap-10 align-center">
                                        <div class="left">
                                            <p class="f-14 lh-16 clr-99ACB6 mb-8">
                                                Amazon Fidelity Awards
                                            </p>
                                            <p class="f-16 lh-16 white">
                                                $7,500,000
                                            </p>
                                        </div>
                                        <div class="right-col">
                                            <p class="f-18 lh-18 white">
                                                60.16%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border-bottom-E9E7DD-60">

                                    </div>
                                    <div class="d-grid gap-10 align-center">
                                        <div class="left">
                                            <p class="f-14 lh-16 clr-99ACB6 mb-8">
                                                AMZN Stock in 401k
                                            </p>
                                            <p class="f-16 lh-16 white">
                                                $250,000
                                            </p>
                                        </div>
                                        <div class="right-col">
                                            <p class="f-18 lh-18 white">
                                                2.00%
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

@endsection