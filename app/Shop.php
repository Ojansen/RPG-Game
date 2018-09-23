<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop';
    protected $primaryKey = 'shop_id';
    public $timestamps = false;

    public function Place()
    {
    	return $this->hasMany('App\Place', 'shop_id', 'shop_id');
    }

    public function Weapons()
    {
    	return $this->hasMany('App\Weapons', 'shop_id', 'shop_id');
    }

    public function Armour()
    {
    	return $this->hasMany('App\Armour', 'shop_id', 'shop_id');
    }

    public function Items()
    {
    	return $this->hasMany('App\Items', 'item_id', 'item_id');
    }

    public function Food()
    {
    	return $this->hasMany('App\Food', 'food_id', 'food_id');
    }

    public function Home()
    {
    	return $this->hasMany('App\Home', 'home_id', 'home_id');
    }

    public function Vehicle()
    {
    	return $this->hasMany('App\Vehicle', 'vehicle_id', 'vehicle_id');
    }

    public function Hardware()
    {
    	return $this->hasMany('App\Hardware', 'hardware_id', 'hardware_id');
    }

    public function scopeFindShop($qeury, $shop_id)
    {
        return $qeury->where('planet_id', $shop_id)->get()->first();
    }
}
