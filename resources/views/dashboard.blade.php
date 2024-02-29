<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link href="{{ asset('table.css') }}" rel="stylesheet" />
    </head>
    <body>
        <header>
            <nav>
                <div class="logo"><img src="{{ asset('img/logo_withtext.png') }}"></div>
                <a href="#">Dashboard</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
            </nav>
            <div class="header_info">
                <span>IES Zaidin Vergeles</span>
                <div id="search"><img src="{{ asset('assets/search.png') }}"></div>
                <div id="logout">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form><img src="{{ asset('assets/logout.png') }}">
                    </a>
                </div>
                <div id="profile">
                    <div class="profile_picture"></div>
                    <div class="profile_name">{{ $user->name }}</div>
                </div>
            </div>
        </header>
        <main>
            <!-- <div class="path">
                <a class="route">Dashboard</a>
                <div class="next_route">❱</div>
                <a class="route">My Modules</a>
                <div class="next_route">❱</div>
                <a class="route">Module</a>
            </div> -->
            <div class="titles">
                <h1>Dashboard</h1>
                @foreach($profesores as $profesor)
                    @if ($profesor->id == $user->id)
                        <h2><span>Welcome back, </span>{{ $profesor->name }} {{ $profesor->surname1 }} {{ $profesor->surname2 }} </h2>
                    @endif
                @endforeach
            </div>

            <div class="information">Formation Information: <select>
                @foreach($formations as $formation)
                    <option>{{ $formation->denomination }}</option>
                @endforeach
            </select></div>
            <!-- <div class="professor"><b>@yield('professor')Professor's</b> module</div> -->
            <div class="content"> <!-- Masonry??? -->
                <div class="content_logo"></div>
                @foreach($formations as $formation)
                    @php
                        $subjectCount = 0; // Variable contador para el número de materias
                    @endphp
                    <div class="formation">
                        <img src="{{ asset('img/logo_withouttext.png') }}">
                        <h4>{{ $formation->denomination }}</h4>
                        @foreach($subjects as $subject)
                            @if ($formation->id == $subject->formation_id)
                                @php 
                                    $subjectCount++; // Incrementar el contador si la materia pertenece a esta formación
                                @endphp
                            @endif
                        @endforeach

                        @if ($subjectCount == 1)
                            <p>{{ $subjectCount }} module</p>
                        @else
                            <p>{{ $subjectCount }} modules</p>
                        @endif

                        <div class="button">
                            <a href="{{ route('table.index', ['id' => $formation->id]) }}">
                                <div class="img">
                                    <img src="{{ asset('assets/arrow-right.png') }}">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </main>
        <footer>
            <div class="logo">
                <img src="{{ asset('img/logo_withtext.png') }}">
            </div>
            <div class="columns">
                <div class="column">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#">Back to Homepage</a>
                </div>
                <div class="column">
                    <h3>Location</h3>
                    <p>C/Primavera 26, Genil</p>
                    <p>18008 Granada</p>
                </div>
                <div class="column">
                    <h3>Social Media</h3>
                    <p>
                        <a><img src="{{ asset('assets/twitter.png') }}"></a>
                        <a><img src="{{ asset('assets/linkedin.png') }}"></a>
                        <a><img src="{{ asset('assets/instagram.png') }}"></a>
                        <a><img src="{{ asset('assets/facebook.png') }}"></a>
                    </p>
                </div>
                <div class="column">
                    <h3>Contact</h3>
                    <p>izv@ieszaidinvergeles.org</p>
                    <p>987 65 43 21</p>
                </div>
                <div class="column">
                    <h3>Links</h3>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookie Policy</a>
                    <a href="#">Legal Warning</a>
                    <a href="#">Logout</a>
                </div>
            </div>
        </footer>
    </body>
</html>