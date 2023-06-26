<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="has-background-dark has-navbar-fixed-top">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"
        integrity="sha256-rTpdO0HXBCNpreAHcu6tB2Ppg515Vo+5GtYSsnNLz+8=" crossorigin="anonymous">
    <title>Taken Lijst - @yield('title')</title>
</head>

<body>
    @include('components.navbar')

    <section class="section">
        @if (session()->has('success'))
            <div class="notification is-info">
                <button class="delete"></button>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="container">
            @yield('content')
        </div>
    </section>
</body>

</html>
