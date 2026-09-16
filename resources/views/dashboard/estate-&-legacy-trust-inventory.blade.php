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
                                <th class="f-13 lh-10 uppercase clr-99ACB6 text-left ls-042">GOVERNANCE STATUS-dd</th>
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
                                        <div class="p-4-8 br-4 bg-E8F3DC clr-156A37">
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
                                        <div class="p-4-8 br-4 bg-blend-yellow clr-yellow-700 f-14 lh-14">
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
                                        <div class="p-4-8 br-4 bg-blend-yellow clr-yellow-700 f-14 lh-14">
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
                                        <div class="p-4-8 br-4 bg-blended clr-red-800 f-14 lh-14 d-inline-flex align-center justify-center">
                                            Unfunded Risk
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
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

@endsection