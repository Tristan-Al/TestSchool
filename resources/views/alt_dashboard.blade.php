<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        
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
            <div class="float_img">
                <img src="{{ asset('img/lines.png') }}" style="bottom: 0%; left: 0%;">
                <img src="{{ asset('img/circle.png') }}" style="bottom: 0%; left: 40%;">
                <img src="{{ asset('img/circle.png') }}" style="top: 5%; right: 0%;">
                <img src="{{ asset('img/HeaderCircle.png') }}" style="right: -10%; bottom: -50%;">
            </div>
            <div class="column">
                <div>
                    <span class="subtitle">Where every student is</span>
                    <h1>a <span class="title">hero</span><br>
                        <span class="margin"></span>in the making</h1>
                    <div class="cta">see more</div>
                </div>
            </div>
            <div class="column"></div>
        </div>
        <main>
            <div class="section1-container">
                <div class="float_img">
                    <img src="{{ asset('img/circle2.png') }}" style="bottom: 0%; left: -10%;">
                </div>
                <div class="part-section1">
                    <h1>Who are we?</h1>
                    <p class="firstp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, nam nemo ratione inventore minus eius earum laboriosam similique nihil asperiores?.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias nam impedit alias animi eaque, ipsa tenetur qui doloribus in modi blanditiis, totam natus.</p>
                </div>

                <div class="part-section1">
                <img class="round-circle-section1" src="{{ asset('img/section1-pic1-circle.png') }}" alt="Happy teacher">

                    <div class="extra-info-section1">
                        <p>1000+ users!</p>
                        <img class="users-section1-icon" src="{{ asset('img/users.png') }}" alt="users icon"> 
                            <img src="" alt=""> 
                    </div>
                </div>

        </div>


        <!-- //NEW HTML 
        // SECTION 2 -->

        <div class="section2-container">
            <div class="part-section2">
            <img class="woman-laptop" src="{{ asset('img/section2-pic1.jpg') }}" alt="Woman using laptop">
            </div>
            <div class="part-section2">
                <div class="title-section2">
                    <p>About us</p>
                    <h1>We take pride in...</h1>
                </div>
                <div class="boxes-section2">
                    <div class="row-section2 row-1-row">
                        <div class="item-section2-box white-space-section2">
                            <img src="{{ asset('img/books.png') }}" alt="books icon">
                            <p class="boldertext-section2">Our teachers</p>
                        </div>
                        <div class="item-section2-box">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, quasi.</p>
                        </div>
                    </div>
                    <div class="row-section2 row-2-row">
                        <div class="item-section2-box">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, quasi.</p>
                        </div>
                        <div class="item-section2-box white-space-section2">
                        <img src="{{ asset('img/software.png') }}" alt="books icon">
                            <p class="boldertext-section2">Educational software</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section3-container">
            <div class="part-section3">
                <div class="circle-section3">
                    <h2>Contact us</h2>
                    <p>
                        C. Primavera 26, Genil<br>
                        18008 Granada
                    </p>
                    <p>
                        contact@ieszaidinvergeles.org<br>
                        987 65 43 21
                    </p>
                </div>
            </div>
            <div class="part-section3">
                <img src="{{ asset('img/happyTeacherCircle.png') }}" alt="books icon">
            </div>
            <nav class="social">
                <ul>
                    <li><a href="https://twitter.com">Twitter <i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://github.com">Github <i class="fa fa-github"></i></a></li>
                  <li><a href="https://www.linkedin.com">Linkedin <i class="fa fa-linkedin"></i></a></li>
                    </ul>
            </nav>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20383.65623700559!2d-3.591667663929073!3d37.16534565896571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fca6107464e5%3A0x5cc395f96e47c0d9!2sIES%20Zaid%C3%ADn%20Vergeles!5e0!3m2!1ses!2ses!4v1709634441961!5m2!1ses!2ses" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
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