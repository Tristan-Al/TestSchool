<nav>
    <div class="logo"><img src="{{ asset('img/logo_withtext.png') }}"></div>
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
</nav>
<div class="header_info">
    <span>IES Zaidin Vergeles</span>
    <div id="search"><img src="{{ asset('assets/search.png') }}"></div>
    @auth
        <div id="logout">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <img src="{{ asset('assets/logout.png') }}">
                </x-dropdown-link>
            </form>
        </div>
        <div id="profile">
            <div class="profile_picture"></div>
            <div class="profile_name">{{ Auth::user()->name }}</div>
        </div>
    @endauth
    @guest
        <div id="login">
            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Log in') }}
            </x-nav-link>
        </div>
        <div id="register">
            <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                {{ __('Register') }}
            </x-nav-link>
        </div>
    @endguest
</div>