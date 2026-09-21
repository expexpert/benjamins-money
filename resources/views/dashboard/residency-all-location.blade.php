@extends('layouts.app')

@section('title', 'Residency Audit Shield')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Scenario Planning
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Residency Audit Shield
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
            <div class="d-flex gap-16 flex-col">
                <h3 class="f-16 lh-6 white-80">
                    Financial Snapshot
                </h3>
                <div class="d-grid gap-20 col-lg-4">
                    <div class="p-32-24 bg-0B1417 br-12 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g clip-path="url(#clip0_12615_31862)">
                                        <path d="M16.349 7.50256C16.6915 9.18353 16.4474 10.9311 15.6574 12.4539C14.8674 13.9767 13.5792 15.1826 12.0076 15.8705C10.4361 16.5585 8.67621 16.6869 7.02147 16.2343C5.36672 15.7818 3.91714 14.7756 2.91445 13.3836C1.91176 11.9916 1.41659 10.298 1.51149 8.5851C1.6064 6.87221 2.28565 5.24362 3.43598 3.97093C4.58631 2.69824 6.13818 1.85838 7.83279 1.5914C9.52741 1.32441 11.2623 1.64645 12.7482 2.50381M6.74854 8.2522L8.99854 10.5022L16.4985 3.0022" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12615_31862">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-16 lh-18 white">
                                    Status
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-26 clr-7BD09D">
                                Compliant
                            </h2>
                            <p class="f-14 lh-16 clr-AEC2C7">
                                You are on track to meet the 183-day requirement
                            </p>
                        </div>
                    </div>

                    <div class="p-32-24 bg-0B1417 br-12 d-flex flex-col gap-16">
                        <div class="d-flex gap-12 align-center">
                            <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g clip-path="url(#clip0_12615_31862)">
                                        <path d="M16.349 7.50256C16.6915 9.18353 16.4474 10.9311 15.6574 12.4539C14.8674 13.9767 13.5792 15.1826 12.0076 15.8705C10.4361 16.5585 8.67621 16.6869 7.02147 16.2343C5.36672 15.7818 3.91714 14.7756 2.91445 13.3836C1.91176 11.9916 1.41659 10.298 1.51149 8.5851C1.6064 6.87221 2.28565 5.24362 3.43598 3.97093C4.58631 2.69824 6.13818 1.85838 7.83279 1.5914C9.52741 1.32441 11.2623 1.64645 12.7482 2.50381M6.74854 8.2522L8.99854 10.5022L16.4985 3.0022" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12615_31862">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-16 lh-18 white">
                                    Days in NY
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-26 clr-7BD09D">
                                112 / 183
                            </h2>
                            <p class="f-14 lh-16 clr-AEC2C7 d-flex align-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                                    <path d="M0.816667 7L0 6.18333L4.31667 1.8375L6.65 4.17083L9.68333 1.16667H8.16667V0H11.6667V3.5H10.5V1.98333L6.65 5.83333L4.31667 3.5L0.816667 7Z" fill="#7BD09D" />
                                </svg>
                                Days counted this year
                            </p>
                        </div>
                    </div>

                    <div class="p-32-24 bg-0B1417 br-12 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g clip-path="url(#clip0_12615_31868)">
                                        <path d="M6 1.5V4.50024M12 1.5V4.50024M2.25 7.50048H15.75M3.75 3.00012H14.25C15.0784 3.00012 15.75 3.67175 15.75 4.50024V15.0011C15.75 15.8296 15.0784 16.5012 14.25 16.5012H3.75C2.92157 16.5012 2.25 15.8296 2.25 15.0011V4.50024C2.25 3.67175 2.92157 3.00012 3.75 3.00012Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12615_31868">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-16 lh-18 white">
                                    Days Remaining
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-26 clr-7BD09D">
                                71
                            </h2>
                            <p class="f-14 lh-16 clr-AEC2C7">
                                To meet requirements
                            </p>
                        </div>
                    </div>

                    <div class="p-32-24 bg-0B1417 br-12 d-flex flex-col gap-16">
                        <div class="d-flex gap-12 align-center">
                            <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M9.00146 6.75244V9.75244M9.00146 12.7524H9.00897M16.2993 13.5026L10.2993 3.00261C10.1685 2.77176 9.97873 2.57975 9.74947 2.44616C9.52021 2.31257 9.25962 2.24219 8.99428 2.24219C8.72894 2.24219 8.46834 2.31257 8.23909 2.44616C8.00983 2.57975 7.82011 2.77176 7.68928 3.00261L1.68928 13.5026C1.55704 13.7316 1.4877 13.9915 1.48828 14.256C1.48887 14.5204 1.55936 14.78 1.69261 15.0085C1.82586 15.2369 2.01714 15.426 2.24705 15.5567C2.47696 15.6874 2.73733 15.755 3.00178 15.7526H15.0018C15.265 15.7523 15.5234 15.6828 15.7512 15.5511C15.9791 15.4193 16.1682 15.2299 16.2997 15.0019C16.4311 14.774 16.5003 14.5154 16.5002 14.2522C16.5002 13.9891 16.4309 13.7305 16.2993 13.5026Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="f-16 lh-18 white">
                                    Clawback Risk
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <h2 class="f-24 lh-26 clr-7BD09D">
                                $1.2M
                            </h2>
                            <p class="f-14 lh-16 clr-AEC2C7">
                                Potential Tax Exposure
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bg-0B1417 br-16 border-E5E7EB-24 d-flex flex-col gap-16 p-32-24 w-100">
                <div class="d-flex gap-10 align-center justify-space-between">
                    <div class="d-flex gap-4 flex-col">
                        <p class="f-16 lh-20 white">
                            Adult Vulnerability Log & Location Evidence
                        </p>
                        <p class="f-14 lh-16 clr-6B7280">
                            Tracked footprints and verified residence state documentation
                        </p>
                    </div>
                    <div class="bg-FEF3C7 p-6-12 br-20 d-flex gap-8 align-center">
                        <div class="w-8 h-8 bg-D97706 br-100">

                        </div>
                        <p class="f-12 lh-14 clr-92400E bold">
                            2 Critical Exposure Flags
                        </p>
                    </div>
                </div>

                <div class="tablecontainer table-bordered residency-table">
                    <table>
                        <tbody>
                            <tr>
                                <th class="f-13 lh-10 uppercase clr-AEC2C7 text-left ls-042 p-10-16 font-400 bg-00131D">Status</th>
                                <th class="f-13 lh-10 uppercase clr-AEC2C7 text-left ls-042 p-10-16 font-400 bg-00131D">Evidence Item & Date</th>
                                <th class="f-13 lh-10 uppercase clr-AEC2C7 text-left ls-042 p-10-16 font-400 bg-00131D">Audit Context / Description</th>
                                <th class="f-13 lh-10 uppercase clr-AEC2C7 right ls-042 p-10-16 font-400 bg-00131D">Impact Exposure</th>
                            </tr>
                            <tr>
                                <td class="p-14-16">
                                    <div class="d-flex gap-12 flex-col align-center justify-center bg-FEE2E2 br-100 w-24 h-24">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_12150_27069)">
                                                <path d="M6.00098 4.49902V6.49902M6.00098 8.49902H6.00598M10.8662 8.99914L6.86619 1.99914C6.77897 1.84524 6.65249 1.71723 6.49965 1.62817C6.34681 1.53911 6.17308 1.49219 5.99619 1.49219C5.81929 1.49219 5.64556 1.53911 5.49272 1.62817C5.33988 1.71723 5.2134 1.84524 5.12619 1.99914L1.12619 8.99914C1.03803 9.15182 0.9918 9.32509 0.99219 9.50139C0.99258 9.67769 1.03957 9.85076 1.12841 10.003C1.21724 10.1553 1.34476 10.2814 1.49803 10.3686C1.65131 10.4557 1.82489 10.5007 2.00119 10.4991H10.0012C10.1766 10.499 10.3489 10.4526 10.5008 10.3648C10.6527 10.2769 10.7788 10.1507 10.8664 9.99869C10.9541 9.8467 11.0002 9.67433 11.0002 9.49888C11.0001 9.32343 10.9539 9.15108 10.8662 8.99914Z" stroke="#963237" stroke-width="1.3" stroke-linecap="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_12150_27069">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            NY Amex swipe - Starbucks, NYC
                                        </p>
                                        <p class="f-12 lh-14 clr-99ACB6">
                                            May 12
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            NY Amex swipe - Starbucks, NYC
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-end f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 clr-red-400">
                                            ($1,205,000)
                                        </p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="p-14-16">
                                    <div class="d-flex gap-12 flex-col align-center justify-center bg-FEE2E2 br-100 w-24 h-24">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <g clip-path="url(#clip0_12150_27069)">
                                                <path d="M6.00098 4.49902V6.49902M6.00098 8.49902H6.00598M10.8662 8.99914L6.86619 1.99914C6.77897 1.84524 6.65249 1.71723 6.49965 1.62817C6.34681 1.53911 6.17308 1.49219 5.99619 1.49219C5.81929 1.49219 5.64556 1.53911 5.49272 1.62817C5.33988 1.71723 5.2134 1.84524 5.12619 1.99914L1.12619 8.99914C1.03803 9.15182 0.9918 9.32509 0.99219 9.50139C0.99258 9.67769 1.03957 9.85076 1.12841 10.003C1.21724 10.1553 1.34476 10.2814 1.49803 10.3686C1.65131 10.4557 1.82489 10.5007 2.00119 10.4991H10.0012C10.1766 10.499 10.3489 10.4526 10.5008 10.3648C10.6527 10.2769 10.7788 10.1507 10.8664 9.99869C10.9541 9.8467 11.0002 9.67433 11.0002 9.49888C11.0001 9.32343 10.9539 9.15108 10.8662 8.99914Z" stroke="#963237" stroke-width="1.3" stroke-linecap="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_12150_27069">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            NY EZ-Pass — Triborough Bridge
                                        </p>
                                        <p class="f-12 lh-14 clr-99ACB6">
                                            May 14
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            Toll payment
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-end f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 clr-red-400">
                                            ($145,000)
                                        </p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="p-14-16">
                                    <div class="d-flex gap-12 flex-col align-center justify-center bg-E8F3DC br-100 w-24 h-24">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M9.9992 3L5.20687 7.79246C4.81634 8.183 4.18316 8.183 3.79263 7.79246L2 5.99978" stroke="#156A37" stroke-width="1.3" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            FL utility bill verified
                                        </p>
                                        <p class="f-12 lh-14 clr-99ACB6">
                                            May 1
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            Utility verification
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-end f-16 lh-20 white p-14-16">
                                        <span class="f-12 lh-14 clr-156A37 bg-E8F3DC br-4 p-4-8">
                                            Verified
                                        </span>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="p-14-16">
                                    <div class="d-flex gap-12 flex-col align-center justify-center bg-E8F3DC br-100 w-24 h-24">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M9.9992 3L5.20687 7.79246C4.81634 8.183 4.18316 8.183 3.79263 7.79246L2 5.99978" stroke="#156A37" stroke-width="1.3" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            Voter registration - Miami-Dade
                                        </p>
                                        <p class="f-12 lh-14 clr-99ACB6">
                                            May 1
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-flex-start f-16 lh-20 white p-14-16">
                                        <p class="f-14 lh-18 white">
                                            Voter registration
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-4 flex-col align-end f-16 lh-20 white p-14-16">
                                        <span class="f-12 lh-14 clr-156A37 bg-E8F3DC br-4 p-4-8">
                                            Completed
                                        </span>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4">

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="pt-8 d-flex align-center justify-space-between gap-10">
                    <p class="f-14 lh-14 clr-6B7280 d-flex gap-6 align-center">
                        Auditing Status:
                        <span class="clr-A7DFBD">
                            Verified Safe Tracks Available
                        </span>
                    </p>
                    <a href="#" class="btn btn-green-outlined p-8-24 f-14 d-inline-flex justify-center bold">View All Location Evidence</a>
                </div>

                <div class="d-flex flex-col gap-16">
                    <h2 class="f-16 lh-22 white-80">
                        Actions Items
                    </h2>
                    <div class="d-grid col-2-1 gap-32">
                        <div class="p-32-24 bg-23B05B-3 br-12 border-E9E7DD-24 d-flex flex-col gap-10">
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <div class="d-flex gap-16 align-center">
                                    <div class="w-28 h-28 bg-108476-10 br-4 d-flex align-center justify-center f-14 lh-20 clr-108476">
                                        1
                                    </div>
                                    <p class="f-14 lh-24 white">
                                        Minimize NY card swipes for the next 60 days
                                    </p>
                                </div>
                                <div class="d-flex gap-8 align-center">
                                    <div class="w-9 h-9 bg-7BD09D br-100">

                                    </div>
                                    <p class="f-16 lh-24 clr-7BD09D">
                                        In progress
                                    </p>
                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-24">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <div class="d-flex gap-16 align-center">
                                    <div class="w-28 h-28 bg-108476-10 br-4 d-flex align-center justify-center f-14 lh-20 clr-108476">
                                        2
                                    </div>
                                    <p class="f-14 lh-24 white">
                                        Forward all medical and dental correspondence to FL address
                                    </p>
                                </div>
                                <div class="d-flex gap-8 align-center">
                                    <div class="w-9 h-9 bg-7BD09D br-100">

                                    </div>
                                    <p class="f-16 lh-24 clr-7BD09D">
                                        In progress
                                    </p>
                                </div>
                            </div>
                            <div class="border-bottom-E9E7DD-24">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <div class="d-flex gap-16 align-center">
                                    <div class="w-28 h-28 bg-108476-10 br-4 d-flex align-center justify-center f-14 lh-20 clr-108476">
                                        3
                                    </div>
                                    <p class="f-14 lh-24 white">
                                        Log flight manifest for Miami departure on record
                                    </p>
                                </div>
                                <div class="d-flex gap-8 align-center">
                                    <div class="w-9 h-9 bg-yellow-300 br-100">

                                    </div>
                                    <p class="f-16 lh-24 clr-yellow-300">
                                        Pending
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-32-24 bg-23B05B-3 br-12 border-E9E7DD-24 d-flex flex-col gap-10">
                            <p class="f-16 lh-30 white">
                                Audit Defence Pack
                            </p>
                            <p class="f-14 lh-22 clr-DADADA-80 mb-8">
                                Compile all evidence and documentation to defend your FL residency.
                            </p>
                            <a href="#" class="border-none cus-btn f-14 lh-14 d-flex gap-8 align-center p-0">
                                Modify Plan
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                                    <path d="M4.70534 4.14711C4.79897 4.24086 4.85156 4.36794 4.85156 4.50044C4.85156 4.63294 4.79897 4.76002 4.70534 4.85377L0.705336 8.85377C0.611585 8.94741 0.484503 9 0.352002 9C0.219502 9 0.0924196 8.94741 -0.00133085 8.85377L-0.00133085 0.147107C0.0924196 0.0534735 0.219502 0.000880241 0.352002 0.000880241C0.484503 0.000880241 0.611585 0.0534735 0.705336 0.147107L4.70534 4.14711Z" fill="#4FC07C" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection