@extends('layouts.app')

@section('title', 'Concentration cap')

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
            10b5-1 CONCENTRATION CAP
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
            <div class="d-grid gap-38 col-lg-3 w-100">
                <div class="bg-0B1417 br-12 p-32-24 borde-E9E7DD-24 d-flex gap-16 flex-col">
                    <div class="d-flex gap-12 align-center">
                        <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M8.14031 1.35938V14.9271M11.532 3.39454H6.44448C5.81481 3.39454 5.21093 3.64469 4.76569 4.08997C4.32045 4.53525 4.07031 5.13918 4.07031 5.76889C4.07031 6.39861 4.32045 7.00254 4.76569 7.44782C5.21093 7.8931 5.81481 8.14325 6.44448 8.14325H9.83615C10.4658 8.14325 11.0697 8.39341 11.5149 8.83868C11.9602 9.28396 12.2103 9.88789 12.2103 10.5176C12.2103 11.1473 11.9602 11.7513 11.5149 12.1965C11.0697 12.6418 10.4658 12.892 9.83615 12.892H4.07031" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <p class="f-16 lh-12 white">
                            Gross Proceeds
                        </p>
                    </div>
                    <div class="d-flex gap-8 flex-col">
                        <h2 class="f-24 lh-24 white bold">
                            $499,783.10
                        </h2>
                        <p class="f-14 lh-16 clr-99ACB6">
                            (Dynamic Market Feed)
                        </p>
                    </div>
                </div>

                <div class="bg-0B1417 br-12 p-32-24 borde-E9E7DD-24 d-flex gap-16 flex-col">
                    <div class="d-flex gap-12 align-center">
                        <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                <path d="M10.7736 1.27983L1.27787 10.7755M3.99094 2.29723C3.99094 3.23372 3.23176 3.99289 2.29527 3.99289C1.35878 3.99289 0.599609 3.23372 0.599609 2.29723C0.599609 1.36074 1.35878 0.601562 2.29527 0.601562C3.23176 0.601562 3.99094 1.36074 3.99094 2.29723ZM11.4519 9.75815C11.4519 10.6946 10.6927 11.4538 9.75619 11.4538C8.8197 11.4538 8.06053 10.6946 8.06053 9.75815C8.06053 8.82166 8.8197 8.06248 9.75619 8.06248C10.6927 8.06248 11.4519 8.82166 11.4519 9.75815Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <p class="f-16 lh-12 white">
                            Total Estimated Taxes
                        </p>
                    </div>
                    <div class="d-flex gap-8 flex-col">
                        <h2 class="f-24 lh-24 white bold">
                            $252,890.25
                        </h2>
                        <p class="f-14 lh-16 clr-99ACB6">
                            (50.60% Max Bracket)
                        </p>
                    </div>
                </div>


                <div class="bg-0B1417 br-12 p-32-24 borde-E9E7DD-24 d-flex gap-16 flex-col">
                    <div class="d-flex gap-12 align-center">
                        <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M4.06902 8.14031H4.0758M12.2097 8.14031H12.2165M2.71224 4.07031H13.5664C14.3158 4.07031 14.9232 4.67771 14.9232 5.42698V10.8536C14.9232 11.6029 14.3158 12.2103 13.5664 12.2103H2.71224C1.96292 12.2103 1.35547 11.6029 1.35547 10.8536V5.42698C1.35547 4.67771 1.96292 4.07031 2.71224 4.07031ZM9.49612 8.14031C9.49612 8.88958 8.88867 9.49698 8.13935 9.49698C7.39002 9.49698 6.78257 8.88958 6.78257 8.14031C6.78257 7.39105 7.39002 6.78365 8.13935 6.78365C8.88867 6.78365 9.49612 7.39105 9.49612 8.14031Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <p class="f-16 lh-12 white">
                            NET CASH PROCEEDS
                        </p>
                    </div>
                    <div class="d-flex gap-8 flex-col">
                        <h2 class="f-24 lh-24 white bold">
                            $246,892.85 
                        </h2>
                        <p class="f-14 lh-16 clr-99ACB6">
                            Fully Liquid Cash-Out
                        </p>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-col gap-24 w-100">
                <div class="d-grid gap-30 col-lg-2 w-100">
                    <div class="d-flex gap-16 flex-col w-100">
                        <h2 class="f-16 lh-12 white-80">
                            Quarterly Liquidity Timeline
                        </h2>
                        <div class="bg-0B1417 br-12 border-E9E7DD-24 p-32-24 d-flex gap-16 flex-col">
                            <div class="d-flex gap-10 align-center justify-space-between">
                                <div class="d-flex gap-8 flex-col">
                                    <p class="f-12 lh-16 neutral-300">
                                        Q1, 2026
                                    </p>
                                    <p class="f-16 lh-20 white">
                                        (1,357 shares/ $$327.07)
                                    </p>
                                </div>
                                <span class="p-4-8 clr-156A37 f-12 lh-14 bg-E8F3DC br-4">
                                    Completed
                                </span>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between">
                                <div class="d-flex gap-8 flex-col">
                                    <p class="f-12 lh-16 neutral-300">
                                        Q2, 2026
                                    </p>
                                    <p class="f-16 lh-20 white">
                                        (1,357 shares/ $$370.59)
                                    </p>
                                </div>
                                <span class="p-4-8 clr-156A37 f-12 lh-14 bg-E8F3DC br-4">
                                    Completed
                                </span>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between">
                                <div class="d-flex gap-8 flex-col">
                                    <p class="f-12 lh-16 neutral-300">
                                        Q3, 2026
                                    </p>
                                    <p class="f-16 lh-20 white">
                                        (Est. 1,357 Shares)
                                    </p>
                                </div>
                                <span class="p-4-8 clr-156A37 f-12 lh-14 bg-E8F3DC br-4">
                                    Completed
                                </span>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-10 align-center justify-space-between">
                                <div class="d-flex gap-8 flex-col">
                                    <p class="f-12 lh-16 neutral-300">
                                        Q4, 2026
                                    </p>
                                    <p class="f-16 lh-20 white">
                                        (Est. 1,357 Shares)
                                    </p>
                                </div>
                                <span class="p-4-8 f-12 lh-14 bg-FBBC05-15 br-4 clr-A06F11">
                                    Pending
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-16 flex-col w-100">
                        <h2 class="f-16 lh-12 white-80">
                            Exact Tax Waterfall Ledger
                        </h2>

                        <div class="bg-0B1417 br-12 border-E9E7DD-24 p-32-24 d-flex gap-34 flex-col">
                            <div class="d-flex gap-10 flex-col">
                                <div class="d-flex gap-10 align-center justify-space-between">
                                    <div class="d-flex gap-8 flex-col">
                                        <p class="f-13 lh-16 clr-99ACB6 uppercase">
                                            Gross Proceeds
                                        </p>
                                    </div>
                                    <p class="f-16 lh-20 white">
                                         $499,783.10
                                    </p>
                                </div>
                                <div class="border-bottom-E9E7DD-30">

                                </div>
                                <div class="d-flex gap-10 align-center justify-space-between">
                                    <div class="d-flex gap-8 flex-col">
                                        <p class="f-13 lh-16 clr-99ACB6 uppercase">
                                            (-) FIT (37.0%)
                                        </p>
                                    </div>
                                    <p class="f-16 lh-20 clr-red-300">
                                        -$184,919.75
                                    </p>
                                </div>
                                <div class="border-bottom-E9E7DD-30">

                                </div>
                                <div class="d-flex gap-10 align-center justify-space-between">
                                    <div class="d-flex gap-8 flex-col">
                                        <p class="f-13 lh-16 clr-99ACB6 uppercase">
                                            (-) MD State (6.5%)
                                        </p>
                                    </div>
                                    <p class="f-16 lh-20 clr-red-300">
                                        -$32,485.90
                                    </p>
                                </div>
                                <div class="border-bottom-E9E7DD-30">

                                </div>
                                <div class="d-flex gap-10 align-center justify-space-between">
                                    <div class="d-flex gap-8 flex-col">
                                        <p class="f-13 lh-16 clr-99ACB6 uppercase">
                                            (-) MoCo Local (3.3%)
                                        </p>
                                    </div>
                                    <p class="f-16 lh-20 clr-red-300">
                                        -$16,492.84
                                    </p>
                                </div>
                                <div class="border-bottom-E9E7DD-30">

                                </div>
                                <div class="d-flex gap-10 align-center justify-space-between">
                                    <div class="d-flex gap-8 flex-col">
                                        <p class="f-13 lh-16 clr-99ACB6 uppercase">
                                            (-) NIIT (3.8%)
                                        </p>
                                    </div>
                                    <p class="f-16 lh-20 clr-red-300">
                                        -$18,991.76
                                    </p>
                                </div>

                            </div>

                            <div class="bg-E9E7DD-5 p-14-20 br-8 d-flex gap-10 justify-space-between">
                                <p class="f-14 lh-22 white">
                                    Net Estimated Proceeds
                                </p>
                                <p class="f-16 lh-22 white">
                                    $246,892.85
                                </p>
                            </div>

                        </div>



                    </div>
                </div>
                <div class="bg-108476-15 br-12 border-E9E7DD-24 p-32 d-grid col-lg-3 gap-10 w-100">
                    <div class="d-flex gap-8 flex-col">
                        <p class="f-12 lh-16 neutral-300 d-flex align-center gap-2">
                            Next Scheduled Trade
                            <img class="w-16 h-16" src="{{ asset('images/information-line.svg') }}" alt="Information icon">
                        </p>
                        <p class="f-18 lh-20 white left">
                            October 15, 2026
                        </p>
                    </div>

                    <div class="d-flex gap-8 flex-col">
                        <p class="f-12 lh-16 neutral-300 d-flex align-center gap-2">
                            Total Plan Value (Remaining)
                            <img class="w-16 h-16" src="{{ asset('images/information-line.svg') }}" alt="Information icon">
                        </p>
                        <p class="f-18 lh-20 white left">
                            $1,499,349
                        </p>
                    </div>

                    <div class="d-flex gap-8 flex-col">
                        <p class="f-12 lh-16 neutral-300 d-flex align-center gap-2">
                            Plan Expiration
                            <img class="w-16 h-16" src="{{ asset('images/information-line.svg') }}" alt="Information icon">
                        </p>
                        <p class="f-18 lh-20 white left">
                            December 31, 2027
                        </p>
                    </div>

                </div>
            </div>

            <div class="d-grid col-lg-2 gap-30 w-100">
                <div class="d-flex flex-col gap-16 w-100">
                    <h2 class="f-16 lh-12 white-80">
                        Dashboard Configuration & Audit Overrides
                    </h2>
                    <div class="bg-0B1417 br-12 p-32-24 d-flex flex-col gap-12">
                        <div class="d-flex gap-10 align-center justify-space-between">
                            <p class="f-14 lh-20 uppercase clr-99ACB6">
                                Cost Basis
                            </p>
                            <p class="f-16 lh-16 white">
                                $0.00
                            </p>
                        </div>
                        <div class="border-bottom-E9E7DD-30">

                        </div>
                        <div class="d-flex gap-10 align-center justify-space-between">
                            <p class="f-14 lh-20 uppercase clr-99ACB6">
                                Tax Residency
                            </p>
                            <p class="f-16 lh-16 white">
                                Montgomery County, MD
                            </p>
                        </div>
                        <div class="border-bottom-E9E7DD-30">

                        </div>
                        <div class="d-flex gap-10 align-center justify-space-between">
                            <p class="f-14 lh-20 uppercase clr-99ACB6">
                                Share Lock
                            </p>
                            <p class="f-16 lh-16 white">
                                15,000 Min
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-E9E7DD-15 p-32 br-16 d-flex flex-col gap-16">
                <h3 class="f-16 lh-11 white-80">
                    Connect with us
                </h3>

                <div class="p-40 bg-0B1417 br-12 border-E9E7DD-15">
                    <div class="d-grid col-lg-2 gap-40">
                        <div class="left d-flex gap-12 flex-col">
                            <h3 class="f-20 lh-22 white">
                                Connect with your advisor
                            </h3>
                            <p class="f-16 lh-20 clr-4FC07C">
                                Your portfolio remains high concentration in Amazon stock.
                            </p>
                            <p class="f-14 lh-22 white-80">
                                A review with your advisor can help evaluate diversification opportunities, tax considerations, and progress toward your long-term financial goals.
                            </p>
                        </div>

                        <div class="right-box d-flex gap-16 flex-col">
                            <div class="d-flex gap-12 align-center">
                                <span class="w-6 h-6 br-100 bg-4FC07C">

                                </span>
                                <p class="f-14 lh-18 white-80">Get tailored recommendations to align with your goals.</p>
                            </div>

                            <div class="d-flex gap-12 align-center">
                                <span class="w-6 h-6 br-100 bg-4FC07C">

                                </span>
                                <p class="f-14 lh-18 white-80">Explore ways to lower single-stock exposure.</p>
                            </div>

                            <div class="d-flex gap-12 align-center">
                                <span class="w-6 h-6 br-100 bg-4FC07C">

                                </span>
                                <p class="f-14 lh-18 white-80">Build a more balanced and resilient portfolio.</p>
                            </div>
                        </div>
                    </div>
                    <div class="calendly-cus-outer">
                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget"
                            data-url="https://calendly.com/design-1787fp/30min?hide_event_type_details=1&hide_gdpr_banner=1&background_color=0b1417&text_color=e9e7dd&primary_color=e9e7dd"
                            style="position: relative; width: 100%; height: 500px;">
                        </div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

@endsection