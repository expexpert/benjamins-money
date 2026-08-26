@extends('layouts.app')

@section('title','Real Time Liquidity - Adjusted Scenario / Original Scenario')

@section('content')

<div class="dashboard-outer">

    @include('partials.sidebar')
    <div class="dashboard-content">
        @include('partials.header')

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
                <div class="d-flex flex-col gap-48">
                    <div class="p-32 bg-060F13 br-12 border-E9E7DD-24 d-flex flex-col gap-32">
                        <div class="d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-16 align-center">
                                <div class="notification-outer">
                                    <img src="{{ asset('images/planning.svg') }}" alt="search icon">
                                </div>
                                <div class="card-cont">
                                    <h3 class="f-16 mb-8 white">
                                        Early Retirement Impact
                                    </h3>
                                    <p class="f-12 lh-12 ls-1 clr-99ACB6 uppercase">
                                        BASED ON DEPARTURE: 06/01/2026
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex gap-16 justify-end align-center">
                                <div class="bg-23B05B-10 br-4 p-10 f-14 lh-17 white">
                                    Baseline Comparison (Original Scenario)
                                </div>
                                <a href="#" class="btn btn-green-outlined p-8-18 f-14 lh-14 d-flex justify-center bold gap-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M9.75 2.25C7.95979 2.25 6.2429 2.96116 4.97703 4.22703C3.71116 5.4929 3 7.20979 3 9H0.75L3.6675 11.9175L3.72 12.0225L6.75 9H4.5C4.5 7.60761 5.05312 6.27226 6.03769 5.28769C7.02226 4.30312 8.35761 3.75 9.75 3.75C11.1424 3.75 12.4777 4.30312 13.4623 5.28769C14.4469 6.27226 15 7.60761 15 9C15 10.3924 14.4469 11.7277 13.4623 12.7123C12.4777 13.6969 11.1424 14.25 9.75 14.25C8.3025 14.25 6.99 13.6575 6.045 12.705L4.98 13.77C5.60371 14.4003 6.34675 14.9001 7.16575 15.24C7.98474 15.58 8.86326 15.7533 9.75 15.75C11.5402 15.75 13.2571 15.0388 14.523 13.773C15.7888 12.5071 16.5 10.7902 16.5 9C16.5 7.20979 15.7888 5.4929 14.523 4.22703C13.2571 2.96116 11.5402 2.25 9.75 2.25Z" fill="#4FC07C" />
                                    </svg>
                                    Restore Scenario </a>
                            </div>
                        </div>
    
                        <div class="d-grid col-2-1 gap-28">
                            <div class="big-box d-grid align-center gap-12">
                                <div class="border-23B05B-25 p-32-24 d-flex flex-col gap-16 br-12">
                                    <h4 class="f-16 lh-22 white">
                                        Current Plan
                                    </h4>
                                    <div class="d-flex flex-col gap-12">
                                        <h3 class="f-24 lh-19 clr-23B05B">
                                            95%
                                        </h3>
                                        <p class="f-14 lh-19 clr-99ACB6">
                                            Highly confident
                                        </p>
                                    </div>
                                    <div class="bg-23B05B-15 p-12 f-14 lh-17 clr-EDECE4-80 br-4">
                                        Your plan is on track to meet your retirement goals
                                    </div>
                                </div>
                                <div class="vs f-14 lh-16 white-50">
                                    vs
                                </div>
                                <div class="border-FFCC66-20 bg-FFCC66-5 p-32-24 d-flex flex-col gap-16 br-12">
                                    <h4 class="f-16 lh-22 white">
                                        Early Retirement
                                    </h4>
                                    <div class="d-flex flex-col gap-12">
                                        <h3 class="f-24 lh-19 clr-FBBC05">
                                            72%
                                        </h3>
                                        <p class="f-14 lh-19 clr-99ACB6">
                                            At Risk
                                        </p>
                                    </div>
                                    <div class="bg-FBBC05-15 p-12 f-14 lh-17 clr-EDECE4-80 br-4">
                                        Your plan faces a higher chance of falling short of your goals
                                    </div>
                                </div>
                            </div>
                            <div class="small-box bg-E9E7DD-5 p-32-24 br-12 d-flex flex-col gap-16">
                                <h4 class="f-16 lh-22 white">
                                    Total Opportunity cost
                                </h4>
                                <div class="d-flex flex-col gap-12">
                                    <h3 class="f-24 lh-19 clr-23B05B">
                                        $8,652,000
                                    </h3>
                                    <p class="f-14 lh-19 clr-99ACB6">
                                        In today’s dollars
                                    </p>
                                </div>
                                <div class="bg-E9E7DD-8 p-12 f-14 lh-17 clr-EDECE4-80 br-4">
                                    Projected impact to your future wealth
                                </div>
                            </div>
                        </div>
    
                         <div class="bg-108476-15 p-8-32 br-16 d-flex gap-12 align-center f-15 lh-16 neutral-300">
                                    <img src="{{ asset('images/information-line.svg') }}" alt="search icon">
                                    Results are based on Monte Carlo simulations with 10,000 market scenarios using current assumptions
                                </div>
    
                    </div>
    
                    <div class="d-flex gap-16 flex-col">
                        <h3 class="f-16 lh-12 white-80">
                            Vesting Waterfall / Timeline
                        </h3>
                        <div class="bg-0B1417 border-white-24 p-32-40 br-16">
                            <div class="d-flex gap-24 flex-col">
                                <div class="table-row d-grid col-lg-5 align-center gap-10">
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Year
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Tranche
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Shares
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase">
                                            Est. value
                                        </p>
                                    </div>
                                    <div class="date-outer">
                                        <p class="f-13 lh-10 clr-99ACB6 uppercase center">
                                            status
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-col gap-16">
                                    <div class="table-row d-grid col-lg-5 align-center gap-10">
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                2026
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                q3 cLIFF
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                4,200
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                $375,900
                                            </p>
                                        </div>
                                        <div class="date-outer pending-btn d-flex justify-center">
                                            <a href="#" class="p-6-14 f-16 lh-16 clr-FFDD99 d-flex gap-6 align-center border-FFBB33-15 bg-FFBB33-5 justify-center br-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path d="M2.14963 9.00909C1.8858 8.37213 1.75 7.68944 1.75 7C1.75 5.60761 2.30312 4.27226 3.28769 3.28769C4.27226 2.30312 5.60761 1.75 7 1.75C8.39239 1.75 9.72774 2.30312 10.7123 3.28769C11.6969 4.27226 12.25 5.60761 12.25 7C12.25 7.68944 12.1142 8.37213 11.8504 9.00909C11.5865 9.64605 11.1998 10.2248 10.7123 10.7123C10.2248 11.1998 9.64605 11.5865 9.00909 11.8504C8.37213 12.1142 7.68944 12.25 7 12.25C6.31056 12.25 5.62787 12.1142 4.99091 11.8504C4.35395 11.5865 3.7752 11.1998 3.28769 10.7123C2.80018 10.2248 2.41347 9.64605 2.14963 9.00909Z" stroke="#FFDD99" stroke-width="0.92" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 4.07812V6.99479L8.75 8.74479" stroke="#FFDD99" stroke-width="0.92" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Pending
                                            </a>
                                        </div>
                                    </div>
                                    <div class="border-bottom-E9E7DD-24"></div>
                                    <div class="table-row d-grid col-lg-5 align-center gap-10">
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                2026
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                q4 cLIFF
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                4,200
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                $375,900
                                            </p>
                                        </div>
                                        <div class="date-outer pending-btn d-flex justify-center">
                                            <a href="#" class="p-6-14 f-16 lh-16 clr-FFDD99 d-flex gap-6 align-center border-FFBB33-15 bg-FFBB33-5 justify-center br-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path d="M2.14963 9.00909C1.8858 8.37213 1.75 7.68944 1.75 7C1.75 5.60761 2.30312 4.27226 3.28769 3.28769C4.27226 2.30312 5.60761 1.75 7 1.75C8.39239 1.75 9.72774 2.30312 10.7123 3.28769C11.6969 4.27226 12.25 5.60761 12.25 7C12.25 7.68944 12.1142 8.37213 11.8504 9.00909C11.5865 9.64605 11.1998 10.2248 10.7123 10.7123C10.2248 11.1998 9.64605 11.5865 9.00909 11.8504C8.37213 12.1142 7.68944 12.25 7 12.25C6.31056 12.25 5.62787 12.1142 4.99091 11.8504C4.35395 11.5865 3.7752 11.1998 3.28769 10.7123C2.80018 10.2248 2.41347 9.64605 2.14963 9.00909Z" stroke="#FFDD99" stroke-width="0.92" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 4.07812V6.99479L8.75 8.74479" stroke="#FFDD99" stroke-width="0.92" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Pending
                                            </a>
                                        </div>
                                    </div>
                                    <div class="border-bottom-E9E7DD-24"></div>
                                    <div class="table-row d-grid col-lg-5 align-center gap-10">
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                2027
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                Annual tOTAL
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                24,500
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                $2,192,750
                                            </p>
                                        </div>
                                        <div class="date-outer pending-btn d-flex justify-center">
                                            <a href="#" class="p-6-14 f-16 lh-16 clr-C293C9 d-flex gap-6 align-center border-FFBB33-15 bg-FFBB33-5 justify-center br-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path d="M4.66927 5.83333H3.5026C3.19318 5.83333 2.89644 5.95625 2.67765 6.17504C2.45885 6.39383 2.33594 6.69058 2.33594 7V11.0833C2.33594 11.3928 2.45885 11.6895 2.67765 11.9083C2.89644 12.1271 3.19318 12.25 3.5026 12.25H10.5026C10.812 12.25 11.1088 12.1271 11.3276 11.9083C11.5464 11.6895 11.6693 11.3928 11.6693 11.0833V7C11.6693 6.69058 11.5464 6.39383 11.3276 6.17504C11.1088 5.95625 10.812 5.83333 10.5026 5.83333H9.33594M4.66927 5.83333V4.08333C4.66927 3.46449 4.9151 2.871 5.35269 2.43342C5.79027 1.99583 6.38377 1.75 7.0026 1.75C7.62144 1.75 8.21494 1.99583 8.65252 2.43342C9.09011 2.871 9.33594 3.46449 9.33594 4.08333V5.83333M4.66927 5.83333H9.33594M7.0026 8.16667V9.91667" stroke="#C293C9" stroke-width="0.916667" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Locked
                                            </a>
                                        </div>
                                    </div>
                                    <div class="border-bottom-E9E7DD-24"></div>
                                    <div class="table-row d-grid col-lg-5 align-center gap-10">
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                2028
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                q3 cLIFF
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                59,167
                                            </p>
                                        </div>
                                        <div class="date-outer">
                                            <p class="f-16 lh-16 white">
                                                $5,295,450
                                            </p>
                                        </div>
                                        <div class="date-outer pending-btn d-flex justify-center">
                                            <a href="#" class="p-6-14 f-16 lh-16 clr-C293C9 d-flex gap-6 align-center border-FFBB33-15 bg-FFBB33-5 justify-center br-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path d="M4.66927 5.83333H3.5026C3.19318 5.83333 2.89644 5.95625 2.67765 6.17504C2.45885 6.39383 2.33594 6.69058 2.33594 7V11.0833C2.33594 11.3928 2.45885 11.6895 2.67765 11.9083C2.89644 12.1271 3.19318 12.25 3.5026 12.25H10.5026C10.812 12.25 11.1088 12.1271 11.3276 11.9083C11.5464 11.6895 11.6693 11.3928 11.6693 11.0833V7C11.6693 6.69058 11.5464 6.39383 11.3276 6.17504C11.1088 5.95625 10.812 5.83333 10.5026 5.83333H9.33594M4.66927 5.83333V4.08333C4.66927 3.46449 4.9151 2.871 5.35269 2.43342C5.79027 1.99583 6.38377 1.75 7.0026 1.75C7.62144 1.75 8.21494 1.99583 8.65252 2.43342C9.09011 2.871 9.33594 3.46449 9.33594 4.08333V5.83333M4.66927 5.83333H9.33594M7.0026 8.16667V9.91667" stroke="#C293C9" stroke-width="0.916667" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Locked
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
    
                        </div>
                    </div>
    
    
    
    
                    <div class="d-flex gap-16 flex-col">
                        <h3 class="f-16 lh-12 white-80">
                            The “Exit Price” (Forfeiture Risk)
                        </h3>
                        <div class="d-grid col-lg-2 gap-32">
                            <div class="bg-0B1417 border-E9E7DD-15 p-32-24 br-12">
                                <h3 class="f-14 lh-12 clr-99ACB6 uppercase mb-16">
                                    If your depart on 06/01/2026
                                </h3>
                                <div class="d-flex flex-col gap-11 mb-48">
                                    <div class="d-flex gap-10 align-center justify-space-between">
                                        <p class="f-14 lh-14 clr-99ACB6">
                                            Loss of unvested equity
                                        </p>
                                        <p class="f-16 lh-11 clr-F8B4B2">
                                            ($8,240,000)
                                        </p>
                                    </div>
                                    <div class="border-bottom-E9E7DD-40">
    
                                    </div>
                                    <div class="d-flex gap-10 align-center justify-space-between">
                                        <p class="f-14 lh-14 clr-99ACB6">
                                            Loss of potential growth (5%)
                                        </p>
                                        <p class="f-16 lh-11 clr-F8B4B2">
                                            ($412,000)
                                        </p>
                                    </div>
                                    <div class="border-bottom-E9E7DD-40">
    
                                    </div>
                                    <div class="d-flex gap-10 align-center justify-space-between">
                                        <p class="f-14 lh-14 clr-99ACB6">
                                            Total Opportunity Cost
                                        </p>
                                        <p class="f-16 lh-11 clr-F8B4B2">
                                            $8,652,000
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex gap-18 flex-col">
                                    <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-131927 justify-center bold">Analyze Early Retirement Impact</a>
                                    <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold">Review Employment Agreement Terms</a>
                                </div>
                            </div>
                            <div class="bg-0B1417 border-E9E7DD-15 p-32-24 br-12">
                                <div class="d-flex gap-10px justify-space-between align-center mb-16">
                                    <div class="d-flex gap-8 align-center">
                                        <div class="notification-outer w-38 h-38">
                                            <img src="./images/vesting-timeline.svg" alt="assets icon">
                                        </div>
                                        <div class="card-cont">
                                            <h3 class="f-16 lh-12 white">
                                                Vesting Timeline
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="btn-col">
                                        <!-- <a href="#" class="btn btn-red p-5-11 f-14 d-flex">66.7% Concentration Risk</a> -->
                                        <a href="#" class="br-8 p-5-11 clr-A7DFBD f-12 lh-12 d-inline-flex gap-6 align-center border-A7DFBD">
                                            *AMZN Stock Price: $89.5
                                        </a>
                                    </div>
                                </div>
    
                                <div class="timeline locked-timeline real-timeline mb-40">
                                    <div class="timeline-progress"></div>
    
                                    <div class="timeline-item active timeline-start">
                                        <div class="dot"></div>
                                        <div class="content">
                                            <p class="f-12 lh-12 clr-23B05B mb-10">2026 Q3</p>
                                            <h4 class="f-16 lh-10 clr-99ACB6 mb-10">4,200 shares</h4>
                                            <p class="f-16 lh-14 white">Plan Signed</p>
                                        </div>
                                    </div>
    
                                    <div class="timeline-item">
                                        <div class="dot"></div>
                                        <div class="content">
                                            <p class="f-12 lh-12 clr-23B05B mb-10">2026 Q4</p>
                                            <h4 class="f-16 lh-10 clr-99ACB6 mb-10">$375,900</h4>
                                            <p class="f-16 lh-14 white">4,200 shares</p>
                                        </div>
                                    </div>
    
                                    <div class="timeline-item timeline-end">
                                        <div class="dot"></div>
                                        <div class="content">
                                            <p class="f-12 lh-12 clr-yellow-400 mb-10">2027</p>
                                            <h4 class="f-16 lh-10 clr-99ACB6 mb-10">$2,192,750</h4>
                                            <p class="f-16 lh-14 white">24,500 shares</p>
                                        </div>
                                    </div>
    
                                    <div class="timeline-item timeline-end">
                                        <div class="dot"></div>
                                        <div class="content">
                                            <p class="f-12 lh-12 clr-yellow-400 mb-10 bold">2028 Q3</p>
                                            <h4 class="f-16 lh-10 clr-99ACB6 mb-10">$5,295,450</h4>
                                            <p class="f-16 lh-14 white">54,650 shares</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="bg-108476-5 p-8-12 br-16 d-flex gap-12 align-center f-12 lh-14 neutral-300 mb-15">
                                    <img src="{{ asset('images/information-line.svg') }}" alt="search icon">
                                    Values are calculated using the prior day's closing price for XYZ ($89.50).
                                </div>
                                <p class="f-12 lh-14 clr-E9E7DD-34">
                                    <em>
                                        Data refreshes automatically via livecustom API feed sync.
                                    </em>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
    </div>
</div>

@endsection