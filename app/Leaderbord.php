<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaderbord extends Model
{
    public function Character()
    {
    	return $this->hasMany('App\Character', 'character_id', 'character_id');
    }
}
