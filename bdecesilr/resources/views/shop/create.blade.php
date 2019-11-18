@if(Auth::check())
    @if(auth()->user()->Id_status==2)

@extends('layouts.app')
<title>Créer un article</title>
<link rel="icon" type="image/png" href="{{asset('images/Logo_BDE.png')}}">

<!------------------------------------------------Create an item-------------------------------------------------------------->
@section('content')
<a href="{{asset('/shop')}}" class="btn btn-danger">Retour</a>
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class= "alert alert-danger">
        {{$error}}
    </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
<h1>Ajouter un produit</h1>
    {!! Form::open(['action' => 'ShopController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Product_name', 'Nom du produit')}}
            {{Form::text('Product_name', '', ['class' => 'form-control', 'placeholder' => 'Nom du produit'])}}
        </div>
        <div class="form-group">
            {{Form::label('Product_description', 'Description')}}
            {{Form::textarea('Product_description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('Product_price', 'Prix')}}
            {{Form::number('Product_price', '', ['class' => 'form-control', 'placeholder' => 'Prix'])}}
        </div>
        <div class="form-group">
            {{Form::label('Product_stock', 'Stock')}}
            {{Form::number('Product_stock', '', ['class' => 'form-control', 'placeholder' => 'Stock'])}}
        </div>


    <div class="form-group">
        <label for="Id_category"  class="col-md-4 col-form-label text-md-left">{{__('Catégorie')}}</label>
        <div class="col-md-6">
            <select id="inputState" class="form-control" name="Id_category"> <!-- the data are on a custom select list. -->
            <option selected>Choisissez votre catégorie</option>
                <?php 
                $cat=DB::select('SELECT Category_name FROM Category ');
                foreach($cat as $cat){
                echo '<option>'.$cat->Category_name.'</option>';
                ?>
 


        <?php }
        ?>
   </select>
   
        </div>
        <div class="form-group">
            {{Form::file('Product_image')}}
        </div>
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

@endif
