@extends('layouts.app')
<title>BDE CESI La Rochelle - Activité</title>

@section('mainpage')

<a href="{{asset('/Posts')}}" class="btn btn-danger float-right">Retour</a>
<h1 class= text-danger>{{$post->title}}</h1>
<div class="col-md-4 col-sm-4 ">
                <img style="width:50%" src="{{asset('storage/web_image/'.$post->web_image)}}" >
</div>
                <div>
                Description de l'événement : <br/>
                {{$post->body}}
                </div>

                <div role="presentation">
                        <br/>
                        <a href='{{ url("/like/{$post->id_posts}") }}'> 
                                <span class="fa fa-thumbs-up"> Like({{$likeCtr}})</span>
                        </a>
                </div>  

                <hr>
                <small>{{$post->created_at}}</small>
                <hr>

                @if(Auth::check())
                        @if(auth()->user()->Id_status>=2)
                                <a href="/projetwebf/bdecesilr/public/Posts/{{$post->id_posts}}/edit" class="btn btn-success pull-right">Edit</a>
                                {!!Form::open(['action' => ['ActiController@destroy', $post->id_posts], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                        @endif
                @endif

                                
                @if(Auth::check())
                        @if(auth()->user()->Id_status>=1)

        <form method="POST" action='{{ url("/comment/{$post->id_posts}") }}'>
                {{csrf_field()}}
                        <div class="form-group"></div>
                                {{Form::file('comment_image')}}
                        </div>
                        <div class="form-group"></div>
                                <textarea id="comment" rows="6" class="form-control" name="comment" required autofocus></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Commenter</button>
                        </div>
                </form>
                        @endif
                @endif
                <h3>Commentaires</h3>
                @if(count($comments) > 0)
                        @foreach($comments->all() as $comment)
                                <hr>
                                <img src="/projetwebf/bdecesilr/storage/app/public/wb_image/{{ $comment->comment_image }}">
                                <p>{{ $comment->id_comments }}</p>
                                <p>{{ $comment->comment }}</p>
                                <p>Postée par {{ $comment->User_firstname }}</p>
                                @if(Auth::check())
                                        @if(auth()->user()->Id_status==3)
                                                <a href="/projetwebf/bdecesilr/public/signaleremail" class="btn btn-secondary" role="button" aria-disabled="true">Signaler</a>
                                @endif
                                @endif
                        @endforeach
                @else
                        <p class="font-italic"> Pas de commentaires</p>
                @endif
@endsection     