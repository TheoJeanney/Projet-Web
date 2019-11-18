@extends('layouts.app')
<title>BDE CESI La Rochelle - Activité</title>
<!------------------------------------------------List all the posts-------------------------------------------------------------->
@section('mainpage')
<div class="activity">
    <h1>Les activités</h1>
        @if(Auth::check())
            @if(auth()->user()->Id_status>=2)
                <a href="{{asset('Posts/create')}}" class="btn btn-success">Créer un post</a>
            @endif
        @endif

<hr>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
            <div class="well">                
                <div class="row">
                    <div class="col-md-4 col-sm-4 ">
                        <img style="width:50%" src="{{asset('storage/web_image/'.$post->web_image)}}" >
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                        <h3><a href="{{asset('/Posts')}}/<?php echo $post->id_posts ?>">{{$post->title}}</a></h3>
                    </div>
                </div>
            </div>
<hr>
        @endforeach
    @else
        <p>Pas d'activité</p>
    @endif

</div>
@endsection
