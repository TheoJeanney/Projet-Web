@extends('layouts.app')
<title>BDE CESI La Rochelle - Activité</title>

@section('content')

<a href="{{asset('/Posts')}}" class="btn btn-danger">Retour</a>
<h1 class= text-danger>{{$post->title}}</h1>
<div class="col-md-4 col-sm-4 ">
                <img style="width:50%" src="{{asset('storage/web_image/'.$post->web_image)}}" >
</div>
<div>
                Description de l'événement : {{$post->body}}
                </div>
                
                <div class="text-right">
                        <!--     
                        <button type="button"  class="btn btn-outline-dark rounded-circle " data-toggle="button" aria-pressed="false" >
                                <i class="fa fa-heart"></i>
                        </button>
                        -->
                </div>
                
                
                <hr>
                <small>{{$post->created_at}}</small>
                <hr>

                @if(Auth::check())
                        @if(auth()->user()->Id_status>=2)
                                <a href="/projetwebf/bdecesilr/public/Posts/{{$post->id_posts}}/edit" class="btn btn-success">Edit</a>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id_posts], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                        @endif
                @endif

                                
                @if(Auth::check())
                        @if(auth()->user()->Id_status==1)
                        <br />
                        <br />
                        Mettez vos photos de l'évènement ici :
                        <a href="/projetwebf/bdecesilr/public/Posts/{{$post->id_posts}}/edit" class="btn btn-success"><i class="fa fa-upload"></i></a>
                        @endif
                @endif
                <div class="row">
                        <div id="comment-form">
                                {{ Form::open({'route' => ['comments.store', ]}) }}
                                <div class="row">
                                        <div class="col-md-6">
                                                {{ Form::label('comment', "Comment:") }}
                                                {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

                                                {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                                        </div>
                                </div>
                                {{Form::close() }}
                        </div>
                </div>
@endsection