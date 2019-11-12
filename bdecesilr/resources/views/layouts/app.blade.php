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

    <nav>
        @include('inc.navbar')
    </nav>

    <body>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales, tortor nec placerat posuere, dui est auctor nisi, dapibus dignissim justo augue in mi. Quisque porta ex sit amet mollis aliquam. In hac habitasse platea dictumst. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec urna nunc, dictum quis venenatis ac, bibendum sed ante. Mauris ullamcorper leo nec tortor ultrices interdum. Nunc ac ullamcorper nunc. Sed vestibulum nulla metus, nec bibendum nibh facilisis eu. Donec eu urna laoreet, suscipit dolor a, laoreet felis. Proin at dui pharetra, pulvinar nunc ac, tincidunt velit.</p>
        @yield('mainpage')
        

        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    </body>

    <footer>
            @include('inc.footer')
    </footer>
</html>