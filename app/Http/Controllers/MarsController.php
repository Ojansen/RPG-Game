<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\CombatController;
use App\Traits\Combat;

use App\Character;
use App\Inventory;
use App\Place;
use App\Planet;
use App\Enemy;

use App\Weapons;
use App\Armour;

use App\Shop;
use App\Motel;
use App\Spaceship;
use App\Dome;
use App\Hospital;
use App\NPC;
use App\Wilderness;

class MarsController extends Controller
{
    use Combat;

    public function MarsWilderness()
    {
    	$Planets = Planet::GetPlanet(3)->first();
    	$Enemys = Enemy::EnemyPlanet($Planets->planet_id);
    	return view('World/Mars.Wilderness', compact('Enemys'));
    }
    public function MarsAttackWilderness($enemy_id)
    {
    	return $this->Fight($enemy_id);
    }
}
