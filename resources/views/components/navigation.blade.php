<header class="" id="header">
    <nav>
        <div class="logo"><img src="{{ asset('img/logo_withtext.png') }}"></div>

        <div id="collapse">
            ≡
        </div>

        <div class="links">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>

            @if(Auth::check() && Auth::user()->hasRole('admin'))
                <x-nav-link :href="route('formations.index')" :active="request()->routeIs('formations.index')">
                    {{ __('Formations') }}
                </x-nav-link>

                <x-nav-link :href="route('professors.index')" :active="request()->routeIs('professors.index')">
                    {{ __('Professors') }}
                </x-nav-link>

                <x-nav-link :href="route('subjects.index')" :active="request()->routeIs('subjects.index')">
                    {{ __('Subjects') }}
                </x-nav-link>
            @endif

            <x-nav-link :href="route('groups.index')" :active="request()->routeIs('groups.index')">
                {{ __('Groups') }}
            </x-nav-link>

            @if(Auth::check() && Auth::user()->hasRole('registered_user'))
                <x-nav-link :href="route('lectures.index')" :active="request()->routeIs('lectures.index')">
                    {{ __('Lectures') }}
                </x-nav-link>
            @endif

            <div class="header_info" id="mobile">
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
        </div>
    </nav>
    <div class="header_info" id="principal">
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
</header>