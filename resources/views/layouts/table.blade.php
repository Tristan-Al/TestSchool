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
            @include('layouts.navigation')
        </header>
        <main>
            <div class="path">
                @yield('path')
            </div>
            <div class="titles">
                <h1>@yield('title')</h1>
                <h2>@yield('acronym')</h2>
            </div>
            <div class="professor"><b>@yield('professor')'s</b> module</div>
            <table>
                @yield('table')
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