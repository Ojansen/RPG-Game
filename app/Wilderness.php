<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilderness extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'species';
    protected $primaryKey = 'species_id';
    public $timestamps = false;

    public function Place()
    {
    	return $this->belongsTo('App\Place', 'place_id', 'place_id');
    }

    public function Enemy()
    {
    	return $this->hasMany('App\Enemy', 'enemy_id', 'enemy_id');
    }
}
