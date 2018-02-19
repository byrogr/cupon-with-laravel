<div class="row">
    <div class="col-md-6">
        <h1>
            {{ $slot }}
        </h1>
        <p>
            {{ $offer->description }}
        </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Comprar »</a></p>
    </div>
    <div class="col-md-6">
        <div class="card">
            <img class="card-img-top" src="{{ $offer->image }}" alt="{{ $offer->name }}">
            <div class="card-body">
                <p class="text-center">S/. <b>{{ $offer->price }}</b> -{{ $offer->dscto }}%</p>
                <p style="font-size:12px;" class="text-justify"><b>Condicones: </b>{{ $offer->conditions }}</p>
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <p class="rounded border text-center" style="padding: 10px;font-size: 16px;">
            <b>Faltan: </b> ##h:##m:##s &nbsp;&nbsp;&nbsp;
            <b>Compras: </b> {{ $offer->purchases }} &nbsp;&nbsp;&nbsp;
            <b>Faltan: </b> {{ $offer->umbral }} compras para activar la oferta.
        </p>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-4">
        <h5>Disfruta de la oferta en</h5>
        <p>
            <a href="#">{{ $offer->store->name }}</a>
            <br>
            {{ $offer->store->address }}
            <br>
            {{ $offer->city->name }}
        </p>
    </div>
    <div class="col-md-8">
        <h5>Sobre la tienda</h5>
        <p>{{ $offer->store->description }}</p>
    </div>
</div>