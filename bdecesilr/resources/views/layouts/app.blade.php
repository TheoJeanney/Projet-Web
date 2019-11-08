<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel
        <!-- <title>{{config('app.name','bdecesilr')}}</title> -->
        <link rel="icon" type="image/png" href="{{asset('images/Logo_BDE.png')}}">
    </head>
    <body></body>
        @include('inc.header')
        @include('inc.navbar')
        @yield('content')
        
    </body>
</html>
