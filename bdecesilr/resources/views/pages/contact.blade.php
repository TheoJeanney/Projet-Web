@extends('layouts.app')
<title>BDE CESI La Rochelle - Contact</title>


@section('mainpage')

<div class="container">

    <div class="row justify-content-left">
        
        <span class="col-md-6">
            <span class="card">
                <div class="card-header">{{ __('Contactez nous') }}</div>

                <span class="card-body">
                    <span method="POST" action="{{ route('register') }}">
                        @csrf

                        <span class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <span class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </span>
                        </span>
                        
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Votre sujet') }}</label>
                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control @error('name') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!<div class="form-group row">
                            <label for="textArea" ></label>Votre message</label>
                            <button style="float: right;" class="btn btn-danger fa fa-trash" onclick="document.getElementById('textArea').value = ''"> </button>
                            <textarea class="form-control" id="textArea" rows="3"></textarea>
                        </!<div>
                        
                        <div style="text-align: center;">
                            <span>
                                <button class="submit-btn site_button cta" type="submit">Envoyer l'email</button>
                            </span>
                        </div>

                    </span>

                </span>
            </span>
        </span>
        
    

    <span class="col-md-6">
        <span class="card">
            <div class="card-header">{{ __('Nos coordonnées') }}</div>
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