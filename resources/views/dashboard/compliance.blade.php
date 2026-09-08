@extends('layouts.app')

@section('title','Compliance')

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
            Compliance Audit
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
                        <div class="d-flex gap-12 mb-20 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g clip-path="url(#clip0_12615_31838)">
                                        <g opacity="0.6">
                                            <path d="M3.75018 8.24972C3.75018 7.0563 4.22432 5.91176 5.0683 5.06789C5.91229 4.22401 7.05697 3.74993 8.25054 3.74993H10.8757L11.1008 3.44994C11.3802 3.07737 11.7426 2.77498 12.1592 2.5667C12.5758 2.35843 13.0352 2.25 13.501 2.25V4.49989C13.9667 4.84918 14.3448 5.3021 14.6051 5.82278C14.8655 6.34346 15.0011 6.91761 15.0011 7.49975H15.7511C15.9501 7.49975 16.1408 7.57877 16.2815 7.71941C16.4222 7.86006 16.5012 8.05082 16.5012 8.24972V9.74965C16.5012 9.94855 16.4222 10.1393 16.2815 10.28C16.1408 10.4206 15.9501 10.4996 15.7511 10.4996H15.0011C14.8848 10.849 14.6886 11.1664 14.4282 11.4268C14.1678 11.6871 13.8504 11.8832 13.501 11.9995V14.2494C13.501 14.4483 13.4219 14.6391 13.2813 14.7797C13.1406 14.9204 12.9498 14.9994 12.7509 14.9994H11.2508C11.0519 14.9994 10.8611 14.9204 10.7204 14.7797C10.5797 14.6391 10.5007 14.4483 10.5007 14.2494V12.7495H8.25054V14.2494C8.25054 14.4483 8.17152 14.6391 8.03085 14.7797C7.89019 14.9204 7.69941 14.9994 7.50048 14.9994H6.00036C5.80143 14.9994 5.61065 14.9204 5.46999 14.7797C5.32932 14.6391 5.2503 14.4483 5.2503 14.2494V11.9995C4.78453 11.6503 4.40648 11.1973 4.14611 10.6767C3.88573 10.156 3.75018 9.58182 3.75018 8.99968V8.24972ZM3.75018 8.24972H3.00012C2.60226 8.24972 2.2207 8.09169 1.93937 7.8104C1.65805 7.52911 1.5 7.14759 1.5 6.74979V5.99982M12.0008 7.49975H12.0083" stroke="#108476" stroke-width="1.2" stroke-linecap="round"></path>
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12615_31838">
                                            <rect width="18" height="18" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Total Savings
                                </p>
                                <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 clr-7BD09D">
                                $1.33M
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                Vs Current State
                            </div>
                            <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                        </div>

                    </div>

                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-20 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" viewBox="0 0 17 9" fill="none">
                                    <path d="M15.7512 5.24928V0.75H11.2508M15.7512 0.75L9.37569 7.12398L5.62539 3.37458L0.75 8.2488" stroke="#108476" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Net Worth Impact
                                </p>
                                <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 clr-7BD09D">
                                +21.4%
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                Increase
                            </div>
                            <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                        </div>

                    </div>

                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-20 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g opacity="0.6">
                                        <path d="M9.0006 10.4998L12.0008 7.49987M2.50508 14.25C1.84669 13.1099 1.50005 11.8166 1.5 10.5001C1.49995 9.18355 1.84649 7.89021 2.50479 6.75005C3.1631 5.6099 4.10996 4.6631 5.25022 4.00483C6.39047 3.34655 7.68394 3 9.0006 3C10.3173 3 11.6107 3.34655 12.751 4.00483C13.8912 4.6631 14.8381 5.6099 15.4964 6.75005C16.1547 7.89021 16.5012 9.18355 16.5012 10.5001C16.5011 11.8166 16.1545 13.1099 15.4961 14.25" stroke="#108476" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Estate Tax Rate
                                </p>
                                <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 clr-7BD09D">
                                92 / 100
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                Very Strong
                            </div>
                            <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                        </div>

                    </div>

                    <div class="card p-24 border-E9E7DD-24">
                        <div class="d-flex gap-12 mb-20 align-center">
                            <div class="notification-outer w-38 h-38">
                                <!-- <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon"> -->
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g clip-path="url(#clip0_12615_31849)">
                                        <g opacity="0.6">
                                            <path d="M15.75 12V15C15.75 15.1989 15.671 15.3897 15.5303 15.5303C15.3897 15.671 15.1989 15.75 15 15.75H3.75C3.35218 15.75 2.97064 15.592 2.68934 15.3107C2.40804 15.0294 2.25 14.6478 2.25 14.25V3.75C2.25 3.35218 2.40804 2.97064 2.68934 2.68934C2.97064 2.40804 3.35218 2.25 3.75 2.25H13.5C13.6989 2.25 13.8897 2.32902 14.0303 2.46967C14.171 2.61032 14.25 2.80109 14.25 3V5.25M2.25 3.75C2.25 4.14782 2.40804 4.52936 2.68934 4.81066C2.97064 5.09196 3.35218 5.25 3.75 5.25H15C15.1989 5.25 15.3897 5.32902 15.5303 5.46967C15.671 5.61032 15.75 5.80109 15.75 6V9M15.75 9H13.5C13.1022 9 12.7206 9.15804 12.4393 9.43934C12.158 9.72064 12 10.1022 12 10.5C12 10.8978 12.158 11.2794 12.4393 11.5607C12.7206 11.842 13.1022 12 13.5 12H15.75M15.75 9C15.9489 9 16.1397 9.07902 16.2803 9.21967C16.421 9.36032 16.5 9.55109 16.5 9.75V11.25C16.5 11.4489 16.421 11.6397 16.2803 11.7803C16.1397 11.921 15.9489 12 15.75 12" stroke="#108476" stroke-width="1.2" stroke-linecap="round"></path>
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12615_31849">
                                            <rect width="18" height="18" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="card-cont">
                                <p class="f-16 lh-18 white ls-0">
                                    Estate Tax Savings
                                </p>
                                <!-- <h3 class="f-16 white">
                                        Net Worth
                                    </h3> -->
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-24 clr-7BD09D">
                                $18,500,000
                            </h2>
                            <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                Potential Savings
                            </div>
                            <!-- <div class="d-flex gap-4 f-12">
                                <img src="{{ asset('images/stat-increases.svg') }}" alt="increased stats icon">
                                <p> +$247,500 (1.35%) MTD</p>
                            </div> -->
                        </div>

                    </div>

                </div>
            </div>
            <div class="d-grid col-lg-2 gap-32 w-100 align-flex-start">
                <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-32 justify-space-between mb-16">
                        <div class="d-flex flex-col gap-12">
                            <div class="f-13 lh-10 clr-AEC2C7 uppercase">
                                Plan ID: AMZN-EXEC-2026-004
                            </div>
                            <div class="f-16 lh-20 white">
                                10b5-1 Autopilot & Compliance
                            </div>
                        </div>
                        <ul class="status d-flex gap-14 align-center">
                            <li class="active d-flex gap-10 align-center">
                                <div class="icon">

                                </div>
                                <div class="icon-description f-14 lh-14">
                                    Status: Active
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-E9E7DD-5 p-24-22 d-flex gap-24 flex-col br-8 mb-16">
                        <div class="f-14 white">
                            Execution Radar (Cooling-Off & Windows)
                        </div>

                        <div class="timeline">
                            <div class="timeline-progress"></div>

                            <div class="timeline-item active">
                                <div class="dot"></div>
                                <div class="content">
                                    <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">APR 15</h4>
                                    <p class="f-14 lh-12 clr-AEC2C7">Adoption</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="dot"></div>
                                <div class="content">
                                    <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">MAY 26</h4>
                                    <p class="f-14 lh-12 clr-AEC2C7">Today</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="dot"></div>
                                <div class="content">
                                    <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">JUL 15</h4>
                                    <p class="f-14 lh-12 clr-AEC2C7">Live</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="dot"></div>
                                <div class="content">
                                    <h4 class="f-14 lh-14 uppercase clr-DADADA mb-8">AUG 15</h4>
                                    <p class="f-14 lh-12 clr-AEC2C7">Next Sale</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-grid col-lg-2 gap-16">
                        <div class="border-white-15 p-32-24 br-8">
                            <p class="f-10 lh-10 clr-99ACB6 mb-12 uppercase">
                                Cooling Off Period
                            </p>
                            <h2 class="f-16 lh-20 clr-A7DFBD mb-8">
                                49 Days Remaining
                            </h2>
                            <p class="f-14 lh-10 clr-99ACB6">
                                Locked until Jul 15
                            </p>
                        </div>

                        <div class="border-white-15 p-32-24 br-8">
                            <p class="f-10 lh-10 clr-99ACB6 mb-12 uppercase">
                                Execution Window Opens
                            </p>
                            <h2 class="f-16 lh-20 clr-A7DFBD mb-8">
                                Next Trade
                            </h2>
                            <p class="f-14 lh-10 clr-99ACB6">
                                1,200 Shares on Aug 15
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                    <p class="f-12 lh-10 clr-AEC2C7 uppercase mb-24">
                        Affirmative Defense Checklist (SEC Rule 10b5-1)
                    </p>
                    <div class="d-flex gap-16 flex-col">
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-14 lh-10 clr-AEC2C7">
                                Overlapping Plans
                            </h4>
                            <h3 class="f-15 lh-18 white right">
                                None Detected
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-14 lh-10 clr-AEC2C7">
                                Single-Trade Plan
                            </h4>
                            <h3 class="f-15 lh-18 white right">
                                N/A (Systematic recurring plan)
                            </h3>
                        </div>

                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-14 lh-10 clr-AEC2C7">
                                Officer Certifications
                            </h4>
                            <h3 class="f-15 lh-18 white right">
                                Signed and filed with General<br>
                                Counsel on 04/15
                            </h3>
                        </div>
                        <div class="border-bottom-white-24">

                        </div>
                        <div class="d-flex gap-10 justify-space-between align-center">
                            <h4 class="f-14 lh-10 clr-AEC2C7">
                                Good Faith Requirement
                            </h4>
                            <h3 class="f-15 lh-18 white right">
                                No modifications made in the <br>
                                last 120 days
                            </h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex gap-16 flex-col w-100">
                <div class="f-16 lh-11 white-80">
                    Scheduled Executions
                </div>
                <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                    <div class="d-flex gap-10px justify-space-between align-flex-start mb-24">
                        <div class="d-flex gap-16 align-center">
                            <div class="notification-outer">
                                <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                            </div>
                            <div class="card-cont">
                                <h3 class="f-16 white mb-4">
                                    Post Tax / FL Residency </h3>
                                <p class="f-12 ls-1 clr-99ACB6 uppercase">
                                    Net Proceeds
                                </p>
                            </div>
                        </div>
                        <div class="btn-col">
                            <p class="f-32 white lh-18 bold">
                                $482,400
                            </p>
                        </div>
                    </div>

                    <div class="bg-0B1417 border-white-24 p-32-40 br-16">
                        <div class="d-flex gap-34 flex-col">
                            <div class="table-row d-grid col-lg-5 align-center gap-10">
                                <div class="date-outer">
                                    <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                        Date
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                        Volume
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                        Price floor
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                        Instruction
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-13 lh-10 clr-99ACB6 uppercase center">
                                        action
                                    </p>
                                </div>
                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10">
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        08/15/2026
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        1,200
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        $85.00
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        Market order
                                    </p>
                                </div>
                                <div class="date-outer d-flex gap-4 flex-col justify-center center">
                                    <p class="f-16 lh-16 white center">
                                        Scheduled
                                    </p>
                                    <div class="f-14 lh-16  center">
                                        <a class="clr-primary-grn-400" href="{{ url('/scheduled') }}">View Specs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10">
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        11/15/2026
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        1,200
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        $85.00
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        Market order
                                    </p>
                                </div>
                                <div class="date-outer d-flex gap-4 flex-col justify-center center">
                                    <p class="f-16 lh-16 white center">
                                        Pending
                                    </p>
                                    <div class="f-14 lh-16 clr-23B05B center">
                                        <a href="{{ url('/pending') }}" class="clr-23B05B">View Specs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-row d-grid col-lg-5 align-center gap-10">
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        02/15/2027
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        1,200
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        $92.00
                                    </p>
                                </div>
                                <div class="date-outer">
                                    <p class="f-16 lh-16 white">
                                        Limit order
                                    </p>
                                </div>
                                <div class="date-outer d-flex gap-4 flex-col justify-center center">
                                    <p class="f-16 lh-16 white center">
                                        Locked
                                    </p>
                                    <div class="f-14 lh-16 clr-23B05B center">
                                        <a href="{{ url('/locked') }}" class="clr-23B05B">View Specs</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="d-grid col-lg-2 gap-32 w-100">

                <div class="col-outer">
                    <h3 class="f-16 lh-11 white-80 mb-16">
                        Insider Trading Window
                    </h3>
                    <!-- <h3 class="f-14 neutral-300 uppercase mb-16">
                            INSIDER TRADING WINDOW
                        </h3> -->
                    <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                        <div class="d-flex gap-10px justify-space-between align-center mb-14">
                            <div class="d-flex gap-16">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 white mb-4">
                                        Clear to Trade (Open Window)
                                    </h3>
                                    <p class="f-12 ls-1 clr-99ACB6 uppercase">
                                        Current state
                                    </p>
                                </div>
                            </div>
                            <div class="btn-col">
                                <a href="#" class="btn-yellow-outlined p-8-10 f-12 lh-16 gap-4 d-flex flex-col uppercase align-center justify-center br-9">Window Closes<span class="f-16 lh-16 clr-yellow-400 capitalize">12 Days</span></a>
                            </div>
                        </div>

                        <div class="bg-6C6C6C-10 br-9 p-16-32 mb-32">
                            <div class="f-14 lh-22 white mb-12">
                                Note: Manual trades permitted for vested shares outside of 10b5-1 subject to General Counsel approval. Your 10b5-1 plan is exempt from blackout periods and will execute regardless of earnings news.
                            </div>
                            <a href="#" class="f-14 clr-23B05B d-flex gap-8 align-center">Modify Plan <img src="{{ asset('images/btn-arrow-sm.svg') }}" alt="btn arrow icon"></a>
                        </div>

                        <div class="d-grid col-lg-2 gap-16">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Log Private Trade</a>
                            <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-prm-900 justify-center bold">Request Pre Clearance</a>
                        </div>

                    </div>
                </div>

                <div class="col-outer">
                    <h3 class="f-16 lh-11 white-80 mb-16">
                        Audit Trail & Filings
                    </h3>
                    <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24 d-flex gap-22 flex-col">

                        <div class="d-flex justify-space-between gap-10">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer p-4-5 w-34 h-34 br-6">
                                    <img src="{{ asset('images/document-new.svg') }}" alt="pdf icon">
                                </div>
                                <div>
                                    <h3 class="f-16 lh-16 white">
                                        Form 144 (Draft Generated)
                                    </h3>
                                </div>
                            </div>
                            <div class="btn-col">
                                <a href="#" class="f-16 lh-16 clr-primary-grn-400">View</a>
                            </div>
                        </div>
                        <div class="border-bottom-white-24">
                        </div>

                        <div class="d-flex justify-space-between gap-10">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer p-4-5 w-34 h-34 br-6">
                                    <img src="{{ asset('images/document-new.svg') }}" alt="pdf icon">
                                </div>
                                <div>
                                    <h3 class="f-16 lh-16 white">
                                        SEC Exhibit 10b5-1 (Current)
                                    </h3>
                                </div>
                            </div>
                            <div class="btn-col">
                                <a href="#" class="f-16 lh-16 clr-primary-grn-400">View</a>
                            </div>
                        </div>
                        <div class="border-bottom-white-24">
                        </div>

                        <div class="d-flex justify-space-between gap-10">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer p-4-5 w-34 h-34 br-6">
                                    <img src="{{ asset('images/document-new.svg') }}" alt="pdf icon">
                                </div>
                                <div>
                                    <h3 class="f-16 lh-16 white">
                                        GC Pre-Clearance Approval
                                    </h3>
                                </div>
                            </div>
                            <div class="btn-col">
                                <a href="#" class="f-16 lh-16 clr-primary-grn-400">View</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection