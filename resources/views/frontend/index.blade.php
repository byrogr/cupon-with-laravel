@extends('layouts.frontend')

@section('content')
    @component('components.offer-detail', ['offer' => $offer])
    	<a href="{{ route('detalle', ['ciudad' => $offer->city->slug, 'oferta' => $offer->slug]) }}">{{ $offer->name }}</a>
    @endcomponent
@endsection

@section('aside')
    @parent
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
            <h3>Sobre nosotros</h3>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur harum, sequi
                dolorum quae dicta placeat sit quos similique autem eligendi ex, praesentium veniam saepe ducimus,
                repudiandae, dolore provident est! Quas.
            </p>
        </div><!-- end of .col -->
    </div><!-- end of .row -->
@endsection
