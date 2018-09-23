<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\BuyStuff;

use App\Character;
use App\Shop;
use App\Planet;
use App\Meds;

class ShopController extends Controller
{
	use BuyStuff;

	public function Shop()
    {
    	$character = Character::GetCharacter(Auth::id())->first();
    	// dd($character);
    	$current_planet = Planet::GetCurrentPlanet($character->current_place_id);
        $planet = Planet::find($current_planet->planet_id);
    	// dd($current_planet);
    	if ($current_planet->planet_id == $planet->planet_id) {
    		$shop = Shop::FindShop($planet->planet_id);

            // dd($shop->med);
	        return view('World/'.$planet->planet_name.'.Shop', compact('shop'));
    	} 
        else {
            return redirect()->route('WorldIndex')->with('error', 'You\'re not on '.$planet->planet_name);
        }
    	
    }
    public function Buyweapon($weapon_id)
    {
    	return $this->Weapon($weapon_id);
    }
    public function Buyarmour($armour_id)
    {
        return $this->Armour($armour_id);
    }
    public function Buymeds($meds_id)
    {
        // dd($meds_id);
        return $this->Meds($meds_id);
    }
}
