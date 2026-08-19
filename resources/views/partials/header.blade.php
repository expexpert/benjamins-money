<div class="dashboard-header">
    <div class="user-info-left">
        <div class="top-bar">
            <h1 class="f-20">Good Morning, <b>{{ Auth::user()->name }}</b></h1>
            <div class="sync-time f-14">
                Updated 2 mins ago
            </div>
        </div>
        <div class="bottom-bar f-14">
            Tax Residency • Bethesda, MD
        </div>
    </div>
    <div class="user-info-right">
        <form class="search-form">
            <input id="search" type="text" placeholder="Search plans, accounts, documents..." class="f-14 lh-14">
            <button type="submit">
                <img src="{{ asset('images/search.svg') }}" alt="search icon">
            </button>
        </form>
        <div class="notification-outer">
            <img src="{{ asset('images/notification.svg') }}" alt="notification-icon">
            <div class="notification-count">
                <span class="f-10">3</span>
            </div>
        </div>
        <div class="profile">
            <div class="profile-img" id="profileToggle">
                <img src="{{ asset('images/user-image.png') }}" alt="User Profile">
            </div>

            <div class="profile-dropdown" id="profileDropdown">
                <ul>
                    @if(Auth::user()->isAdmin())
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="f-16">
                                Admin Panel
                                <span class="caret">
                                    <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                </span>
                            </a>
                        </li>
                    @endif
                    <li class="active">
                        <a href="#" class="f-16">
                            My Profile
                            <span class="caret">
                                <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-16">Advisor Team
                            <span class="caret">
                                <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-16">Documents
                            <span class="caret">
                                <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-16">Settings
                            <span class="caret">
                                <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-16">Security
                            <span class="caret">
                                <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                            </span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                            @csrf
                            <button type="submit" class="f-16 bg-transparent border-none w-100 d-flex align-center cursor-pointer">
                                Sign out
                                <span class="caret">
                                    <img src="{{ asset('images/caret.svg') }}" alt="caret icon">
                                </span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>