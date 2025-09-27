<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Skywalker - Innovative solutions transforming ideas into reality.">
    <meta name="keywords" content="Skywalker, Technology, Innovation, Creative Solutions, Web Development">
    <meta name="author" content="Skywalker">

    <!-- Open Graph / Social Sharing -->
    <meta property="og:title" content="{{ config('app.name', 'Skywalker') }}">
    <meta property="og:description" content="Skywalker - Innovative solutions transforming ideas into reality.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('web/img/logo.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'Skywalker') }}">
    <meta name="twitter:description" content="Skywalker - Innovative solutions transforming ideas into reality.">
    <meta name="twitter:image" content="{{ asset('web/img/logo.jpg') }}">

    <!-- CSRF Token for Forms -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title & Favicon -->
    <title>{{ config('app.name', 'Skywalker') }} | {{ __('Innovative solutions transforming ideas into reality.') }}</title>
    <link rel="icon" href="{{ asset('web/img/sky.jpg') }}" type="image/png">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Vite compiled CSS & JS (Bootstrap, jQuery, Fonts, Icons) -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('web/css/login.css') }}">
    <!-- Mobile responsive & SEO-friendly enhancements -->
    <meta name="format-detection" content="telephone=no">
    @stack('styles')
</head>

<body>
    <div id="app">
        <main class="container">
            @yield('content')
        </main>
    </div>
</body>

</html>