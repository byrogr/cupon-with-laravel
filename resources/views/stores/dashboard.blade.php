@extends('layouts.frontend')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Tienda {{ Auth::guard('store')->user()->name }}</h2>
            <p>
                {{ Auth::guard('store')->user()->description }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Oferta</th>
                        <th>Precio</th>
                        <th>Descuento</th>
                        <th>Compras</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offers as $offer)
                        <tr>
                            <td>{{ $offer->publication_date }}</td>
                            <td>{{ $offer->name }}</td>
                            <td>{{ $offer->price }}</td>
                            <td>{{ $offer->dscto }}</td>
                            <td>{{ $offer->purchases }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('aside')
    @parent
@endsection
