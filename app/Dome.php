<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dome extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dome';
    protected $primaryKey = 'dome_id';
    public $timestamps = false;

    public function Place()
    {
    	return $this->hasMany('App\Place', 'dome_id', 'dome_id');
    }

    public function Enemy()
    {
    	return $this->hasMany('App\Enemy', 'enemy_id', 'enemy_id');
    }

    public function Weapons()
    {
    	return $this->hasMany('App\Weapons', 'weapon_id', 'weapon_id');
    }

    public function Food()
    {
    	return $this->hasMany('App\Food', 'food_id', 'food_id');
    }
}
