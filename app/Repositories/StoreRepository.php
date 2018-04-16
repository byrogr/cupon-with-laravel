<?php

namespace App\Repositories;


use App\Models\Store;

class StoreRepository extends AbstractRepository
{
    protected $model;

    public function __construct(Store $model)
    {
        $this->model = $model;
    }

    public function findOfertasBySlug($slug)
    {
        return $this->model->where('slug', $slug)
                    ->first()
                    ->offers()
                    ->get();
    }
}