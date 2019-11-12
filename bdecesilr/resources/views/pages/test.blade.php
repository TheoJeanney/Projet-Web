
<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <title>{{config('app.name','bdecesilr')}}</title> -->
        <link rel="icon" type="image/png" href="{{asset('images/Logo_BDE.png')}}">
        <link  rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>
<?php 
echo DB::select('SELECT Id_campus FROM Campus WHERE :id = Campus_name ', ['id'=>'La Rochelle'])[0]->Id_campus;
echo DB::select('SELECT Id_campus FROM Campus WHERE :id = Campus_name ', ['id'=>'Le Mans'])[0]->Id_campus;
?>
<div class="container">
Salut les bg
</div>
<p class="text-primary">text-primary</p>
    </body>
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>