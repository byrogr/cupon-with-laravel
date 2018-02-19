<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\CityRepository;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
	private $city;

	public function __construct(CityRepository $city)
	{
		$this->city = $city;
	}

	public function ciudadesCombo()
	{
		$cities = $this->city->getAll();
		return response()->view('partials.cities-control', compact(['cities']));
	}
}