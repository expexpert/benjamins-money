@extends('layouts.app')

@section('title', 'Entity & Asset Protection Map')

@section('content')

    <div class="heading-bar d-flex justify-space-between">
        <div class="breadcrumb">
            <a class="d-flex gap-8 f-16 neutral-300" href="/">
                <img src="{{ asset('images/prev-arrow.svg') }}" alt="search icon">
                Dashboard
            </a>
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
                <div class="card-internal d-flex flex-col gap-16 align-flex-start w-100">
                    <div class="card-header">
                        <h3 class="f-16 lh-11">
                            The Transformation Flow
                        </h3>
                    </div>
                    <div class="d-grid col-lg-3 gap-30 w-100 mb-8">
                        <div class="card p-24 border-E9E7DD-24">
                            <div class="d-flex gap-12 mb-16 align-center">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0 mb-4">
                                        Company Stock
                                    </p>
                                    <h3 class="f-12 lh-12 clr-99ACB6 uppercase">
                                            Source
                                        </h3>
                                </div>
                            </div>
                            <div class="d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 clr-7BD09D">
                                    $11.1M
                                </h2>
                                <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                    <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                    Future Pipe Risk: Extreme (84%)
                                </div>

                            </div>

                        </div>

                        <div class="card p-24 border-E9E7DD-24">
                            <div class="d-flex gap-12 mb-16 align-center">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0 mb-4">
                                        Tax Aplha Filter
                                    </p>
                                    <h3 class="f-12 lh-12 clr-99ACB6 uppercase">
                                            Filter
                                        </h3>
                                </div>
                            </div>
                            <div class="d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 white">
                                    +$42,000
                                </h2>
                                <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                    <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                    YTD Savings
                                </div>

                            </div>

                        </div>

                        <div class="card p-24 border-E9E7DD-24">
                            <div class="d-flex gap-12 mb-16 align-center">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0 mb-4">
                                        Platinum Alpha SMA
                                    </p>
                                    <h3 class="f-12 lh-12 clr-99ACB6 uppercase">
                                            Destination
                                        </h3>
                                </div>
                            </div>
                            <div class="d-flex gap-8 flex-col">
                                <h2 class="f-24 lh-24 white">
                                    $6.3M
                                </h2>
                                <div class="d-flex gap-4 align-center f-12 lh-14 ls-042 clr-99ACB6">
                                    <img src="{{ asset('images/state-increase.svg') }}" alt="increased stats">
                                    The Engine Risk: Secure (20%)
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="bg-0B1417 p-32-24 gap-84 stages-outer d-grid col-lg-3 w-100 br-12">
                        <div class="stage-inner">
                            <p class="f-12 lh-12 uppercase clr-99ACB6 mb-12">
                                Stage 1
                            </p>
                            <p class="f-16 lh-16 white mb-24">
                                Liquidation (The Sell)
                            </p>
                            <p class="f-16 lh-20 white mb-8">
                                Automated 10b5-1 / RSU Vest Sale
                            </p>
                            <p class="f-14 lh-20 neutral-300 mb-16">
                                Selling 1,000 shares on June 01 at Market (Est. $142,000).
                            </p>
                            <a href="#" class="border-7BD09D clr-7BD09D p-4-24 f-13 lh-18 d-inline-flex justify-center uppercase br-48">STATUS:  ACTIVE</a>
                        </div>
                        <div class="stage-inner">
                            <p class="f-12 lh-12 uppercase clr-99ACB6 mb-12">
                                Stage 2
                            </p>
                            <p class="f-16 lh-16 white mb-24">
                                Tax Optimization (The Filter)
                            </p>
                            <p class="f-16 lh-20 white mb-8">
                                Real-time Sentry Monitoring.
                            </p>
                            <p class="f-14 lh-20 neutral-300 mb-16">
                                Offsetting gains with the $142,300 in realized losses.
                            </p>
                            <a href="#" class="border-white white p-4-24 f-13 lh-18 d-inline-flex justify-center uppercase br-48">IMPACT:  EST. $42,900 TAX SAVINGS</a>
                        </div>
                        <div class="stage-inner">
                            <p class="f-12 lh-12 uppercase clr-99ACB6 mb-12">
                                Stage 3
                            </p>
                            <p class="f-16 lh-16 white mb-24">
                                Diversified Re-entry (The Invest)
                            </p>
                            <p class="f-16 lh-20 white mb-8">
                                Destination: Platinum Alpha SMA.
                            </p>
                            <p class="f-14 lh-20 neutral-300 mb-16">
                                Funds are split across 500+ global equities and bonds.
                            </p>
                            <a href="#" class="border-white white p-4-24 f-13 lh-18 d-inline-flex justify-center uppercase br-48">CURRENT ENGINE VALUE:  $6.3M</a>
                        </div>
                    </div>
                </div>
                <div class="d-grid col-lg-2 gap-32 w-100">
                    <div class="d-flex gap-16 flex-col">
                        <h3 class="f-16 lh-11 white-80">
                            Insider Trading Window
                        </h3>
                        <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">
                            <div class="d-flex gap-32 justify-space-between flex-col">
                                <div class="d-flex gap-16 align-center">
                                    <div class="notification-outer w-38 h-38">
                                        <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                    </div>
                                    <div class="card-cont">
                                        <p class="f-16 lh-18 white ls-0 mb-4">
                                            Trust / Entity / Structure
                                        </p>
                                        <h3 class="f-12 lh-13 ls-042 clr-99ACB6 uppercase">
                                            A node-based diagram showing how assets are shielded
                                        </h3>
                                    </div>
                                </div>

                                <div class="d-flex flex-col gap-8">
                                    <div class="p-18-24 bg-000A0F border-E9E7DD-15 d-flex gap-10 align-center br-8">
                                        <div class="d-flex justify-space-between w-100">
                                            <div class="left-cont">
                                                <div class="d-flex gap-8 align-center">
                                                    <h3 class="f-15 lh-18 white">
                                                        Revocable Living Trust
                                                    </h3>
                                                    <span class="bg-E9E7DD border-23B05B p-4-16 f-12 lh-12 clr-156A37 br-24 bold">Trust</span>
                                                </div>
                                                <div class="f-13 lh-14 clr-99ACB6">
                                                    Realised Losses
                                                </div>
                                            </div>
                                            <div class="right-box">
                                                <f-20 class="lh-20 clr-7BD09D">
                                                    $6.3M
                                                </f-20>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-18-24 bg-000A0F border-E9E7DD-15 d-flex gap-10 align-center br-8">
                                        <div class="d-flex justify-space-between w-100">
                                            <div class="left-cont">
                                                <div class="d-flex gap-8 align-center">
                                                    <h3 class="f-15 lh-18 white">
                                                        LLC / Asset Holding Co.
                                                    </h3>
                                                    <span class="bg-E9E7DD border-23B05B p-4-16 f-12 lh-12 clr-156A37 br-24 bold">LLC</span>
                                                </div>
                                                <div class="f-13 lh-14 clr-99ACB6 mb-12">
                                                    Real Estate / Vacation Fund
                                                </div>
                                                <div class="p-8 bg-9DDDD5-10 f-12 lh-12 clr-A7DFBD br-4">
                                                    3 positions eligible for TLH - +$12,400 potential alpha
                                                </div>
                                            </div>
                                            <!-- <div class="right-box">
                                                <f-20 class="lh-20 clr-7BD09D">
                                                    $6.3M
                                                </f-20>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="p-18-24 bg-000A0F border-E9E7DD-15 d-flex gap-10 align-center br-8">
                                        <div class="d-flex justify-space-between w-100">
                                            <div class="left-cont">
                                                <div class="d-flex gap-8 align-center mb-5">
                                                    <h3 class="f-15 lh-18 white">
                                                        105b-1 Plan
                                                    </h3>
                                                    <span class="bg-E9E7DD border-23B05B p-4-16 f-12 lh-12 clr-156A37 br-24 bold">Plan</span>
                                                </div>
                                                <div class="f-13 lh-14 clr-99ACB6">
                                                    Concentrated Stock
                                                </div>
                                            </div>
                                            <div class="right-box">
                                                <f-20 class="lh-20 clr-7BD09D">
                                                    $11.1M
                                                </f-20>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="bg-108476-10 br-16 p-17-58 f-14 lh-20 neutral-300">
                                    Protection Note: 3 positions within the LLC are currently eligible for Tax-Loss Harvesting. Proceeding will increase Tax Alpha by an estimated $12,400.
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="d-flex gap-16 flex-col">
                        <h3 class="f-16 lh-11 white-80">
                            Audit Trail & Filings
                        </h3>
                        <div class="bg-seconday-dark-900 p-32 br-11 border-E9E7DD-24">
                            <div class="d-flex gap-16 align-center mb-24">
                                <div class="notification-outer w-38 h-38">
                                    <img src="{{ asset('images/guardian.svg') }}" alt="guardian icon">
                                </div>
                                <div class="card-cont">
                                    <p class="f-16 lh-18 white ls-0 mb-4">
                                        Wash Sale Monitor (Compliance Gaurdrails)
                                    </p>
                                    <h3 class="f-12 lh-13 ls-042 clr-99ACB6 uppercase">
                                        A technical Ticker showing the safety of recent trades
                                    </h3>
                                </div>
                            </div>

                            <div class="d-grid col-lg-2 gap-18 mb-18">
                                <div class="border-E9E7DD-24 p-24 br-8">
                                    <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                        Safety Window
                                    </p>
                                    <p class="f-16 lh-18 clr-A7DFBD uppercase">
                                        30 Days Clear
                                    </p>
                                </div>

                                <div class="border-E9E7DD-24 p-24 br-8">
                                    <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                        Last Trade
                                    </p>
                                    <p class="f-16 lh-18 clr-A7DFBD uppercase">
                                        May 15, 2026
                                    </p>
                                </div>

                            </div>

                            <div class="d-grid col-lg-2 gap-18 mb-32">
                                <div class="border-E9E7DD-24 p-24 br-8">
                                    <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                        Re - Entry Type
                                    </p>
                                    <p class="f-16 lh-18 white uppercase">
                                        Diversified
                                    </p>
                                </div>

                                <div class="border-E9E7DD-24 p-24 br-8">
                                    <p class="f-12 lh-14 uppercase clr-99ACB6 mb-8">
                                        Compliance Score
                                    </p>
                                    <p class="f-16 lh-18 clr-A7DFBD uppercase">
                                        100 / 100
                                    </p>
                                </div>

                            </div>
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 d-flex justify-center bold mb-38">Download Audit Trail Compliance Log</a>
                            <div class="bg-108476-10 br-16 p-17 f-14 lh-20 neutral-300">
                                Note: "Protection Mode ensures your Future Pipe liquidation is not just a sale, but a tax-efficient transition. By matching $142k in losses against gains, we have created a 30.1% return on your tax liability."
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-16 flex-col w-100">
                    <div class="f-16 lh-11 white-80">
                        Tax Alpha Flow
                    </div>
                    <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24 d-grid col-lg-3">
                        <div class="d-flex">
                            <div class="w-28 bg-5D5C58">

                            </div>
                            <div class="bg-losses p-32-14 d-flex gap-6 flex-col w-100">
                                <p class="f-16 lh-16 white">
                                    Losses
                                </p>
                                <p class="f-14 lh-14 clr-99ACB6">
                                    $142k
                                </p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="w-28 bg-1C8D49">

                            </div>
                            <div class="bg-savings p-32-14 d-flex gap-6 flex-col w-100">
                                <p class="f-16 lh-16 white">
                                    Losses
                                </p>
                                <p class="f-14 lh-14 clr-99ACB6">
                                    $142k
                                </p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="w-28 bg-4FC07C">

                            </div>
                            <div class="bg-transparent p-32-14 d-flex gap-6 flex-col w-100">
                                <p class="f-16 lh-16 white">
                                    Net Worth
                                </p>
                                <p class="f-14 lh-14 clr-99ACB6">
                                    +$38.4k
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="d-flex gap-16 flex-col w-100">
                    <div class="f-16 lh-11 white-80">
                        The Harvesting Ledger (Active Opportunities)
                    </div>
                    <div class="bg-seconday-dark-900 p-32-24 br-11 border-E9E7DD-24">

                        <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20 mb-28">
                            <div class="date-outer">
                                <p class="f-12 lh-10 white-50 uppercase">
                                    Security
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 white-50 uppercase center">
                                    CURRENT LOSS
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 white-50 uppercase center">
                                    harvesting status
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 white-50 uppercase center">
                                    Potential tax alpha
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-12 lh-10 white-50 uppercase center">
                                    action
                                </p>
                            </div>
                        </div>
                        <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20 mb-14 mb-32">
                            <div class="date-outer">
                                <p class="f-16 lh-20 white bold">
                                Tech ETF (XLK)
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                $54,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                    Eligible
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                    $16,200
                                </p>
                            </div>
                            <div class="date-outer d-flex align-center justify-center">
                                <p class="f-12 lh-14 center">
                                    Execute
                                </p>

                            </div>
                        </div>
                        <div class="border-bottom-E9E7DD-15 mb-14">

                        </div>
                        <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20 mb-14 mb-32">
                            <div class="date-outer">
                                <p class="f-16 lh-20 white bold">
                                Global Bond Fund
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                $12,000
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                Monitoring
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                $3,600
                                </p>
                            </div>
                            <div class="date-outer d-flex align-center justify-center">
                                <p class="f-12 lh-14 center">
                                Auto - Pilot
                                </p>

                            </div>
                        </div>
                        <div class="border-bottom-E9E7DD-15 mb-14">

                        </div>
                        <div class="table-row d-grid col-lg-5 align-center gap-10 p-14-20 mb-32">
                            <div class="date-outer">
                                <p class="f-16 lh-20 white bold">
                                Emerging Markets
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                $8,500
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                    Eligible
                                </p>
                            </div>
                            <div class="date-outer">
                                <p class="f-16 lh-20 white center">
                                    $2,550
                                </p>
                            </div>
                            <div class="date-outer d-flex align-center justify-center">
                                <p class="f-12 lh-14 center">
                                    $2,550
                                </p>

                            </div>
                        </div>

                        <div class="p-16-32 bg-108476-15 d-flex gap-10 justify-space-between br-12">
                            <div class="d-flex gap-32 align-center">
                                <p class="f-16 lh-16 white-80">
                                    TOTAL Eligible
                                </p>
                                <p class="f-16 lh-16 clr-F8B4B2">
                                    $62,500
                                </p>
                            </div>

                            <div class="d-flex gap-32 align-center">
                                <p class="f-16 lh-16 white-80">
                                    TOTAL Potential tax alpha
                                </p>
                                <p class="f-16 lh-16 clr-A7DFBD">
                                    +$18,750
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="d-grid col-lg-2 gap-32">
                    <div class="bg-0B1417 p-32-24 br-11 border-E9E7DD-24">

                        <h3 class="f-16 lh-18 white mb-8">
                            Execute Tax Alpha Strategy
                        </h3>

                        <p class="f-14 lh-22 clr-DADADA-6 mb-32">
                            Systematically harvest all eligible losses, rebalance replacement securities, and maximize current-year tax efficiency across every managed account.
                        </p>

                        <div class="btn-outer d-flex gap-10">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-14 d-flex justify-center w-auto m-fit-content">Download Report</a>
                        </div>
                    </div>

                    <div class="bg-0B1417 p-32-24 br-11 border-E9E7DD-24">
                        <h3 class="f-16 lh-18 white mb-8">
                            View Wealth Transfer Blueprint
                        </h3>

                        <p class="f-14 lh-22 clr-DADADA-6 mb-32">
                            Explore trust structures, beneficiary pathways, entity ownership, and projected wealth transfer outcomes across generations.
                        </p>

                        <div class="btn-outer d-flex gap-10">
                            <a href="#" class="btn btn-green-outlined p-10-21 f-14 lh-14 d-flex justify-center w-auto m-fit-content">Download Report</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection