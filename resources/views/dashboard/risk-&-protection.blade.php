@extends('layouts.app')

@section('title', 'Risk & Protection')

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
            Risk & Protection
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
            <div class="d-flex flex-col gap-16 w-100">
                <h2 class="f-16 lh-12 white-80">
                    Personal Liability & Balance SheetProtection
                </h2>
                <div class="d-grid col-13-1 gap-24">
                    <div class="bg-0B1417 br-12 p-32-24 d-flex gap-24 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <path d="M8.93075 4.8679L8.79226 9.96023H7.49254L7.3505 4.8679H8.93075ZM8.1424 12.233C7.90803 12.233 7.70679 12.1501 7.53871 11.9844C7.37062 11.8163 7.28776 11.6151 7.29013 11.3807C7.28776 11.1487 7.37062 10.9498 7.53871 10.7841C7.70679 10.6184 7.90803 10.5355 8.1424 10.5355C8.36731 10.5355 8.56499 10.6184 8.73544 10.7841C8.90589 10.9498 8.99231 11.1487 8.99467 11.3807C8.99231 11.5369 8.95088 11.6802 8.87038 11.8104C8.79226 11.9382 8.68928 12.0412 8.56143 12.1193C8.43359 12.1951 8.29392 12.233 8.1424 12.233Z" fill="#108476" />
                                    <path d="M8.33912 13.9428C10.7655 13.097 12.807 11.6386 12.807 8.72182V4.63836C12.807 4.48364 12.7456 4.33527 12.6362 4.22587C12.5268 4.11647 12.3784 4.05501 12.2237 4.05501C11.0572 4.05501 9.60483 3.36082 8.5841 2.46829C8.46053 2.3627 8.30334 2.30469 8.14081 2.30469C7.97828 2.30469 7.82109 2.3627 7.69752 2.46829C6.68262 3.35498 5.22443 4.05501 4.05788 4.05501C3.90319 4.05501 3.75483 4.11647 3.64545 4.22587C3.53606 4.33527 3.47461 4.48364 3.47461 4.63836V8.72182C3.47461 11.6386 5.51607 13.097 7.94833 13.937C8.07405 13.9838 8.21206 13.9859 8.33912 13.9428Z" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <h2 class="f-16 lh-12 white">
                                Personal liability exposure engine
                            </h2>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <div class="d-flex gap-8 justify-space-between">
                                <p class="f-14 lh-20 clr-99ACB6 uppercase">
                                    Total Attachable Assets (Global)
                                </p>
                                <p class="f-16 lh-15 white">
                                    $45,000,000
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-8 justify-space-between">
                                <p class="f-14 lh-20 clr-99ACB6 uppercase">
                                    Current Umbrella Policy Limit
                                </p>
                                <p class="f-16 lh-15 white">
                                    $10,000,000
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-8 justify-space-between">
                                <p class="f-14 lh-20 clr-red-300 uppercase">
                                    Unprotected Liability Gap
                                </p>
                                <p class="f-16 lh-15 white">
                                    -$35,000,000
                                </p>
                            </div>
                        </div>

                        <div class="border-E9E7DD-20 bg-000A0F br-8 p-16-24 d-flex flex-col gap-16">
                            <p class="f-14 lh-16 clr-99ACB6">
                                Status
                            </p>

                            <div class="d-flex flex-col gap-9">
                                <div class="d-flex gap-36 align-center justify-space-between">
                                    <div class="percentage-bar" data-percentage="25" data-segments="50"></div>
                                    <div class="btn-F58F8C f-14 lh-16 p-2-16 br-48">
                                        Critical Gap
                                    </div>
                                </div>

                                <div class="d-flex gap-11">
                                    <div class="border-8C8B85 p-2-8 d-flex gap-9 br-4 align-center">
                                        <div class="w-5 h-5 bg-red-300 br-100">

                                        </div>
                                        <div class="f-12 lh-18 clr-8C8B85">
                                            Insured Net Worth: $10.0M
                                        </div>
                                    </div>
                                    <div class="border-8C8B85 p-2-8 d-flex gap-9 br-4 align-center">
                                        <div class="w-5 h-5 bg-E9E7DD-20 br-100">

                                        </div>
                                        <div class="f-12 lh-18 clr-8C8B85">
                                            Exposed Balance Sheet: $35.0M
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bg-0B1417 br-12 p-32-24 d-flex gap-24 flex-col">
                        <div class="d-flex gap-12 align-center">
                            <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <path d="M6.97005 5.80729H9.30339M8.13672 13.3906V8.14062M8.13672 5.80729V2.89062M11.0534 10.474H13.3867M12.2201 8.14062V2.89062M12.2201 13.3906V10.474M2.88672 9.30729H5.22005M4.05339 6.97396V2.89062M4.05339 13.3906V9.30729" stroke="#108476" stroke-opacity="0.8" stroke-width="1.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <h2 class="f-16 lh-12 white">
                                Extra Liability Optimizer
                            </h2>
                        </div>
                        <div class="d-flex gap-16 flex-col mb-16">
                            <div class="d-flex align-center justify-space-between gap-10">
                                <p class="f-14 lh-16 clr-99ACB6 uppercase">
                                    Target Umbrella Cover
                                </p>
                                <span class="f-16 lh-16 clr-4FC07C p-6-12 bg-4FC07C-15 border-4FC07C-15 br-30">
                                    $45.0M
                                </span>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex align-center justify-space-between gap-10">
                                <p class="f-14 lh-16 clr-99ACB6 uppercase">
                                    Current Policy Limit
                                </p>
                                <span class="f-16 lh-16 clr-4FC07C p-6-12 bg-4FC07C-15 border-4FC07C-15 br-30">
                                    $10.0M
                                </span>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex align-center justify-space-between gap-10">
                                <p class="f-14 lh-16 clr-99ACB6 uppercase">
                                    Premium Delta (Est)
                                </p>
                                <span class="f-16 lh-16 clr-yellow-300 p-6-12 bg-E9E7DD-10 border-E9E7DD-10 br-30">
                                    TBD
                                </span>
                            </div>
                        </div>
                        <a href="#" class="f-15 lh-18 clr-4FC07C p-12 d-flex w-100 gap-10 align-center br-100px border-4FC07C justify-center">Connect with our Advisor to get a Custom Quote</a>
                    </div>
                </div>
            </div>

            <div class="bg-0B1417 p-32-24 br-12 border-E9E7DD-24 d-flex flex-col gap-24 w-100">
                <div class="d-flex gap-12 align-center mb-8">
                    <div class="w-38 h-38 bg-108476-10 br-8 d-flex align-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15" fill="none">
                            <path d="M4.66961 0.601562V14.1693M8.06128 2.63673H2.97378C2.34411 2.63673 1.74023 2.88688 1.29499 3.33216C0.849744 3.77744 0.599609 4.38136 0.599609 5.01108C0.599609 5.6408 0.849744 6.24473 1.29499 6.69001C1.74023 7.13528 2.34411 7.38544 2.97378 7.38544H6.36544C6.99511 7.38544 7.59899 7.63559 8.04423 8.08087C8.48948 8.52615 8.73961 9.13008 8.73961 9.7598C8.73961 10.3895 8.48948 10.9934 8.04423 11.4387C7.59899 11.884 6.99511 12.1342 6.36544 12.1342H0.599609" stroke="#108476" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h2 class="f-16 lh-12 white">
                        Gross Proceeds
                    </h2>
                </div>
                <div class="d-grid col-lg-3 gap-24">
                    <div class="bg-000A0F border-E9E7DD-24 br-8 p-24-16 d-flex gap-8 flex-col">
                        <p class="f-14 lh-16 clr-99ACB6">
                            Earner 1 (John)
                        </p>
                        <h3 class="f-24 lh-22 white bold">
                            $1,200,000/yr
                        </h3>
                    </div>
                    <div class="bg-000A0F border-E9E7DD-24 br-8 p-24-16 d-flex gap-8 flex-col">
                        <p class="f-14 lh-16 clr-99ACB6">
                            Earner 2 (Jane)
                        </p>
                        <h3 class="f-24 lh-22 white bold">
                            $500,000/yr
                        </h3>
                    </div>
                    <div class="bg-000A0F border-E9E7DD-24 br-8 p-24-16 d-flex gap-8 flex-col">
                        <p class="f-14 lh-16 clr-99ACB6">
                            Total Annual Core Lifestyle Outflow
                        </p>
                        <h3 class="f-24 lh-22 white bold">
                            $600,000/yr
                        </h3>
                    </div>
                </div>

                <div class="d-grid col-lg-2 gap-45">
                    <div class="d-flex gap-16 flex-col">
                        <p class="f-16 lh-12 white capitalize">
                            Active loss simulation: simulate loss of earner 1 (John)
                        </p>
                        <div class="d-flex flex-col gap-10 mb-8">
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-14 lh-20 uppercase clr-99ACB6">
                                    Future Capital Needed to Age 60 (20-Yr Horizon)
                                </p>
                                <p class="f-16 lh-16 white">
                                    $12,000,000
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-14 lh-20 uppercase clr-99ACB6">
                                    Available Private Capital Assets
                                </p>
                                <p class="f-16 lh-16 white">
                                    $7,400,000
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-14 lh-20 uppercase clr-99ACB6">
                                    PROJECTED CAPITAL SHORTFALL
                                </p>
                                <p class="f-16 lh-16 clr-red-300">
                                    -$4,600,000
                                </p>
                            </div>
                        </div>
                        <div class="bg-000A0F border-E9E7DD-24 br-8 p-24-32 d-flex gap-8 flex-col mb-40">
                            <p class="f-14 lh-16 white-80">
                                Progress
                            </p>
                            <div class="d-flex gap-12">
                                <div class="percentage-bar green" data-percentage="45" data-segments="40"></div>
                                <div class="clr-7BD09D border-7BD09D bg-23B05B-15 f-14 lh-16 p-2-16 br-48">
                                    61.6% Funded
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-green-outlined p-10-55 f-14 d-inline-flex gap-8 justify-center align-center bold m-fit-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round"></path>
                            </svg>
                            Explore options
                        </a>
                    </div>

                    <div class="d-flex gap-16 flex-col">
                        <p class="f-16 lh-12 white capitalize">
                            Active Loss simulation: Simulate Loss Of Earner 1 (John)
                        </p>
                        <div class="d-flex flex-col gap-10 mb-8">
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-14 lh-20 uppercase clr-99ACB6">
                                    Future Capital Needed to Age 60 (20-Yr Horizon)
                                </p>
                                <p class="f-16 lh-16 white">
                                    $12,000,000
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-14 lh-20 uppercase clr-99ACB6">
                                    Available Private Capital Assets
                                </p>
                                <p class="f-16 lh-16 white">
                                    $7,400,000
                                </p>
                            </div>
                            <div class="border-bottom-E9E7DD-30">

                            </div>
                            <div class="d-flex gap-10 justify-space-between align-center">
                                <p class="f-14 lh-20 uppercase clr-99ACB6">
                                    PROJECTED CAPITAL SHORTFALL
                                </p>
                                <p class="f-16 lh-16 clr-red-300">
                                   -$4,600,000
                                </p>
                            </div>
                        </div>
                        <div class="bg-000A0F border-E9E7DD-24 br-8 p-24-32 d-flex gap-8 flex-col mb-40">
                            <p class="f-14 lh-16 white-80">
                                Progress
                            </p>
                            <div class="d-flex gap-12">
                                <div class="percentage-bar green" data-percentage="45" data-segments="40"></div>
                                <div class="clr-7BD09D border-7BD09D bg-23B05B-15 f-14 lh-16 p-2-16 br-48">
                                    61.6% Funded
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-green-outlined p-10-55 f-14 d-inline-flex gap-8 justify-center align-center bold m-fit-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                <path d="M2.95833 5.87542V3.5419C2.95833 2.76829 3.26562 2.02637 3.81261 1.47934C4.35959 0.932315 5.10145 0.625 5.875 0.625C6.64855 0.625 7.39041 0.932315 7.93739 1.47934C8.48438 2.02637 8.79167 2.76829 8.79167 3.5419V5.87542M1.79167 5.87542H9.95833C10.6027 5.87542 11.125 6.3978 11.125 7.04218V11.1258C11.125 11.7702 10.6027 12.2926 9.95833 12.2926H1.79167C1.14733 12.2926 0.625 11.7702 0.625 11.1258V7.04218C0.625 6.3978 1.14733 5.87542 1.79167 5.87542Z" stroke="#4FC07C" stroke-width="1.25" stroke-linecap="round"></path>
                            </svg>
                            Explore options
                        </a>
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