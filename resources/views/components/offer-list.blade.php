
@foreach($offers as $offer)
    <div class="row">
        <div class="col-md-8">
            <h1>
                <a href="{{ route('detalle', ['ciudad' => $offer->city->slug, 'oferta' => $offer->slug]) }}">{{ $offer->name }}</a>
            </h1>
            <p>
                {{ $offer->description }}
            </p>
            <p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Comprar »</a>
                <span class="float-right"><b>Faltan: </b> ##h:##m:##s</span>
            </p>
        </div>
        <div class="col-md-4">
            <figure class="figure">
                <img src="{{ $offer->image }}" class="figure-img img-fluid rounded" alt="{{ $offer->name }}">
                <figcaption class="figure-caption">S/. <b>{{ $offer->price }}</b> -{{ $offer->dscto }}%</figcaption>
            </figure>
            <p style="font-size:12px;" class="text-justify">
                Disfruta de esta oferta en <a href="#">Tienda {{ $offer->store->name }}</a>
            </p>
        </div>
    </div>
    <hr>
@endforeach