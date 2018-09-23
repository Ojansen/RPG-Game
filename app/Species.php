<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'species';
    protected $primaryKey = 'species_id';
    public $timestamps = false;

    public function Character()
    {
    	return $this->belongsTo('App\Character', 'species_id', 'species_id');
    }

    public function Planet()
    {
    	return $this->hasOne('App\Planet', 'planet_id', 'home_planet_id');
    }

    public function Enemy()
    {
    	return $this->belongsTo('App\Enemy', 'species_id', 'species_id');
    }

    public function Spaceship()
    {
    	return $this->belongsTo('App\Spaceship', 'only_for_species_id', 'species_id');
    }

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'species_id', 'species_id');
    }

    public function Weapons()
    {
    	return $this->hasOne('App\Weapons', 'base_weapon_id', 'weapon_id');
    }

    public function Armour()
    {
    	
    	return $this->hasOne('App\Armour', 'base_armour_id', 'armour_id');
    }

    public function Vehicle()
    {
    	return $this->belongsTo('App\Vehicle', 'only_for_species_id', 'species_id');
    }

}
