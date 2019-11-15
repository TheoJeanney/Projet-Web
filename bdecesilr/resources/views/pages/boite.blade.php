@if(Auth::check())
    @if(auth()->user()->Id_status>=1)

@extends('layouts.app')
<title>BDE CESI La Rochelle - Boîte à idées</title>

@section('mainpage')

<div>
    <label for="article"><b>Titre de votre idée</b></label>
        <input id="subject" type="text" class="form-control @error('name') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="name" placeholder="Votre idée">
        @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

<div>
    <label for="lastname"><b>Nom</b></label>
        <input id="subject" type="text" class="form-control @error('name') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="name" placeholder="Nom">
        @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

<div>
    <label for="firstname"><b>Prénom</b></label>
        <input id="subject" type="text" class="form-control @error('name') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="name" placeholder="Nom">
        @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

<div>
    <label for="textArea"><b>Votre message</b></label>
    <textarea class="form-control" id="textArea" rows="3"></textarea><br />
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

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

  

        <form action="" method="POST" enctype="multipart/form-data">

            @csrf

                <div></div>

                    <button type="submit" class="btn btn-success">Envoyer</button>

                </div>


            </div>

        </form>


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



