<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Tailwind styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    @include('components.navigation')
    <main>
        <div class="titles">
            <h1>@yield('module')</h1>
            <h2>@yield('acronym')</h2>
        </div>

        @yield('table')
    </main>
    @include('components.footer')
</body>

</html>
