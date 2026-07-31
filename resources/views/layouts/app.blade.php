<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
    ])
</head>

<body>

    @yield('content')
    <!-- ---------------- Bank search modal ---------------- -->
    <div class="modal-overlay" id="bankModalOverlay">
        <div class="bank-modal" role="dialog" aria-modal="true" aria-labelledby="bankModalTitle">

            <div class="bank-search-wrap">
                <div class="bank-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.5001 17.5001L13.8835 13.8835M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z" stroke="#356674" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <input type="text" id="bankSearchInput" placeholder="Search for your bank" autocomplete="off" />
                </div>
            </div>

            <div class="bank-popular-label" id="bankListLabel">Popular</div>
            <div class="bank-list" id="bankList">
                <div class="bank-inner">
                    <input type="checkbox" id="chase" name="chase" value="Chase">
                    <label for="chase">Chase</label>
                </div>
                <div class="bank-inner">
                    <input type="checkbox" id="boa" name="boa" value="BankOfAmerica">
                    <label for="boa">Bank of America</label>
                </div>
                <div class="bank-inner">
                    <input type="checkbox" id="rbc" name="rbc" value="RBC">
                    <label for="rbc">RBC</label>
                </div>
                <div class="bank-inner">
                    <input type="checkbox" id="jpmorgan" name="jpmorgan" value="JPMorgan">
                    <label for="jpmorgan">J.P. Morgan</label>
                </div>
                <div class="bank-inner">
                    <input type="checkbox" id="fidelity" name="fidelity" value="Fidelity">
                    <label for="fidelity">Fidelity</label>
                </div>
                <div class="bank-inner">
                    <input type="checkbox" id="charles" name="charles" value="CharlesSchwab">
                    <label for="charles">Charles Schwab</label>
                </div>
                <!-- <input type="submit" value="Submit"> -->
            </div>
        </div>
        <div class="bank-modal launch">
            <div class="connection-outer d-flex gap-24 justify-center flex-col align-center">
                <div class="connection-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                        <rect width="96" height="96" rx="48" fill="#23B05B" fill-opacity="0.101961" />
                        <path d="M48.6783 67.9022C56.9975 65.0021 63.9968 60.0019 63.9968 50.0016V36.0012C63.9968 35.4707 63.7861 34.962 63.4111 34.5869C63.036 34.2118 62.5274 34.0011 61.997 34.0011C57.9974 34.0011 53.0179 31.621 49.5182 28.5609C49.0946 28.1989 48.5556 28 47.9984 28C47.4412 28 46.9022 28.1989 46.4786 28.5609C42.9989 31.601 37.9994 34.0011 33.9998 34.0011C33.4694 34.0011 32.9608 34.2118 32.5857 34.5869C32.2107 34.962 32 35.4707 32 36.0012V50.0016C32 60.0019 38.9993 65.0021 47.3385 67.8822C47.7695 68.0428 48.2427 68.0498 48.6783 67.9022Z" stroke="#23B05B" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="d-flex gap-12 justify-center flex-col align-center">
                    <h3 class="f-24 clr-003049">
                        <b>Launching secure connection</b>
                    </h3>
                    <p class="f-16 clr-356674">
                        You’ll be redirected securely to connect your Chase account.
                    </p>
                </div>
                <div class="spinner d-flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M19.9985 6.66406V11.9978M25.5992 14.3985L29.4661 10.5316M27.9991 19.9985H33.3329M25.5992 25.5992L29.4661 29.4661M19.9985 27.9991V33.3329M10.5316 29.4661L14.3985 25.5992M6.66406 19.9985H11.9978M10.5316 10.5316L14.3985 14.3985" stroke="#356674" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="d-flex gap-8 justify-center align-center creds-locked">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4.66667 7.33642V4.66954C4.66667 3.78541 5.01786 2.9375 5.64298 2.31233C6.2681 1.68716 7.11595 1.33594 8 1.33594C8.88406 1.33594 9.7319 1.68716 10.357 2.31233C10.9821 2.9375 11.3333 3.78541 11.3333 4.66954V7.33642M3.33333 7.33642H12.6667C13.403 7.33642 14 7.93342 14 8.66986V13.3369C14 14.0733 13.403 14.6703 12.6667 14.6703H3.33333C2.59695 14.6703 2 14.0733 2 13.3369V8.66986C2 7.93342 2.59695 7.33642 3.33333 7.33642Z" stroke="#356674" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <p class="f-14">
                        Your credentials are never stored
                    </p>
                </div>
            </div>
        </div>

        <div class="bank-modal creds">
            <div class="d-flex gap-24 flex-col creds-inner">
                <div class="creds-header d-flex gap-10 justify-space-between align-center">
                    <div class="bank-logo">
                        <img src="{{ asset('images/chase.svg') }}" alt="bank logo">
                    </div>
                    <div class="d-flex gap-4 align-center">
                        <img src="{{ asset('images/verified.svg') }}" alt="verified icon">
                        <p class="f-12 clr-23B05B">Secure link</p>
                    </div>
                </div>
                <div class="d-flex gap-8 flex-col creds-locked">
                    <h3 class="f-24 clr-003049"><b>Enter your credentials</b></h3>
                    <p class="f-15">By entering your Chase credentials, you are giving us access to your account information.</p>
                </div>

                <div class="bank-form">
                    <div class="form-field d-flex flex-col gap-6 mb-20">
                        <label class="f-14 clr-356674" for=""><b>Email Id</b></label>
                        <input type="text" class="p-16 br-8 border-secondary-dark-20 f-14" placeholder="name@domain.com">
                    </div>
                    <div class="form-field d-flex flex-col gap-6 mb-24">
                        <label class="f-14 clr-356674" for=""><b>Password </b></label>
                        <div class="password-wrapper d-flex align-center">
                            <input type="password" class="p-16 br-8 border-secondary-dark-20 f-14" placeholder="Enter your password" id="password">
                            <span class="toggle-password" onclick="togglePassword('password', this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                    <line x1="1" y1="1" x2="23" y2="23"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex gap-20 align-center">
                        <a href="#" class="form-btn white f-15 bg-003049 w-100 center">Sign in</a>
                    </div>
                </div>
                <div class="d-flex gap-8 justify-center align-center creds-locked">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4.66667 7.33642V4.66954C4.66667 3.78541 5.01786 2.9375 5.64298 2.31233C6.2681 1.68716 7.11595 1.33594 8 1.33594C8.88406 1.33594 9.7319 1.68716 10.357 2.31233C10.9821 2.9375 11.3333 3.78541 11.3333 4.66954V7.33642M3.33333 7.33642H12.6667C13.403 7.33642 14 7.93342 14 8.66986V13.3369C14 14.0733 13.403 14.6703 12.6667 14.6703H3.33333C2.59695 14.6703 2 14.0733 2 13.3369V8.66986C2 7.93342 2.59695 7.33642 3.33333 7.33642Z" stroke="#356674" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <p class="f-14">
                        Your data is secured
                    </p>
                </div>
            </div>
        </div>


        <div class="bank-modal select-account">
            <div class="d-flex gap-28 flex-col creds-inner">
                <div class="creds-header d-flex gap-10 justify-space-between align-center">
                    <div class="bank-logo">
                        <img src="{{ asset('images/chase.svg') }}" alt="bank logo">
                    </div>
                </div>
                <div class="d-flex gap-8 flex-col creds-locked">
                    <h3 class="f-24 clr-003049"><b>Select Accounts</b></h3>
                    <p class="f-16">Choose the accounts you’d like to connect to Benjamins Money.</p>
                </div>

                <div class="d-flex gap-8 flex-col">
                    <h5 class="f-12 clr-356674 upperacse">
                        <b>DEPOSIT ACCOUNT</b>
                    </h5>
                    <div class="border-secondary-dark-20 p-20 account-list br-8">

                        <div class="act-list-inner d-flex gap-12 justify-space-between">
                            <div class="d-flex gap-12 align-center">
                                <input type="checkbox" id="checking" name="checking" value="checking">
                                <label for="checking" class="f-16 clr-356674">Total Checking (.....7845)</label>
                            </div>
                            <div class="values f-16 clr-356674">
                                <b>$123,900.00</b>
                            </div>
                        </div>

                        <div class="act-list-inner d-flex gap-12 justify-space-between">
                            <div class="d-flex gap-12 align-center">
                                <input type="checkbox" id="savings" name="savings" value="checking">
                                <label for="savings" class="f-16 clr-356674">Chase Savings (.....7845)</label>
                            </div>
                            <div class="values f-16 clr-356674">
                                <b>$123,900.00</b>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="d-flex gap-8 flex-col">
                    <h5 class="f-12 clr-356674 upperacse">
                        <b>CREDIT CARD</b>
                    </h5>
                    <div class="border-secondary-dark-20 p-20 account-list br-8">

                        <div class="act-list-inner d-flex gap-12 justify-space-between">
                            <div class="d-flex gap-12 align-center">
                                <input type="checkbox" id="rover" name="rover" value="checking">
                                <label for="rover" class="f-16 clr-356674">Platinum rover (.....7845)</label>
                            </div>
                            <div class="values f-16 clr-356674">
                                <b>$123,900.00</b>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex flex-col gap-16 justify-center w-100">
                    <a href="#" class="form-btn white f-16 bg-003049 w-100 center">Add</a>
                    <div class="d-flex gap-8 justify-center align-center creds-locked">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M4.66667 7.33642V4.66954C4.66667 3.78541 5.01786 2.9375 5.64298 2.31233C6.2681 1.68716 7.11595 1.33594 8 1.33594C8.88406 1.33594 9.7319 1.68716 10.357 2.31233C10.9821 2.9375 11.3333 3.78541 11.3333 4.66954V7.33642M3.33333 7.33642H12.6667C13.403 7.33642 14 7.93342 14 8.66986V13.3369C14 14.0733 13.403 14.6703 12.6667 14.6703H3.33333C2.59695 14.6703 2 14.0733 2 13.3369V8.66986C2 7.93342 2.59695 7.33642 3.33333 7.33642Z" stroke="#356674" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <p class="f-14">
                            Your data is secured
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="bank-modal act-cnt-success">
            <div class="d-flex gap-40 flex-col creds-inner">
                <div class="bank-logo d-flex gap-10 justify-center align-center center ">
                    <img class="w-180" src="{{ asset('images/Success-Illustration.svg') }}" alt="successful icon">
                </div>
                <h2 class="f-32 clr-003049 center succes-heading">
                    <b>Account successfully <br>connected!</b>
                </h2>
                <div class="d-flex gap-8 justify-center align-center creds-locked">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4.66667 7.33642V4.66954C4.66667 3.78541 5.01786 2.9375 5.64298 2.31233C6.2681 1.68716 7.11595 1.33594 8 1.33594C8.88406 1.33594 9.7319 1.68716 10.357 2.31233C10.9821 2.9375 11.3333 3.78541 11.3333 4.66954V7.33642M3.33333 7.33642H12.6667C13.403 7.33642 14 7.93342 14 8.66986V13.3369C14 14.0733 13.403 14.6703 12.6667 14.6703H3.33333C2.59695 14.6703 2 14.0733 2 13.3369V8.66986C2 7.93342 2.59695 7.33642 3.33333 7.33642Z" stroke="#356674" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <p class="f-14">
                        Your credentials are never stored
                    </p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>