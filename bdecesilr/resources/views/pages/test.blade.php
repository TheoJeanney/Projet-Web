
<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','bdecesilr')}}</title> 
        <link rel="icon" type="image/png" href="{{asset('images/Logo_BDE.png')}}">
        <link  rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
        <link href='style.css' rel='stylesheet' type='text/css'>

    </head>
    <body>
<!--<?php 
echo DB::select('SELECT Id_campus FROM Campus WHERE :id = Campus_name ', ['id'=>'La Rochelle'])[0]->Id_campus;
echo DB::select('SELECT Id_campus FROM Campus WHERE :id = Campus_name ', ['id'=>'Le Mans'])[0]->Id_campus;
?>

<div class="container">
Salut les bg
</div>
<p class="text-primary">text-primary</p>-->

<textarea id="tweetContent" maxlength="10" placeholder="Votre Tweet Ici..." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 86px; width:60%"></textarea>
<p id="counterBlock"></p>

</body>

<script>
// On selectionne l'element textarea et l'élement p#counterBlock
var textarea = document.querySelector('#tweetContent');
var blockCount = document.getElementById('counterBlock');

function count() {
    // la fonction count calcule la longueur de la chaîne de caractère contenue dans le textarea
    var count = 10-textarea.value.length;
    // et affche cette valeur dans la balise p#counterBlock grâce à innerHTML
    blockCount.innerHTML= count;
}

// on pose un écouteur d'évènement keyup sur le textarea.
// On déclenche la fonction count quand l'évènement se produit et au chargement de la page
textarea.addEventListener('keyup', count);
count();
</script>

</html>


