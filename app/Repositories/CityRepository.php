<?php

namespace App\Repositories;

use App\Repositories\AbstractRepository;
use App\Models\City;

class CityRepository extends AbstractRepository
{
	public function __construct(City $model)
	{
		$this->model = $model;
	}

	public function findBySlug($slug)
	{
		return $this->model
			->where('slug', $slug)
			->first();
	}

	public function findCiudadesCercanas($id)
	{
		return $this->model
			->where('id', '<>', $id)
			->orderBy('name', 'asc')
			->take(5)
			->get();
	}
}