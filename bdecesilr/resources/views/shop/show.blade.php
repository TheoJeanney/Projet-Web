@extends('layouts.app')
<title>BDE CESI La Rochelle - Boutique</title>

@section('content')
<a href="{{asset('/shop')}}" class="btn btn-danger">Retour</a>
<h1 class= text-danger>{{$shops->Product_name}}</h1>
<div>
Description du produit : {{$shops->Product_description}}
<br/>
Prix :  {{$shops->Product_price}} €
</div>

<hr>
<small>{{$shops->created_at}}</small>
<hr>
@if(Auth::check())
@if(auth()->user()->Id_status>=2)
<a href="/projetwebf/bdecesilr/public/shop/{{$shops->Id_product}}/edit" class="btn btn-success">Edit</a>
{!!Form::open(['action' => ['ShopController@destroy', $shops->Id_product], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection