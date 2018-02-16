<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 16/02/2018
 * Time: 17:36
 */

namespace App\Repositories;

use App\Models\Offer;

class OfferRepository
{
    private $model;

    public function __construct(Offer $model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function getByCity($idCity)
    {
        return $this->model->where('city_id', $idCity)->first();
    }

}