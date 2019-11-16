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

                        <p>
                        <a href='{{ url("/like/{$post->id_posts}") }}'> 
                                <span class="fa fa-thumbs-up"> Like({{$likeCtr}})</span>
                        </a>
                        </p>
                        <p>

                        <a href='{{ url("/inscript/{$post->id_posts}") }}'> 
                                <span class="btn btn-success"> S'inscrire</span>
                        </a>
                        </p>

                        <p>
                        Vous êtes inscrit
                        </p>
                        <p>
                        <a href='{{ url("/disinscript/{$post->id_posts}") }}'> 

                        <span class="btn btn-danger"> Se désinscrire</span>
                        </a>
                        </p>
                </div>

                <hr>
                <small>{{$post->created_at}}</small>
                <hr>

                @if(Auth::check())
                        @if(auth()->user()->Id_status>=2)
                                <a href="{{asset('Posts/'.$post->id_posts.'/edit')}}" class="btn btn-success pull-right">Edit</a>
                                <a href="{{asset('Posts/'.$post->id_posts.'/list')}}" class="btn btn-success pull-left">Accéder à la liste des inscrits</a>

                                {!!Form::open(['action' => ['ActiController@destroy', $post->id_posts], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                        @endif
                @endif

                                
                @if(Auth::check())
                        @if(auth()->user()->Id_status>=1)

        <form method="POST" action='{{ url("/comment/{$post->id_posts}") }}'>
                {{csrf_field()}}
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

                                <p>{{ $comment->created_at}}</p>
                                <p>{{ $comment->comment }}</p>
                                <p>Postée par {{ $comment->User_firstname }}</p>
                                @if(Auth::check())
                                        @if(auth()->user()->Id_status==2)
                                <a href='{{ url("/deleteComment/{$comment->id_comments}") }}'> 
                                <span class="btn btn-danger"> Supprimer</span>
                                </a>
                                @endif
                                @endif
                                @if(Auth::check())
                                        @if(auth()->user()->Id_status==3)
                                                <a href="{{asset('signaleremail')}}" class="btn btn-secondary" role="button" aria-disabled="true">Signaler</a>
                                @endif
                                @endif
                                <hr>

                        @endforeach
                @else
                        <p class="font-italic"> Pas de commentaires</p>
                @endif
@endsection     