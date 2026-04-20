<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Radio</title>
    @include('_homeradio.partials.favicons')

    <script>
        (function() {
            const savedTheme = localStorage.getItem("theme") || "dark";
            document.documentElement.setAttribute("data-theme", savedTheme);
        })();
    </script>

    @vite(['resources/assets/_homeradio/sass/main.scss', 'resources/assets/_homeradio/js/app.js'])
</head>

<body>
    @include('_homeradio.partials.components.radioplayer')

    @include('_homeradio.layouts.header')


    <div class="main" id="main">
        @yield('content')
    </div>
    @include('_homeradio.layouts.footer')

    <script src="https://cdn.jsdelivr.net/gh/arvgta/ajaxify@8.3.0/ajaxify.min.js"></script>
    @stack('scripts')
</body>

</html>
