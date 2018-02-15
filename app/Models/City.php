<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'slug'];

    public $timestamps = false;

    // Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug(strtolower($value));
    }

    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }

    public function stores()
    {
        return $this->hasMany('App\Models\Store');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
