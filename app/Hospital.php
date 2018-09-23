<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hospital';
    protected $primaryKey = 'hospital_id';
    public $timestamps = false;

    public function Place()
    {
    	return $this->hasMany('App\Place', 'hospital_id', 'hospital_id');
    }

    public function Meds()
    {
    	return $this->hasMany('App\Meds', 'meds_id', 'meds_id');
    }
}
