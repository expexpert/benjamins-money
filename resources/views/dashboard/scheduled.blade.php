@extends('layouts.app')

@section('title','Scheduled specifications page')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/compliance') }}">
            Compliance Audit
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Scheduled
        </p>

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

<div class="dash-cont-outer">
    <div class="dash-cont-inner">
        <div class="d-grid col-lg-2 gap-26 mb-48">
            <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                <div class="d-flex gap-16 mb-24 align-center">
                    <div class="bg-e9e7dd1a w-30 h-30 br-6 d-flex align-center justify-center">
                        <div class="w-15 h-15 bg-108476 br-100">

                        </div>
                    </div>
                    <div class="card-cont-inner">
                        <h3 class="f-18 lh-12 mb-8 clr-7BD09D">
                            Scheduled
                        </h3>
                        <p class="f-12 lh-10 clr-99ACB6 uppercase">
                            Trade confirmed and Broker queued
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-16 flex-col">
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300 uppercase">
                            Trade ID
                        </h4>
                        <h3 class="f-16 white">
                            AMZN-2026-0815
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300 uppercase">
                            EXECUTION DATE
                        </h4>
                        <h3 class="f-16 white">
                            August 15, 2026
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300 uppercase">
                            Brokerage
                        </h4>
                        <h3 class="f-16 white">
                            Morgan Stanley Private Wealth
                        </h3>
                    </div>
                </div>
            </div>

            <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                <div class="d-flex gap-10 justify-space-between mb-24 align-center">
                    <div class="d-flex gap-16 align-center">
                        <div class="bg-e9e7dd1a w-30 h-30 br-6 d-flex align-center justify-center">
                            <div class="w-15 h-15 bg-108476 br-100">

                            </div>
                        </div>
                        <h3 class="f-12 white-80 lh-10 uppercase">
                            Status
                        </h3>
                    </div>
                    <div class="f-16 lh-12 clr-7BD09D">
                        Compliant
                    </div>
                </div>
                <div class="d-flex gap-16 flex-col">
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-13 lh-10 clr-99ACB6 uppercase">
                            Rule 10b5-1
                        </h4>
                        <h3 class="f-16 lh-12 white">
                            Active
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-13 lh-10 clr-99ACB6 uppercase">
                            Cooling Period
                        </h4>
                        <h3 class="f-16 lh-12 white">
                            Expired (07/15)
                        </h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-grid col-lg-2 gap-26 mb-48">

            <div class="col-outer">
                <h3 class="f-16 lh-12 white-80 mb-16">
                    Insider Trading Window
                </h3>
                <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-10 flex-col">
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                volume
                            </h4>
                            <h3 class="f-16 lh-20 white">
                                1,200 shares
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                order type
                            </h4>
                            <h3 class="f-16 lh-20 white">
                                Market-at-Open
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                Price floor
                            </h4>
                            <h3 class="f-16 lh-20 white right">
                                $85.00
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                Current market price
                            </h4>
                            <div class="d-flex flex-col gap-4">
                                <h3 class="f-16 lh-20 white right">
                                    $85.00
                                </h3>
                                <span class="f-12 lh-14 clr-99ACB6 capitalize">
                                    (as of May 12, 2026, 4:00 pM EST)
                                </span>
                            </div>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                Est. Gross Value
                            </h4>
                            <div class="d-flex flex-col gap-4">
                                <h3 class="f-16 lh-20 white right">
                                    $107,400
                                </h3>
                                <span class="f-12 lh-14 clr-99ACB6 capitalize">
                                    (Based on current market price)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-outer">
                <h3 class="f-16 lh-12 white-80 mb-16">
                    Withholding Strategy
                </h3>
                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-10 flex-col mb-38">
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                Federal tAX
                            </h4>
                            <h3 class="f-16 lh-20 white">
                                22%
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                State tAX
                            </h4>
                            <h3 class="f-16 lh-20 white">
                                0% (FL Residency)
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <!-- <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                Price floor
                            </h4>
                            <h3 class="f-16 lh-20 white">
                                $85.00
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div> -->
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                Fica
                            </h4>
                            <h3 class="f-16 lh-20 white right">
                                7.65%
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 lh-16 clr-99ACB6 uppercase">
                                Strategy
                            </h4>
                            <h3 class="f-16 lh-20 white right">
                                Sell to cover
                            </h3>
                        </div>
                    </div>
                    <div class="bg-000A0F p-10-31 f-14 lh-22 neutral-300 br-8 center">
                        Note: Estimated proceeds subject to market execution price.
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex flex-col">
            <h3 class="f-16 lh-12 white-80 mb-16">
                Liquidity Forecast
            </h3>
            <div class="d-grid col-lg-7-3 gap-32">
                <div class="col-outer">
                    <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                        <div class="d-grid col-lg-6-4 mb-32 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/calendar-green.svg') }}" alt="weight icon">
                                </div>
                                <div>
                                    <p class="f-16 lh-16 white mb-8">
                                        August16, 2026 (T+1)
                                    </p>
                                    <h3 class="f-12 lh-12 ls-1 clr-99ACB6">
                                        EXPECTED SETTLEMENT
                                    </h3>
                                </div>
                            </div>
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/dollar-green.svg') }}" alt="weight icon">
                                </div>
                                <div>
                                    <p class="f-16 lh-16 white mb-8">
                                        $74,230
                                    </p>
                                    <h3 class="f-12 lh-12 ls-1 clr-99ACB6">
                                        ESTIMATED NET LIQUIDITY
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-000A0F p-24-14 br-12 mb-32">
                            <div class="d-flex gap-10 justify-space-between align-center mb-24  ">
                                <div class="f-16 lh-20 white">
                                    Trade Executed
                                </div>
                                <div class="img-outer d-flex align-center">
                                    <!-- <img src="{{ asset('images/long-arrow.svg') }}" alt="arrow"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                                        <path d="M19 7L1 7M13 1L19 7L13 13" stroke="#A7DFBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="f-16 lh-20 white">
                                    Taxes withheld
                                </div>
                                <div class="img-outer d-flex align-center">
                                    <!-- <img src="{{ asset('images/long-arrow.svg') }}" alt="arrow"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                                        <path d="M19 7L1 7M13 1L19 7L13 13" stroke="#A7DFBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="f-16 lh-20 white">
                                    cash deposited
                                </div>
                            </div>
                            <div class="p-11-29 border-B0B7CA-40 br-8 f-14 lh-22 white-80">
                                Final amount may vary based on actual execution price and market conditions.
                            </div>
                        </div>

                        <div class="d-grid col-lg-2 gap-30">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Notify Advisor</a>
                            <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-prm-900 justify-center bold align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                    <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#101010" stroke-width="1.25" stroke-linecap="round"></path>
                                </svg>
                                Sync to Calendar
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-outer">
                    <div class="bg-072312 p-32-24 br-8">
                        <p class="f-12 lh-14 clr-A7DFBD mb-12 uppercase ls-1">
                            Advisor’s note
                        </p>
                        <div class="f-16 lh-22 white">
                            Trade aligns with diversification strategy approved Q2, 2026
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection