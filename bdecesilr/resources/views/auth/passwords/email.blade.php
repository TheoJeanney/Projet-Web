@extends('layouts.app')
<title>Réinitialiser le mot de passe</title>

<!-- This code permit to made the first part of the reset form. -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Réinitialisation du mot de passe') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Nous allons vous envoyer un email avec un lien pour réinitialiser votre mot de passe.') }}
                    <br>
                    <form method="POST" action="{{ route('password.email') }}"> <!-- the POST method's used to send the password to our database to update the password. -->
                        @csrf

                        <div class="form-group row">
                        
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"> <!-- if there's an invalid email, an alert appears -->
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary"> <!-- this button permit to run the action -->
                                            {{ __('Envoyer le mail') }}
                                        </button>

                                    </div>
                                </div>  </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
