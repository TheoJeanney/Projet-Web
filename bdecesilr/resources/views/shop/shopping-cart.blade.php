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
                    @foreach($products as $product)
                            <li class="list-group-item">
                                <span class="badge">{{ $product['qty'] }}</span>
                                <strong>{{ $product['item']['title'] }}</strong>
                                <span class="label label-success">{{ $product['price'] }}</span>
                                <div class="btn-group">
                                    <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdo"></button>
                                </div>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @else

    @endif
@endsection