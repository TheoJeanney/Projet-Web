@extends('layouts.app')

<title>BDE CESI La Rochelle - Boutique</title>

@section('mainpage')

<div>
  
  <div class="NameAr">
  
    <label for="NameArticle"><b>Nom de l'article</b></label>
    <input type="text" placeholder="Entrer nom" name="Name">
  
  </div>

  <button class="NameBr">

    <label for="ImageUp"><b>Image de l'article</b></label>

    <button class="panel panel-primary">

      <div class="panel-heading"></div>

        <button class="panel-body">

        @if ($message = Session::get('success'))

        <button class="alert alert-success alert-block">

          <button type="button" class="close" data-dismiss="alert">×</button>

          <strong>{{ $message }}</strong>

        </button>

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

        </form>

      </div>

    </button>

  </button>

</button>


<div class="NameAr">
  <label for="firstname"><b>Prix de l'article</b></label>
  <input type="text" placeholder="Prix" name="Price">
</div>

<hr>

<div class="NameAr form-group">
  <label for="exampleFormControlSelect1">Catégorie</label>
  <select class="select form-control" id="#">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div>

<div class="NameAr form-group">
  <label for="exampleFormControlSelect1">Tri</label>
  <select class="select form-control" id="#">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div>

<p class="space"></p> 

<div class="row">
  
  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>

  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

  <div class="clothesAr">

    <div class="col rounded border border-dark">

      <p>Nom de l'article : </p>

      <p><img class="clothes" src="{{asset('/images/pute.jpg')}}"  title="Logo of a company" alt="Logo of a company"></p>

      <p>Prix de l'article : </p>

      <p>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>
        <button type="button" class="buttonW btn btn-warning"><img class="croix" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      </p>

    </div>
    
  </div>

</div>

<hr>

<ul class="list-group">

  <li class="list-group-item row d-flex">

  <div class="col-4">Nom de l'article</div>

    <div class="col-8">

      <button type="button" class="buttonB btn btn-warning"><img class="croix_b" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      <button type="button" class="buttonB btn btn-warning"><img class="edit" src="{{asset('/images/edit.png')}}"  title="croix" alt="logo croix"></button>
      <button type="button" class="buttonB btn btn-warning"><img class="valider_b" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>

    </div>
  </li>

  <li class="list-group-item row d-flex">
    
    <div class="col-4">Nom de l'article</div>

    <div class="col-8">
      
      <button type="button" class="buttonB btn btn-warning"><img class="croix_b" src="{{asset('/images/croix.png')}}"  title="croix" alt="logo croix"></button>
      <button type="button" class="buttonB btn btn-warning"><img class="edit" src="{{asset('/images/edit.png')}}"  title="croix" alt="logo croix"></button>
      <button type="button" class="buttonB btn btn-warning"><img class="valider_b" src="{{asset('/images/valider.png')}}"  title="croix" alt="logo croix"></button>

    </div>  

  </li>

</ul>

@endsection