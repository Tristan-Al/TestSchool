<footer>
    <div class="logo">
        <img src="{{ asset('img/logo_withtext.png') }}">
    </div>
    <div class="columns">
        <div class="column">
            <h3>About us</h3>
            <p>Department of Educational Development and Vocational Training</p>
            <a href="{{ route('home') }}">Back to Homepage</a>
        </div>
        <div class="column">
            <h3>Location</h3>
            <p>C/Primavera 26, Genil</p>
            <p>18008 Granada</p>
        </div>
        <div class="column-rrss">
            <h3>Social Media</h3>
            <div class="icons-rrss">
                <a><img src="{{ asset('assets/twitter.png') }}"></a>
                <a><img src="{{ asset('assets/linkedin.png') }}"></a>
                <a><img src="{{ asset('assets/instagram.png') }}"></a>
                <a><img src="{{ asset('assets/facebook.png') }}"></a>
            </div>
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
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/nav.js') }}"></script>
</footer>
