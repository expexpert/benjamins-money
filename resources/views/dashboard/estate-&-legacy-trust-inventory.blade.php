@extends('layouts.app')

@section('title', 'Estate & Legacy - Trust Inventory, Funding & Governance Registry')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Estate & Legacy
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
        <div class="card-outer d-flex gap-48 align-flex-start flex-col w-100">
            <div class="d-flex flex-col gap-12 w-100">
                <h2 class="f-16 lh-12 white-80">
                    trust Oversight & Liquidity Matrix
                </h2>
                <div class="bg-0B1417 br-16 border-E9E7DD-24 p-32-24">
                    <div class="tablecontainer table-bordered">
                        <table>
                            <tr>
                                <th class="f-13 lh-10 uppercase clr-99ACB6 text-left ls-042">VEHICLE TYPE & TITLE (Input- dd)</th>
                                <th class="f-13 lh-10 uppercase clr-99ACB6 text-left ls-042">INTENDED PURPOSE- dd</th>
                                <th class="f-13 lh-10 uppercase clr-99ACB6 text-left ls-042">FUNDED VALUE input</th>
                                <th class="f-13 lh-10 uppercase clr-99ACB6 text-left ls-042">Tax Status</th>
                                <th class="f-13 lh-10 uppercase clr-99ACB6 text-left ls-042 right">GOVERNANCE STATUS-dd</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        Smith Family RLT (2018)
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-20 white">
                                        Primary Estate Probate Avoid.
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        $18,500,000

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        Grantor
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-end">
                                        <div class="p-4-8 br-4 bg-E8F3DC clr-156A37 bold">
                                            Completed
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        John Smith 2024 ILIT
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-20 white">
                                        Exclude Life Ins. from Estate
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        $10,000,000
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        Non-Grantor
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-end">
                                        <div class="p-4-8 br-4 bg-blend-yellow clr-yellow-700 f-14 lh-14 bold">
                                            Crummey Reqd.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        Smith Asset GRAT (AMZN)
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-20 white">
                                        Freeze & Shift Stock Growth
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        $8,200,000
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        Grantor
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-end">
                                        <div class="p-4-8 br-4 bg-blend-yellow clr-yellow-700 f-14 lh-14 bold">
                                            Annuity Due
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        Smith Dynasty Trust (GST)
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-20 white">
                                        Multi-Gen Tax-Exempt Legacy
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        $0
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start f-16 lh-16 white">
                                        Non-Grantor
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-end">
                                        <div class="p-4-8 br-4 bg-blended clr-red-800 f-14 lh-14 d-inline-flex align-center justify-center bold">
                                            Unfunded Risk
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-col gap-24 w-100">
                <div class="d-flex flex-col gap-16">
                    <h2 class="f-16 lh-12 white-80">
                        Critical Action Hub & Automated Governance Tasks -TBD P4
                    </h2>
                    <div class="d-grid gap-26 col-lg-3">
                        <div class="br-12 bg-0B1417 border-E9E7DD-40 p-32-24 d-flex flex-col gap-16">
                            <div class="d-flex gap-12 align-center">
                                <div class="w-38 h-38 bg-108476-10 d-flex align-center justify-center br-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                                        <path d="M0.625 0.625H15.7829" stroke="#108476" stroke-width="1.25" stroke-linecap="round" />
                                        <path d="M6.09863 11.9922H10.3092" stroke="#108476" stroke-width="1.25" stroke-linecap="round" />
                                        <path d="M5.25684 9.46875H11.1516" stroke="#108476" stroke-width="1.25" stroke-linecap="round" />
                                        <path d="M4.41406 6.9375H11.993" stroke="#108476" stroke-width="1.25" stroke-linecap="round" />
                                        <path d="M14.9405 3.14844V13.2537C14.9405 15.114 13.4324 16.6221 11.5721 16.6221H4.83522C2.97489 16.6221 1.4668 15.114 1.4668 13.2537V3.14844" stroke="#108476" stroke-width="1.25" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h3 class="f-16 lh-12 white">
                                    ILIT Crummey Notice
                                </h3>
                            </div>
                            <div class="d-flex gap-8 flex-col mb-8">
                                <h2 class="f-24 lh-24 white">
                                    $35,000
                                </h2>
                                <p class="f-14 lh-16 neutral-300">
                                    Annual gift requires Crummey letters
                                </p>
                            </div>
                            <a href="#" class="f-14 lh-18 d-flex gap-10 align-center clr-4FC07C">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                    <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round"></path>
                                </svg>
                                Auto-Generate Crummey Letters
                                <img
                                    src="{{ asset('images/arrow-right.svg') }}" alt="btn icon">
                            </a>
                        </div>
                        <div class="br-12 bg-0B1417 border-E9E7DD-40 p-32-24 d-flex flex-col gap-16">
                            <div class="d-flex gap-12 align-center">
                                <div class="w-38 h-38 bg-108476-10 d-flex align-center justify-center br-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                        <path d="M11.047 12.3661C11.1523 12.2608 11.047 12.3661 10.7312 11.4186C10.3316 10.22 9.46775 9.52344 7.25676 9.52344C5.89942 9.52344 5.19928 9.83344 4.75668 10.168C4.52274 10.3448 4.41406 10.6358 4.41406 10.929V14.4119C4.41406 14.8878 4.71684 15.3139 5.17473 15.4437C6.57073 15.8395 8.74381 16.2593 11.047 15.8405C13.8265 15.3352 14.747 13.9454 15.1531 12.9978C16.1007 10.7869 14.8373 9.96563 14.2056 10.471C12.6263 11.7344 12.6263 12.3661 11.047 12.3661ZM11.047 12.3661H8.20433" stroke="#108476" stroke-width="1.25" stroke-linecap="round" />
                                        <path d="M0.625 9.84155C0.625 9.14378 1.19065 8.57812 1.88842 8.57812H3.15184C3.84961 8.57812 4.41526 9.14378 4.41526 9.84155V14.8952C4.41526 15.593 3.84961 16.1587 3.15184 16.1587H1.88842C1.19065 16.1587 0.625 15.593 0.625 14.8952V9.84155Z" stroke="#108476" stroke-width="1.25" />
                                        <path d="M14.128 5.20558C14.128 6.49272 13.0845 7.53616 11.7974 7.53616C10.5102 7.53616 9.4668 6.49272 9.4668 5.20558C9.4668 3.91844 10.5102 2.875 11.7974 2.875C13.0845 2.875 14.128 3.91844 14.128 5.20558Z" stroke="#108476" stroke-width="1.25" />
                                        <path d="M9.59863 0.125C11.1263 0.125201 12.3734 1.31047 12.4785 2.81152C12.281 2.76244 12.075 2.7334 11.8623 2.7334C11.6422 2.7334 11.4293 2.76396 11.2256 2.81641C11.127 2.00439 10.4372 1.37519 9.59863 1.375C8.69229 1.37509 7.95703 2.11024 7.95703 3.0166C7.95743 3.85408 8.58584 4.54284 9.39648 4.64258C9.34347 4.84735 9.3125 5.06185 9.3125 5.2832C9.31253 5.4945 9.34117 5.69918 9.38965 5.89551C7.89087 5.78824 6.70745 4.54259 6.70703 3.0166C6.70703 1.41988 8.00194 0.125089 9.59863 0.125Z" fill="#108476" />
                                    </svg>
                                </div>
                                <h3 class="f-16 lh-12 white">
                                    Grat Annuity Payment
                                </h3>
                            </div>
                            <div class="d-flex gap-8 flex-col mb-8">
                                <h2 class="f-24 lh-24 white">
                                    $420,000
                                </h2>
                                <p class="f-14 lh-16 neutral-300">
                                    Annual structural distributions
                                </p>
                            </div>
                            <a href="#" class="f-14 lh-18 d-flex gap-10 align-center clr-4FC07C">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                    <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round"></path>
                                </svg>
                                Trigger GRAT Distribution
                                <img
                                    src="{{ asset('images/arrow-right.svg') }}" alt="btn icon">
                            </a>
                        </div>
                        <div class="br-12 bg-0B1417 border-E9E7DD-40 p-32-24 d-flex flex-col gap-16">
                            <div class="d-flex gap-12 align-center">
                                <div class="w-38 h-38 bg-108476-10 d-flex align-center justify-center br-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_12656_31982)">
                                            <path d="M8 4V7.42857" stroke="#108476" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.00014 11.4241C8.31573 11.4241 8.57157 11.1683 8.57157 10.8527C8.57157 10.5371 8.31573 10.2812 8.00014 10.2812C7.68455 10.2812 7.42871 10.5371 7.42871 10.8527C7.42871 11.1683 7.68455 11.4241 8.00014 11.4241Z" stroke="#108476" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.13357 0.928933L0.927191 7.13531C0.449635 7.61286 0.449635 8.38714 0.927191 8.86469L7.13357 15.0711C7.61112 15.5486 8.38539 15.5486 8.86295 15.0711L15.0693 8.86469C15.5469 8.38714 15.5469 7.61286 15.0693 7.13531L8.86295 0.928933C8.38539 0.451377 7.61112 0.451378 7.13357 0.928933Z" stroke="#108476" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_12656_31982">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h3 class="f-16 lh-12 white">
                                    Dynasty Trust Anomaly
                                </h3>
                            </div>
                            <div class="d-flex gap-8 flex-col mb-8">
                                <h2 class="f-24 lh-24 white">
                                    0% Funded
                                </h2>
                                <p class="f-14 lh-16 neutral-300">
                                    Vehicle exists but is currently 0% funded.
                                </p>
                            </div>
                            <a href="#" class="f-14 lh-18 d-flex gap-10 align-center clr-4FC07C">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                    <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round"></path>
                                </svg>
                                Connect Trust Tax ID Number (EIN)
                                <img
                                    src="{{ asset('images/arrow-right.svg') }}" alt="btn icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-16-10 bg-108476-15 br-14 d-flex align-center gap-10 f-14 lh-20 neutral-300 w-100">
                    <img class="w-24 h-24" src="{{ asset('images/information-line.svg') }}" alt="Information icon">
                    Projections are for modeling purposes only and do not constitute tax, legal, or investment advice. Results will vary based on actual circumstances and tax laws.
                </div>
            </div>


        </div>


    </div>
</div>

@endsection