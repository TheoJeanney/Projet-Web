@extends('layouts.app')
<title>BDE CESI La Rochelle - Activité</title>

@section('mainpage')

<a href="{{asset('/Posts')}}" class="btn btn-danger float-left">Retour</a>
<br/><br/>
<h1 class= text-danger>{{$post->title}}</h1>
        <div class="col-md-4 col-sm-4 ">
                <img style="width:50%" src="{{asset('storage/web_image/'.$post->web_image)}}" >
        </div>
        <div>
                Description de l'événement : <br/>
                {{$post->body}}
                <br/>
        </div>
@if (Auth::check())
        <form id="file-upload-form" class="uploader" action="{{asset('Posts/'.$post->id_posts.'/save')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                @csrf

        <div id="start" >
                <br/>
                <hr>
                <div id="notimage"  class="hidden" >Sélectionner une image <i class="fa fa-download" aria-hidden="true"></i></div>
                <br/>
                <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);" multiple>
                <label for="file-upload" id="file-drag">
                
                
                <!--<span id="file-upload-btn" class="btn btn-primary">Select a file</span>-->
        <br>
                <span class="text-danger">{{ $errors->first('fileUpload') }}</span>
        </div>
        <button type="submit" class="btn btn-success">Publier</button>
        <a href="{{asset('/library')}}/<?php echo $post->id_posts ?>" class="btn btn-info">Galerie</a>
</label>

        </form>
        <hr>

        <div role="presentation">
                <p><a href='{{ url("/like/{$post->id_posts}") }}'> 
                <span class="fa fa-thumbs-up"> Like({{$likeCtr}})</span>
                </a></p>

@if($insCpt==0)
                
                <p><a href='{{ url("/inscript/{$post->id_posts}") }}'> 
                        <span class="btn btn-success"> S'inscrire </span>
                </a></p>    
@else
                <p>
                Vous êtes inscrit
                </p>
                <p><a href='{{ url("/inscript/{$post->id_posts}") }}'> 
                <span class="btn btn-danger"> Se désinscrire</span>
                </a></p>
@endif
        </div>
@endif
                <hr>
                <small>{{$post->created_at}}</small>
                <hr>

                @if(Auth::check())
                        @if(auth()->user()->Id_status>=2)
                                <a href="{{asset('Posts/'.$post->id_posts.'/edit')}}" class="btn btn-success pull-right">Edit</a>

                                <a href='{{asset("Posts/{$post->id_posts}/list") }}' class="btn btn-success pull-left">Accéder à la liste des inscrits</a>

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
                                <textarea id="comment" rows="6" class="form-control" name="comment" required autofocus placeholder="Votre commentaire..."></textarea>
                        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</div>
<script>
function readURL(input, id) {
id = id || '#file-image';
if (input.files &amp;&amp; input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        $(id).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
        $('#file-image').removeClass('hidden');
        $('#start').hide();
}
}
</script>

@endsection     