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
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
            </nav>
            <div class="header_info">
                <span>IES Zaidin Vergeles</span>
                <div id="search"><img src="{{ asset('assets/search.png') }}"></div>
                <div id="logout"><img src="{{ asset('assets/logout.png') }}"></div>
                <div id="profile">
                    <div class="profile_picture"></div>
                    <div class="profile_name">User</div>
                </div>
            </div>
        </header>
        <div id="hero" class="columns">
            <div class="column">
                <div></div>
                <div>
                    <span class="subtitle">Where every student is</span>
                    <h1>a <span class="title">hero</span><br><span class="margin"></span>in the making</h1>
                    <div class="cta">see more</div>
                </div>
                <div class="imagenes">
                    <img src="{{ asset('img/lines.png') }}">
                    <img src="{{ asset('img/circle.png') }}">
                </div>
            </div>
            <div class="column hero_img">
                <img src="{{ asset('img/HeaderCircle.png') }}">
            </div>
        </div>
        <main>
            <!-- <div class="path">
                <a class="route">Dashboard</a>
                <div class="next_route">❱</div>
                <a class="route">My Modules</a>
                <div class="next_route">❱</div>
                <a class="route">Module</a>
            </div> -->
            
            <!-- <div class="professor"><b>@yield('professor')Professor's</b> module</div> -->
            
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