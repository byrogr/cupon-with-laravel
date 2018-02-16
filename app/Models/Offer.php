<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'city_id',
        'store_id',
        'name',
        'slug',
        'description',
        'conditions',
        'image',
        'price',
        'dscto',
        'publication_date',
        'expiration_date',
        'purchases',
        'umbral',
        'revised'
    ];

    public $timestamps = false;

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug(strtolower($value));
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function store()
    {
        return $this->belongsTo('App\Models\Store');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->using('App\Models\Sale');
    }
}
