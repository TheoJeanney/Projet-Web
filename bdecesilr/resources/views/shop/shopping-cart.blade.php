@extends('layouts.app')
<title>BDE CESI La Rochelle - Boutique</title>

@section('title')
        Shopping Basket
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                @if(is_array($shops))
                    @foreach($shops as $shop)
                            <li class="list-group-item">
                                <span class="badge">Il y a {{ $shop['qty'] }} produits</span>
                                <strong>Nom du produit : {{ $shop['item']['Product_name'] }}</strong>
                                <span class="label label-success">Prix total : {{ $shop['Product_price'] }}</span>
                                <div class="btn-group">
                                    <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Reduire de 1</a></li>
                                        <li><a href="#">Reduire tout</a></li>
                                    </ul>
                                </div>
                            </li>
                    @endforeach
                @endif
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <a href="#" type="button" class="btn btn-success"> Paiement </a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No items in Cart!</h2>
            </div>
        </div>
    @endif
@endsection