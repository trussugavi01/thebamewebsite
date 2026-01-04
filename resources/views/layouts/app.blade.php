<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('meta_title', config('app.name', 'B.A.M.E Health & Care Awards') . ' - Celebrating Excellence, Advancing Equity')</title>
    
    <meta name="description" content="@yield('meta_description', 'The National B.A.M.E Health & Care Awards celebrates excellence and advances equity for Black, Asian and Minority Ethnic professionals in UK health and social care.')">
    <meta name="keywords" content="@yield('meta_keywords', 'BAME awards, health care awards, diversity awards, NHS awards, healthcare professionals, ethnic minority, B.I.D.E Summit, health equity, social care, UK healthcare')">
    <meta name="author" content="The National B.A.M.E Health & Care Awards">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    
    <link rel="canonical" href="@yield('canonical_url', url()->current())">
    
    <meta property="og:site_name" content="B.A.M.E Health & Care Awards">
    <meta property="og:title" content="@yield('og_title', config('app.name', 'B.A.M.E Health & Care Awards'))">
    <meta property="og:description" content="@yield('og_description', 'Celebrating excellence and advancing equity for Black, Asian and Minority Ethnic professionals in UK health and social care.')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('images/bame-logo.png'))">
    <meta property="og:locale" content="en_GB">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name', 'B.A.M.E Health & Care Awards'))">
    <meta name="twitter:description" content="@yield('twitter_description', 'Celebrating excellence and advancing equity in UK health and social care.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/bame-logo.png'))">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @stack('styles')
    @stack('structured_data')
</head>
<body class="antialiased" itemscope itemtype="http://schema.org/WebPage">
    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>
