<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meds extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meds';
    protected $primaryKey = 'meds_id';
    public $timestamps = false;

    public function Species()
    {
    	return $this->belongsTo('App\Species', 'only_for_species_id', 'species_id');
    }

    public function Hospital()
    {
    	return $this->belongsTo('App\Hospital', 'meds_id', 'meds_id');
    }

    public function Inventory()
    {
    	return $this->belongsTo('App\Inventory', 'meds_id', 'meds_id');
    }
}
