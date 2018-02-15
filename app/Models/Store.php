<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'city_id',
        'name',
        'slug',
        'login',
        'password',
        'description',
        'address'
    ];

    public $timestamps = false;

    // mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug(strtolower($value));
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }
}
