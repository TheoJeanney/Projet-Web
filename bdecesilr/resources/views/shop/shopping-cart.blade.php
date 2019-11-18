@if(Auth::check())
    @if(auth()->user()->Id_status>=1)

@extends('layouts.app')
<title>BDE CESI La Rochelle - Panier</title>

@section('title')
        Panier
@endsection
<!---------------------------------------------Page of the shopping cart----------------------------------------------------->
@section('content')


    <a href="{{asset('/shop')}}" class="btn btn-danger float-left">Retour</a>
    <br/><br/>
        @if(Session::has('cart'))
    <h1  class="row justify-content-center" >Panier</h1>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                @if(is_array($shops))
                    @foreach($shops as $shop)
                            <li class="list-group-item">
                                <span class="badge">Il y a {{ $shop['qty'] }} produits</span>
                                <br/>
                                <strong>Nom du produit : <em>{{ $shop['item']['Product_name'] }}</em></strong>
                                <br/>
                                <span class="label label-success">Prix total : <em>{{ $shop['Product_price'] }}</em> €</span>
                                <br/>
                            </li>
                    @endforeach
                @endif
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: {{ $totalPrice }} €</strong>
            </div>
        </div>
        <hr>
        <form method="post" action="{{ url('shopping-cart/paiement') }}">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <input type="submit" name="send" value="Paiement" class="btn btn-success btn-block" />
                </div>
            </div>
        </form>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Pas de produit dans le panier!</h2>
            </div>
        </div>
    @endif
@endsection

@else
@section('adminpage')
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url=/projetwebf/bdecesilr/public/index") ?>
@endsection
        @endif

@else

@section('adminpage')
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url=/projetwebf/bdecesilr/public/index") ?>
@endsection
@endif