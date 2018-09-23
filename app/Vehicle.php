<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle';
    protected $primaryKey = 'vehicle_id';
    public $timestamps = false;

    public function Character()
    {
    	return $this->belongsTo('App\Character', 'vehicle_id', 'vehicle_id');
    }
}
