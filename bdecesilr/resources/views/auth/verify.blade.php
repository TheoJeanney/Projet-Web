@extends('layouts.app')
<title>Vérification de l'e-mail </title>

<!-- This code permit to verify the email adress of each user. -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifier votre e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification vous a été envoyé.') }} <!-- This alert appears when the email's send. -->
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier vos e-mails pour valider le lien de vérification.') }}
                    {{ __('Si vous n\'avez pas reçu l\'e-mail, ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}"> <!-- the POST method's used to send an other verification email. -->
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                            {{ __('cliquez ici pour en demander un nouveau') }} <!-- this button permit to run the action -->
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
