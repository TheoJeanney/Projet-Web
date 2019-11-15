@extends('layouts.app')
<title>BDE CESI La Rochelle - Boutique</title>

@section('mainpage')
<div class="boutique">
    <h1>Boutique</h1>
<div class="search">
    <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>

    @if(Auth::check())
    @if(auth()->user()->Id_status>=2)
    <a href="/projetwebf/bdecesilr/public/shop/create" class="btn btn-success">Ajouter un produit</a>
    @endif

        @if(auth()->user()->Id_status>=1)
    <a href="{{ route('shop.shoppingCart') }}"class="btn btn-success fa fa-shopping-cart" aria-hidden="true">Votre panier<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span> 
    </a> 

    <hr>
    @endif
    @endif

    <div class="row justify-content-md-center" >
        @if(count($shops) >= 1)
            @foreach($shops as $shop)
                <div id="article" class="col-3">
                    <a href="{{asset('/shop')}}/<?php echo $shop->Id_product ?>"><img style="width: 10rem; height: 10rem;" src="{{asset('storage/Product_image/'.$shop->Product_image)}}"></a>
                    <h4>{{$shop->Product_name}}</h4>
                    <h6>{{$shop->Product_price}} €</h6>
                    <a href="{{asset('/shop')}}/{{$shop->Id_product}}" class="btn btn-success">En savoir plus</a>
                    <a href="{{ route('shop.addToCart', ['id' => $shop->Id_product])}}" class="btn btn-success"> Ajouter au panier</a>
                    <br/>
                </div>
            
            @endforeach 
        @else
            <p>No posts found</p>
        @endif

    </div>

</div>
@endsection
