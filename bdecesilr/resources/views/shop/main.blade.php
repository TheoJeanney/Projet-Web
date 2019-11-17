@extends('layouts.app')
<title>BDE CESI La Rochelle - Boutique</title>

@section('mainpage')
<div class="boutique">
    <h1>Boutique</h1>

    @if(Auth::check())
    @if(auth()->user()->Id_status>=2)
    <a href="{{asset('shop/create')}}" class="btn btn-success">Ajouter un produit</a>
    @endif

    @if(auth()->user()->Id_status>=1)
    <a href="{{ route('shop.shoppingCart') }}"class="btn btn-success fa fa-shopping-cart" aria-hidden="true">Votre panier<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span> 
    </a><br /><br />

    <!-- Search form -->
    <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search animals.."> 
    
    <!-- ordered list -->
    <ol id='list'> 
        <li class="animals" href="#">Cat</li> 
        <li class="animals" href="#">Dog</li> 
        <li class="animals" href="#">Elephant</li> 
        <li class="animals" href="#">Fish</li> 
        <li class="animals" href="#">Gorilla</li> 
        <li class="animals" href="#">Monkey</li> 
        <li class="animals" href="#">Turtle</li> 
        <li class="animals" href="#">Whale</li> 
        <li class="animals" href="#">Aligator</li> 
        <li class="animals" href="#">Donkey</li> 
        <li class="animals" href="#">Horse</li> 
    </ol> 
    
    <!-- linking javscript -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    <hr>
    @endif
    @endif

    <div class="row justify-content-md-center" >
        @if(count($shops) >= 1)
            @foreach($shops as $shop)
                <div id="article" class="col-3"> <!-- article form -->
                    <a href="{{asset('/shop')}}/<?php echo $shop->Id_product ?>"><img style="width: 100%;" src="{{asset('storage/Product_image/'.$shop->Product_image)}}"></a>
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
            <p>No posts found</p>
        @endif

    </div>

</div>


@endsection
