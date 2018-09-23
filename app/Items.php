<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    public $timestamps = false;

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'item_id', 'item_id');
    }

    public function Inventory()
    {
    	return $this->belongsTo('App\Inventory', 'item_id', 'item_id');
    }

    public function Species()
    {
    	return $this->belongsTo('App\Species', 'only_for_species_id', 'species_id');
    }
}
