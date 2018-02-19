@extends('layouts.frontend')

@section('content')
	<h1>Ofertas recientes en {{ $city->name }}</h1>
	@component('components.offer-list', ['offers' => $recientes])
	@endcomponent
@endsection

@section('aside')
	@parent
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-12">
			<h3>Ofertas en otras ciudades</h3>
			<ul>
				@foreach($cercanas as $ciudad)
					<li>
						<a href="{{ route('recientes', ['ciudad' => $ciudad->slug]) }}">{{ $ciudad->name }}</a>
					</li>
				@endforeach
			</ul>
			
		</div>
	</div>
@endsection