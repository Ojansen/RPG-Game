<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hardware';
    protected $primaryKey = 'hardware_id';
    public $timestamps = false;

    public function Species()
    {
    	return $this->belongsTo('App\Species', 'only_for_species_id', 'species_id');
    }

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'hardware_id', 'hardware_id');
    }

    public function Inventory()
    {
    	return $this->belongsTo('App\Inventory', 'hardware_id', 'hardware_id');
    }
}
