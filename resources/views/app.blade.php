<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>MWS TEMPLATE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO
    <meta name="description" content="Enter Description Here">
    <meta name="keywords" content="Construction, East, Lansing, Corbett">
    -->

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="view {{ strtolower($page_class) }}">
        @include('partials.nav')

        <div class="main">
            @yield('main')
        </div>

        @include('partials.footer')
        
        @yield('modal')
    </div>

    @hasSection('js')
        @yield('js')
    @else
        <script src="{{ url('js/app.js') }}"></script>
    @endif
</body>
</html>
