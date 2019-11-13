@extends('layouts.app')
<title>Confirmer le mot de passe</title>

<!-- This code permit to confirm the password of the user. -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirmation') }}</div>

                <div class="card-body">
                    {{ __('Veuillez confirmer votre mot de passe avant de continuer.') }}

                    <form method="POST" action="{{ route('password.confirm') }}"> <!-- the POST method's used to send the password to our database to update the password. -->
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe actuel">

                                @error('password')  <!-- if there's an invalid password, an alert appears -->
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"> <!-- this button permit to run the action -->
                                    {{ __('Confirmer le mot de passe') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"> <!-- redirection to the reset formulaire -->
                                        {{ __('Mot de passe oublié') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
