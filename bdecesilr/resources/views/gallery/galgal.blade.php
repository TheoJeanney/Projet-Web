@extends('layouts.app')
<title>BDE CESI La Rochelle - Galerie</title>

@section('mainpage')
<div class="gallery">
<h1>La galerie photo</h1>
</div>
<hr>
<?php $posts = DB::select('SELECT * FROM posts'); ?>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
            <div class="well">                
                <div class="row">
                    <div class="col-md-4 col-sm-4 ">
                        <img style="width:50%" src="{{asset('storage/web_image/'.$post->web_image)}}" >
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                        <h3><a href="{{asset('/library')}}/<?php echo $post->id_posts ?>">{{$post->title}}</a></h3>
                    </div>
                </div>
            </div>
<hr>
        @endforeach
    @else
        <p>Pas d'activités</p>
    @endif
</div>
@endsection
