<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'place';
    protected $primaryKey = 'place_id';
    public $timestamps = false;

    public function Planet()
    {
    	return $this->belongsTo('App\Planet', 'planet_id', 'planet_id');
    }
    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'shop_id', 'shop_id');
    }
    public function Character()
    {
        return $this->belongsTo('App\Character', 'planet_id', 'current_place_id');
    }
    public function Hospital()
    {
    	return $this->hasMany('App\Hospital', 'hospital_id', 'hospital_id');
    }
    public function Dome()
    {
    	return $this->hasMany('App\Dome', 'dome_id', 'dome_id');
    }
    public function Motel()
    {
    	return $this->hasMany('App\Motel', 'motel_id', 'motel_id');
    }
    public function Spaceship()
    {
    	return $this->hasMany('App\Spaceship', 'spaceship_id', 'spaceship_id');
    }
    public function Wilderness()
    {
    	return $this->hasMany('App\Wilderness', 'wilderness_id', 'wilderness_id');
    }
}
