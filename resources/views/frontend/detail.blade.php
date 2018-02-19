@extends('layouts.frontend')

@section('content')
    @component('components.offer-detail', ['offer' => $offer])
    	{{ $offer->name }}
    @endcomponent
@endsection

@section('aside')
	@parent
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-12">
			<h3>Ofertas en otras ciudades</h3>
			@foreach($related as $r)
				<p>
					<b>{{ $r->ciudad }}: </b> 
					<a href="{{ route('detalle', ['ciudad' => $r->cityslug, 'oferta' => $r->slug]) }}">{{ $r->name }}</a>
				</p>
			@endforeach
		</div><!-- end of .col -->
	</div><!-- end of .row -->
@endsection