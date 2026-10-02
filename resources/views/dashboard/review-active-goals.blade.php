@extends('layouts.app')

@section('title', 'Review my Active Goals')

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
            Review my Active Goals
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
        <div class="card-outer d-flex flex-col gap-16 align-flex-start">
            <div class="d-grid col-lg-4 gap-16 w-100">
                <div class="bg-060F13 border-E9E7DD-15 br-12 p-16 d-flex gap-8 flex-col">
                    <h5 class="f-12 lh-14 uppercase clr-99ACB6 ls-042">
                        Active Goals
                    </h5>
                    <div>
                        <h4 class="f-24 lh-26 white mb-4 ls-042">
                            4
                        </h4>
                        <p class="f-12 lh-14 clr-7BD09D">
                            Total goals
                        </p>
                    </div>
                    <p class="f-11 lh-12 neutral-300">
                        Wealth GOALS Overview snapshot
                    </p>
                </div>

                <div class="bg-060F13 border-E9E7DD-15 br-12 p-16 d-flex gap-8 flex-col">
                    <h5 class="f-12 lh-14 uppercase clr-99ACB6 ls-042">
                        On Track
                    </h5>
                    <div>
                        <h4 class="f-24 lh-26 white mb-4 ls-042">
                            2
                        </h4>
                        <p class="f-12 lh-14 clr-7BD09D">
                            Goals on track
                        </p>
                    </div>
                    <p class="f-11 lh-12 neutral-300">
                        Brown University and Retirement 2030
                    </p>
                </div>

                <div class="bg-060F13 border-E9E7DD-15 br-12 p-16 d-flex gap-8 flex-col">
                    <h5 class="f-12 lh-14 uppercase clr-99ACB6 ls-042">
                        Attention Needed
                    </h5>
                    <div>
                        <h4 class="f-24 lh-26 white mb-4 ls-042">
                            1
                        </h4>
                        <p class="f-12 lh-14 clr-FF928A">
                            Goal needs review
                        </p>
                    </div>
                    <p class="f-11 lh-12 neutral-300">
                        UPENN College
                    </p>
                </div>

                <div class="bg-060F13 border-E9E7DD-15 br-12 p-16 d-flex gap-8 flex-col">
                    <h5 class="f-12 lh-14 uppercase clr-99ACB6 ls-042">
                        Accumulating Seed
                    </h5>
                    <div>
                        <h4 class="f-24 lh-26 white mb-4 ls-042">
                            1
                        </h4>
                        <p class="f-12 lh-14 clr-108476">
                            Goal in early phase
                        </p>
                    </div>
                    <p class="f-11 lh-12 neutral-300">
                        Florida Vacation Home
                    </p>
                </div>

            </div>

            <div class="d-grid col-2-1 gap-24 w-100">
                <div class="d-flex gap-16 flex-col">
                    <h2 class="f-16 lh-18 white">
                        Master Goal Ledger (WIP Snapshot)
                    </h2>

                    <div class="d-flex gap-16 flex-col">

                    </div>
                </div>

                <div class="d-flex gap-16 flex-col">
                    <h2 class="f-16 lh-18 white">
                        Selected Goal Detail
                    </h2>
                    <div class="d-flex gap-20 bg-10191D br-16 flex-col p-20">
                        <div class="d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-8 align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M11.3076 8.73382C11.421 8.39356 11.7394 8.16406 12.098 8.16406H15.896C16.2546 8.16406 16.573 8.39356 16.6864 8.73382L17.7973 12.0668C17.9771 12.6064 17.5756 13.1636 17.0069 13.1636H10.9871C10.4184 13.1636 10.0169 12.6064 10.1967 12.0668L11.3076 8.73382Z" stroke="#E9E7DD" stroke-width="1.5" />
                                    <path d="M7.14036 14.9838C7.25379 14.6436 7.57224 14.4141 7.93094 14.4141H11.7297C12.0884 14.4141 12.4068 14.6436 12.5203 14.9838L13.6314 18.3168C13.8113 18.8564 13.4096 19.4136 12.8408 19.4136H6.81982C6.25102 19.4136 5.84937 18.8564 6.02924 18.3168L7.14036 14.9838Z" stroke="#E9E7DD" stroke-width="1.5" />
                                    <path d="M15.4734 14.9838C15.5868 14.6436 15.9053 14.4141 16.2639 14.4141H20.0627C20.4214 14.4141 20.7399 14.6436 20.8533 14.9838L21.9644 18.3168C22.1443 18.8564 21.7426 19.4136 21.1738 19.4136H15.1528C14.584 19.4136 14.1824 18.8564 14.3623 18.3168L15.4734 14.9838Z" stroke="#E9E7DD" stroke-width="1.5" />
                                </svg>
                                <h2 class="f-16 lh-18 white">
                                    Brown University
                                </h2>
                            </div>

                            <div class="border-4FC07C bg-4FC07C-10 clr-4FC07C br-6 p-4-8 f-12 lh-14 m-fit-content">
                                On Track
                            </div>
                        </div>

                        <div class="d-flex gap-8 flex-col">
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-13 lh-14 clr-99ACB6">
                                    Progress
                                </p>
                                <p class="f-13 lh-14 white">
                                    64%
                                </p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-4FC07C" style="width:64%;"></div>
                            </div>
                        </div>

                        <div class="d-flex gap-9 flex-col">
                            <div class="d-flex gap-10 align-center justify-space-between">
                                <p class="f-13 lh-14 clr-99ACB6">
                                    User
                                </p>
                                <p class="f-14 lh-16 white">
                                    John
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-15 mb-3">

                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between">
                                <p class="f-13 lh-14 clr-99ACB6">
                                    Target Year
                                </p>
                                <p class="f-14 lh-16 white">
                                    2029
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-15 mb-3">

                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between">
                                <p class="f-13 lh-14 clr-99ACB6">
                                    Status
                                </p>
                                <p class="f-14 lh-16 clr-4FC07C">
                                    On Track
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-15 mb-3">

                            </div>
                        </div>

                        <div class="d-flex gap-8 flex-col">
                            <a href="#" class="p-12 bg-23B05B br-100px d-flex gap-8 align-center justify-center f-14 lh-16 clr-0B1417 bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                    <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#101010" stroke-width="1.25" stroke-linecap="round"></path>
                                </svg>
                                Adjust Contribution
                            </a>

                            <a href="#" class="p-12 br-100px d-flex gap-8 align-center justify-center f-14 lh-16 white bold border-E9E7DD-24">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                    <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#101010" stroke-width="1.25" stroke-linecap="round"></path>
                                </svg>
                                View Goal
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection