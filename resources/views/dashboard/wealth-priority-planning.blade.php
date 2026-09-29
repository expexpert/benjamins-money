@extends('layouts.app')

@section('title', 'Wealth Priority Planning')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Wealth Goals
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <!-- <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Generational Asset Protection
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg> -->
        <p class="f-16 lh-18 white">
            Priority Planning
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
        <div class="card-outer d-grid col-15-1 gap-16 align-flex-start">
            <div class="border-E9E7DD-15 bg-0B1417 p-32-24 d-flex flex-col gap-16 br-16">
                <h2 class="f-16 lh-18 white-80">
                    Active goal funnel
                </h2>
                <div class="bg-108476-8 br-12 border-D3EFDE-30 p-16 d-flex gap-14">
                    <div class="w-24 h-24">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12.9167 15.663L16.5833 19.3293L20.25 15.663M16.5833 19.3293V4.66406M11.0833 8.33036L7.41667 4.66406L3.75 8.33036M7.41667 4.66406V19.3293" stroke="#4FC07C" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="d-flex gap-6 flex-col">
                        <h3 class="f-14 lh-16 white uppercase">
                            REP_RIORITIZATION ACTIVE
                        </h3>
                        <p class="f-12 lh-14 clr-D3EFDE">
                            Drag any goal card by the grip handle to adjust funding priorities instantly.
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-16 align-center">
                    <div class="d-flex gap-6 align-center">
                        <div class="w-14 h-14">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_13248_26414)">
                                    <g clip-path="url(#clip1_13248_26414)">
                                        <path d="M4.29167 6.46133V4.29449C4.29167 3.57614 4.57701 2.88721 5.08492 2.37925C5.59283 1.8713 6.28171 1.58594 7 1.58594C7.71829 1.58594 8.40717 1.8713 8.91508 2.37925C9.42299 2.88721 9.70833 3.57614 9.70833 4.29449V6.46133M3.20833 6.46133H10.7917C11.39 6.46133 11.875 6.94639 11.875 7.54475V11.3367C11.875 11.9351 11.39 12.4201 10.7917 12.4201H3.20833C2.61002 12.4201 2.125 11.9351 2.125 11.3367V7.54475C2.125 6.94639 2.61002 6.46133 3.20833 6.46133Z" stroke="#F58F8C" stroke-width="2" stroke-linecap="round" />
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13248_26414">
                                        <rect width="14" height="14" fill="white" />
                                    </clipPath>
                                    <clipPath id="clip1_13248_26414">
                                        <rect width="13" height="13" fill="white" transform="translate(0.5 0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="f-12 lh-14 white-50">
                            Locked Allocation
                        </p>
                    </div>

                    <div class="d-flex gap-6 align-center">
                        <div class="w-14 h-14">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_13248_26419)">
                                    <path d="M2.125 7H11.875M3.20833 2.125H10.7917C11.39 2.125 11.875 2.61002 11.875 3.20833V10.7917C11.875 11.39 11.39 11.875 10.7917 11.875H3.20833C2.61002 11.875 2.125 11.39 2.125 10.7917V3.20833C2.125 2.61002 2.61002 2.125 3.20833 2.125Z" stroke="#8C8B85" stroke-width="2" stroke-linecap="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_13248_26419">
                                        <rect width="14" height="14" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="f-12 lh-14 white-50">
                            Movable (Drag-Enabled)
                        </p>
                    </div>

                </div>

                <div class="d-flex gap-24 flex-col">
                    <div class="bg-0B1417 br-12 border-E9E7DD-15 bl-6-7BD09D p-16 d-grid col-2-1 gap-20 align-center">
                        <div class="d-flex gap-6 flex-col align-flex-start">
                            <div class="p-4-8 bg-4FC07C-10 br-4 gap-8 d-flex align-center">
                                <p class="f-12 lh-14 clr-7BD09D uppercase">
                                    CORE EMPLOYER MATCH
                                </p>
                                <span class="p-4-8 br-100px border-yellow-200 f-12 lh-12 clr-yellow-200">
                                    P1 - Critical
                                </span>
                            </div>
                            <p class="f-16 lh-18 white">
                                Financial Independence (Retirement)
                            </p>
                            <p class="f-14 lh-14 clr-99ACB6">
                                Priority #3 • Target Year: 2030
                            </p>
                        </div>
                        <div class="icon-box right ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_13248_26414)">
                                    <g clip-path="url(#clip1_13248_26414)">
                                        <path d="M4.29167 6.46133V4.29449C4.29167 3.57614 4.57701 2.88721 5.08492 2.37925C5.59283 1.8713 6.28171 1.58594 7 1.58594C7.71829 1.58594 8.40717 1.8713 8.91508 2.37925C9.42299 2.88721 9.70833 3.57614 9.70833 4.29449V6.46133M3.20833 6.46133H10.7917C11.39 6.46133 11.875 6.94639 11.875 7.54475V11.3367C11.875 11.9351 11.39 12.4201 10.7917 12.4201H3.20833C2.61002 12.4201 2.125 11.9351 2.125 11.3367V7.54475C2.125 6.94639 2.61002 6.46133 3.20833 6.46133Z" stroke="#F58F8C" stroke-width="2" stroke-linecap="round"></path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13248_26414">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                    <clipPath id="clip1_13248_26414">
                                        <rect width="13" height="13" fill="white" transform="translate(0.5 0.5)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                    </div>


                    <div class="bg-0B1417 br-12 border-E9E7DD-15 bl-6-red-300 p-16 d-grid col-2-1 gap-20 align-center">
                        <div class="d-flex gap-6 flex-col align-flex-start">
                            <div class="p-4-8 bg-FF5F57-10 br-4 gap-8 d-flex align-center">
                                <p class="f-12 lh-14 clr-red-300 uppercase">
                                    OPTIMIZED • SECURED
                                </p>
                                <span class="p-4-8 br-100px border-yellow-200 f-12 lh-12 clr-yellow-200">
                                    P2 - Important
                                </span>
                            </div>
                            <p class="f-16 lh-18 white">
                                John’s College Funding (Brown)
                            </p>
                            <p class="f-14 lh-14 clr-99ACB6">
                                Priority #1 • Target Year: 2029
                            </p>
                        </div>
                        <div class="icon-box right ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_13248_26419)">
                                    <path d="M2.125 7H11.875M3.20833 2.125H10.7917C11.39 2.125 11.875 2.61002 11.875 3.20833V10.7917C11.875 11.39 11.39 11.875 10.7917 11.875H3.20833C2.61002 11.875 2.125 11.39 2.125 10.7917V3.20833C2.125 2.61002 2.61002 2.125 3.20833 2.125Z" stroke="#8C8B85" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13248_26419">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                    </div>

                    <div class="bg-0B1417 br-12 border-E9E7DD-15 bl-6-7BD09D p-16 d-grid col-2-1 gap-20 align-center">
                        <div class="d-flex gap-6 flex-col align-flex-start">
                            <div class="p-4-8 bg-4FC07C-10 br-4 gap-8 d-flex align-center">
                                <p class="f-12 lh-14 clr-7BD09D uppercase">
                                    CONCURRENT COMPOUNDING
                                </p>
                                <!-- <span class="p-4-8 br-100px border-yellow-200 f-12 lh-12 clr-yellow-200">
                                    P1 - Critical
                                </span> -->
                            </div>
                            <p class="f-16 lh-18 white">
                                Mary’s College Funding (UPENN)
                            </p>
                            <p class="f-14 lh-14 clr-99ACB6">
                                Priority #2 • Target Year: 2030
                            </p>
                        </div>
                        <div class="icon-box right ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_13248_26419)">
                                    <path d="M2.125 7H11.875M3.20833 2.125H10.7917C11.39 2.125 11.875 2.61002 11.875 3.20833V10.7917C11.875 11.39 11.39 11.875 10.7917 11.875H3.20833C2.61002 11.875 2.125 11.39 2.125 10.7917V3.20833C2.125 2.61002 2.61002 2.125 3.20833 2.125Z" stroke="#8C8B85" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13248_26419">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                    </div>

                    <div class="bg-0B1417 br-12 border-E9E7DD-15 bl-6-EDB37E p-16 d-grid col-2-1 gap-20 align-center">
                        <div class="d-flex gap-6 flex-col align-flex-start">
                            <div class="p-4-8 bg-C8AD98-15 br-4 gap-8 d-flex align-center">
                                <p class="f-12 lh-14 clr-EDB37E uppercase">
                                    EARLY STAGE ACCUMULATION
                                </p>
                                <!-- <span class="p-4-8 br-100px border-yellow-200 f-12 lh-12 clr-yellow-200">
                                    P1 - Critical
                                </span> -->
                            </div>
                            <p class="f-16 lh-18 white">
                                Florida Vacation Property Acquisition
                            </p>
                            <p class="f-14 lh-14 clr-99ACB6">
                                Priority #4 • Target Year: 2031
                            </p>
                        </div>
                        <div class="icon-box right ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_13248_26419)">
                                    <path d="M2.125 7H11.875M3.20833 2.125H10.7917C11.39 2.125 11.875 2.61002 11.875 3.20833V10.7917C11.875 11.39 11.39 11.875 10.7917 11.875H3.20833C2.61002 11.875 2.125 11.39 2.125 10.7917V3.20833C2.125 2.61002 2.61002 2.125 3.20833 2.125Z" stroke="#8C8B85" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_13248_26419">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                    </div>

                </div>
            </div>

            <div class="bg-0B1417 br-16 border-E9E7DD-15 p-32-24 d-flex flex-col gap-24">
                <h2 class="f-16 lh-18 white-80">
                    Dynamic Contribution Slider:
                </h2>
                <div class="d-flex gap-10 align-flex-start justify-space-between flex-col">
                    <p class="f-16 lh-18 white-80">
                        Currently Saving /Mo
                    </p>
                    <p class="f-18 lh-20 white">
                        $1,200
                    </p>
                </div>
                <div class="d-flex gap-6 flex-col">
                    <p class="f-14 lh-16 white-80 mb-10">
                        Shifting extra monthly savings allocation to UPENN 2030:
                    </p>
                    <div class="bg-000A0F border-99ACB6-20 br-8 p-12 d-flex justify-space-between align-center">
                        <button class="w-40 h-40 d-flex align-center justify-center bg-0B1417 border-E9E7DD-15 white br-8">
                            -
                        </button>

                        <p class="f-18 lh-20 white">
                            $500/Mo
                        </p>

                        <button class="w-40 h-40 d-flex align-center justify-center bg-0B1417 border-E9E7DD-15 white br-8">
                            +
                        </button>
                    </div>
                    <div class="progress br-4">
                        <div class="progress-bar bg-7BD09D" style="width: 100%;">

                        </div>
                    </div>
                    <div class="d-flex gap-10 justify-space-between">
                        <p class="f-14 lh-16 white-50">
                            $0
                        </p>
                        <p class="f-14 lh-16 white-50">
                            $2,000
                        </p>
                    </div>
                </div>
                <div class="bg-4FC07C-10 border-7BD09D br-12 p-16 d-flex gap-12">
                    <div class="w-16 h-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <g clip-path="url(#clip0_13252_27110)">
                                <path d="M14.5336 6.66373C14.838 8.15793 14.6211 9.71135 13.9188 11.0649C13.2166 12.4185 12.0715 13.4904 10.6746 14.1019C9.27767 14.7135 7.71333 14.8276 6.24244 14.4253C4.77156 14.023 3.48304 13.1287 2.59176 11.8913C1.70049 10.654 1.26033 9.14856 1.34469 7.62599C1.42905 6.10342 2.03283 4.65579 3.05535 3.52451C4.07786 2.39323 5.4573 1.64668 6.96362 1.40937C8.46995 1.17205 10.0121 1.4583 11.3329 2.2204M5.99984 7.33008L7.99984 9.33008L14.6665 2.66341" stroke="#7BD09D" stroke-width="1.25" stroke-linecap="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_13252_27110">
                                    <rect width="16" height="16" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <p class="f-14 lh-18 clr-7BD09D">
                        Impact Update: Moves Mary’s UPENN goal status from “Attention Needed” to “On Track.”
                    </p>
                </div>
                <a href="#" class="btn btn-green p-10-21 f-14 d-flex clr-101010 justify-center bold gap-8 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M4.08333 6.41448V4.08096C4.08333 3.30735 4.39062 2.56543 4.93761 2.0184C5.48459 1.47138 6.22645 1.16406 7 1.16406C7.77355 1.16406 8.51541 1.47138 9.06239 2.0184C9.60938 2.56543 9.91667 3.30735 9.91667 4.08096V6.41448M2.91667 6.41448H11.0833C11.7277 6.41448 12.25 6.93686 12.25 7.58124V11.6649C12.25 12.3093 11.7277 12.8317 11.0833 12.8317H2.91667C2.27233 12.8317 1.75 12.3093 1.75 11.6649V7.58124C1.75 6.93686 2.27233 6.41448 2.91667 6.41448Z" stroke="#101010" stroke-width="1.25" stroke-linecap="round" />
                    </svg>
                    View Forfeiture Risk
                </a>
            </div>

        </div>
    </div>
</div>

@endsection