<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OfferRepository;
use App\Repositories\CityRepository;

class SiteController extends Controller
{
    private $offer;
    private $city;

    public function __construct(OfferRepository $offer, CityRepository $city)
    {
        $this->offer = $offer;
        $this->city = $city;
    }

    public function listaCiudades()
    {
        $cities = $this->city->getAll();
        return response()->view('partials.cities-control', compact(['cities']));    }

    public function portada($ciudad = null)
    {
        $cities = $this->city->getAll();
        if (!$ciudad) {
            $ciudad = $this->getDefaultCity();
            return redirect()->route('portada', ['ciudad' => $ciudad]);
        }
        //dd($ciudad);
        $offer = $this->offer->findOfertasDelDia($ciudad);
        //dd($offer);
        return response()->view('frontend.index', compact(['offer', 'cities']));
    }

    public function detalle($ciudad, $oferta)
    {
        $cities = $this->city->getAll();
        $offer = $this->offer->findOfertaDetalle($ciudad, $oferta);
        $related = $this->offer->findOfetasRelacionadas($ciudad);
        return response()->view('frontend.detail', compact(['offer', 'cities', 'related']));
    }

    public function recientes($ciudad)
    {
        $cities = $this->city->getAll();
        $city = $this->city->findBySlug($ciudad);
        $cercanas = $this->city->findCiudadesCercanas($city->id);
        $recientes = $this->offer->findOfertasRecientes($city->id);
        return response()->view('frontend.recented', compact(['city', 'cercanas', 'recientes', 'cities']));
    }

    // public function cambiar($ciudad)
    // {
    //     return redirect()->route('portada', ['ciudad' => $ciudad]);
    // }
    //
    public function ciudades()
    {
        $cities = $this->city->getAll();
    }

    public function page($page = "")
    {
        $view = 'frontend/' . $page;
        return response()->view($view);
    }

    private function getDefaultCity()
    {
        $city = $this->city->getById(1);
        //dd($city);
        return $city->slug;
    }
}
