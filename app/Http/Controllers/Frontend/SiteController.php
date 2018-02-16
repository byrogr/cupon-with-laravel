<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OfferRepository;
use App\Models\City;

class SiteController extends Controller
{
    private $offer;

    public function __construct(OfferRepository $offer)
    {
        $this->offer = $offer;
    }

    public function index()
    {
        $cities = City::all();
        $offer = $this->offer->getByCity(1);
        return response()->view('frontend.index', compact(['offer', 'cities']));
    }

    public function page($page = "")
    {
        $view = 'frontend/' . $page;
        return response()->view($view);
    }
}
