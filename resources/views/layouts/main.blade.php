<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/semantic-ui/dist/semantic.min.css" type = "text/css">
        @yield('styles')

        
    </head>
    <body>
        @yield('content')
        <script src="/semantic-ui/dist/semantic.min.js"></script>
        @yield('scripts')
    </body>
</html>
