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
        @include('components.navigation')
        <main>
            <div class="path">
                @yield('path')
                <!-- <a class="route">Dashboard</a>
                <div class="next_route">❱</div>
                <a class="route">My Modules</a>
                <div class="next_route">❱</div>
                <a class="route">Module</a> -->
            </div>
            <div class="titles">
                <h1>@yield('module')</h1>
                <h2>@yield('acronym')</h2>
            </div>
            <div class="professor"><b>@yield('professor')'s</b> module</div>
            <table>
                @yield('table')
            </table>
        </main>
        @include('components.footer')
    </body>
</html>