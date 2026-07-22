@extends('layouts.app')

@section('title','Scheduled')

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
            <div class="breadcrumb">
                <a class="d-flex gap-8 f-16 neutral-300" href="#">
                    <img src="{{ asset('images/prev-arrow.svg') }}" alt="search icon">
                    Compliance
                </a>
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

        <div class="d-grid col-lg-2 gap-32 mb-48">
            <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                <div class="d-flex gap-16 mb-24 align-center">
                    <div class="bg-e9e7dd1a w-30 h-30 br-6 d-flex align-center justify-center">
                        <div class="w-15 h-15 bg-23B05B br-100">

                        </div>
                    </div>
                    <div class="card-cont-inner">
                        <h3 class="f-18 lh-12 mb-4 clr-23B05B">
                            Scheduled
                        </h3>
                        <p class="f-12 uppercase">
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

            <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                <div class="d-flex gap-10 justify-space-between">
                    <div class="d-flex gap-16 mb-24 align-center">
                        <div class="bg-e9e7dd1a w-30 h-30 br-6 d-flex align-center justify-center">
                            <div class="w-15 h-15 bg-23B05B br-100">

                            </div>
                        </div>
                        <h3 class="f-12 white uppercase">
                            Status
                        </h3>
                    </div>
                    <div class="f-16 clr-23B05B">
                        Compliant
                    </div>
                </div>
                <div class="d-flex gap-16 flex-col">
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300 uppercase">
                            Rule 10b5-1
                        </h4>
                        <h3 class="f-16 white">
                            Active
                        </h3>
                    </div>
                    <div class="border-bottom-white-24">

                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <h4 class="f-12 neutral-300 uppercase">
                            Cooling Period
                        </h4>
                        <h3 class="f-16 white">
                            Expired (07/15)
                        </h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-grid col-lg-2 gap-32">

            <div class="col-outer">
                <h3 class="f-14 neutral-300 uppercase mb-16">
                    INSIDER TRADING WINDOW
                </h3>
                <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-16 flex-col">
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                volume
                            </h4>
                            <h3 class="f-16 white">
                                1,200 shares
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                order type
                            </h4>
                            <h3 class="f-16 white">
                                Market-at-Open
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                Price floor
                            </h4>
                            <h3 class="f-16 white right">
                                $85.00
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                Current market price
                            </h4>
                            <div class="d-flex flex-col gap-4">
                                <h3 class="f-16 white right">
                                    $85.00
                                </h3>
                                <span class="f-12 neutral-300 capitalize">
                                    (as of May 12, 2026, 4:00 pM EST)
                                </span>
                            </div>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                Est. Gross Value
                            </h4>
                            <div class="d-flex flex-col gap-4">
                                <h3 class="f-16 white right">
                                    $107,400
                                </h3>
                                <span class="f-12 neutral-300 capitalize">
                                    (Based on current market price)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-outer">
                <h3 class="f-14 neutral-300 uppercase mb-16">
                    Withholding Strategy
                </h3>
                <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-16 flex-col mb-40">
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                Federal tAX
                            </h4>
                            <h3 class="f-16 white">
                                22%
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                State tAX
                            </h4>
                            <h3 class="f-16 white">
                                0% (FL Residency)
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                Price floor
                            </h4>
                            <h3 class="f-16 white">
                                $85.00
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                Fica
                            </h4>
                            <h3 class="f-16 white right">
                                7.65%
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between">
                            <h4 class="f-12 neutral-300 uppercase">
                                Strategy
                            </h4>
                            <h3 class="f-16 white right">
                                Sell to cover
                            </h3>
                        </div>
                    </div>
                    <div class="bg-neutral-5 p-10-31 f-14 neutral-300 br-4 center">
                        Note: Estimated proceeds subject to market execution price.
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex flex-col">
            <h3 class="f-14 neutral-300 uppercase mb-16">
                Liquidity Forecast
            </h3>
            <div class="d-grid col-lg-7-3 gap-32">
                <div class="col-outer">
                    <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                        <div class="d-grid col-lg-6-4 mb-32 gap-10px justify-space-between align-flex-start">
                            <div class="d-flex gap-12">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/uit_calender.svg') }}" alt="weight icon">
                                </div>
                                <div>
                                    <h3 class="f-14 lh-16 neutral-300 uppercase">
                                        EXPECTED SETTLEMENT
                                    </h3>
                                    <p class="f-20 white">
                                        August16, 2026 (T+1)
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex gap-12">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/dollar.svg') }}" alt="weight icon">
                                </div>
                                <div>
                                    <h3 class="f-14 lh-16 neutral-300 uppercase">
                                        Estimated net liquidity
                                    </h3>
                                    <p class="f-20 white">
                                        August16, 2026 (T+1)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-E9E7DD-4 p-24-14 br-12 mb-48">
                            <div class="d-flex gap-10 justify-space-between align-center mb-24  ">
                                <div class="f-16 white">
                                    Trade Executed
                                </div>
                                <div class="img-outer d-flex align-center">
                                    <img src="{{ asset('images/long-arrow.svg') }}" alt="arrow">
                                </div>
                                <div class="f-16 white">
                                    Taxes withheld
                                </div>
                                <div class="img-outer d-flex align-center">
                                    <img src="{{ asset('images/long-arrow.svg') }}" alt="arrow">
                                </div>
                                <div class="f-16 white">
                                    cash deposited
                                </div>
                            </div>
                            <div class="p-11-29 border-B0B7CA-40 br-8 f-14 white-80">
                                Final amount may vary based on actual execution price and market conditions.
                            </div>
                        </div>

                        <div class="d-grid col-lg-2 gap-30">
                            <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-prm-900 justify-center">Sync to Calendar</a>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center">Notify Advisor</a>
                        </div>
                    </div>
                </div>

                <div class="col-outer">
                    <div class="bg-125D34 p-32-22 br-8">
                        <p class="f-14 white mb-10">
                            Advisor’s note
                        </p>
                        <div class="f-16 white">
                            Trade aligns with diversification strategy approved Q2, 2026
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection