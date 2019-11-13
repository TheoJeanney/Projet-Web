
<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','bdecesilr')}}</title> 
        <link rel="icon" type="image/png" href="{{asset('images/Logo_BDE.png')}}">
        <link  rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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

<!-- Le contenu -->
<div id="contenu">

        <div id="wrapper" style="min-height: 50px;">
            <h1> Requêtes administrateur</h1>
        </div>
        <div id="barre_boutons_admin">
            <a class="button" href="#listproducts">
                <div class="bouton_admin">
                    <div style="height:50px;"><img src="images/Logo_BDE.png" alt="Shoe" height="75"></div>
                    Lister les articles
                </div>
            </a>
            <a class="button" href="#addproduct">
                <div class="bouton_admin">
                    <div style="height:50px;"><img src="Images/shoesAdd.png" alt="Shoe" height="75"></div>
                    Ajouter un article
                </div>
            </a>
            <a class="button" href="#deleteproduct">
                <div class="bouton_admin">
                    <div style="height:50px;"><img src="Images/shoesDel.png" alt="Shoe" height="75"></div>
                    Supprimer un article
                </div>
            </a>
            <a class="button" href="#editproduct">
                <div class="bouton_admin">
                    <div style="height:50px;"><img src="Images/shoesChange.png" alt="Shoe" height="75"></div>
                    Modifier un article
                </div>
            </a>
        </div>

    </body>
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>
