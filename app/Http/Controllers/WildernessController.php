<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\Combat;

use App\Character;
use App\Planet;
use App\Enemy;

class WildernessController extends Controller
{
    use Combat;

    public function WildernessIndex($planet_name)
    {
        $planet = Planet::all()->where('planet_name', $planet_name)->first();
        // dd($planet);
        $characterPlanet = Character::CheckPlanet(Auth::id(), $planet->planet_id);
    	$enemys = Enemy::EnemyPlanet($planet->planet_id);
    	return view('World/'.$planet->planet_name.'.Wilderness', compact('enemys'));
    }
    public function AttackWilderness($planet_name, $enemy_id)
    {
        $planet = Planet::all()->where('planet_name', $planet_name)->first();
            return $this->Fight($enemy_id);
        if (Character::CheckPlanet(Auth::id(), $planet->planet_id) == True) {
        } else {
            return redirect()->route('WorldIndex')->with('error', 'You\'re not on '.$planet->planet_name);
        }
    }
}
