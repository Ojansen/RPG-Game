<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'home';
    protected $primaryKey = 'home_id';
    public $timestamps = false;

    public function Planet()
    {
    	return $this->belongsTo('App\Planet', 'planet_id', 'planet_id');
    }

    public function Character()
    {
    	return $this->belongsTo('App\Character', 'character_id', 'character_id');
    }

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'shop_id', 'shop_id');
    }
}
