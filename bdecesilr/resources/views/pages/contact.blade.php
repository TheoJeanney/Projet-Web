@extends('layouts.app')
<title>BDE CESI La Rochelle - Contact</title>


@section('mainpage')

<style type="text/css">
    .box {
        width: 600px;
        margin: 0 auto;
        border: 1px solid #ccc;
    }
    .has-error {
        border-color: #cc0000;
        background-color: #ffff99;
    }
</style>

<div class="container">

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row justify-content-left">
        
        <span class="col-md-6">
            <span class="card">
                <div class="card-header"><b>{{ __('Contactez nous') }}</b></div>

                <span class="card-body">
                    <span method="POST" action="{{ route('register') }}">
                        @csrf

                        <form method="post" action="{{ url('sendemail/send') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Veuillez entrer votre nom & prénom *</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Veuillez entrer votre adresse email *</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Veuillez entrer votre message *</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" value="Send" class="btn btn-info" />
                            </div>
                            <div class="form-group">
                                <small>* : Champ obligatoire</small>
                            </div>
                        </form>

                    </span>

                </span>
            </span>
        </span>
        
    

    <span class="col-md-6">
        <span class="card">
            <div class="card-header"><b>{{ __('Nos coordonnées') }}</b></div>
            <span class="card-body">
                
                <h5>Notre Email</h5>
                <a href="mailto:bde.cesilr@cesi.fr">bde.cesilr@cesi.fr</a><br /><br />
                
                <h5>Notre Adresse</h5>
                <a href="https://www.google.com/maps/place/Campus+CESI/@46.1847625,-1.1489224,17z/data=!3m1!4b1!4m5!3m4!1s0x480153b8ae17c9cd:0xd1e78309de31e814!8m2!3d46.1847625!4d-1.1467337">
                8 Rue Isabelle Autissier, 17140 Lagord</a><br /><br />
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2762.291257218566!2d-1.1489223844182714!3d46.18476247911614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153b8ae17c9cd%3A0xd1e78309de31e814!2sCampus%20CESI!5e0!3m2!1sfr!2sfr!4v1573648350445!5m2!1sfr!2sfr" width="495" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
            </span>
        </span>
    </span>
</div>
</div>

@endsection