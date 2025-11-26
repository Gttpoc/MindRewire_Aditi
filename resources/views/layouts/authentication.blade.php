<!doctype html>
<html>

<head>
    <meta name="theme-color" content="#0b032acc" />
    <meta name="msapplication-navbutton-color" content="#0b032acc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0b032acc">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base_url" content="{{ url('/') }}" />
    <base href="{{ url('/') }}">
    @yield('title')

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="js/bootstrap-4.4.1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    @yield('favicon')
    @yield('css')
</head>

<body class="@yield('body-class')" id="@yield('body-id')">
    @yield('content')
    @yield('footer_script')
</body>

</html>
