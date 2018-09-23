<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loot extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'loot';
    protected $primaryKey = 'loot_id';
    public $timestamps = false;

    public function Enemy()
    {
    	return $this->belongsTo('App\Enemy', 'enemy_id', 'enemy_id');
    }

    public function Items()
    {
    	return $this->hasMany('App\Items', 'item_id', 'loot_item');
    }

    public function Weapons()
    {
    	return $this->hasMany('App\Weapons', 'weapon_id', 'loot_weapon');
    }

    public function Armour()
    {
    	return $this->hasMany('App\Armour', 'armour_id', 'loot_armour');
    }

    public function Meds()
    {
    	return $this->hasMany('App\Meds', 'meds_id', 'loot_meds');
    }

    public function Food()
    {
    	return $this->hasMany('App\Food', 'food_id', 'loot_food');
    }
}
