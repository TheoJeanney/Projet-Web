@if(Auth::check())
    @if(auth()->user()->Id_status>=1)

@extends('layouts.app')
<title>BDE CESI La Rochelle - Boîte à idées</title>

@section('mainpage')

<form method="post" action="{{ url('sendemail/send') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Entréz votre nom</label>
        <input type="text" name="name" class="form-control" />
    </div>
    <div class="form-group">
        <label>Entrez votre email</label>
        <input type="text" name="email" class="form-control" />
    </div>
    <div class="form-group">
        <label>Soumettez votre idée</label>
        <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="send" value="Send" class="btn btn-info" />
    </div>
</form>
</div>

<div>   

    <div class="panel panel-primary">

        <div class="panel-heading"></div>

        <div class="panel-body">


        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif



        @if (count($errors) > 0)

            <div class="alert alert-danger">

                Un<strong>problème</strong> est survenu.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        </div>

    </div>

</div>

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



