@foreach($offers as $offer)
    <section class="oferta mini">
        <div class="descripcion">
            <h2>
                <a href="{{ route('detalle', ['ciudad' => $offer->city->slug, 'oferta' => $offer->slug]) }}">{{ $offer->name }}</a>
            </h2>

            <p>{{ $offer->description }}</p>

            <a class="boton" href="#">Comprar</a>

            <div class="estado">
                <strong>Faltan</strong>: ##:##:##
            </div>
        </div>

        <div class="galeria">
            <img alt="Fotografía de la oferta" src="{{ $offer->image }}">
            <p class="precio">{{ $offer->price }} &euro; <span>-{{ $offer->dscto }}%</span></p>
            <p>Disfruta de la oferta en <a href="#">{{ $offer->store->name }}</a></p>
        </div>
    </section>
@endforeach