@extends('layouts.app')
<title>BDE CESI La Rochelle - Accueil</title>

@section('mainpage')
<div>
<label for="firstname"><b>Nom de l'article</b></label>
<input type="text" placeholder="Entrer nom" name="Name">
</div>
<div>
<label for="firstname"><b>Image de l'article</b></label>
   

    <div class="panel panel-primary">

      <div class="panel-heading"><h2></div>

      <div class="panel-body">

   

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif

  

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

  

        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

  

                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>

   

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Envoyer</button>

                </div>

   

            </div>

        </form>

  

      </div>

    </div>

</div>
<div>
<label for="firstname"><b>Prix de l'article</b></label>
<input type="text" placeholder="Prix" name="Price">
</div>
<hr>
<div class="row">
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div>
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div>
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div>
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div> 
</div>
<div class="row">
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div>
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div>
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div>
  <div class="col"><img class="clothes" src="{{asset('/images/clothes.png')}}"  title="Logo of a company" alt="Logo of a company"></div>
</div>
@endsection