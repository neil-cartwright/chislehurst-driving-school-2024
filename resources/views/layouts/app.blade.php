<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="@yield('page-description', 'Great value enjoyable driving lessons in Chislehurst, South East London with an experienced professional driving instructor.')">

    <title>Chislehurst Driving School | @yield('title')</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400&family=Montserrat&display=swap"
        rel="stylesheet">

    <!-- Font awesome -->
    <link href="{{ asset('/font-awesome/css/fontawesome.css') }}" rel="stylesheet" media="print"
        onload="this.media='all'">
    <link href="{{ asset('/font-awesome/css/brands.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('/font-awesome/css/solid.css') }}" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Scripts -->
    @stack('scripts-before')
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <!-- styles -->
    @stack('styles-after')
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MYM7G0SXKE"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-MYM7G0SXKE');
</script>

<body class="font-body antialiased">
    <div id="app" class="is-flex is-flex-direction-column">

        <x-navigation.navbar></x-navigation.navbar>

        <div class="is-flex-grow-1 is-flex is-flex-direction-column">
            @yield('main')
        </div>

        <x-footer></x-footer>

        <x-cookie-consent></x-cookie-consent>

    </div>
    @stack('scripts-after')
</body>

</html>
