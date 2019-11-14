@if(Auth::check())
    @if(auth()->user()->Id_status==2)

@extends('layouts.app')

@section('content')
<a href="{{asset('/Posts')}}" class="btn btn-danger">Retour</a>
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class= "alert alert-danger">
        {{$error}}
    </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success"></div>
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
<h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('web_image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection



@else
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url=/projetwebf/bdecesilr/public/") ?>
@endif
@endif