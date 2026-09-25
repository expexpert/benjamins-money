@extends('layouts.app')

@section('title', 'Wealth Goals Overview')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <!-- <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Estate & Legacy
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Generational Asset Protection
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg> -->
        <p class="f-16 lh-18 white">
            Wealth Goals
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
        <div class="card-outer d-flex gap-16 align-flex-start flex-col">
            <div class="bg-0B1417 border-E9E7DD-15 br-16 p-32 w-100">
                <h4 class="f-18 lh-20 white mb-8">
                    Take Control of Your Financial Destiny
                </h4>
                <p class="f-14 lh-16 white-80 mb-20">
                    Plan your priorities, track progress, and map your cash flow timeline.
                </p>
                <div class="d-flex gap-16">
                    <a href="#" class="bg-4FC07C p-12-24 br-24 f-14 lh-16 clr-072312 bold">Review My Active Goals</a>
                    <a href="#" class="d-flex gap-8 f-14 lh-16 bold clr-4FC07C p-12-24 border-4FC07C br-24">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                            <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round"></path>
                        </svg>
                        Run Scenario Stress Test
                    </a>
                </div>
            </div>

            <div class="d-grid col-lg-4 gap-16 w-100">
                <div class="bg-0B1417 br-12 border-E9E7DD-15 p-20 d-flex flex-col gap-16 justify-start align-flex-start">
                    <span class="f-12 lh-12 clr-yellow-200 p-4-8 br-50 border-yellow-200 m-fit-content">
                        P1 - Critical
                    </span>
                    <div>
                        <h5 class="f-16 lh-18 white mb-4">
                            Retirement 2030
                        </h5>
                        <p class="f-12 lh-14 clr-99ACB6 mb-4">
                            User: Household
                        </p>
                        <p class="f-14 lh-14 white-50">
                            Target Year: 2030
                        </p>
                    </div>
                    <div class="progress-outer w-100">
                        <div class="d-flex gap-10 justify-space-between mb-6">
                            <p class="f-14 lh-14 white-50">
                                Progress
                            </p>
                            <p class="f-14 lh-16 white bold">
                                72%
                            </p>
                        </div>
                        <div class="progress h-6">
                            <div class="progress-bar bg-4FC07C" style="width:72%;"></div>
                        </div>
                    </div>
                    <div class="bg-ECFDF5 border-047857 br-8 p-4-10 f-12 lh-14 clr-0E4624 m-fit-content">
                        On Track
                    </div>
                </div>

                <div class="bg-0B1417 br-12 border-E9E7DD-15 p-20 d-flex flex-col gap-16 justify-start align-flex-start">
                    <span class="f-12 lh-12 clr-blue-100 p-4-8 br-50 border-blue-100 m-fit-content">
                        P2 - Important
                    </span>
                    <div>
                        <h5 class="f-16 lh-18 white mb-4">
                            Brown University
                        </h5>
                        <p class="f-12 lh-14 clr-99ACB6 mb-4">
                            User: John
                        </p>
                        <p class="f-14 lh-14 white-50">
                            Target Year: 2029
                        </p>
                    </div>
                    <div class="progress-outer w-100">
                        <div class="d-flex gap-10 justify-space-between mb-6">
                            <p class="f-14 lh-14 white-50">
                                Progress
                            </p>
                            <p class="f-14 lh-16 white bold">
                                64%
                            </p>
                        </div>
                        <div class="progress h-6">
                            <div class="progress-bar bg-4FC07C" style="width:64%;"></div>
                        </div>
                    </div>
                    <div class="bg-ECFDF5 border-047857 br-8 p-4-10 f-12 lh-14 clr-0E4624 m-fit-content">
                        On Track
                    </div>
                </div>

                <div class="bg-0B1417 br-12 border-E9E7DD-15 p-20 d-flex flex-col gap-16 justify-start align-flex-start">
                    <span class="f-12 lh-12 clr-blue-100 p-4-8 br-50 border-blue-100 m-fit-content">
                        P2 - Important
                    </span>
                    <div>
                        <h5 class="f-16 lh-18 white mb-4">
                            UPENN College
                        </h5>
                        <p class="f-12 lh-14 clr-99ACB6 mb-4">
                            User: Mary
                        </p>
                        <p class="f-14 lh-14 white-50">
                            Target Year: 2030
                        </p>
                    </div>
                    <div class="progress-outer w-100">
                        <div class="d-flex gap-10 justify-space-between mb-6">
                            <p class="f-14 lh-14 white-50">
                                Progress
                            </p>
                            <p class="f-14 lh-16 white bold">
                                58%
                            </p>
                        </div>
                        <div class="progress h-6">
                            <div class="progress-bar bg-FEBC2E" style="width:58%;"></div>
                        </div>
                    </div>
                    <div class="bg-D08D09-20 border-D08D09 br-8 p-4-10 f-12 lh-14 clr-yellow-900 m-fit-content">
                        Attention Needed
                    </div>
                </div>

                <div class="bg-0B1417 br-12 border-E9E7DD-15 p-20 d-flex flex-col gap-16 justify-start align-flex-start">
                    <span class="f-12 lh-12 clr-AFCCA1 p-4-8 br-50 border-AFCCA1 m-fit-content">
                        P3 - Aspirational
                    </span>
                    <div>
                        <h5 class="f-16 lh-18 white mb-4">
                            Florida Vacation Home
                        </h5>
                        <p class="f-12 lh-14 clr-99ACB6 mb-4">
                            Target Year: 2031
                        </p>
                        <p class="f-14 lh-14 white-50">
                            Target Year: 2031
                        </p>
                    </div>
                    <div class="progress-outer w-100">
                        <div class="d-flex gap-10 justify-space-between mb-6">
                            <p class="f-14 lh-14 white-50">
                                Progress
                            </p>
                            <p class="f-14 lh-16 white bold">
                                41%
                            </p>
                        </div>
                        <div class="progress h-6">
                            <div class="progress-bar bg-108476" style="width:41%;"></div>
                        </div>
                    </div>
                    <div class="bg-EDF8FF border-blue-800 br-8 p-4-10 f-12 lh-14 clr-blue-800 m-fit-content">
                        Accumulating Seed
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection