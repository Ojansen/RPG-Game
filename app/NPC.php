<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NPC extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'npc';
    protected $primaryKey = 'npc_id';
    public $timestamps = false;

    public function Dome()
    {
    	return $this->belongsTo('App\Dome', 'npc_id', 'npc_id');
    }

    public function Motel()
    {
    	return $this->belongsTo('App\Motel', 'npc_id', 'npc_id');
    }

    public function Shop()
    {
    	return $this->belongsTo('App\Shop', 'npc_id', 'npc_id');
    }

    public function Hospital()
    {
    	return $this->belongsTo('App\Hospital', 'npc_id', 'npc_id');
    }

    public function Spaceship()
    {
    	return $this->belongsTo('App\Spaceship', 'npc_id', 'npc_id');
    }

}
