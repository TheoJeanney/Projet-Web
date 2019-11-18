@extends('layouts.app')
<title>BDE CESI La Rochelle - Boutique</title>

@section('mainpage')
<div class="boutique">
    <h1>Boutique</h1>
<!---------------------------------------------List of all items of the shop----------------------------------------------------->
    @if(Auth::check())
    @if(auth()->user()->Id_status>=2)
    <a href="{{asset('shop/create')}}" class="btn btn-success">Ajouter un produit</a>
    @endif

    @if(auth()->user()->Id_status>=1)
    <a href="{{ route('shop.shoppingCart') }}"class="btn btn-success fa fa-shopping-cart" aria-hidden="true">Votre panier<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span> 
    </a><br /><br />

    <!-- Search form -->
    <input id="searchbar" class="w-50" onkeyup="search_()" type="text" name="search" placeholder="Rechercher   "> 
    
    <!-- linking javscript -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    <hr>
    @endif
    @endif

    <div class="row justify-content-md-center" >
        @if(count($shops) >= 1)
            @foreach($shops as $shop)
                <div id="article" class="col-3"> <!-- article form -->
                    <a href="{{asset('/shop')}}/<?php echo $shop->Id_product ?>"><img style="width: 15rem; height: 20rem;" src="{{asset('storage/Product_image/'.$shop->Product_image)}}"></a>
                    <h4>{{$shop->Product_name}}</h4>
                    <h6>{{$shop->Product_price}} €</h6>
                    <a href="{{asset('/shop')}}/{{$shop->Id_product}}" class="btn btn-success" style="width : 40%;">En savoir plus</a>
                    @if(Auth::check())
                    <a href="{{ route('shop.addToCart', ['id' => $shop->Id_product])}}" class="btn btn-success"  style="width : 40%;"> Ajouter au panier</a>
                    @endif
                    <br/>
                </div>
            
            @endforeach 
        @else
            <p>Pas de produits disponibles</p>
        @endif

    </div>

</div>


@endsection
