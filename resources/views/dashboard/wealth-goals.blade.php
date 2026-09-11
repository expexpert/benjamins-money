@extends('layouts.app')

@section('title', 'Liquidity Workflow')

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
        <div class="card-outer d-flex gap-48 align-flex-start flex-col">

            <div class="bg-060F13 br-16 border-E9E7DD-24 p-28 d-grid col-2-1 gap-14 w-100">
                <div class="d-grid col-lg-2">
                    <div>
                        <h2 class="f-18 lh-20 white ls-042">
                            Wealth Goal Center
                        </h2>
                    </div>
                    <div class="center">
                        <img src="{{ asset('images/donut-container.svg') }}" alt="Tooltip icon">
                    </div>
                </div>
                <div class="d-flex gap-16 flex-col">
                    <h2 class="f-14 lh-16 uppercase clr-99ACB6 ls-02">
                        Current Allocations
                    </h2>
                    <div class="d-flex flex-col gap-8">
                        <div class="d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-8979FF br-50">

                                </div>
                                <p class="f-14 lh-16 white">
                                    Retirement
                                </p>
                            </div>
                            <div>
                                <p class="f-14 lh-16 white">
                                    $8.5M
                                    <span class="neutral-300 f-12 lh-14">
                                        (68.8%)
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="progress h-8">
                            <div class="progress-bar bg-8979FF" style="width:68.8%;"></div>
                        </div>
                    </div>

                    <div class="d-flex flex-col gap-8">
                        <div class="d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-FF928A br-50">

                                </div>
                                <p class="f-14 lh-16 white">
                                    College Funding
                                </p>
                            </div>
                            <div>
                                <p class="f-14 lh-16 white">
                                    $0.25M
                                    <span class="neutral-300 f-12 lh-14">
                                        (10.2%)
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="progress h-8">
                            <div class="progress-bar bg-FF928A" style="width:10.2%;"></div>
                        </div>
                    </div>

                    <div class="d-flex flex-col gap-8">
                        <div class="d-flex gap-10 justify-space-between">
                            <div class="d-flex gap-8 align-center">
                                <div class="w-8 h-8 bg-3CC3DF br-50">

                                </div>
                                <p class="f-14 lh-16 white">
                                    Vacation Home
                                </p>
                            </div>
                            <div>
                                <p class="f-14 lh-16 white">
                                    $0.5M
                                    <span class="neutral-300 f-12 lh-14">
                                        (7%)
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="progress h-8">
                            <div class="progress-bar bg-3CC3DF" style="width:7%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-col gap-16">
                <h2 class="f-16 lh-12 white-80">
                    Summary View: Master Goal Ledger (as of May 26,2026)
                </h2>

                <div class="bg-0B1417 br-12 border-E9E7DD-24 p-16-24">

                    <div class="tablecontainer">
                        <table>
                            <tr>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left">Goal ID</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left"> Goal</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left">Account/ funding source</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left">Target date</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left6">Total Capital Cost</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left"> Current Allocated</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left"> Monthly inflow</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left">Progress</th>
                                <th class="f-13 lh-18 uppercase clr-99ACB6 text-left">Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">

                                        <p class="f-14 lh-18 white uppercase">
                                            G-RET-01
                                        </p>

                                        <span class="f-12 lh-12 ls-042 clr-FFBE4C p-2-8 br-50 border-FFBE4C">
                                            P1 - Critical
                                        </span>

                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">

                                        <p class="f-14 lh-18 white">
                                            Retirement
                                        </p>

                                        <span class="f-12 lh-14 white-70">
                                            Financial Independence
                                        </span>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">

                                        <p class="f-14 lh-18 white">
                                            Taxable Brokerage + 401k
                                        </p>

                                        <span class="f-12 lh-14 white-70">
                                            Diversified Portfolio
                                        </span>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">

                                        <p class="f-14 lh-18 white">
                                            Oct 2028
                                        </p>

                                        <span class="f-12 lh-14 white-70">
                                            2.4 yrs
                                        </span>

                                    </div>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $12,500,000
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $8,500,000
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $15,000
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        71%
                                    </p>
                                </td>
                                <td>
                                    <span class="f-12 lh-12 clr-00CB3B border-00CB3B br-50 p-5-7 d-inline-flex">
                                        On track
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">

                                        <p class="f-14 lh-18 white uppercase">
                                            G-Edu-01
                                        </p>

                                        <span class="f-12 lh-12 ls-042 clr-FFBE4C p-2-8 br-50 border-FFBE4C d-inline-flex">
                                            P1 - Critical
                                        </span>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">

                                        <p class="f-14 lh-18 white">
                                            College Funding
                                        </p>

                                        <span class="f-12 lh-14 white-70">
                                            Ivy League Plan
                                        </span>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">

                                        <p class="f-14 lh-18 white">
                                            529 Plan
                                        </p>

                                        <span class="f-12 lh-14 white-70">
                                            Growth Portfolio
                                        </span>

                                    </div>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        Aug 2032
                                    </p>

                                    <span class="f-12 lh-14 white-70">
                                        6.2 yrs
                                    </span>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $650,000
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $250,000
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $3,500
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        42%
                                    </p>
                                </td>
                                <td>
                                    <span class="f-12 lh-12 clr-0082FB border-0082FB br-50 p-5-7 d-inline-flex">
                                        Funding gap
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex gap-12 flex-col align-flex-start">
                                        <p class="f-14 lh-18 white uppercase">
                                            G-HOME-01
                                        </p>

                                        <span class="f-12 lh-12 ls-042 clr-C293C9 p-2-8 br-50 border-C293C9 d-inline-flex">
                                            P2 - Aspirational
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        Vacation Home
                                    </p>

                                    <span class="f-12 lh-14 white-70">
                                        Coastal property
                                    </span>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        Cash Reserves + ISO/RSU
                                    </p>

                                    <span class="f-12 lh-14 white-70">
                                        Liquidity Events
                                    </span>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        Jun 2027
                                    </p>

                                    <span class="f-12 lh-14 white-70">
                                        1.1 yrs
                                    </span>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $2,850,000
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        $840,000
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        Vesting
                                    </p>
                                </td>
                                <td>
                                    <p class="f-14 lh-18 white">
                                        30%
                                    </p>
                                </td>
                                <td>
                                    <span class="f-12 lh-12 clr-FBBC05 border-FBBC05 br-50 p-5-7 d-inline-flex">
                                        Pending
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>

            <div class="d-flex flex-col gap-16 w-100">
                <h2 class="f-16 lh-12 white-80">
                    Goal Ledger Snapshot
                </h2>
                <div class="bg-0B1417 br-16 border-E9E7DD-15 p-32-24 w-100">
                    <div class="d-flex gap-8 mb-12" id="ledgerTabs">
                        <div class="f-14 lh-16 clr-000000 p-10-20 active ledger-tab br-72 cursor-pointer" data-tab="retirement">
                            Retirement (71%)
                        </div>
                        <div class="f-14 lh-16 neutral-300 p-10-20 ledger-tab br-72 cursor-pointer" data-tab="college">
                            College Funding (42%)
                        </div>
                        <div class="f-14 lh-16 neutral-300 p-10-20 ledger-tab br-72 cursor-pointer" data-tab="vacation">
                            Vacation Home (30%)
                        </div>
                    </div>


                    <div class="border-E9E7DD-15 mb-32">

                    </div>

                    <div class="ledger-tab-content-wrap mt-24">
                        <div class="ledger-tab-content active" data-tab-content="retirement">
                            <div class="d-grid col-2-1 gap-20">
                                <div class="d-flex flex-col gap-16">
                                    <div class="d-flex gap-10 justify-space-between">
                                        <h2 class="f-18 lh-20 white">
                                            Retirement Allocation Ledger
                                        </h2>
                                        <span class="f-14 lh-16 clr-7BD09D">
                                            Target Cost: $12.5M
                                        </span>
                                    </div>
                                    <div class="bg-060F13 br-12 border-E9E7DD-24 p-32-24 d-flex flex-col gap-20 w-100">
                                        <div class="d-flex gap-10 align-center justify-space-between">
                                            <div class="d-flex gap-12 align-center">

                                                <div class="w-38 h-38 bg-108476-10 d-flex align-center justify-center br-8">
                                                    <!-- <img src="https://greenyellow-marten-471580.hostingersite.com/images/net-after.svg" alt="net worth icon"> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M11.2502 8.317V8C11.2502 7.80109 11.3292 7.61032 11.4699 7.46967C11.6105 7.32902 11.8013 7.25 12.0002 7.25C12.1991 7.25 12.3899 7.32902 12.5305 7.46967C12.6712 7.61032 12.7502 7.80109 12.7502 8V8.312C12.9272 8.346 13.1002 8.395 13.2772 8.465C13.6752 8.623 14.0412 8.869 14.4532 9.181C14.6118 9.30114 14.7162 9.47937 14.7434 9.67647C14.7706 9.87357 14.7184 10.0734 14.5982 10.232C14.4781 10.3906 14.2998 10.495 14.1027 10.5222C13.9056 10.5494 13.7058 10.4971 13.5472 10.377C13.1592 10.083 12.9252 9.939 12.7232 9.859C12.5392 9.786 12.3412 9.75 12.0002 9.75C11.5072 9.75 11.1762 9.867 10.9902 10.002C10.9137 10.0519 10.8514 10.1208 10.8093 10.2019C10.7673 10.2831 10.7469 10.3737 10.7502 10.465C10.7502 10.702 10.8402 10.831 11.0662 10.957C11.3392 11.11 11.7182 11.193 12.1232 11.26C12.5192 11.326 13.1392 11.438 13.6662 11.734C14.2412 12.055 14.7502 12.626 14.7502 13.534C14.7536 13.8627 14.6771 14.1874 14.5273 14.48C14.3775 14.7727 14.1589 15.0245 13.8902 15.214C13.5632 15.45 13.1722 15.604 12.7502 15.683V16C12.7502 16.1989 12.6712 16.3897 12.5305 16.5303C12.3899 16.671 12.1991 16.75 12.0002 16.75C11.8013 16.75 11.6105 16.671 11.4699 16.5303C11.3292 16.3897 11.2502 16.1989 11.2502 16V15.688C11.0702 15.6532 10.8938 15.602 10.7232 15.535C10.3252 15.377 9.95921 15.131 9.54721 14.819C9.46868 14.7595 9.40264 14.6851 9.35285 14.6001C9.30306 14.5151 9.27051 14.4211 9.25704 14.3235C9.22985 14.1264 9.28207 13.9266 9.40221 13.768C9.52235 13.6094 9.70058 13.505 9.89768 13.4778C10.0948 13.4506 10.2946 13.5029 10.4532 13.623C10.8412 13.917 11.0752 14.061 11.2772 14.141C11.4612 14.214 11.6592 14.25 12.0002 14.25C12.4932 14.25 12.8242 14.133 13.0102 13.998C13.0867 13.9481 13.149 13.8792 13.1911 13.7981C13.2331 13.7169 13.2535 13.6263 13.2502 13.535C13.2502 13.298 13.1602 13.169 12.9342 13.043C12.6612 12.89 12.2812 12.807 11.8772 12.74C11.4812 12.674 10.8612 12.562 10.3342 12.266C9.75921 11.945 9.25021 11.374 9.25021 10.466C9.25021 9.764 9.57321 9.176 10.1102 8.786C10.4507 8.54692 10.8401 8.38671 11.2502 8.317Z" fill="#108476"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.764 3.25C15.571 3.25 13.761 3.768 12.033 4.262L11.944 4.287C10.179 4.792 8.483 5.267 6.391 5.267C5.319 5.267 4.32 5.054 3.235 4.745C2.96446 4.66563 2.68072 4.64155 2.40067 4.67419C2.12063 4.70683 1.85003 4.79553 1.605 4.935C1.34508 5.08389 1.12912 5.29881 0.97898 5.558C0.828837 5.8172 0.749845 6.11146 0.75 6.411V17.645C0.75 18.257 0.925 18.789 1.263 19.225C1.593 19.65 2.04 19.935 2.51 20.129C3.505 20.549 4.336 20.75 6.236 20.75C8.429 20.75 10.239 20.232 11.967 19.738L12.056 19.713C13.821 19.208 15.517 18.733 17.609 18.733C18.681 18.733 19.68 18.946 20.765 19.255C21.323 19.415 21.919 19.345 22.395 19.065C22.884 18.776 23.25 18.256 23.25 17.589V6.355C23.25 5.743 23.075 5.211 22.737 4.775C22.407 4.35 21.96 4.065 21.49 3.871C20.495 3.451 19.665 3.25 17.764 3.25ZM6.39 6.767C8.715 6.767 10.594 6.233 12.356 5.729L12.383 5.722C14.145 5.218 15.782 4.75 17.763 4.75C19.509 4.75 20.133 4.927 20.908 5.254L20.912 5.255C21.225 5.385 21.427 5.535 21.551 5.695C21.666 5.843 21.749 6.044 21.749 6.355V17.59C21.749 17.662 21.722 17.72 21.633 17.773C21.563 17.8095 21.4866 17.8317 21.408 17.8386C21.3294 17.8455 21.2502 17.8368 21.175 17.813C20.036 17.489 18.883 17.234 17.608 17.234C15.283 17.234 13.404 17.768 11.642 18.272L11.615 18.279C9.853 18.783 8.216 19.251 6.235 19.251C4.489 19.251 3.865 19.074 3.09 18.747L3.086 18.746C2.773 18.616 2.571 18.466 2.447 18.306C2.332 18.158 2.249 17.957 2.249 17.646V6.41C2.249 6.338 2.276 6.28 2.365 6.227C2.43496 6.19055 2.51143 6.16826 2.59002 6.16139C2.66861 6.15453 2.74778 6.16323 2.823 6.187C3.962 6.511 5.115 6.766 6.39 6.766" fill="#108476"></path>
                                                    </svg>
                                                </div>
                                                <div class="card-cont">
                                                    <h3 class="f-16 lh-18 mb-8 white">
                                                        Diversified Portfolio +401k
                                                    </h3>
                                                    <p class="f-12 lh-14 clr-99ACB6 uppercase">
                                                        Acitivity LOg
                                                    </p>
                                                </div>
                                            </div>
                                            <span class="f-12 lh-14 p-6-10 clr-A7DFBD br-6 bg-4FC07C-10">
                                                Assumed Return: 7%
                                            </span>
                                        </div>

                                        <div class="d-flex flex-col gap-16">
                                            <div class="d-grid gap-10 col-lg-4">
                                                <div>
                                                    <h5 class="f-13 lh-16 clr-99ACB6">
                                                        Date
                                                    </h5>
                                                </div>
                                                <div>
                                                    <h5 class="f-13 lh-16 clr-99ACB6">
                                                        Activity
                                                    </h5>
                                                </div>
                                                <div>
                                                    <h5 class="f-13 lh-16 clr-99ACB6 right">
                                                        Change
                                                    </h5>
                                                </div>
                                                <div>
                                                    <h5 class="f-13 lh-16 clr-99ACB6 right">
                                                        Balance
                                                    </h5>
                                                </div>
                                            </div>

                                            <div class="d-grid gap-10 col-lg-4">
                                                <div>
                                                    <p class="f-16 lh-18 white">
                                                        05/01/2026
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="f-16 lh-18 white">
                                                        Opening Balance
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="f-16 lh-18 white right">
                                                        —
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="f-16 lh-18 white right">
                                                        $8,488,000
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="border-E9E7DD-24">

                                            </div>

                                            <div class="d-grid gap-10 col-lg-4">
                                                <div>
                                                    <p class="f-16 lh-18 white">
                                                        05/15/2026
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="f-16 lh-18 white">
                                                        Dividend Reinvestment
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="f-16 lh-18 clr-7BD09D right">
                                                        +$25,000
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="f-16 lh-18 clr-7BD09D right">
                                                        $8,488,000
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex flex-col gap-16">
                                    <h4 class="f-16 lh-18 white">
                                        Fiduciary Forecast
                                    </h4>

                                    <div class="bg-060F13 br-12 p-16 d-flex gap-12 flex-col border-E9E7DD-24">
                                        <div class="d-flex gap-10 justify-space-between">
                                            <h5 class="f-12 lh-14 uppercase clr-99ACB6">
                                                PROJECTION HORIZON
                                            </h5>
                                            <span class="f-14 lh-16 clr-7BD09D">
                                                Target Met 98%
                                            </span>
                                        </div>
                                        <div class="img-col">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="348" height="171" viewBox="0 0 348 171" fill="none">
                                                <g clip-path="url(#clip0_12207_72699)">
                                                    <line y1="34.5" x2="348" y2="34.5" stroke="#E9E7DD" stroke-opacity="0.239216" stroke-dasharray="4 4" />
                                                    <line y1="69.5" x2="348" y2="69.5" stroke="#E9E7DD" stroke-opacity="0.239216" stroke-dasharray="4 4" />
                                                    <line y1="104.5" x2="348" y2="104.5" stroke="#E9E7DD" stroke-opacity="0.239216" stroke-dasharray="4 4" />
                                                    <path d="M0 81.718C0 81.718 25.3025 15 58 15C83.3025 15 93.7044 28.1243 116 53.1246C151.704 93.1604 143.107 145.072 174 145.072C201.107 145.072 195.419 73.6105 232 68.823C253.419 66.0197 260.984 67.0014 290 66.0197C318.984 65.0391 348 64.8984 348 64.8984V186H290H232H174H116H58H0V81.718Z" fill="url(#paint0_linear_12207_72699)" />
                                                    <path d="M-2.5 90C-2.5 90 22.3025 15 55 15C80.3025 15 98.2045 27.1332 120.5 60C156.204 112.633 146.607 144.5 177.5 144.5C204.607 144.5 193.919 75.794 230.5 69.5C251.919 65.8147 260.984 68.2906 290 67C318.984 65.7109 351 67 351 67" stroke="#23B05B" stroke-width="2" />
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_12207_72699" x1="174" y1="15" x2="174" y2="186" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#23B05B" stop-opacity="0.501961" />
                                                        <stop offset="1" stop-color="#23B05B" stop-opacity="0.0196078" />
                                                    </linearGradient>
                                                    <clipPath id="clip0_12207_72699">
                                                        <rect width="348" height="171" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ledger-tab-content" data-tab-content="college">
                            <p class="f-14 lh-20 neutral-300">
                                Dummy content for College Funding goal. Progress: 42%. Replace this block with actual college funding ledger details.
                            </p>
                        </div>

                        <div class="ledger-tab-content" data-tab-content="vacation">
                            <p class="f-14 lh-20 neutral-300">
                                Dummy content for Vacation Home goal. Progress: 30%. Replace this block with actual vacation home ledger details.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection