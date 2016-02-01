<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="/statics/styles/home.css">
        <link rel="stylesheet" type="text/css" href="/statics/lib/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/statics/lib/font-awesome/css/font-awesome.min.css">
        <script src="/statics/lib/jquery/dist/jquery.min.js"></script>
        <script src="/statics/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- HEADER-SECTION -->
        @include('layouts.header')
        <div class="main-content">
            @yield('content')
        </div>
        @include('layouts.footer')
        <script src="//localhost:35729/livereload.js?snipver=1" async="" defer=""></script>
        <script src="/statics/scripts/home.js"></script>
    </body>
</html>

