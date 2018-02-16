@extends('layouts.frontend')

@section('content')
    <div class="jumbotron" style="margin-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        <a href="#">{{ $offer->name }}</a></h2>
                    <p style="font-size: 16px;">
                        {{ $offer->description }}
                    </p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Comprar »</a></p>
                    <hr>
                    <p style="font-size: 16px;">
                        <b>Faltan: </b> ##h:##m:##s &nbsp;&nbsp;&nbsp;
                        <b>Compras: </b> {{ $offer->purchases }} &nbsp;&nbsp;&nbsp;
                        <b>Faltan: </b> {{ $offer->umbral }} compras para activar la oferta.
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Disfruta de la oferta en</h4>
                            <p style="font-size: 13px;">
                                <a href="#">{{ $offer->store->name }}</a>
                                <br>
                                {{ $offer->store->address }}
                                <br>
                                {{ $offer->city->name }}
                            </p>
                        </div>
                        <div class="col-md-8">
                            <h4>Sobre la tienda</h4>
                            <p style="font-size: 13px;">{{ $offer->store->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ $offer->image }}" alt="{{ $offer->name }}" class="img-thumbnail">
                    <p style="font-size: 13px;">
                        <b>Condiciones: </b>{{ $offer->conditions }}
                    </p>
                </div>
            </div>
            <div class="row">

            </div>

        </div>
    </div>
@endsection
