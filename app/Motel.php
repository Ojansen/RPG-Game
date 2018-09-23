<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'motel';
    protected $primaryKey = 'motel_id';
    public $timestamps = false;

    public function Place()
    {
    	return $this->hasMany('App\Place', 'motel_id', 'motel_id');
    }

    public function Owner()
    {
    	return $this->belongsTo('App\Character', 'owner', 'character_id');
    }
}
