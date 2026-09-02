@extends('layouts.app')

@section('title','Networth')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-14">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Net Worth
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
            <div class="bg-0B1417 p-32 br-12 border-E9E7DD-24 d-flex justify-space-between gap-10 w-100">
                <div>
                    <div class="d-flex gap-8 align-center mb-28">
                        <p class="f-13 uppercase lh-14 clr-99ACB6">
                            CONSOLIDATED NET WORTH
                        </p>
                        <span class="bg-C5A059-10 br-4 p-4-8 f-14 lh-14 clr-C5A059">
                            Q2 REPORT
                        </span>
                    </div>
                    <div>
                        <h3 class="h3 f-24 lh-26 white mb-12">
                            $47,250,000
                        </h3>

                        <div class="d-flex gap-8 align-center">
                            <p class="f-16 lh-18 clr-7BD09D">
                                ▲ +$2,180,000 (+4.8%)
                            </p>
                            <p class="f-14 lh-16 neutral-300">
                                vs. Prior Period (03/31/2025)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-col gap-8">
                    <h3 class="f-14 lh-16 white uppercase ls-054">
                        6-Period Statement Trend
                    </h3>
                    <div id="period-graph">
                        <img src="{{ asset('images/sparkline-container.svg') }}" alt="search icon">
                    </div>
                    <div class="d-flex align-center justify-space-between">
                        <p class="f-14 lh-14 clr-99ACB6">
                            Q1-2024
                        </p>
                        <p class="f-14 lh-14 clr-99ACB6">
                            Q2-2025
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-0B1417 br-12 border-E9E7DD-24 p-32 d-flex gap-20 flex-col w-100">
                <h2 class="f-16 lh-12 white-80">
                    Net Worth Composition Stack
                </h2>
            </div>

            <div class="d-grid gap-24 col-lg-2 w-100">
                <div class="bg-0B1417 p-32 br-12 border-E9E7DD-24 d-flex justify-space-between gap-24 w-100 flex-col">
                    <div class="d-flex gap-10 justify-space-between w-100">
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-4 flex-col">
                                <p class="f-14 clr-99ACB6 lh-16 ls-054">
                                    TOTAL ASSETS
                                </p>
                                <h3 class="f-24 lh-26 white">
                                    $52,800,000
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex flex-col gap-4">
                            <p class="f-14 lh-16 clr-7BD09D right">
                                ▲ +3.2%
                            </p>
                            <p class="f-11 lh-12 clr-99ACB6 right">
                                vs. Q1
                            </p>
                        </div>
                    </div>
                    <div class="d-grid gap-24 asset-grid">
                        <div class="total-assets">
                            <img src="{{ asset('images/donut-chart-mock.svg') }}" alt="total assets chart icon">
                        </div>
                        <div class="assets-content d-flex gap-10 justify-space-between align-center flex-col">
                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-blue-400 w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Investments
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        35%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-indigo w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Real Estate
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        28%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-EE60E0 w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Concentrated Stock
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        22%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="light-pink w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Cash & Equivalents
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        8%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-AFCCA1 w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Other / Alternatives
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        7%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom-334155">

                    </div>
                    <a href="#" class="cus-link gap-4 f-14 d-flex">View Asset Details <span>→</span></a>
                </div>


                <div class="bg-0B1417 p-32 br-12 border-E9E7DD-24 d-flex justify-space-between gap-24 w-100 flex-col">
                    <div class="d-flex gap-10 justify-space-between w-100">
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <div class="d-flex gap-4 flex-col">
                                <p class="f-14 clr-99ACB6 lh-16 ls-054">
                                    TOTAL LIABILITIES
                                </p>
                                <h3 class="f-24 lh-26 white">
                                    $5,550,000
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex flex-col gap-4">
                            <p class="f-14 lh-16 clr-7BD09D right clr-yellow-300">
                                ▼ -2.1%
                            </p>
                            <p class="f-11 lh-12 clr-99ACB6 right">
                                vs. Q1
                            </p>
                        </div>
                    </div>
                    <div class="d-grid gap-24 asset-grid">
                        <div class="total-assets">
                            <img src="{{ asset('images/donut-chart-debt.svg') }}" alt="total debt chart icon">
                        </div>
                        <div class="assets-content d-flex gap-10 justify-space-between align-center flex-col">
                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-blue-400 w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Mortgages
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        54%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-indigo w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Securities-Backed
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        18%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-EE60E0 w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Business Debt
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        14%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="light-pink w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Lifestyle Financing
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        10%
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex gap-10 align-center justify-space-between w-100">
                                <div class="d-flex gap-8 align-center w-100">
                                    <span class="bg-AFCCA1 w-8 h-8">

                                    </span>
                                    <div class="right-col">
                                        <p class="f-13 lh-23 white">
                                            Personal / Consumer
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="f-13 lh-14 white">
                                        4%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom-334155">

                    </div>
                    <a href="#" class="cus-link gap-4 f-14 d-flex">View Liability Details <span>→</span></a>
                </div>
            </div>
            <div class="d-grid gap-24 col-lg-2 w-100 align-flex-start">
                <div class="bg-0B1417 border-E9E7DD-24 p-32-24 d-flex flex-col gap-20 br-12">
                    <h2 class="f-16 lh-12 white-80">
                        Key Financial Health Indicators
                    </h2>
                    <div class="d-grid gap-16 col-lg-3">
                        <div class="bg-C5A059-5 border-C5A059-30 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">
                                Liquidity Ratio
                            </p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">
                                    12%
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                            </div>
                            <p class="f-13 lh-18 white-80">
                                Target: >15% Liquid Assets
                            </p>
                        </div>

                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">
                                Debt-to-Asset
                            </p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">
                                    10.5%
                                </p>
                            </div>
                            <p class="f-13 lh-18 white-80">
                                Conservative Tier (< 20%)
                                    </p>
                        </div>

                        <div class="bg-C5A059-5 border-C5A059-30 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">
                                Concentration Risk
                            </p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">
                                    24%
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                            </div>
                            <p class="f-13 lh-18 white-80">
                                XYZ Corp Exceeds 15% Cap
                            </p>
                        </div>


                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">
                                Fixed / Variable Rate
                            </p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">
                                    62% / 38%
                                </p>
                            </div>
                            <p class="f-13 lh-18 white-80">
                                Variable exposure monitored
                            </p>
                        </div>

                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">
                                Undrawn Credit
                            </p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">
                                    $2,450,000
                                </p>
                            </div>
                            <p class="f-13 lh-18 white-80">
                                Immediate Liquidity Access
                            </p>
                        </div>

                        <div class="bg-0B1417 border-334155 br-8 p-16 d-flex gap-8 flex-col">
                            <p class="f-11 lh-12 clr-99ACB6">
                                12-Mo Maturities
                            </p>
                            <div class="d-flex gap-8 align-center">
                                <p class="f-16 lh-18 white">
                                    $875,000
                                </p>
                            </div>
                            <p class="f-13 lh-18 white-80">
                                Refinancing scheduled
                            </p>
                        </div>

                    </div>
                </div>
                <div class="bg-0B1417 border-E9E7DD-24 p-32-24 d-flex flex-col gap-20 br-12">
                    <h2 class="f-16 lh-12 white-80">
                        Alerts & Items Requiring Attention
                    </h2>
                    <div class="d-flex gap-12 flex-col">
                        <div class="d-flex gap-12 p-12 align-center bg-000A0F br-8 border-C5A059-30">
                            <div class="danger-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                            </div>
                            <div class="cont f-13 lh-20 white">
                                Concentrated stock position (XYZ Corp) at 24% of net worth - exceeds your family office threshold of 15%.
                            </div>
                        </div>
                        <div class="d-flex gap-12 p-12 align-center bg-000A0F br-8 border-C5A059-30">
                            <div class="danger-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                            </div>
                            <div class="cont f-13 lh-20 white">
                                SBLOC balance is approaching 65% LTV margin threshold (current: 58%). Alert trigger set at 60%.
                            </div>
                        </div>
                        <div class="d-flex gap-12 p-12 align-center bg-000A0F br-8 border-C5A059-30">
                            <div class="danger-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                            </div>
                            <div class="cont f-13 lh-20 white">
                                $875,000 in debt is maturing within 12 months. Requesting refinancing review.
                            </div>
                        </div>
                        <div class="d-flex gap-12 p-12 align-center bg-000A0F br-8 border-C5A059-30">
                            <div class="danger-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path d="M0.000355124 13.0938L7.7049 0.00284004L15.4094 13.0938H0.000355124ZM7.7049 11.6278C7.99657 11.6278 8.24467 11.5256 8.44922 11.321C8.65755 11.1127 8.76172 10.8627 8.76172 10.571C8.76172 10.2794 8.65755 10.0312 8.44922 9.8267C8.24467 9.61837 7.99657 9.5142 7.7049 9.5142C7.41323 9.5142 7.16323 9.61837 6.9549 9.8267C6.75036 10.0312 6.64808 10.2794 6.64808 10.571C6.64808 10.8627 6.75036 11.1127 6.9549 11.321C7.16323 11.5256 7.41323 11.6278 7.7049 11.6278ZM7.01172 8.23011H8.39808L8.50036 4.36648H6.90945L7.01172 8.23011Z" fill="#C5A059" />
                                </svg>
                            </div>
                            <div class="cont f-13 lh-20 white">
                                Estimated tax liability on unrealized gains is currently $1,850,000.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid col-lg-3 gap-16 bg-0B1417 p-32-24">
                <div class="cont">
                    <p class="f-12 lh-20 clr-EDECE4">
                        CONFIDENTIAL REPORT • BM Private Office • Strictly Private & Confidential. Unauthorized distribution prohibited.
                    </p>
                </div>
                <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-18 d-flex justify-center bold">Download Full Statement (PDF)</a>
                <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-18 d-flex justify-center bold">Schedule Portfolio Review</a>
            </div>
        </div>
    </div>

</div>

@endsection