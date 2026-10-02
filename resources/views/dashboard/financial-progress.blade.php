@extends('layouts.app')

@section('title', 'Financial Progress')

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
            Financial Progress
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
        <div class="card-outer d-flex flex-col gap-48 align-flex-start">
            <div class="d-grid col-lg-3 gap-20 w-100">
                <div class="bg-0B1417 border-E9E7DD-15 br-12 p-20 d-flex gap-12 flex-col">
                    <h3 class="f-14 lh-16 uppercase clr-99ACB6">
                        Retirement Runway
                    </h3>
                    <p class="f-20 lh-22 white">
                        Total Balance: $1,240,000
                    </p>
                    <div class="d-flex gap-6 align-center">
                        <div class="bg-4FC07C w-6 h-6 br-100">

                        </div>
                        <p class="f-14 lh-14 white-80">
                            Trajectory vs 2030: (+3.2%)
                        </p>
                    </div>
                </div>

                <div class="bg-0B1417 border-E9E7DD-15 br-12 p-20 d-flex gap-12 flex-col">
                    <h3 class="f-14 lh-16 uppercase clr-99ACB6">
                        Ivy Tuition Lock-In
                    </h3>
                    <p class="f-20 lh-22 white">
                        Combined Balance: $320,000
                    </p>
                    <div class="d-flex gap-6 align-center">
                        <div class="bg-4FC07C w-6 h-6 br-100">

                        </div>
                        <p class="f-14 lh-14 white-80">
                            Target Needs: Brown/UPENN
                        </p>
                    </div>
                </div>

                <div class="bg-0B1417 border-E9E7DD-15 br-12 p-20 d-flex gap-12 flex-col">
                    <h3 class="f-14 lh-16 uppercase clr-99ACB6">
                        Property Seed
                    </h3>
                    <p class="f-20 lh-22 white">
                        Down Payment Cash: $85,000
                    </p>
                    <div class="d-flex gap-6 align-center">
                        <div class="bg-yellow-300 w-6 h-6 br-100">

                        </div>
                        <p class="f-14 lh-14 white-80">
                            Needed for 2031: $200,000
                        </p>
                    </div>
                </div>

            </div>

            <div class="d-flex flex-col gap-16 w-100">
                <h3 class="f-16 lh-18 white-80 capitalize">
                    Target milestones overlap matrix
                </h3>
                <div class="bg-0B1417 border-E9E7DD-15 br-16 p-24 d-flex gap-20 flex-col">
                    <div class="d-flex gap-10 align-center justify-space-between">
                        <p class="f-16 lh-18 white">
                            Cumulative Growth Curves vs Major Distribution Windows
                        </p>
                        <div class="d-flex gap-16 align-center">
                            <div class="d-flex gap-6 align-center">
                                <div class="bg-white w-12 h-4">

                                </div>
                                <p class="f-12 lh-14 white-50">
                                    Target Path
                                </p>
                            </div>
                            <div class="d-flex gap-6 align-center">
                                <div class="bg-4FC07C w-12 h-4">

                                </div>
                                <p class="f-12 lh-14 white-50">
                                    Actual Track
                                </p>
                            </div>
                            <div class="d-flex gap-6 align-center">
                                <div class="bg-FF5F57-10 border-FF5F57 w-12 h-12">

                                </div>
                                <p class="f-12 lh-14 white-50">
                                    Shaded Outflow Warning Zone
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{ asset('images/progress-org.svg') }}" alt="Progress Icon">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection