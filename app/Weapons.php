<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapons extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weapons';
    protected $primaryKey = 'weapon_id';
    public $timestamps = false;

    public function Species()
    {
    	return $this->belongsTo('App\Species', 'only_for_species_id', 'species_id');
    }

    public function Inventory()
    {
    	return $this->belongsTo('App\Inventory', 'weapon_id', 'weapon_id');
    }

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'shop_id', 'shop_id');
    }

    public function Dome()
    {
    	return $this->belongsTo('App\Dome', 'weapon_id', 'weapon_id');
    }

    public function Character()
    {
        return $this->belongsTo('App\Character', 'weapon_equipped', 'weapon_id');
    }
}
