@if(Auth::check())
    @if(auth()->user()->Id_status==4)

@extends('layouts.app')

<!--  Modifier l'utilisateur -- admin only section -->

@section('content')

<div class="editUtab">

    <div class="BtnEdit">
        <h1>Modifier l'utilisateur</h1>
    </div>

    <div class="BtnEdit1">
        <a href="{{asset('/admin')}}" class="btn btn-danger">Retour</a>
    </div>

</div>
        
        {!! Form::open(['action' => ['UsersController@update', $users->Id_user], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}

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

            <br />

            <div class="form-group">
                {{Form::label('User_lastname', 'Nom')}}
                {{Form::text('User_lastname', $users->User_lastname, ['class' => 'form-control', 'placeholder' => 'Lastname'])}}
            </div>
            <div class="form-group">
                {{Form::label('User_firstname', 'Prenom')}}
                {{Form::text('User_firstname', $users->User_firstname, ['class' => 'form-control', 'placeholder' => 'Firstname'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email', $users->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            
            <div class="form-group">
                    {{Form::label('Id_status', 'Statut')}}
                    {{Form::text('Id_status', $users->Id_status, ['class' => 'form-control'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('Id_campus', 'Campus')}}
                {{Form::text('Id_campus', $users->Id_campus, ['class' => 'form-control'])}}
            </div>
            
            {{Form::hidden('method_field','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}

        {!!Form::open(['action' => ['UsersController@destroyU', $users->Id_user], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

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