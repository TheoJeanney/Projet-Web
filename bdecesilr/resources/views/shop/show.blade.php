@extends('layouts.app')
<title>BDE CESI La Rochelle - Boutique</title>

@section('content')
<a href="{{asset('/shop')}}" class="btn btn-danger float-right">Retour</a>
<h1 class= text-danger>{{$shops->Product_name}}</h1>
<div>
<img style="width: 20rem; height: 20rem;" src="{{asset('storage/Product_image/'.$shops->Product_image)}}">
<br/>
Description du produit :
<br/>
{{$shops->Product_description}}
<br/>
<br/>
Prix : 
<br/>
{{$shops->Product_price}} €
</div>
<br/>

<hr><small>{{$shops->created_at}}</small>

@if(Auth::check())
@if(auth()->user()->Id_status>=2)
<a href="/projetwebf/bdecesilr/public/shop/{{$shops->Id_product}}/edit" class="btn btn-success pull-right">Edit</a>
{!!Form::open(['action' => ['ShopController@destroy', $shops->Id_product], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection