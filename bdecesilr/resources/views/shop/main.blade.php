@extends('layouts.app')
<title>BDE CESI La Rochelle - Activité</title>

@section('mainpage')
<div class="activity">
    <h1>Boutique</h1>
    <a href="/projetwebf/bdecesilr/public/shop/create" class="btn btn-success">Créer un post</a>
<hr>
    @if(count($shops) >= 1)
        @foreach($shops as $shop)
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 ">
                        <img style="width:50%" src="{{asset('storage/Product_image/'.$shop->Product_image)}}" >
                    </div>
                    <div class="col-md-4 col-sm-4 "></div>
                        <h3><a href="{{asset('/shop')}}/<?php echo $shop->Id_product ?>">{{$shop->Product_name}}</a></h3>
                    </div>
            </div>
            <hr>
        @endforeach
    @else
        <p>No posts found</p>
    @endif

</div>
@endsection
