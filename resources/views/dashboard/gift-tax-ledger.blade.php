@extends('layouts.app')

@section('title', 'Gift Tax Ledger')

@section('content')

<div class="heading-bar d-flex justify-space-between align-center">
    <div class="breadcrumb d-flex gap-8">
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Estate & Legacy
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a class="d-flex gap-8 f-16 lh-18 neutral-300" href="{{ url('/') }}">
            Generational Asset Protection
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.9987 2.66406L11.332 7.9974L5.9987 13.3307" stroke="#E9E7DD" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="f-16 lh-18 white">
            Gift Tax Ledger
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
            <div class="d-flex gap-16 flex-col w-100">
                <div class="d-flex flex-col gap-8">
                    <h3 class="f-18 lh-20 white">
                        Lifetime Gift Tax Summary
                    </h3>
                    <p class="f-14 lh-15 clr-8C8B85">
                        Overview of cumulative transfers, remaining unified credit, and historical progress.
                    </p>
                </div>
                <div class="d-grid gap-20 col-lg-3">
                    <div class="p-24 bg-0C1215 border-E9E7DD-15 br-12 d-flex gap-16 flex-col">
                        <div class="d-flex gap-10 align-center justify-space-between">
                            <p class="f-14 lh-16 clr-8C8B85">
                                Lifetime Gift Tax Exemption
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M10.6553 2.27246C11.5057 1.8884 12.4806 1.8884 13.3311 2.27246L18.668 4.68262C19.8319 5.20841 20.5801 6.36734 20.5801 7.64453V14.6094C20.58 15.6106 20.1185 16.556 19.3291 17.1719L13.9922 21.335C12.8172 22.2515 11.1692 22.2515 9.99414 21.335L4.65723 17.1719C3.86777 16.556 3.40629 15.6106 3.40625 14.6094V7.64453C3.40627 6.36729 4.15436 5.20838 5.31836 4.68262L10.6553 2.27246Z" stroke="black" stroke-width="1.5" />
                                <path d="M16.3713 10.5973L7.60938 10.5973M9.27831 14.9783H14.7023C15.6241 14.9783 16.3713 14.1937 16.3713 13.2259V9.72113C16.3713 8.75332 15.6241 7.96875 14.7023 7.96875H9.27831C8.35658 7.96875 7.60938 8.75332 7.60938 9.72113V13.2259C7.60938 14.1937 8.35658 14.9783 9.27831 14.9783Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </div>
                        <h3 class="f-32 lh-36 white">
                            $13,610,000
                        </h3>
                        <div class="d-grid col-2-1 align-center gap-8">
                            <div class="progress">
                                <div class="progress-bar bg-108476" style="width:50%;"></div>
                            </div>
                            <p class="f-12 lh-14 clr-8C8B85">
                                2026 Federal Limit
                            </p>
                        </div>
                    </div>

                    <div class="p-24 bg-0C1215 border-E9E7DD-15 br-12 d-flex gap-16 flex-col">
                        <div class="d-flex gap-10 align-center justify-space-between">
                            <p class="f-14 lh-16 clr-8C8B85">
                                Total Gifts Made to Date
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.50001 10.5C10.0523 10.5 10.5 10.0523 10.5 9.50001C10.5 8.94773 10.0523 8.5 9.50001 8.5C8.94773 8.5 8.5 8.94773 8.5 9.50001C8.5 10.0523 8.94773 10.5 9.50001 10.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.5 15.5C15.0523 15.5 15.5 15.0523 15.5 14.5C15.5 13.9477 15.0523 13.5 14.5 13.5C13.9477 13.5 13.5 13.9477 13.5 14.5C13.5 15.0523 13.9477 15.5 14.5 15.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 9L9 15" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M2 7C2 4.23858 4.23858 2 7 2H17C19.7614 2 22 4.23858 22 7V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V7Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </div>
                        <h3 class="f-32 lh-36 clr-23B05B">
                            $4,850,000
                        </h3>
                        <div class="d-grid">
                            <!-- <div class="progress">
                                <div class="progress-bar bg-108476" style="width:50%;"></div>
                            </div> -->
                            <p class="f-12 lh-14 clr-8C8B85">
                                Cumulative reported via Form 709 filings
                            </p>
                        </div>
                    </div>

                    <div class="p-24 bg-0C1215 border-E9E7DD-15 br-12 d-flex gap-16 flex-col">
                        <div class="d-flex gap-10 align-center justify-space-between">
                            <p class="f-14 lh-16 clr-8C8B85">
                                Remaining Exemption Balance
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="black" stroke-width="1.5" />
                                <path d="M9.50001 10.5C10.0523 10.5 10.5 10.0523 10.5 9.50001C10.5 8.94773 10.0523 8.5 9.50001 8.5C8.94773 8.5 8.5 8.94773 8.5 9.50001C8.5 10.0523 8.94773 10.5 9.50001 10.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.5 15.5C15.0523 15.5 15.5 15.0523 15.5 14.5C15.5 13.9477 15.0523 13.5 14.5 13.5C13.9477 13.5 13.5 13.9477 13.5 14.5C13.5 15.0523 13.9477 15.5 14.5 15.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 9L9 15" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="f-32 lh-36 clr-33AAFF">
                            $8,760,000
                        </h3>
                        <div class="d-grid col-2-1 align-center gap-8">
                            <div class="progress">
                                <div class="progress-bar bg-33AAFF" style="width:50%;"></div>
                            </div>
                            <p class="f-12 lh-14 clr-8C8B85">
                                64.4% remaining
                            </p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="d-flex gap-8 flex-col">
                <h3 class="f-18 lh-20 white">
                    Annual Gift Tax Activity Ledger
                </h3>
                <p class="f-14 lh-16 clr-8C8B85 mb-8">
                    Detailed registry of historical wealth transfers and corresponding annual tax exclusions.
                </p>
                <div class="tablecontainer table-bordered gift-table">
                    <table>
                        <tbody>
                            <tr>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 text-left font-400 bg-10191D brt-12">Date</th>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 text-left font-400 bg-10191D">Recipient / Trust</th>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 text-left font-400 bg-10191D">Gift Type</th>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 right font-400 bg-10191D">Fair Market Value</th>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 text-left font-400 bg-10191D">Annual Exclusion</th>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 text-left font-400 bg-10191D">Taxable Amount</th>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 text-left font-400 bg-10191D">Cumulative Used</th>
                                <th class="f-12 lh-14 uppercase clr-8C8B85 right font-400 bg-10191D brb-12">Form 709 Status</th>
                            </tr>
                            <tr>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        Mar 15 2024
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white bold">
                                        Smith Dynasty GST Trust
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        Cash Transfer
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white ">
                                        $500,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        $18,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $482,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $3,200,000
                                    </div>
                                </td>
                                <td class="p-20-16 center">
                                    <div class="f-12 lh-12 clr-10B981 bold p-4-10 br-6 bg-108476-12 d-inline-flex justify-center border-10B981-20 uppercase">
                                        Filed
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        Jun 1 2024
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white bold">
                                        John Smith 2024 ILIT
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        Crummey Gift (Premium)
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white ">
                                        $35,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        $18,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $17,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $3,217,000
                                    </div>
                                </td>
                                <td class="p-20-16 center">
                                    <div class="f-12 lh-12 clr-10B981 bold p-4-10 br-6 bg-108476-12 border-10B981-20 d-inline-flex justify-center uppercase">
                                        Filed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        Dec 20 2024
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white bold">
                                        Child 1 Direct
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        Cash Gift
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white ">
                                        $18,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        $18,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $0
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $3,217,000
                                    </div>
                                </td>
                                <td class="p-20-16 center">
                                    <div class="f-12 lh-12 clr-8C8B85 bold p-4-10 br-6 bg-E9E7DD-5 border-E9E7DD-12 d-inline-flex justify-center uppercase">
                                        Excluded (Annual)
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        Dec 20 2024
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white bold">
                                        Child 2 Direct
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        Cash Gift
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white ">
                                        $18,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        $18,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $0
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $3,217,000
                                    </div>
                                </td>
                                <td class="p-20-16 center">
                                    <div class="f-12 lh-12 clr-8C8B85 bold p-4-10 br-6 bg-E9E7DD-5 border-E9E7DD-12 d-inline-flex justify-center uppercase">
                                        Excluded (Annual)
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        Feb 10 2025
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white bold">
                                        Smith Asset GRAT
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        GRAT Remainder Interest
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white ">
                                        $1,200,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        $0
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $1,200,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $4,417,000
                                    </div>
                                </td>
                                <td class="p-20-16 center">
                                    <div class="f-12 lh-12 clr-10B981 bold p-4-10 br-6 bg-108476-12 border-10B981-20 d-inline-flex justify-center uppercase">
                                        Filed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        Jul 1 2025
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white bold">
                                        ILIT Annual Premium
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        Crummey Gift
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white ">
                                        $35,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        $18,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $17,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $4,434,000
                                    </div>
                                </td>
                                <td class="p-20-16 center">
                                    <div class="f-12 lh-12 clr-F5A623 bold p-4-10 br-6 bg-F5A623-12 border-F5A623-20 d-inline-flex justify-center uppercase">
                                        Pending
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        Aug 15 2025
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white bold">
                                        Dynasty Trust Seed
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        Marketable Securities
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white ">
                                        $416,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 clr-8C8B85 ">
                                        $0
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $416,000
                                    </div>
                                </td>
                                <td class="p-20-16">
                                    <div class="f-14 lh-18 white">
                                        $4,850,000
                                    </div>
                                </td>
                                <td class="p-20-16 center">
                                    <div class="f-12 lh-12 clr-F5A623 bold p-4-10 br-6 bg-F5A623-12 border-F5A623-20 d-inline-flex justify-center uppercase">
                                        Pending
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="d-flex gap-8 flex-col">
                <h3 class="f-18 lh-20 white">
                    Annual Gift Tax Activity Ledger
                </h3>
                <p class="f-14 lh-16 clr-8C8B85 mb-8">
                    Detailed registry of historical wealth transfers and corresponding annual tax exclusions.
                </p>
                <div class="d-grid gap-20 col-lg-2">
                    <div class="p-24 bg-0C1215 br-12 d-flex gap-20 flex-col border-E9E7DD-15">
                        <h2 class="f-16 lh-18 white">
                            GST Exemption Utilization
                        </h2>
                        <div class="d-flex flex-col gap-12">
                            <div class="d-flex gap-10 justify-space-between">
                                <p class="f-14 lh-16 clr-8C8B85">
                                    GST Lifetime Exemption
                                </p>
                                <p class="f-14 lh-16 white">
                                    $13,610,000
                                </p>
                            </div>
                            <div class="d-flex gap-10 justify-space-between">
                                <p class="f-14 lh-16 clr-8C8B85">
                                    GST Allocated to Date
                                </p>
                                <p class="f-14 lh-16 clr-23B05B">
                                    $2,116,000
                                </p>
                            </div>
                            <div class="d-flex gap-10 justify-space-between">
                                <p class="f-14 lh-16 clr-8C8B85">
                                    Remaining GST Exemption
                                </p>
                                <p class="f-14 lh-16 clr-33AAFF">
                                    $11,494,000
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-8 flex-col">
                            <div class="progress">
                                <div class="progress-bar bg-23B05B" style="width:15%;"></div>
                            </div>
                            <p class="f-12 lh-14 clr-8C8B85">
                                15.5% Allocated • GST allocation is currently fully optimized — all dynasty trust transfers have been properly allocated.
                            </p>
                        </div>
                    </div>

                    <div class="p-24 bg-0C1215 br-12 d-flex gap-20 flex-col border-E9E7DD-15">
                        <h2 class="f-16 lh-18 white">
                            Generation-Skipping Transfer Map
                        </h2>
                        <div class="d-flex flex-col gap-12">
                            <div class="d-flex gap-10 justify-space-between bg-10191D p-12 br-8">
                                <div class="d-flex gap-12 align-center">
                                    <div class="w-8 h-8 bg-23B05B br-100">

                                    </div>
                                    <p class="f-14 lh-16 white">
                                        GST Lifetime Exemption
                                    </p>
                                </div>
                                <p class="f-14 lh-16 white">
                                    $500,000
                                </p>
                            </div>
                            <div class="d-flex gap-10 justify-space-between bg-10191D p-12 br-8">
                                <div class="d-flex gap-12 align-center">
                                    <div class="w-8 h-8 bg-23B05B br-100">

                                    </div>
                                    <p class="f-14 lh-16 white">
                                        GRAT Remainder
                                    </p>
                                </div>
                                <p class="f-14 lh-16 white">
                                    $1,200,000
                                </p>
                            </div>
                            <div class="d-flex gap-10 justify-space-between bg-10191D p-12 br-8">
                                <div class="d-flex gap-12 align-center">
                                    <div class="w-8 h-8 bg-23B05B br-100">

                                    </div>
                                    <p class="f-14 lh-16 white">
                                        Dynasty Trust Seed
                                    </p>
                                </div>
                                <p class="f-14 lh-16 white">
                                    $416,000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-F5A623-5 border-F5A623 br-12 p-32 d-grid col-08-1 gap-48 align-center">
                <div class="d-flex gap-24 align-center">
                    <div class="w-48 h-48 br-100 bg-F5A623-10 d-flex align-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 8.99805V12.998M12 16.998H12.01M21.7304 17.9983L13.7304 3.99827C13.556 3.69048 13.303 3.43446 12.9973 3.25634C12.6917 3.07822 12.3442 2.98437 11.9904 2.98438C11.6366 2.98437 11.2892 3.07822 10.9835 3.25634C10.6778 3.43446 10.4249 3.69048 10.2504 3.99827L2.25042 17.9983C2.0741 18.3036 1.98165 18.6502 1.98243 19.0028C1.98321 19.3554 2.0772 19.7015 2.25486 20.0061C2.43253 20.3107 2.68757 20.5629 2.99411 20.7371C3.30066 20.9113 3.64783 21.0014 4.00042 20.9983H20.0004C20.3513 20.9979 20.6959 20.9052 20.9997 20.7296C21.3035 20.5539 21.5556 20.3014 21.7309 19.9974C21.9062 19.6934 21.9985 19.3487 21.9984 18.9978C21.9983 18.6469 21.9059 18.3022 21.7304 17.9983Z" stroke="#F5A623" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="d-flex flex-col gap-8 flex-1">
                        <h2 class="f-18 lh-20 clr-F5A623">
                            2026 TCJA Sunset Warning
                        </h2>
                        <p class="f-14 lh-22 white">
                            The current $13.61M lifetime exemption is scheduled to revert to approximately $7M on January 1, 2026 under sunset provisions. Based on your current $8.76M remaining balance, you have capacity to accelerate $1.76M in additional gifts before the exemption reduction takes effect.
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-16 justify-end">
                    <a href="#" class="f-14 bg-108476 white p-12-20 br-100px d-flex justify-center align-center center">Model Accelerated Gifting Strategy</a>
                    <a href="#" class="f-14 white p-12-20 br-100px d-flex justify-center align-center border-white center">Schedule Estate Attorney Review</a>
                </div>
            </div>

            <div class="border-bottom-E9E7DD-15 w-100">

            </div>

            <div class="d-grid col-1-2 justify-center align-center gap-10  w-100">
                <a href="#" class="f-14 white p-12-16 br-100px d-inline-flex justify-center align-center border-white center w-auto m-fit-content">Back to Estate & Legacy</a>
                <div class="d-flex gap-16 align-center justify-end w-100">
                    <a href="#" class="f-14 clr-108476 p-12-20 br-100px d-flex justify-center align-center border-108476 center">Sync with Tax Professional</a>
                    <a href="#" class="f-14 bg-108476 white p-12-20 br-100px d-flex justify-center align-center center">Export Full Gift Tax Ledger (PDF)</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection