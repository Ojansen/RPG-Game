<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'food';
    protected $primaryKey = 'food_id';
    public $timestamps = false;

    public function Inventory()
    {
    	return $this->belongsTo('App\Inventory', 'food_id', 'food_id');
    }

    public function Species()
    {
    	return $this->belongsTo('App\Species', 'only_for_species_id', 'species_id');
    }

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'food_id', 'food_id');
    }

    public function Dome()
    {
        return $this->belongsTo('App\Dome', 'food_id', 'food_id');
    }
}
