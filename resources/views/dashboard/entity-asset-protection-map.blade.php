@extends('layouts.app')

@section('title', 'Entity & Asset Protection Map')

@section('content')

<div class="heading-bar d-flex justify-space-between">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Entity & Asset Protection Map
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
        <div class="card-outer d-flex gap-48 align-flex-start flex-col">
            <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                <div class="card-header">
                    <h3 class="f-16 lh-11">
                        Financial Snapshot
                    </h3>
                </div>
                <div class="d-grid col-lg-4 gap-13 w-100">
                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-16 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                    <path d="M16.7207 8.35983V12.9191H12.1604M16.7207 12.9191L10.2602 6.46013L6.45993 10.2595L1.51953 5.32031" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Realised Losses
                                </p>
                                <!-- <h3 class="f-16 white">
                                            Net Worth
                                        </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 clr-7BD09D">
                                $142,300
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                YTD
                            </div>

                        </div>

                    </div>

                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-16 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17" viewBox="0 0 15 17" fill="none">
                                    <path d="M0.957479 9.60778C1.07928 9.68425 1.22027 9.72458 1.36407 9.72409H6.68347C6.80639 9.72369 6.92757 9.75311 7.03662 9.80985C7.14567 9.86658 7.23933 9.94893 7.30957 10.0498C7.37981 10.1507 7.42453 10.2671 7.4399 10.3891C7.45526 10.5111 7.44081 10.635 7.39779 10.7501L5.93876 15.3256C5.9159 15.4087 5.92197 15.4971 5.95598 15.5764C5.98999 15.6556 6.0499 15.7208 6.1259 15.7615C6.2019 15.8022 6.28945 15.8158 6.3742 15.8001C6.45895 15.7844 6.53585 15.7404 6.59228 15.6752L14.1154 7.92278C14.206 7.81108 14.2631 7.67597 14.28 7.53313C14.2968 7.3903 14.2728 7.24561 14.2108 7.11587C14.1487 6.98613 14.0511 6.87667 13.9293 6.80021C13.8075 6.72374 13.6665 6.68341 13.5227 6.6839H8.2033C8.08038 6.6843 7.9592 6.65488 7.85015 6.59814C7.7411 6.54141 7.64744 6.45906 7.5772 6.35817C7.50696 6.25728 7.46224 6.14085 7.44688 6.01887C7.43151 5.89689 7.44596 5.77301 7.48898 5.65784L8.94802 1.08237C8.97087 0.999258 8.9648 0.910843 8.9308 0.831638C8.89679 0.752432 8.83687 0.687144 8.76087 0.646488C8.68488 0.605832 8.59732 0.592224 8.51257 0.607899C8.42783 0.623574 8.35092 0.6676 8.29449 0.73275L0.771335 8.48521C0.680738 8.59691 0.623688 8.73202 0.606813 8.87486C0.589938 9.01769 0.613931 9.16238 0.676004 9.29212C0.738077 9.42186 0.835682 9.53132 0.957479 9.60778Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Tax Alpha Created
                                </p>
                                <!-- <h3 class="f-16 white">
                                            Net Worth
                                        </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 white">
                                $42,900
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <!-- <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats"> -->
                                14.2% vs prior year
                            </div>

                        </div>

                    </div>

                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-16 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                    <path d="M3.64126 3.64181H9.72065M9.72065 9.72229V12.7625M9.72065 6.68205H9.72825M6.68095 6.68205H6.68855M3.64126 6.68205H3.64886M6.68095 9.72229H6.68855M3.64126 9.72229H3.64886M6.68095 12.7625H6.68855M3.64126 12.7625H3.64886M2.12141 0.601562H11.2405C12.0799 0.601562 12.7603 1.28214 12.7603 2.12168V14.2827C12.7603 15.1222 12.0799 15.8028 11.2405 15.8028H2.12141C1.28202 15.8028 0.601562 15.1222 0.601562 14.2827V2.12168C0.601562 1.28214 1.28202 0.601562 2.12141 0.601562Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Net Benefit (Est.)
                                </p>
                                <!-- <h3 class="f-16 white">
                                            Net Worth
                                        </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 white">
                                $38,400
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <!-- <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats"> -->
                                After est. tax impact
                            </div>

                        </div>

                    </div>
                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-16 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                    <path d="M4.40118 8.20181L5.92103 9.72186L8.96073 6.68176M12.7603 8.96217C12.7603 12.7623 10.1006 14.6624 6.93933 15.7644C6.77379 15.8205 6.59397 15.8178 6.43018 15.7568C3.2613 14.6624 0.601562 12.7623 0.601562 8.96217V3.642C0.601562 3.44043 0.681626 3.24712 0.824139 3.10458C0.966653 2.96205 1.15994 2.88198 1.36149 2.88198C2.88133 2.88198 4.78114 1.96995 6.10341 0.814711C6.26441 0.677146 6.4692 0.601562 6.68095 0.601562C6.8927 0.601562 7.0975 0.677146 7.2585 0.814711C8.58836 1.97755 10.4806 2.88198 12.0004 2.88198C12.202 2.88198 12.3953 2.96205 12.5378 3.10458C12.6803 3.24712 12.7603 3.44043 12.7603 3.642V8.96217Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Wash Sale Health
                                </p>
                                <!-- <h3 class="f-16 white">
                                            Net Worth
                                        </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 clr-7BD09D">
                                Compliant
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <!-- <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats"> -->
                                100 / 100
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="d-grid col-lg-2 gap-32 w-100">
                <div class="d-flex gap-16 flex-col">
                    <h3 class="f-16 lh-11 white-80">
                        Insider Trading Window
                    </h3>
                    <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                        <div class="d-flex gap-32 justify-space-between flex-col">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer">
                                    <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                        <path d="M4.60156 9.60228V5.60196C4.60156 4.27577 5.12835 3.0039 6.06603 2.06615C7.00371 1.12839 8.27548 0.601563 9.60156 0.601562C10.9276 0.601562 12.1994 1.12839 13.1371 2.06615C14.0748 3.0039 14.6016 4.27577 14.6016 5.60196V9.60228M2.60156 9.60228H16.6016C17.7061 9.60228 18.6016 10.4978 18.6016 11.6024V18.603C18.6016 19.7077 17.7061 20.6032 16.6016 20.6032H2.60156C1.49699 20.6032 0.601562 19.7077 0.601562 18.603V11.6024C0.601562 10.4978 1.49699 9.60228 2.60156 9.60228Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0 mb-4">
                                        Trust / Entity / Structure
                                    </p>
                                    <h3 class="f-12 lh-13 ls-042 clr-99ACB6 uppercase">
                                        A node-based diagram showing how assets are shielded
                                    </h3>
                                </div>
                            </div>

                            <div class="d-flex flex-col gap-8">
                                <div class="p-18-24 bg-000A0F border-E9E7DD-15 d-flex gap-10 align-center br-8">
                                    <div class="d-flex justify-space-between w-100">
                                        <div class="left-cont">
                                            <div class="d-flex gap-8 align-center">
                                                <h3 class="f-15 lh-18 white">
                                                    Revocable Living Trust
                                                </h3>
                                                <span class="bg-E9E7DD border-23B05B p-4-16 f-12 lh-12 clr-156A37 br-24 bold">Trust</span>
                                            </div>
                                            <div class="f-13 lh-14 clr-99ACB6">
                                                Realised Losses
                                            </div>
                                        </div>
                                        <div class="right-box">
                                            <f-20 class="lh-20 clr-7BD09D">
                                                $6.3M
                                            </f-20>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-18-24 bg-000A0F border-E9E7DD-15 d-flex gap-10 align-center br-8">
                                    <div class="d-flex justify-space-between w-100">
                                        <div class="left-cont">
                                            <div class="d-flex gap-8 align-center">
                                                <h3 class="f-15 lh-18 white">
                                                    LLC / Asset Holding Co.
                                                </h3>
                                                <span class="bg-E9E7DD border-23B05B p-4-16 f-12 lh-12 clr-156A37 br-24 bold">LLC</span>
                                            </div>
                                            <div class="f-13 lh-14 clr-99ACB6 mb-12">
                                                Real Estate / Vacation Fund
                                            </div>
                                            <div class="p-8 bg-9DDDD5-10 f-12 lh-12 clr-A7DFBD br-4">
                                                3 positions eligible for TLH - +$12,400 potential alpha
                                            </div>
                                        </div>
                                        <!-- <div class="right-box">
                                                <f-20 class="lh-20 clr-7BD09D">
                                                    $6.3M
                                                </f-20>
                                            </div> -->
                                    </div>
                                </div>
                                <div class="p-18-24 bg-000A0F border-E9E7DD-15 d-flex gap-10 align-center br-8">
                                    <div class="d-flex justify-space-between w-100">
                                        <div class="left-cont">
                                            <div class="d-flex gap-8 align-center mb-5">
                                                <h3 class="f-15 lh-18 white">
                                                    105b-1 Plan
                                                </h3>
                                                <span class="bg-E9E7DD border-23B05B p-4-16 f-12 lh-12 clr-156A37 br-24 bold">Plan</span>
                                            </div>
                                            <div class="f-13 lh-14 clr-99ACB6">
                                                Concentrated Stock
                                            </div>
                                        </div>
                                        <div class="right-box">
                                            <f-20 class="lh-20 clr-7BD09D">
                                                $11.1M
                                            </f-20>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="bg-108476-10 br-16 p-17-58 f-14 lh-20 neutral-300">
                                Protection Note: 3 positions within the LLC are currently eligible for Tax-Loss Harvesting. Proceeding will increase Tax Alpha by an estimated $12,400.
                            </div>

                        </div>

                    </div>
                </div>

                <div class="d-flex gap-16 flex-col">
                    <h3 class="f-16 lh-11 white-80">
                        Audit Trail & Filings
                    </h3>
                    <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                        <div class="d-flex gap-16 align-center mb-24">
                            <div class="notification-outer">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                                    <path d="M0.664068 7.25295C0.580727 7.47746 0.580727 7.72443 0.664068 7.94895C1.47577 9.91709 2.85358 11.5999 4.62284 12.784C6.39209 13.9682 8.47311 14.6003 10.6021 14.6003C12.731 14.6003 14.812 13.9682 16.5813 12.784C18.3506 11.5999 19.7284 9.91709 20.5401 7.94895C20.6234 7.72443 20.6234 7.47746 20.5401 7.25295C19.7284 5.2848 18.3506 3.60199 16.5813 2.41784C14.812 1.2337 12.731 0.601562 10.6021 0.601562C8.47311 0.601562 6.39209 1.2337 4.62284 2.41784C2.85358 3.60199 1.47577 5.2848 0.664068 7.25295Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0 mb-4">
                                    Wash Sale Monitor (Compliance Gaurdrails)
                                </p>
                                <h3 class="f-12 lh-13 ls-042 clr-99ACB6 uppercase">
                                    A technical Ticker showing the safety of recent trades
                                </h3>
                            </div>
                        </div>

                        <div class="d-grid col-lg-2 gap-18 mb-18">
                            <div class="border-E9E7DD-24 p-24 br-8">
                                <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                    Safety Window
                                </p>
                                <p class="f-16 lh-18 clr-A7DFBD uppercase">
                                    30 Days Clear
                                </p>
                            </div>

                            <div class="border-E9E7DD-24 p-24 br-8">
                                <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                    Last Trade
                                </p>
                                <p class="f-16 lh-18 clr-A7DFBD uppercase">
                                    May 15, 2026
                                </p>
                            </div>

                        </div>

                        <div class="d-grid col-lg-2 gap-18 mb-32">
                            <div class="border-E9E7DD-24 p-24 br-8">
                                <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                    Re - Entry Type
                                </p>
                                <p class="f-16 lh-18 white uppercase">
                                    Diversified
                                </p>
                            </div>

                            <div class="border-E9E7DD-24 p-24 br-8">
                                <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                    Compliance Score
                                </p>
                                <p class="f-16 lh-18 clr-A7DFBD uppercase">
                                    100 / 100
                                </p>
                            </div>

                        </div>
                        <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold mb-38">Download Audit Trail Compliance Log</a>
                        <div class="bg-108476-10 br-16 p-17 f-14 lh-20 neutral-300">
                            Note: "Protection Mode ensures your Future Pipe liquidation is not just a sale, but a tax-efficient transition. By matching $142k in losses against gains, we have created a 30.1% return on your tax liability."
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-16 flex-col w-100">
                <div class="f-16 lh-11 white-80">
                    Tax Alpha Flow
                </div>
                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24 d-grid col-lg-3">
                    <div class="d-flex">
                        <div class="w-28 bg-5D5C58">

                        </div>
                        <div class="bg-losses p-32-14 d-flex gap-6 flex-col w-100">
                            <p class="f-16 lh-16 white">
                                Losses
                            </p>
                            <p class="f-14 lh-14 clr-99ACB6">
                                $142k
                            </p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="w-28 bg-1C8D49">

                        </div>
                        <div class="bg-savings p-32-14 d-flex gap-6 flex-col w-100">
                            <p class="f-16 lh-16 white">
                                Losses
                            </p>
                            <p class="f-14 lh-14 clr-99ACB6">
                                $142k
                            </p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="w-28 bg-4FC07C">

                        </div>
                        <div class="bg-transparent p-32-14 d-flex gap-6 flex-col w-100">
                            <p class="f-16 lh-16 white">
                                Net Worth
                            </p>
                            <p class="f-14 lh-14 clr-99ACB6">
                                +$38.4k
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex gap-16 flex-col w-100">
                <div class="f-16 lh-11 white-80">
                    The Harvesting Ledger (Active Opportunities)
                </div>
                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">

                    <div class="table-row d-grid col-lg-5 align-center gap-10 mb-28">
                        <div class="date-outer">
                            <p class="f-12 lh-10 clr-99ACB6 uppercase">
                                Security
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-12 lh-10 clr-99ACB6 uppercase center">
                                CURRENT LOSS
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-12 lh-10 clr-99ACB6 uppercase center">
                                harvesting status
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-12 lh-10 clr-99ACB6 uppercase center">
                                Potential tax alpha
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-12 lh-10 clr-99ACB6 uppercase center">
                                action
                            </p>
                        </div>
                    </div>
                    <div class="table-row d-grid col-lg-5 align-center gap-10 mb-14">
                        <div class="date-outer">
                            <p class="f-16 lh-20 white">
                                Tech ETF (XLK)
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                $54,000
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                Eligible
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                $16,200
                            </p>
                        </div>
                        <div class="date-outer d-flex align-center justify-center">
                            <p class="f-16 lh-18 center white">
                                Execute
                            </p>

                        </div>
                    </div>
                    <div class="border-bottom-E9E7DD-15 mb-14">

                    </div>
                    <div class="table-row d-grid col-lg-5 align-center gap-10 mb-14">
                        <div class="date-outer">
                            <p class="f-16 lh-20 white">
                                Global Bond Fund
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                $12,000
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                Monitoring
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                $3,600
                            </p>
                        </div>
                        <div class="date-outer d-flex align-center justify-center">
                            <p class="f-16 lh-18 center white">
                                Auto - Pilot
                            </p>

                        </div>
                    </div>
                    <div class="border-bottom-E9E7DD-15 mb-14">

                    </div>
                    <div class="table-row d-grid col-lg-5 align-center gap-10 mb-32">
                        <div class="date-outer">
                            <p class="f-16 lh-20 white">
                                Emerging Markets
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                $8,500
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                Eligible
                            </p>
                        </div>
                        <div class="date-outer">
                            <p class="f-16 lh-20 white center">
                                $2,550
                            </p>
                        </div>
                        <div class="date-outer d-flex align-center justify-center">
                            <p class="f-16 lh-18 center white">
                                $2,550
                            </p>

                        </div>
                    </div>

                    <div class="p-16-32 bg-108476-15 d-flex gap-10 justify-space-between br-12">
                        <div class="d-flex gap-32 align-center">
                            <p class="f-16 lh-16 white-80">
                                TOTAL Eligible
                            </p>
                            <p class="f-16 lh-16 clr-F8B4B2">
                                $62,500
                            </p>
                        </div>

                        <div class="d-flex gap-32 align-center">
                            <p class="f-16 lh-16 white-80">
                                TOTAL Potential tax alpha
                            </p>
                            <p class="f-16 lh-16 clr-A7DFBD">
                                +$18,750
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-grid col-lg-2 gap-32">
                <div class="bg-0B1417 p-32-24 br-11 border-E9E7DD-24">

                    <h3 class="f-16 lh-18 white mb-8">
                        View TAX ALPHA STRATEGY
                    </h3>

                    <p class="f-14 lh-22 clr-DADADA-6 mb-32">
                        Systematically harvest all eligible losses, rebalance replacement securities, and maximize current-year tax efficiency across every managed account.
                    </p>

                    <div class="btn-outer d-flex gap-10">
                        <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-14 d-flex justify-center w-auto m-fit-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M4.08333 6.41448V4.08096C4.08333 3.30735 4.39062 2.56543 4.93761 2.0184C5.48459 1.47138 6.22645 1.16406 7 1.16406C7.77355 1.16406 8.51541 1.47138 9.06239 2.0184C9.60938 2.56543 9.91667 3.30735 9.91667 4.08096V6.41448M2.91667 6.41448H11.0833C11.7277 6.41448 12.25 6.93686 12.25 7.58124V11.6649C12.25 12.3093 11.7277 12.8317 11.0833 12.8317H2.91667C2.27233 12.8317 1.75 12.3093 1.75 11.6649V7.58124C1.75 6.93686 2.27233 6.41448 2.91667 6.41448Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round" />
                            </svg>Download Report</a>
                    </div>
                </div>

                <div class="bg-0B1417 p-32-24 br-11 border-E9E7DD-24">
                    <h3 class="f-16 lh-18 white mb-8">
                        View Wealth Transfer Blueprint
                    </h3>

                    <p class="f-14 lh-22 clr-DADADA-6 mb-32">
                        Explore trust structures, beneficiary pathways, entity ownership, and projected wealth transfer outcomes across generations.
                    </p>

                    <div class="btn-outer d-flex gap-10">
                        <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-14 d-flex justify-center w-auto m-fit-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M4.08333 6.41448V4.08096C4.08333 3.30735 4.39062 2.56543 4.93761 2.0184C5.48459 1.47138 6.22645 1.16406 7 1.16406C7.77355 1.16406 8.51541 1.47138 9.06239 2.0184C9.60938 2.56543 9.91667 3.30735 9.91667 4.08096V6.41448M2.91667 6.41448H11.0833C11.7277 6.41448 12.25 6.93686 12.25 7.58124V11.6649C12.25 12.3093 11.7277 12.8317 11.0833 12.8317H2.91667C2.27233 12.8317 1.75 12.3093 1.75 11.6649V7.58124C1.75 6.93686 2.27233 6.41448 2.91667 6.41448Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round" />
                            </svg>Download Report</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection