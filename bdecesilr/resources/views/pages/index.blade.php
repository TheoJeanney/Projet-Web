@extends('layouts.app')
<title>BDE CESI La Rochelle - Accueil</title>

@section('mainpage')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner"  >
        <div class="carousel-item active" >
            <img class="d-block w-100 h-60" src="{{asset('images/image1_ecole.png')}}" alt="Intérieur école">
        </div>
        <div class="carousel-item ">
            <img class="d-block w-100 h-60" src="{{asset('images/image2_ecole.png')}}" alt="BDE actuel">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 h-60" src="{{asset('images/image3_ecole.png')}}" alt="Labintech">
        </div>
        

        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
    </a>
</div>

<div class="sponsors">
    <h1>Nos Sponsors</h1>
    <ul>
            <a><img src="{{asset('images/logo_CA.png')}}" alt="logo du crédit agricole"></a>
            <a><img src="{{asset('images/logo_SBP.png')}}" alt="logo de SBP"></a>
            <a><img src="{{asset('images/logo_Pitaya.png')}}" alt="logo du crédit agricole"></a>
    </ul>
</div>

<div class="ytvid">
        <h1>Présentation du BDE</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2G6XuVkj5wE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@endsection