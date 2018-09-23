<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'planet';
    protected $primaryKey = 'planet_id';
    public $timestamps = false;

    public function scopeGetPlanet($qeury, $planet_id)
    {
        return $qeury->where('planet_id', $planet_id)->get();
    }

    public function scopeGetCurrentPlanet($qeury, $current_planet)
    {
        return $qeury->where('planet_id', $current_planet)->get()->first();
    }

    public function Species()
    {
    	return $this->belongsTo('App\Species', 'species_id', 'species_id');
    }

    public function Home()
    {
        return $this->hasOne('App\Home', 'home_id', 'home_id');
    }

    public function Food()
    {
    	return $this->hasMany('App\Food', 'food_id', 'food_id');
    }

    public function Items()
    {
    	return $this->hasMany('App\Items', 'item_id', 'item_id');
    }

    public function Enemy()
    {
    	return $this->hasMany('App\Enemy', 'enemy_id', 'enemy_id');
    }

    public function Place()
    {
        return $this->hasMany('App\Place', 'planet_id', 'planet_id');
    }
}
