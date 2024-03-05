<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<header class="" id="header">

    <style>
        #header {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.5s ease;
        }

        #principal-collapsable {
            display: none;
            background-color: #092635;
            color: white;
            padding: 20px;
            width: 250px;
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
        }

        #collapse {
            z-index: 100;
        }

        .content-collapsable {
            margin-top: 80px;
            display: flex;
            flex-direction: column;
            padding:
        }

        #logout {
            border: 0;
        }

        #logout a {
            padding: 0;
            margin: 0;
        }

        .links-collapsable {
            display: flex;
            flex-direction: column;
        }

        .links-collapsable a {
            color: white;
            font-size: 20px;
            margin-top: 20px
        }

        .icons-collapsable {
            display: flex;
            height: 40px;
            justify-content: space-between;
            align-items: center;
        }

        .collapse-bars {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .bar {
            width: 20px;
            height: 3px;
            background-color: white;
            margin-bottom: 5px;
            transition: transform 0.3s ease;
        }

        .bar:last-child {
            margin-bottom: 0;
        }

        .open1 {
            transform: rotate(45deg) translate(6px, 5px);
        }

        .open2 {
            opacity: 0;
        }

        .open3 {
            transform: rotate(-45deg) translate(6px, -5px);
        }
    </style>


    <script>
        $(document).ready(function() {

            $('#collapse').click(function() {
                $('.bar:nth-child(1)').toggleClass('open1');
                $('.bar:nth-child(2)').toggleClass('open2');
                $('.bar:nth-child(3)').toggleClass('open3');
                console.log("iconos de las barras clickaos");
            });

            var isSidebarOpen = false;
            var sidebar = $('#principal-collapsable');

            //toggle la side bar cuando le haces click
            $('#collapse').click(function(event) {
                event.stopPropagation(); // prevenir que el evento se propague al resto
                console.log("hola me estan clickando hola");

                if (!isSidebarOpen) {
                    //animacion de slide de derecha a izquierda
                    sidebar.stop().css({
                        'right': '-250px',
                        'display': 'block'
                    }).animate({
                        'right': '0px'
                    }, 'slow');
                } else {
                    //de izquierda a derecha
                    sidebar.stop().animate({
                        'right': '-250px'
                    }, 'slow', function() {
                        sidebar.css('display',
                            'none'); //esconder la sidebar cuando la animacion acabe
                    });
                }

                isSidebarOpen = !isSidebarOpen; //toggle el estado de la sidebar
            });

            //Esconder la sidebar cuando le clickas fuera
            $(document).click(function(event) {
                if (isSidebarOpen && !$(event.target).closest('#principal-collapsable').length && !$(event
                        .target).is('#collapse')) {
                    sidebar.stop().animate({
                        'right': '-250px'
                    }, 'slow', function() {
                        sidebar.css('display', 'none');
                    });
                    isSidebarOpen = false;
                }
            });
        });
    </script>

    <nav>
        <div class="logo"><img src="{{ asset('img/logo_withtext.png') }}"></div>

        <div id="collapse">
            <div class="collapse-bars">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>

        <div class="links">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>

            <x-nav-link :href="route('groups.index')" :active="request()->routeIs('groups.index')">
                {{ __('Groups') }}
            </x-nav-link>

            @if (Auth::check() && (Auth::user()->hasRole('registered_user') || Auth::user()->hasRole('admin')))
                <x-nav-link :href="route('formations.index')" :active="request()->routeIs('formations.index')">
                    {{ __('Formations') }}
                </x-nav-link>

                <x-nav-link :href="route('professors.index')" :active="request()->routeIs('professors.index')">
                    {{ __('Professors') }}
                </x-nav-link>

                <x-nav-link :href="route('subjects.index')" :active="request()->routeIs('subjects.index')">
                    {{ __('Subjects') }}
                </x-nav-link>

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


    <div class="header_info" id="principal-collapsable">
        <div class="content-collapsable">


            <div class="icons-collapsable">

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


            <div class="links-collapsable">

                @if (Auth::check())
                    <div id="profile">
                        <div class="profile_name">{{ Auth::user()->name }}</div>
                    </div>
                @endif

                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>

                @if (Auth::check() && Auth::user()->hasRole('admin'))
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
            </div>

        </div>




    </div>
</header>
