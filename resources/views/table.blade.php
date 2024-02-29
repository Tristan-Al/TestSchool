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
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
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
            <div class="path">
                <a class="route">Dashboard</a>
                <div class="next_route">❱</div>
                <a class="route">My Modules</a>
                <div class="next_route">❱</div>
                @foreach($formations as $formation)
                    @if ($formation->id == request('id'))
                        <a class="route"> {{$formation->denomination }}</a>
                    @endif
                @endforeach
            </div>
            <div class="titles">
                <h1>My modules</h1>
                @foreach($formations as $formation)
                    @if ($formation->id == request('id'))
                        <h2> {{$formation->denomination }}</h2>
                    @endif
                @endforeach
            </div>
            <div class="professor">
                @foreach($profesores as $profesor)
                    @if ($profesor->id == $user->id)
                        <b>{{ $profesor->name }}'s</b> module
                    @endif
                @endforeach
            </div>
            <table>
                <tr class="titles">
                    <th>Formation name</th>
                    <th>Denomination</th>
                    <th>Initials</th>
                    <th>Course</th>
                    <th>Hours</th>
                    <th>Speciality</th>
                </tr>
                <tr>
                    @foreach ($formations as $formation)
                        @foreach ($subjects as $subject)
                            @if ($formation->id == request('id') && $subject->formation_id == $formation->id)
                                <td>{{$formation->denomination }}</td>
                                <td>{{$subject->denomination }}</td>
                                <td>{{$subject->acronym }}</td>
                                <td>{{$subject->year}}</td>
                                <td>{{$subject->hours}}</td>
                                <td>{{$subject->speciality}}</td>
                            @elseif ($formation->id == request('id') && $subject->formation_id != $formation->id)
                                <td colspan="6">There are no subjects in this formation</td>
                            @endif
                        @endforeach
                    @endforeach
                </tr>
            </table>
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