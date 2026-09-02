@extends('layouts.app')

@section('title','Networth Liabilitites')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Dashboard
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/networth') }}">
            Net Worth
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Assets
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
        <h2 class="f-16 lh-18 white-80 mb-16">
            Total Liabilities
        </h2>
        <div class="d-grid gap-24 col-2-1 align-flex-start">
            <div class="d-flex flex-col gap-32 w-100">
                <div class="d-flex flex-col gap-16 w-100">
                    <div class="bg-0B1417 br-16 border-E9E7DD-24 p-32-24 d-flex justify-space-between align-end">
                        <div class="left">
                            <p class="f-13 lh-14 clr-99ACB6 mb-8 uppercase">
                                Consolidated Debt Outstanding
                            </p>
                            <h3 class="f-38 lh-40 white bold">
                                $5,550,018
                            </h3>
                        </div>
                        <div class="right">
                            <p class="f-13 lh-14 neutral-300 mb-4">
                                Updated 2 mins ago
                            </p>
                            <p class="f-18 lh-18 clr-A7DFBD">
                                -$223,000 vs last month
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-20 flex-col">
                    <h2 class="f-16 lh-18 white-80">
                        Liability Breakdown
                    </h2>

                    <div class="d-flex flex-col gap-24">

                        <div class="risk-card bg-0B1417 br-12 border-E9E7DD-24 p-32-24">
                            <div class="risk-card-header d-flex align-center gap-10 justify-space-between">
                                <div>
                                    <div class="risk-title f-16 lh-18 white d-flex align-center gap-8 mb-8">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                            <path d="M8 0.599609C8.17979 0.599609 8.35537 0.646547 8.50879 0.733398C8.66203 0.820212 8.78688 0.943877 8.87207 1.08984L8.87402 1.0918L15.2686 11.9727L15.2695 11.9746C15.3552 12.1188 15.4003 12.2812 15.4004 12.4453C15.4004 12.6094 15.356 12.7718 15.2705 12.916C15.1849 13.0604 15.0597 13.1828 14.9072 13.2686C14.7548 13.3542 14.5806 13.4002 14.4023 13.4004H1.60742C1.42828 13.4019 1.25251 13.3565 1.09863 13.2715C0.944895 13.1864 0.819179 13.0645 0.732422 12.9199C0.645721 12.7754 0.599985 12.6121 0.599609 12.4473C0.599318 12.2825 0.644485 12.1194 0.730469 11.9746L0.731445 11.9727L7.12598 1.0918L7.12793 1.08984C7.21312 0.94387 7.33797 0.820216 7.49121 0.733398C7.64464 0.646539 7.8202 0.599612 8 0.599609ZM8.00781 4.67383L7.40723 4.6748L7.41602 10.8916L8.00781 10.8906V11.4912H8.61621L8.61523 10.8906L8.60742 4.67285L8.00781 4.67383Z" stroke="#F58F8C" stroke-width="1.2" />
                                        </svg> -->
                                        Mortgage Financing
                                    </div>
                                    <p class="f-14 lh-16 neutral-300">Primary and investment property financing</p>
                                </div>

                                <div class="d-flex gap-16 ">
                                    <p class="f-16 lh-18 white bold">
                                        $3,200,000
                                    </p>
                                    <p class="f-16 lh-18 white">
                                        4%
                                    </p>
                                    <span class="risk-card-arrow w-15">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="risk-card-content pt-24" style="display: none;">
                                <div class="d-flex flex-col">
                                    <div class="d-grid col-lg-5 gap-10 mb-10 align-center">
                                        <div>
                                            <p class="f-13 lh-15 uppercase clr-99ACB6">
                                                ASSET NAME
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CURRENT VALUE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                COST BASIS
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CHANGE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase right">
                                                % OF TOTAL
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Vested Shares
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $9,200,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $2,100,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$7,100,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                19.0%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Unvested RSUs / Options
                                            </p>
                                            <p class="f-12 lh-15 white">
                                                Restriction: 10b5-1 Plan / Blackout until 09/2025
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $2,150,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $340,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$1,810,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                5.0%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Subtotal Company Stock (XYZ Corp)
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $11,350,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $2,440,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$8,910,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                24.0%
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="risk-card bg-0B1417 br-12 border-E9E7DD-24 p-32-24">
                            <div class="risk-card-header d-flex align-center gap-10 justify-space-between">
                                <div>
                                    <div class="risk-title f-16 lh-18 white d-flex align-center gap-8 mb-8">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                            <path d="M8 0.599609C8.17979 0.599609 8.35537 0.646547 8.50879 0.733398C8.66203 0.820212 8.78688 0.943877 8.87207 1.08984L8.87402 1.0918L15.2686 11.9727L15.2695 11.9746C15.3552 12.1188 15.4003 12.2812 15.4004 12.4453C15.4004 12.6094 15.356 12.7718 15.2705 12.916C15.1849 13.0604 15.0597 13.1828 14.9072 13.2686C14.7548 13.3542 14.5806 13.4002 14.4023 13.4004H1.60742C1.42828 13.4019 1.25251 13.3565 1.09863 13.2715C0.944895 13.1864 0.819179 13.0645 0.732422 12.9199C0.645721 12.7754 0.599985 12.6121 0.599609 12.4473C0.599318 12.2825 0.644485 12.1194 0.730469 11.9746L0.731445 11.9727L7.12598 1.0918L7.12793 1.08984C7.21312 0.94387 7.33797 0.820216 7.49121 0.733398C7.64464 0.646539 7.8202 0.599612 8 0.599609ZM8.00781 4.67383L7.40723 4.6748L7.41602 10.8916L8.00781 10.8906V11.4912H8.61621L8.61523 10.8906L8.60742 4.67285L8.00781 4.67383Z" stroke="#F58F8C" stroke-width="1.2" />
                                        </svg> -->
                                        Securities-Based Lending
                                    </div>
                                    <p class="f-14 lh-16 neutral-300">Liquidity buffers backed by asset portfolios</p>
                                </div>

                                <div class="d-flex gap-16 ">
                                    <p class="f-16 lh-18 clr-red-300 bold">
                                        $3,000,000
                                    </p>
                                    <p class="f-16 lh-18 clr-red-300">
                                        32%
                                    </p>
                                    <span class="risk-card-arrow w-15">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="risk-card-content pt-24" style="display: none;">
                                <div class="d-flex flex-col">
                                    <div class="d-grid col-lg-5 gap-10 mb-10 align-center">
                                        <div>
                                            <p class="f-13 lh-15 uppercase clr-99ACB6">
                                                LIABILITY NAME
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CURRENT VALUE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CREDIT LIMIT
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CHANGE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase right">
                                                % OF TOTAL
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                SBLOC (Collateralized by XYZ Corp Stock)
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $2,500,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $2,500,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                $0
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                27%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Margin Loan - Brokerage
                                            </p>
                                            <!-- <p class="f-12 lh-15 white">
                                                Restriction: 10b5-1 Plan / Blackout until 09/2025
                                            </p> -->
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $500,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $500,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                $0
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                5%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Subtotal Securities Lending
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $3,000,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $3,000,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                $0
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                32%
                                            </p>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>

                        <div class="risk-card bg-0B1417 br-12 border-E9E7DD-24 p-32-24">
                            <div class="risk-card-header d-flex align-center gap-10 justify-space-between">
                                <div>
                                    <div class="risk-title f-16 lh-18 white d-flex align-center gap-8 mb-8">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                            <path d="M8 0.599609C8.17979 0.599609 8.35537 0.646547 8.50879 0.733398C8.66203 0.820212 8.78688 0.943877 8.87207 1.08984L8.87402 1.0918L15.2686 11.9727L15.2695 11.9746C15.3552 12.1188 15.4003 12.2812 15.4004 12.4453C15.4004 12.6094 15.356 12.7718 15.2705 12.916C15.1849 13.0604 15.0597 13.1828 14.9072 13.2686C14.7548 13.3542 14.5806 13.4002 14.4023 13.4004H1.60742C1.42828 13.4019 1.25251 13.3565 1.09863 13.2715C0.944895 13.1864 0.819179 13.0645 0.732422 12.9199C0.645721 12.7754 0.599985 12.6121 0.599609 12.4473C0.599318 12.2825 0.644485 12.1194 0.730469 11.9746L0.731445 11.9727L7.12598 1.0918L7.12793 1.08984C7.21312 0.94387 7.33797 0.820216 7.49121 0.733398C7.64464 0.646539 7.8202 0.599612 8 0.599609ZM8.00781 4.67383L7.40723 4.6748L7.41602 10.8916L8.00781 10.8906V11.4912H8.61621L8.61523 10.8906L8.60742 4.67285L8.00781 4.67383Z" stroke="#F58F8C" stroke-width="1.2" />
                                        </svg> -->
                                        Credit Facilities
                                    </div>
                                    <p class="f-14 lh-16 neutral-300">Corporate and customized capital limits</p>
                                </div>

                                <div class="d-flex gap-16 ">
                                    <p class="f-16 lh-18 white bold">
                                        $775,018
                                    </p>
                                    <p class="f-16 lh-18 white">
                                        1.4%
                                    </p>
                                    <span class="risk-card-arrow w-15">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="risk-card-content pt-24" style="display: none;">
                                <div class="d-flex flex-col">
                                    <div class="d-grid col-lg-5 gap-10 mb-10 align-center">
                                        <div>
                                            <p class="f-13 lh-15 uppercase clr-99ACB6">
                                                ASSET NAME
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CURRENT VALUE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                COST BASIS
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CHANGE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase right">
                                                % OF TOTAL
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                US Large Cap Equities
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $6,500,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $5,200,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$1,300,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                17.2%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                International Equities
                                            </p>
                                            <!-- <p class="f-12 lh-15 white">
                                                $4,200,000
                                            </p> -->
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $4,200,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $3,800,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$400,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                11.1%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Fixed Income (Bonds)
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $3,000,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $3,000,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                $0
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                7.9%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Private Equity / Alternatives
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $2,550,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $2,000,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$550,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                6.8%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Subtotal Diversified Investments
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $16,250,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $13,000,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$3,250,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                34.0%
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="risk-card bg-0B1417 br-12 border-E9E7DD-24 p-32-24">
                            <div class="risk-card-header d-flex align-center gap-10 justify-space-between">
                                <div>
                                    <div class="risk-title f-16 lh-18 white d-flex align-center gap-8 mb-8">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                            <path d="M8 0.599609C8.17979 0.599609 8.35537 0.646547 8.50879 0.733398C8.66203 0.820212 8.78688 0.943877 8.87207 1.08984L8.87402 1.0918L15.2686 11.9727L15.2695 11.9746C15.3552 12.1188 15.4003 12.2812 15.4004 12.4453C15.4004 12.6094 15.356 12.7718 15.2705 12.916C15.1849 13.0604 15.0597 13.1828 14.9072 13.2686C14.7548 13.3542 14.5806 13.4002 14.4023 13.4004H1.60742C1.42828 13.4019 1.25251 13.3565 1.09863 13.2715C0.944895 13.1864 0.819179 13.0645 0.732422 12.9199C0.645721 12.7754 0.599985 12.6121 0.599609 12.4473C0.599318 12.2825 0.644485 12.1194 0.730469 11.9746L0.731445 11.9727L7.12598 1.0918L7.12793 1.08984C7.21312 0.94387 7.33797 0.820216 7.49121 0.733398C7.64464 0.646539 7.8202 0.599612 8 0.599609ZM8.00781 4.67383L7.40723 4.6748L7.41602 10.8916L8.00781 10.8906V11.4912H8.61621L8.61523 10.8906L8.60742 4.67285L8.00781 4.67383Z" stroke="#F58F8C" stroke-width="1.2" />
                                        </svg> -->
                                        Other Liabilities
                                    </div>
                                    <p class="f-14 lh-16 neutral-300">Deferred taxes and personal policy loans</p>
                                </div>

                                <div class="d-flex gap-16 ">
                                    <p class="f-16 lh-18 white bold">
                                        $300,000
                                    </p>
                                    <p class="f-16 lh-18 white">
                                        6.1%
                                    </p>
                                    <span class="risk-card-arrow w-15">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M2.5 9.375L7.5 4.375L12.5 9.375" stroke="#DADADA" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="risk-card-content pt-24" style="display: none;">
                                <div class="d-flex flex-col">
                                    <div class="d-grid col-lg-5 gap-10 mb-10 align-center">
                                        <div>
                                            <p class="f-13 lh-15 uppercase clr-99ACB6">
                                                ASSET NAME
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CURRENT VALUE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                COST BASIS
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase center">
                                                CHANGE
                                            </p>

                                        </div>
                                        <div>
                                            <p class="f-13 lh-15 clr-99ACB6 uppercase right">
                                                % OF TOTAL
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                US Large Cap Equities
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $6,500,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $5,200,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$1,300,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                17.2%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                International Equities
                                            </p>
                                            <!-- <p class="f-12 lh-15 white">
                                                $4,200,000
                                            </p> -->
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $4,200,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $3,800,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$400,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                11.1%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Fixed Income (Bonds)
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $3,000,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $3,000,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                $0
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                7.9%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Private Equity / Alternatives
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $2,550,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $2,000,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$550,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                6.8%
                                            </p>
                                        </div>
                                    </div>

                                    <div class="border-bottom-1D2C35 mb-12"></div>

                                    <div class="d-grid col-lg-5 gap-10 mb-12 align-center">
                                        <div>
                                            <p class="f-14 lh-16 white">
                                                Subtotal Diversified Investments
                                            </p>
                                        </div>
                                        <div>
                                            <p class="f-14 lh-16 white center">
                                                $16,250,000
                                            </p>

                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 white">
                                                $13,000,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-center ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                +$3,250,000
                                            </p>
                                        </div>
                                        <div class="d-flex gap-8 align-center justify-end ">

                                            <p class="f-14 lh-16 clr-A7DFBD">
                                                34.0%
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                     

                    </div>

                </div>
            </div>
            <div class="d-flex gap-16 flex-col bg-0B1417 border-E9E7DD-24 p-20 br-16">
                <div class="d-flex gap-8 align-center">
                    <h2 class="f-16 lh-18 white">
                        Concentration Audit
                    </h2>
                    <span class="bg-FCA5A5 br-4 p-2-8 uppercase clr-red-800 f-10 lh-12 bold">
                        HIGH
                    </span>
                </div>
                <div class="d-flex gap-5 flex-col">
                    <h3 class="f-13 lh-14 clr-99ACB6 uppercase">
                        Current Exposure (XYZ Corp)
                    </h3>
                    <p class="f-16 lh-18 clr-FCA5A5">
                        24.0%
                    </p>
                    <p class="f-12 lh-14 neutral-300">
                        Against Consolidated Assets
                    </p>
                </div>

                <div class="d-flex gap-5 flex-col">
                    <h3 class="f-13 lh-14 clr-99ACB6 uppercase">
                        Recommended Threshold
                    </h3>
                    <p class="f-16 lh-18 clr-FCA5A5">
                        10.0% - 15.0%
                    </p>
                    <p class="f-12 lh-14 neutral-300">
                        Target risk limit for diversification
                    </p>
                </div>
                <div class="border-bottom-1D2C35">

                </div>
                <div class="d-flex flex-col gap-24">
                    <h3 class="f-13 lh-14 white">
                        Suggested Advisory Actions
                    </h3>
                    <div class="d-flex gap-8 align-center">
                        <span class="w-16 h-16">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M7.05516 14.099L-0.000843711 7.057L7.05516 0.000999212L14.0972 7.057L7.05516 14.099Z" fill="#A7DFBD" />
                            </svg>
                        </span>
                        <p class="f-13 lh-20 white">
                            Implement a 10b5-1 Trading Plan to schedule orderly liquidations post-blackout (Sept 2025).
                        </p>
                    </div>
                    <div class="d-flex gap-8 align-center">
                        <span class="w-16 h-16">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M7.05516 14.099L-0.000843711 7.057L7.05516 0.000999212L14.0972 7.057L7.05516 14.099Z" fill="#A7DFBD" />
                            </svg>
                        </span>
                        <p class="f-13 lh-20 white">
                            Collateral Swap Review to transition SBLOC collateral away from XYZ Corp to diversified pools.
                        </p>
                    </div>
                    <div class="d-flex gap-8 align-center">
                        <span class="w-16 h-16">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M7.05516 14.099L-0.000843711 7.057L7.05516 0.000999212L14.0972 7.057L7.05516 14.099Z" fill="#A7DFBD" />
                            </svg>
                        </span>
                        <p class="f-13 lh-20 white">
                            Hedging & Collar Strategies using equity derivatives to mitigate downside during restricted windows.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection