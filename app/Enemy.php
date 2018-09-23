<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'enemy';
    protected $primaryKey = 'enemy_id';
    public $timestamps = false;

    public function scopeEnemyPlanet($qeury, $planet_id)
    {
        return $qeury->where('planet_id', $planet_id)->get();
    }

    public function Dome()
    {
    	return $this->belongsTo('App\Dome', 'enemy_id',
    		'enemy_id');
    }

    public function Planet()
    {
    	return $this->belongsTo('App\Planet', 'enemy_id', 'enemy_id');
    }

    public function Inventory()
    {
    	return $this->hasOne('App\Inventory', 'enemy_id', 'inventory_id');
    }

    public function Species()
    {
    	return $this->hasOne('App\Species', 'species_id', 'species_id');
    }

    public function Loot()
    {
        return $this->hasOne('App\Loot', 'enemy_id', 'enemy_id');
    }

    public function Wilderness()
    {
        return $this->belongsTo('App\Wilderness', 'enemy_id', 'enemy_id');
    }
}
