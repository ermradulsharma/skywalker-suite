<head>
    <meta charset="utf-8">
    <title>{{ __('Skywalker Intelligence Systems') }} | {{ __('Innovative AI-driven Solutions') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Skywalker Intelligence Systems - Empowering businesses with intelligent AI-driven solutions that transform data into actionable insights for growth.">
    <meta name="keywords" content="Skywalker, AI, Intelligence Systems, Technology, Innovation, Web Development, Software Solutions">
    <meta name="author" content="Skywalker Intelligence Systems">

    <!-- Open Graph / Social Sharing -->
    <meta property="og:title" content="Skywalker Intelligence Systems">
    <meta property="og:description" content="Empowering businesses with intelligent AI-driven solutions that transform data into actionable insights.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('web/img/logo.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Skywalker Intelligence Systems">
    <meta name="twitter:description" content="Empowering businesses with intelligent AI-driven solutions that transform data into actionable insights.">
    <meta name="twitter:image" content="{{ asset('web/img/sky.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('web/img/sky.jpg') }}" type="image/png">

    <!-- Libraries Stylesheet -->
    <!-- <link href="{{ asset('web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('web/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Template Stylesheet -->
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
</head>