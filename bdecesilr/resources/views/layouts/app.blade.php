<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- <title>{{config('app.name','bdecesilr')}}</title> METTRE UN TITRE A LA PAGE, COMMENT LE FAIRE DIFFERENT-->
        <link rel="icon" type="image/png" href="{{asset('images/Logo_BDE.png')}}">

    </head>

    <header>
        @include('inc.header')
    </header>

    <nav></nav>
        @include('inc.navbar')
    </nav>

    <body>
        @yield('mainpage')
        
        <main class="py-4">
            @yield('content')
        </main>

        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    </body>

    <footer>
            @include('inc.footer')
    </footer>
</html>
