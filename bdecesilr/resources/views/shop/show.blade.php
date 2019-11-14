@extends('layouts.app')
<title>BDE CESI La Rochelle - Activité</title>

@section('content')
<a href="{{asset('/shop')}}" class="btn btn-danger">Retour</a>
<h1 class= text-danger>{{$shops->Product_name}}</h1>
<div>
Description de l'événement : {{$shops->Product_description}}
</div>

<hr>
<small>{{$shops->created_at}}</small>
<hr>
<a href="/projetwebf/bdecesilr/public/shop/{{$shops->Id_product}}/edit" class="btn btn-success">Edit</a>
{!!Form::open(['action' => ['ShopController@destroy', $shops->Id_product], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection