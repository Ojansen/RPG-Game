<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory';
    protected $primaryKey = 'inventory_id';
    public $timestamps = false;

    public function scopeCharacterInventory($qeury, $character_id)
    {
        return $qeury->where('character_id', $character_id)->get();
    }

    public function scopeFindMeds($qeury, $meds_id)
    {
        return $qeury->where('meds_id', $meds_id)->get()->first();
    }

    public function Character()
    {
    	return $this->belongsTo('App\Character', 'character_id', 'character_id');
    }

    public function Enemy()
    {
    	return $this->belongsTo('App\Enemy', 'enemy_id', 'enemy_id');
    }

    public function Armour()
    {
    	return $this->hasMany('App\Armour', 'armour_id', 'armour_id');
    }

    public function Weapons()
    {
    	return $this->hasMany('App\Weapons', 'weapon_id', 'weapon_id');
    }

    public function Hardware()
    {
    	return $this->hasMany('App\Hardware', 'hardware_id', 'hardware_id');
    }

    public function Items()
    {
    	return $this->hasMany('App\Items', 'item_id', 'item_id');
    }

    public function Food()
    {
    	return $this->hasMany('App\Food', 'food_id', 'food_id');
    }

    public function Meds()
    {
    	return $this->hasMany('App\Meds', 'meds_id', 'meds_id');
    }
}
