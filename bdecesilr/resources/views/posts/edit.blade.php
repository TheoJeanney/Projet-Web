@if(Auth::check())
    @if(auth()->user()->Id_status==2)

@extends('layouts.app')

@section('content')
<h1  class="row justify-content-center" >Modifier l'activié</h1>

@if(Auth::check())
    @if(auth()->user()->Id_status>=2)
    
    {!! Form::open(['action' => ['PostsController@update', $post->id_posts], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('web_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endif
@endif

@if(Auth::check())
    @if(auth()->user()->Id_status==1)
    {!! Form::open(['action' => ['PostsController@update', $post->id_posts], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}   
<div class="form-group">
        {{Form::file('web_image')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
</div>
    {!! Form::close() !!}  
    @endif
    @endif
@endsection 



@else
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url=/projetwebf/bdecesilr/public/") ?>
@endif
@endif