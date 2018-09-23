<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spaceship extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'spaceship';
    protected $primaryKey = 'spaceship_id';
    public $timestamps = false;

    public function Place()
    {
    	return $this->belongsTo('App\Place', 'spaceship_id', 'spaceship_id');
    }

    public function Shop()
    {
    	return $this->hasMany('App\Shop', 'is_black_shop', 'spaceship_id');
    }

    public function Species()
    {
    	return $this->hasOne('App\Species', 'only_for_species_id', 'species_id');
    }

}
