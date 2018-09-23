<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character';
    protected $primaryKey = 'character_id';
    public $timestamps = false;

    public function scopeGetCharacter($qeury, $user_id)
    {
        return $qeury->where('character_id', $user_id)->get();
    }

    public function scopeCheckPlanet($qeury, $user_id, $planet_id)
    {
        $character = $qeury->where('character_id', $user_id)->get()->first();
        if ($character->current_place_id === $planet_id) {
            return True;
        } else {
            return "You're not on this planet";
        }
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function Vehicle()
    {
    	return $this->hasOne('App\Vehicle', 'vehicle_id', 'vehicle_id');
    }

    public function Home()
    {
    	return $this->hasOne('App\Home', 'home_id', 'home_id');
    }

    public function Inventory()
    {
    	return $this->hasMany('App\Inventory', 'character_id', 'character_id');
    }

    public function Species()
    {
    	return $this->hasOne('App\Species', 'species_id', 'species_id');
    }

    public function Place()
    {
        return $this->hasMany('App\Place', 'planet_id', 'current_place_id');
    }

    public function Weapons()
    {
        return $this->hasOne('App\Weapons', 'weapon_id', 'weapon_equipped');
    }

    public function Armour()
    {
        return $this->hasOne('App\Armour', 'armour_id', 'armour_equipped');
    }
}
