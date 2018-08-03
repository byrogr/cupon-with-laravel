<section class="descripcion">
    <h1>{{ $slot }}</h1>

    <p>{{ $offer->description }}</p>

    <a class="boton" href="#" role="button">Comprar »</a>
</section>

<section class="galeria">
    <img alt="Fotografía de la oferta" src="{{ $offer->image }}" alt="{{ $offer->name }}>
    <p class="precio">{{ $offer->price }} &euro; <span>{{ $offer->dscto }}%</span></p>
    <p><strong>Condiciones</strong> {{ $offer->conditions }}</p>
</section>

<section class="estado">
    <div class="tiempo">
        <strong>Faltan</strong>: ##:##:##
    </div>

    <div class="compras">
        <strong>Compras</strong>: {{ $offer->purchases }}
    </div>

    <div class="faltan">
        <strong>Oferta activada</strong> por superar las <strong>{{ $offer->umbral }}</strong> compras necesarias
    </div>
</section>

<section class="direccion">
    <h2>Disfruta de la oferta en</h2>
    <p>
        <a href="">{{ $offer->store->name }}</a>
        {{ $offer->store->address }}
        <br>
        {{ $offer->city->name }}
    </p>
</section>

<section class="tienda">
    <h2>Sobre la tienda</h2>
    {{ $offer->store->description }}
</section>
