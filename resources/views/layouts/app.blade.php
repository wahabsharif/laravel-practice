<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-emerald-900">

    <header>
        <x-nav-bar.nav-bar />
    </header>

    <main class="flex-grow p-10">
        @yield('content')
    </main>

    <footer>
        <x-footer.footer />
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
