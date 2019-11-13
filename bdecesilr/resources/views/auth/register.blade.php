@extends('layouts.app')
<title>BDE CESI La Rochelle - Inscription</title>

<!-- This code permit to made the register form. -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}"> <!-- the POST method's used to send the data to our database to create the user. -->
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="Prénom">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> <!-- if there's an invalid firstname, an alert appears -->
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" placeholder="Nom">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert"> <!-- if there's an invalid lastname, an alert appears -->
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
                                        <strong>{{ $message }}</strong> <!-- if there's an invalid email, an alert appears -->
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required placeholder="Numéro de téléphone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> <!-- if there's an invalid phone, an alert appears -->
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="campus" class="col-md-4 col-form-label text-md-right">{{ __('Campus') }}</label>

                            <div class="col-md-6">
                            <select id="inputState" class="form-control" name="campus"> <!-- the data are on a custom select list. -->
                                <option selected>Choisissez votre campus</option>
                                <!-- Check the database for all the campus -->
                                <?php
                                $post=DB::select('SELECT * FROM Campus'); 
                                foreach($post as $post){
                                echo '<option>'.$post->Campus_name.'</option>';
                                }
                                ?>

                                    </select>

                                @error('campus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> <!-- if there's the basic choice (choisissez votre campus), an alert appears -->
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">
                                <input type="checkbox" onclick="ShowPassA()"> Montrer le mot de passe <!-- check to show the password -->
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> <!-- if there's an invalid password, an alert appears -->
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer votre mot de passe">
                                <input type="checkbox" onclick="ShowPassB()"> Montrer le mot de passe <!-- check to show the password -->
                            </div>
                        </div>
                        <div class="condition">
                            <p>En créant un compte, vous acceptez nos 
                                <a href="{{route('condition')}}" class="linkC">
                                    conditions générales d'utilisation et de confidentialité 
                                </a>
                                <input type="checkbox" onclick="#" required> <!-- check to accept the condition -->
                            </p>
                        </div>
                            
                        <div class="form-group row mb-0"></div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inscription') }} <!-- this button permit to run the action -->
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
