<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armour extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'armour';
    protected $primaryKey = 'armour_id';
    public $timestamps = false;

    public function Species()
    {
    	return $this->belongsTo('App\Species', 'only_for_species_id', 'species_id');
    }

    public function Inventory()
    {
    	return $this->belongsTo('App\Inventory', 'armour_id', 'armour_id');
    }

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'armour_id', 'armour_id');
    }

    public function Dome()
    {
    	return $this->belongsTo('App\Dome', 'armour_id', 'armour_id');
    }

    public function Character()
    {
        return $this->belongsTo('App\Character', 'armour_equipped', 'armour_id');
    }
}
