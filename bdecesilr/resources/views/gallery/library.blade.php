@extends('layouts.app')
<title>BDE CESI La Rochelle - Galerie</title>

@section('mainpage')
<a href="{{asset('/library')}}" class="btn btn-danger float-left">Retour</a>
<br/><br/>
<h1 class= text-danger>{{$post->title}}</h1>


        <div class="photo">  
<?php $img = DB::SELECT('SELECT file_name FROM photos WHERE id_post = ?', [$post->id_posts]);

        foreach ($img as $img)
{
    //echo "<img src="{{asset('projetwebf/bdecesilr/public/storage/web_image/'$img')}}">";
    //echo (<img src="{{asset('projetwebf/bdecesilr/public/storage/web_image/'.$img.'')}}"> );
    //<img src="{{asset('projetwebf/bdecesilr/public/storage/web_image/20191117140119.jpg')}}"> 
?>         
                        <img style="width: 20%; margin:auto 10% 10% auto;"src="{{asset('projetwebf/bdecesilr/public/storage/web_image/'.$img->file_name.'')}}"> 
<?php 
} 
?>
        </div>    
                <p><a href='{{ url("/likeL/{$post->id_posts}") }}'> 
                <span class="fa fa-thumbs-up"> Like({{$likeCtr}})</span>
                </a></p>
<hr>
                @if(Auth::check())
                        @if(auth()->user()->Id_status>=1)
        <form method="POST" action='{{ url("/commentL/{$post->id_posts}") }}'>
                {{csrf_field()}}
                        <div class="form-group"></div>
                                <textarea id="comment" rows="6" class="form-control" name="comment" required autofocus placeholder="Votre commentaire..."></textarea>
                        </a>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Commenter</button>
                        </div>
                </form>
                <hr>
                        @endif
                @endif
                <h3>Commentaires</h3>  
                @if(count($comments) > 0)
                        @foreach($comments->all() as $comment)

                                <small><em>{{ $comment->created_at}}</em></small>
                                <p>{{ $comment->comment }}</p>
                                <em>Postée par </em><mark><strong>{{ $comment->User_firstname }}</strong></mark>
                                @if(Auth::check())
                                        @if(auth()->user()->Id_status==2)
                                <a href='{{ url("/deleteCommentL/{$comment->id_comments}") }}'> 
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