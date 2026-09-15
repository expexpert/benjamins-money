@extends('layouts.app')

@section('title', 'Estate & Legacy')

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
            <div class="d-flex gap-16 flex-col w-100">
                <h5 class="f-16 lh-12 white-80">
                    The Downstream Liquidity & Wealth Waterfall
                </h5>
                <div class="d-grid col-2-1">
                    <div class="d-flex flex-col gap-16">
                        <div class="bg-0B1417 br-12 border-E9E7DD-24 p-32-24 d-flex gap-10 justify-space-between align-center">

                            <div class="d-flex gap-16 align-center">
                                <div class="w-44 h-44 br-4 bg-108476-10 d-flex align-center gap-4 justify-center flex-col">
                                    <h5 class="f-12 lh-12 clr-108476">
                                        Stage
                                    </h5>
                                    <p class="f-16 lh-12 clr-108476">
                                        1
                                    </p>
                                </div>
                                <div class="d-flex gap-4 flex-col">
                                    <h4 class="f-14 lh-20 uppercase clr-99ACB6">
                                        CURRENT CONSOLIDATED ESTATE
                                    </h4>
                                    <p class="f-16 lh-20 white">
                                        (John & Jane Balance Sheet)
                                    </p>
                                </div>
                            </div>

                            <div>
                                <p class="f-18 lh-16 white">
                                    $38,500,000
                                </p>
                            </div>


                        </div>
                        <div class="bg-0B1417 br-12 border-E9E7DD-24 p-32-24 d-flex gap-20 justify-space-between align-center flex-col">
                            <div class="d-flex gap-16 align-center w-100">
                                <div class="w-44 h-44 br-4 bg-108476-10 d-flex align-center gap-4 justify-center flex-col">
                                    <h5 class="f-12 lh-12 clr-108476">
                                        Stage
                                    </h5>
                                    <p class="f-16 lh-12 clr-108476">
                                        2
                                    </p>
                                </div>
                                <div class="d-flex gap-4 flex-col">
                                    <h4 class="f-14 lh-20 uppercase clr-99ACB6">
                                        CURRENT CONSOLIDATED ESTATE
                                    </h4>
                                    <p class="f-16 lh-20 white">
                                        (John & Jane Balance Sheet)
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex flex-col gap-15 align-center justify-space-between w-100">
                                <div class="d-flex gap-10 align-center justify-space-between w-100">
                                    <p class="f-14 lh-20 clr-99ACB6">
                                        Federal Estate Tax Settlement Outflow (Due within 9 Months)
                                    </p>
                                    <p class="f-18 lh-15 clr-red-300">
                                        -$12,400,000
                                    </p>
                                </div>
                                <div class="border-bottom-E9E7DD-30 w-100">

                                </div>
                                <div class="d-flex gap-10 align-center justify-space-between w-100">
                                    <p class="f-14 lh-20 clr-99ACB6">
                                        Immediate Real-Time Cash & Insurance Liquidity Pool Available
                                    </p>
                                    <p class="f-18 lh-15 white">
                                        $14,450,000
                                    </p>
                                </div>
                                <div class="border-bottom-E9E7DD-30 w-100">

                                </div>
                                <div class="d-flex gap-10 align-center justify-space-between w-100">
                                    <p class="f-14 lh-20 clr-99ACB6">
                                        Net Capital Solvency Margin Post-Tax Event
                                    </p>
                                    <div class="d-flex gap-8 align-center">
                                        <p class="f-18 lh-16 white">
                                            $2,050,000
                                        </p>
                                        <span class="f-12 lh-14 p-4-10 clr-047857 bg-ECFDF5 br-8 border-047857">
                                            Secure
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-0B1417 br-12 border-E9E7DD-24 p-32-24 d-flex gap-20 justify-space-between align-center flex-col">
                            <div class="d-flex gap-16 align-center w-100">
                                <div class="w-44 h-44 br-4 bg-108476-10 d-flex align-center gap-4 justify-center flex-col">
                                    <h5 class="f-12 lh-12 clr-108476">
                                        Stage
                                    </h5>
                                    <p class="f-16 lh-12 clr-108476">
                                        3
                                    </p>
                                </div>
                                <div class="d-flex gap-4 flex-col">
                                    <h4 class="f-14 lh-20 uppercase clr-99ACB6">
                                        DYNASTY TRUST SPLIT
                                    </h4>
                                    <p class="f-16 lh-20 white">
                                        Distribution Streams to Generation 2 - Children
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex flex-col gap-15 align-center justify-space-between w-100">
                                <div class="d-flex gap-10 align-center justify-space-between w-100">
                                    <p class="f-14 lh-20 clr-99ACB6">
                                        Child 1 Trust (Protected Trust Share)
                                    </p>
                                    <p class="f-18 lh-15 white">
                                        $13,050,000
                                    </p>
                                </div>
                                <div class="border-bottom-E9E7DD-30 w-100">

                                </div>
                                <div class="d-flex gap-10 align-center justify-space-between w-100">
                                    <p class="f-14 lh-20 clr-99ACB6">
                                        Child 2 Trust (Protected Trust Share)
                                    </p>
                                    <p class="f-18 lh-15 white">
                                        $13,050,000
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-0B1417 br-12 border-E9E7DD-24 p-32-24 d-flex gap-20 justify-space-between align-center flex-col">
                            <div class="d-flex gap-16 align-center w-100">
                                <div class="w-44 h-44 br-4 bg-108476-10 d-flex align-center gap-4 justify-center flex-col">
                                    <h5 class="f-12 lh-12 clr-108476">
                                        Stage
                                    </h5>
                                    <p class="f-16 lh-12 clr-108476">
                                        4
                                    </p>
                                </div>
                                <div class="d-flex gap-4 flex-col">
                                    <h4 class="f-14 lh-20 uppercase clr-99ACB6">
                                        GST MAXIMUM APPORTIONMENT
                                    </h4>
                                    <p class="f-16 lh-20 white">
                                        Generation 3 - Grandchildren Skip Pool
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex flex-col gap-15 align-center justify-space-between w-100">
                                <div class="d-flex gap-10 align-center justify-space-between w-100">
                                    <p class="f-14 lh-20 clr-99ACB6">
                                        Compounded Generational Tax Protection Value Realized over 50 Years
                                    </p>
                                    <p class="f-18 lh-15 white">
                                        +$18,400,000
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex gap-16 flex-col w-100">
                <h5 class="f-16 lh-12 white-80">
                    Strategic Wealth Shock Simulator
                </h5>
                <div class="d-grid col-lg-2 gap-24">
                    <div class="bg-0B1417 br-12 border-E9E7DD-24 d-flex gap-16 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="w-38 h-38 d-flex align-center justify-center br-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8.00077 6.6697H8.00743M8.00077 9.33658H8.00743M8.00077 4.00282H8.00743M10.6672 6.6697H10.6738M10.6672 9.33658H10.6738M10.6672 4.00282H10.6738M5.33437 6.6697H5.34103M5.33437 9.33658H5.34103M5.33437 4.00282H5.34103M6.00097 14.6703V12.6702C6.00097 12.4934 6.0712 12.3238 6.19621 12.1987C6.32122 12.0737 6.49078 12.0035 6.66757 12.0035H9.33397C9.51076 12.0035 9.68031 12.0737 9.80533 12.1987C9.93034 12.3238 10.0006 12.4934 10.0006 12.6702V14.6703M4.00117 1.33594H12.0004C12.7367 1.33594 13.3336 1.93294 13.3336 2.66938V13.3369C13.3336 14.0733 12.7367 14.6703 12.0004 14.6703H4.00117C3.26486 14.6703 2.66797 14.0733 2.66797 13.3369V2.66938C2.66797 1.93294 3.26486 1.33594 4.00117 1.33594Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="f-16 lh-12 white">
                                Real Estate Growth Slider
                            </p>
                        </div>
                        <div class="bg-108476-10 br-4 p-12 d-flex align-center justify-space-between w-100">
                            <div class="d-flex gap-5 align-center">
                                <p class="f-14 lh-14 clr-99ACB6">
                                    Post Sunset Tax Bite
                                </p>
                                <img class="w-16 h-16" src="{{ asset('images/information-line.svg') }}" alt="Information icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

@endsection