@extends('layouts.app')

@section('title','Employment Agreement Terms')

@section('content')

<div class="heading-bar d-flex justify-space-between">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Real Time Liquidity
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Employment Agreement Terms
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
        <div class="card-outer d-flex gap-24 align-flex-start flex-col">
            <div class="bg-0B1417 br-12 p-24 border-E9E7DD-12 terms-grid w-100">
                <div class="d-flex flex-col gap-8 terms-inner">
                    <h3 class="f-11 lh-12 uppercase clr-99ACB6">
                        Agreement Type
                    </h3>
                    <p class="f-16 lh-18 white">
                        Executive Employment Agreement
                    </p>
                </div>

                <div class="d-flex flex-col gap-8 terms-inner">
                    <h3 class="f-11 lh-12 uppercase clr-99ACB6">
                        Effective Date
                    </h3>
                    <p class="f-16 lh-18 white">
                        03/15/2021
                    </p>
                </div>


                <div class="d-flex gap-8 terms-inner justify-space-between align-center">
                    <div class="d-flex flex-col gap-8 ">
                        <h3 class="f-11 lh-12 uppercase clr-99ACB6">
                            Employer
                        </h3>
                        <p class="f-16 lh-18 white">
                            Meridian Technologies, Inc.
                        </p>
                    </div>
                    <div>
                        <a href="#" class="btn-green-outlined f-12 lh-14 p-6-12 br-100px">Active</a>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-24 col-lg-3">
                <div class="bg-0B1417 br-16 border-E9E7DD-12 p-24 d-flex gap-16 flex-col">
                    <div class="d-flex gap-4 flex-col">
                        <p class="f-13 lh-14 clr-99ACB6">
                            Non-Compete Period
                        </p>
                        <h3 class="f-24 lh-26 clr-FBBC05">
                            18 Months
                        </h3>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div>
                        <p class="f-13 lh-16 clr-99ACB6">
                            Post-termination restriction period. Geographic scope: United States.
                        </p>
                    </div>
                </div>


                <div class="bg-0B1417 br-16 border-E9E7DD-12 p-24 d-flex gap-16 flex-col">
                    <div class="d-flex gap-4 flex-col">
                        <p class="f-13 lh-14 clr-99ACB6">
                            Clawback Provision
                        </p>
                        <h3 class="f-24 lh-26 clr-F8B4B2">
                            $2,450,000 At Risk
                        </h3>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div>
                        <p class="f-13 lh-16 clr-99ACB6">
                            Unvested RSUs and performance shares subject to clawback upon voluntary departure.
                        </p>
                    </div>
                </div>


                <div class="bg-0B1417 br-16 border-E9E7DD-12 p-24 d-flex gap-16 flex-col">
                    <div class="d-flex gap-4 flex-col">
                        <p class="f-13 lh-14 clr-99ACB6">
                            Severance Package
                        </p>
                        <h3 class="f-24 lh-26 clr-7BD09D">
                            24 Months
                        </h3>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div>
                        <p class="f-13 lh-16 clr-99ACB6">
                            Base + Bonus. Triggered only upon involuntary termination without cause or constructive dismissal.
                        </p>
                    </div>
                </div>


            </div>

            <div class="d-flex gap-16 flex-col w-100">
                <p class="f-16 lh-18 white-80">
                    Detailed Terms Breakdown
                </p>
                <div class="bg-0B1417 br-16 border-E9E7DD-12 p-24-16 w-100">
                    <div class="p-20 d-flex gap-24 w-100 justify-space-between align-center">
                        <div class="d-flex gap-8 flex-col">
                            <p class="f-14 lh-16 white">
                                Accelerated Vesting on Change of Control
                            </p>
                            <p class="f-13 lh-14 clr-99ACB6">
                                Double-trigger: requires both CIC event and involuntary termination within 12 months.
                            </p>
                        </div>
                        <a href="#" class="p-6-12 br-100px f-14 bg-light-green d-flex gap-10 align-center justify-center border-none clr-7BD09D f-12 lh-14">Protected</a>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div class="p-20 d-flex gap-24 w-100 justify-space-between align-center">
                        <div class="d-flex gap-8 flex-col">
                            <p class="f-14 lh-16 white">
                                Garden Leave Clause
                            </p>
                            <p class="f-13 lh-14 clr-99ACB6">
                                90-day garden leave period with full salary continuation. Company may waive at discretion.
                            </p>
                        </div>
                        <a href="#" class="p-6-12 br-100px f-14 bg-FBBC05-12 d-flex gap-10 align-center justify-center border-none clr-FBBC05 f-12 lh-14">Active</a>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div class="p-20 d-flex gap-24 w-100 justify-space-between align-center">
                        <div class="d-flex gap-8 flex-col">
                            <p class="f-14 lh-16 white">
                                Non-Solicitation
                            </p>
                            <p class="f-13 lh-14 clr-99ACB6">
                                24-month restriction on soliciting employees and clients post-departure.
                            </p>
                        </div>
                        <a href="#" class="p-6-12 br-100px f-14 bg-FBBC05-12 d-flex gap-10 align-center justify-center border-none clr-FBBC05 f-12 lh-14">Enforceable</a>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div class="p-20 d-flex gap-24 w-100 justify-space-between align-center">
                        <div class="d-flex gap-8 flex-col">
                            <p class="f-14 lh-16 white">
                                IP Assignment
                            </p>
                            <p class="f-13 lh-14 clr-99ACB6">
                                All work product and inventions during employment assigned to employer. Pre-existing IP carved out.
                            </p>
                        </div>
                        <a href="#" class="p-6-12 br-100px f-14 bg-light-green d-flex gap-10 align-center justify-center border-none clr-7BD09D f-12 lh-14">Standard</a>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div class="p-20 d-flex gap-24 w-100 justify-space-between align-center">
                        <div class="d-flex gap-8 flex-col">
                            <p class="f-14 lh-16 white">
                                Confidentiality
                            </p>
                            <p class="f-13 lh-14 clr-99ACB6">
                                Indefinite NDA covering trade secrets, client data, and proprietary algorithms.
                            </p>
                        </div>
                        <a href="#" class="p-6-12 br-100px f-14 bg-F8B4B2-12 d-flex gap-10 align-center justify-center border-none clr-F8B4B2 f-12 lh-14">Perpetual</a>
                    </div>
                    <div class="border-bottom-E9E7DD-10">

                    </div>
                    <div class="p-20 d-flex gap-24 w-100 justify-space-between align-center">
                        <div class="d-flex gap-8 flex-col">
                            <p class="f-14 lh-16 white">
                                Dispute Resolution
                            </p>
                            <p class="f-13 lh-14 clr-99ACB6">
                                Mandatory binding arbitration, New York jurisdiction. Company pays arbitration costs.
                            </p>
                        </div>
                        <a href="#" class="p-6-12 br-100px f-14 bg-light-green d-flex gap-10 align-center justify-center border-none clr-7BD09D f-12 lh-14">Binding</a>
                    </div>
                </div>
            </div>

            <div class="bg-FBBC05-15 br-8 bl-4-FBBC05 p-24 d-flex gap-12 w-100">
                <div class="icon-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M10.0003 7.49577V10.8291M10.0003 14.1624H10.0087M18.109 14.996L11.4423 3.32929C11.297 3.07279 11.0862 2.85945 10.8314 2.71101C10.5767 2.56258 10.2872 2.48437 9.99234 2.48438C9.69752 2.48437 9.40797 2.56258 9.15324 2.71101C8.8985 2.85945 8.6877 3.07279 8.54234 3.32929L1.87567 14.996C1.72874 15.2504 1.6517 15.5392 1.65235 15.833C1.653 16.1269 1.73132 16.4153 1.87938 16.6691C2.02744 16.923 2.23996 17.1331 2.49542 17.2783C2.75088 17.4235 3.04018 17.4986 3.33401 17.496H16.6673C16.9598 17.4957 17.2469 17.4184 17.5001 17.272C17.7532 17.1256 17.9634 16.9152 18.1094 16.6619C18.2555 16.4086 18.3324 16.1213 18.3323 15.8289C18.3322 15.5364 18.2552 15.2492 18.109 14.996Z" stroke="#FBBC05" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="d-flex flex-col gap-18 w-100">
                    <h4 class="f-15 lh-16 white">
                        Based on your current departure scenario (06/01/2026), the following provisions are triggered:
                    </h4>
                    <ul class="pl-14">
                        <li class="clr-99ACB6 f-14 lh-16">
                            Non-compete activates for 18 months (through 12/01/2027)
                        </li>
                        <li class="clr-99ACB6 f-14 lh-16">
                            Clawback applies to $2,450,000 in unvested equity
                        </li>
                        <li class="clr-99ACB6 f-14 lh-16">
                            Garden leave reduces effective departure to 09/01/2026
                        </li>
                        <li class="clr-99ACB6 f-14 lh-16">
                            Non-solicitation runs through 06/01/2028
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-flex gap-16 w-100">
                <a href="#" class="btn bg-23B05B p-10-21 f-14 d-flex clr-101010 justify-center bold">Download Full Agreement PDF</a>
                <a href="" class="btn border-E9E7DD-15 br-100 clr-99ACB6">Schedule Legal Review</a>
            </div>

        </div>
    </div>
</div>

@endsection