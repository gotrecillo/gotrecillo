<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico">
    <title>{{ config('app.name', 'Gotrecillo') }}</title>

    @stack('styles-before')
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    @stack('styles-after')

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

<div class="site" id="app">
    <section class="hero is-dark is-medium">
        <!-- Hero header: will stick at the top -->
        <div class="hero-head is-dark">
            @include('includes.nav')
        </div>

        <div class="hero-body">
            @yield('hero-body')
        </div>
    </section>

    <main class="site-content">
        @yield('content')
    </main>

    @include('includes.footer')
</div>

<!-- Scripts -->
@stack('scripts-before')
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts-after')
@include('cookieConsent::index')
</body>
</html>