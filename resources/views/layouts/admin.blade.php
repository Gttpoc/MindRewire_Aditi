<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta name="theme-color" content="#0b032acc" />
    <meta name="msapplication-navbutton-color" content="#0b032acc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0b032acc">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base_url" content="{{ url('/') }}" />
    @php $segments = request()->path(); @endphp

    @livewireStyles

    @yield('title')
    @yield('favicon')
    @include('includes.admin.head')
    @yield('css')
</head>

<body class="@yield('body-class')">

    @include('includes.admin.header')

    @include('includes.admin.sidebar')

    @yield('content')

    @include('includes.admin.footer')

    @livewireScripts

    @stack('scripts')

    @yield('footer_script')

</body>

</html>
