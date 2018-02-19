<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\AbstractRepository;
use App\Models\Offer;
use App\Models\City;

class OfferRepository
{
    public function __construct(Offer $model)
    {
        $this->model = $model;
    }

    public function findOfertasDelDia($ciudad)
    {
        return City::where('slug', $ciudad)
                    ->first()
                    ->offers()
                    ->where('revised', true)
                    ->orderBy('publication_date', 'desc')
                    ->first();
    }

    public function findOfertaDetalle($ciudad, $oferta)
    {
        return City::where('slug', $ciudad)
                    ->first()
                    ->offers()
                    ->where('revised', true)
                    ->where('slug', $oferta)
                    ->orderBy('publication_date', 'desc')
                    ->first();
    }

    public function findOfetasRelacionadas($ciudad)
    {
        return DB::table('offers as o')
            ->select('o.name', 'o.slug', 'c.name as ciudad', 'c.slug as cityslug')
            ->join('cities as c', 'c.id', '=', 'o.city_id')
            ->where('o.revised', 1)
            ->where('c.slug', '<>', $ciudad)
            ->take(5)
            ->get();
    }

    public function findOfertasRecientes($city_id)
    {
        return $this->model
                    ->where('revised', true)
                    ->where('city_id', $city_id)
                    ->orderBy('publication_date', 'desc')
                    ->take(5)
                    ->get();
    }

}