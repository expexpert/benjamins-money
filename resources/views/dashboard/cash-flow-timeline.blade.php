@extends('layouts.app')

@section('title', 'Cash Flow Timeline')

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
            Cash Flow Timeline
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
        <div class="card-outer d-flex flex-col gap-48 align-flex-start">
            <div class="wrap">

                <!-- Tab buttons: data-tab must match the panel's id -->
                <div class="tabs" role="tablist">
                    <button class="tab-btn cursor-pointer" role="tab" data-tab="annual" aria-selected="false">Annual Forecast</button>
                    <button class="tab-btn cursor-pointer active" role="tab" data-tab="horizon" aria-selected="true">Multi-Year Horizon Map
                        (2026-2032)</button>
                </div>

                <!-- Panel 1 -->
                <section id="annual" class="tab-panel" role="tabpanel">
                    <div class="card border-E9E7DD-15 bg-060F13 br-12 p-20 d-flex gap-16 flex-col">
                        <div class="card-head d-flex align-center gap-10 justify-space-between">
                            <h3 class="f-18 lh-20 white">2026 Annual Forecast</h3>
                            <span class="badge green f-11 lh-12">On track</span>
                        </div>
                        <p class="f-14 lh-20 white-80">Put your annual forecast content here.</p>
                        <div class="border-bottom-E9E7DD-24">

                        </div>
                        <p class="f-14 lh-16 white-50">Replace this placeholder with your own data.</p>
                    </div>
                </section>

                <!-- Panel 2 -->
                <section id="horizon" class="tab-panel active" role="tabpanel">
                    <div class="card d-flex gap-16 flex-col border-E9E7DD-15 bg-060F13 br-12 p-20">
                        <div class="card-head d-flex align-center gap-10 justify-space-between">
                            <h3 class="f-18 lh-20 white">2026 - 2028</h3>
                            <span class="badge blue f-11 lh-12">Positive runway</span>
                        </div>
                        <p class="f-14 lh-20 white-80">Standard wealth accumulation phase.</p>
                        <div class="border-bottom-E9E7DD-24">

                        </div>
                        <p class="f-14 lh-16 white-50">Net cash flow positive. No major structural changes.</p>
                    </div>

                    <div class="card d-flex gap-16 flex-col border-E9E7DD-15 bg-060F13 br-12 p-20">
                        <div class="card-head d-flex align-center justify-space-between gap-10">
                            <h3 class="f-18 lh-20 white">2029</h3>
                            <span class="badge red f-11 lh-12">Capital wave begins</span>
                        </div>
                        <p class="f-14 lh-20 white-80">OUTFLOW EVENT: John's Brown University Freshman Tuition &amp; Fees.</p>
                        <div class="border-bottom-E9E7DD-24">

                        </div>
                        <p class="f-14 lh-16 white-50">Projected Cash Drain: -$85,000/yr</p>
                    </div>

                    <div class="card d-flex gap-16 flex-col border-E9E7DD-15 bg-060F13 br-12 p-20">
                        <div class="card-head d-flex align-center justify-space-between gap-10">
                            <h3 class="f-18 lh-20 white">2030</h3>
                            <span class="badge red f-11 lh-12">Critical overlap window</span>
                        </div>
                        <p class="f-14 lh-20 white-80">OUTFLOW EVENT 1: Mary's UPENN Freshman Tuition.<br>
                            OUTFLOW EVENT 2: John's Brown University Sophomore Tuition.<br>
                            OUTFLOW EVENT 3: Targeted Retirement Transition Window (Loss of Active Salary).</p>
                        <div class="border-bottom-E9E7DD-24">

                        </div>
                        <p class="f-14 lh-16 white-50">System Flag: Liquid capital buffer drops below ideal thresholds.</p>
                    </div>

                    <div class="card d-flex gap-16 flex-col border-E9E7DD-15 bg-060F13 br-12 p-20">
                        <div class="card-head d-flex align-center justify-space-between gap-10">
                            <h3 class="f-18 lh-20 white">2031</h3>
                            <span class="badge yellow f-11 lh-12">STRATEGIC ASSET DEPLOYMENT</span>
                        </div>
                        <p class="f-14 lh-20 white-80">
                            OUTFLOW EVENT: Florida Vacation Property Down Payment & Closing Fees.
                        </p>
                        <div class="border-bottom-E9E7DD-24">

                        </div>
                        <p class="f-14 lh-16 white-50">
                            Projected Capital Allocation: -$200,000
                        </p>
                    </div>
                </section>

            </div>


        </div>
    </div>
</div>

@endsection