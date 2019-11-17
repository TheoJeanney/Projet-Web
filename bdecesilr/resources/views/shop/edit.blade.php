@if(Auth::check())
    @if(auth()->user()->Id_status==2)


@extends('layouts.app')
<title>Modifier un article</title>
<link rel="icon" type="image/png" href="{{asset('images/Logo_BDE.png')}}">


@section('content')
<a href="{{asset('/shop')}}" class="btn btn-danger float-left">Retour</a>
<h1  class="row justify-content-center" >Modifier l'article</h1>

    {!! Form::open(['action' => ['ShopController@update', $shop->Id_product], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Product_name', 'Nom du produit')}}
            {{Form::text('Product_name', $shop->Product_name, ['class' => 'form-control', 'placeholder' => 'Nom'])}}
        </div>
        <div class="form-group">
            {{Form::label('Product_description', 'Description')}}
            {{Form::textarea('Product_description', $shop->Product_description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('Product_image')}}
            
        </div>

        <div class="form-group">
            {{Form::label('Product_price', 'Prix')}}
            {{Form::number('Product_price', $shop->Product_price, ['class' => 'form-control', 'placeholder' => 'Prix'])}}
        </div>

        <div class="form-group">
            {{Form::label('Product_stock', 'Stock')}}
            {{Form::number('Product_stock', $shop->Product_stock, ['class' => 'form-control', 'placeholder' => 'Stock'])}}
        </div>


        <div class="form-group">
            {{Form::label('Id_category', 'Categorie')}}
            {{Form::number('Id_category', $shop->Id_category, ['class' => 'form-control', 'placeholder' => 'Catégorie'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection 

        @else
@section('adminpage')
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url=/projetwebf/bdecesilr/public/index") ?>
@endsection
        @endif

@else

@section('adminpage')
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url=/projetwebf/bdecesilr/public/index") ?>
@endsection
@endif
