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
                                <input id="firstname" type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="Prénom">

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
                                <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" placeholder="Nom">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

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
                                <input id="subject" type="text" class="form-control @error('name') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" placeholder="Sujet">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row"></div>
                            <label for="textArea">Votre message</label>
                            <textarea class="form-control" id="textArea" rows="3"></textarea>
                        </br>
                        
                        <div style="text-align: center;">
                            <span>
                                <button class="submit-btn site_button cta" type="submit">Envoyer l'email</button>
                            </span>
                            <span>
                                <button class="reset-btn site_button" type="reset">Réinitialiser le formulaire</button>
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

                <h4>BDE CESI La Rochelle</h4><br /><br />
                <h5>Notre Adresse</h5><br />
                <a href="https://www.google.com/maps/place/Campus+CESI/@46.1847625,-1.1489224,17z/data=!3m1!4b1!4m5!3m4!1s0x480153b8ae17c9cd:0xd1e78309de31e814!8m2!3d46.1847625!4d-1.1467337">
                8 Rue Isabelle Autissier, 17140 Lagord</a><br /><br /><br />
                <h5>Notre Email</h5><br />
                <a href="mailto:bde.cesilr@cesi.fr">bde.cesilr@cesi.fr</a><br /><br />
                <div class="social">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline quick-links text-center center-block">
                            <li class="list-inline-item"><a href="https://www.facebook.com/bdecesilr/"><i id="social-fb" class="fa fa-facebook-square fa-2x"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/bde_cesi_larochelle/"><i id="social-ig"  class="fa fa-instagram fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </span>
        </span>
    </span>
</div>
</div>
</div>
@endsection