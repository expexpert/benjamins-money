@extends('layouts.app')

@section('title','Scenario Planning')

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
            Scenario Planning
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
                    <div class="card p-24 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="weight icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g clip-path="url(#clip0_12615_31838)">
                                        <g opacity="0.6">
                                            <path d="M3.75018 8.24972C3.75018 7.0563 4.22432 5.91176 5.0683 5.06789C5.91229 4.22401 7.05697 3.74993 8.25054 3.74993H10.8757L11.1008 3.44994C11.3802 3.07737 11.7426 2.77498 12.1592 2.5667C12.5758 2.35843 13.0352 2.25 13.501 2.25V4.49989C13.9667 4.84918 14.3448 5.3021 14.6051 5.82278C14.8655 6.34346 15.0011 6.91761 15.0011 7.49975H15.7511C15.9501 7.49975 16.1408 7.57877 16.2815 7.71941C16.4222 7.86006 16.5012 8.05082 16.5012 8.24972V9.74965C16.5012 9.94855 16.4222 10.1393 16.2815 10.28C16.1408 10.4206 15.9501 10.4996 15.7511 10.4996H15.0011C14.8848 10.849 14.6886 11.1664 14.4282 11.4268C14.1678 11.6871 13.8504 11.8832 13.501 11.9995V14.2494C13.501 14.4483 13.4219 14.6391 13.2813 14.7797C13.1406 14.9204 12.9498 14.9994 12.7509 14.9994H11.2508C11.0519 14.9994 10.8611 14.9204 10.7204 14.7797C10.5797 14.6391 10.5007 14.4483 10.5007 14.2494V12.7495H8.25054V14.2494C8.25054 14.4483 8.17152 14.6391 8.03085 14.7797C7.89019 14.9204 7.69941 14.9994 7.50048 14.9994H6.00036C5.80143 14.9994 5.61065 14.9204 5.46999 14.7797C5.32932 14.6391 5.2503 14.4483 5.2503 14.2494V11.9995C4.78453 11.6503 4.40648 11.1973 4.14611 10.6767C3.88573 10.156 3.75018 9.58182 3.75018 8.99968V8.24972ZM3.75018 8.24972H3.00012C2.60226 8.24972 2.2207 8.09169 1.93937 7.8104C1.65805 7.52911 1.5 7.14759 1.5 6.74979V5.99982M12.0008 7.49975H12.0083" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12615_31838">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
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
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="weight icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9" fill="none">
                                    <path d="M15.7512 5.24928V0.75H11.2508M15.7512 0.75L9.37569 7.12398L5.62539 3.37458L0.75 8.2488" stroke="#108476" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
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
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="weight icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g opacity="0.6">
                                        <path d="M9.0006 10.4998L12.0008 7.49987M2.50508 14.25C1.84669 13.1099 1.50005 11.8166 1.5 10.5001C1.49995 9.18355 1.84649 7.89021 2.50479 6.75005C3.1631 5.6099 4.10996 4.6631 5.25022 4.00483C6.39047 3.34655 7.68394 3 9.0006 3C10.3173 3 11.6107 3.34655 12.751 4.00483C13.8912 4.6631 14.8381 5.6099 15.4964 6.75005C16.1547 7.89021 16.5012 9.18355 16.5012 10.5001C16.5011 11.8166 16.1545 13.1099 15.4961 14.25" stroke="#108476" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
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
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="weight icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g clip-path="url(#clip0_12615_31849)">
                                        <g opacity="0.6">
                                            <path d="M15.75 12V15C15.75 15.1989 15.671 15.3897 15.5303 15.5303C15.3897 15.671 15.1989 15.75 15 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V3.75C2.25 3.35218 2.40804 2.97064 2.68934 2.68934C2.97064 2.40804 3.35218 2.25 3.75 2.25H13.5C13.6989 2.25 13.8897 2.32902 14.0303 2.46967C14.171 2.61032 14.25 2.80109 14.25 3V5.25M2.25 3.75C2.25 4.14782 2.40804 4.52936 2.68934 4.81066C2.97064 5.09196 3.35218 5.25 3.75 5.25H15C15.1989 5.25 15.3897 5.32902 15.5303 5.46967C15.671 5.61032 15.75 5.80109 15.75 6V9M15.75 9H13.5C13.1022 9 12.7206 9.15804 12.4393 9.43934C12.158 9.72064 12 10.1022 12 10.5C12 10.8978 12.158 11.2794 12.4393 11.5607C12.7206 11.842 13.1022 12 13.5 12H15.75M15.75 9C15.9489 9 16.1397 9.07902 16.2803 9.21967C16.421 9.36032 16.5 9.55109 16.5 9.75V11.25C16.5 11.4489 16.421 11.6397 16.2803 11.7803C16.1397 11.921 15.9489 12 15.75 12" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12615_31849">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
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

                <div class="d-grid col-13-1 gap-25 w-100">
                    <div class="d-flex flex-col gap-12">
                        <h2 class="f-16 lh-18 white-80 mb-4">
                            State Comparison Snapshot
                        </h2>
                        <div class="bg-0B1417 br-12 border-E9E7DD-15 p-32-24 d-flex flex-col">
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
                                    <div class="notification-outer w-38 h-38 p-9">
                                        <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <g clip-path="url(#clip0_12615_31856)">
                                                <path d="M9.37683 16.6785C12.5381 15.5764 15.1978 13.6764 15.1978 9.87624V4.55607C15.1978 4.35449 15.1178 4.16118 14.9753 4.01865C14.8328 3.87611 14.6395 3.79604 14.4379 3.79604C12.9181 3.79604 11.0259 2.89161 9.696 1.72877C9.535 1.59121 9.3302 1.51562 9.11845 1.51562C8.9067 1.51562 8.70191 1.59121 8.54091 1.72877C7.21864 2.88401 5.31883 3.79604 3.79899 3.79604C3.59744 3.79604 3.40415 3.87611 3.26164 4.01865C3.11913 4.16118 3.03906 4.35449 3.03906 4.55607V9.87624C3.03906 13.6764 5.6988 15.5764 8.86768 16.6709C9.03147 16.7319 9.21129 16.7346 9.37683 16.6785Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                                <path d="M12 6.5L7.875 11L6 8.95455" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_12615_31856">
                                                    <rect width="18.24" height="18.24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
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