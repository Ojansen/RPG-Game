<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateNewCharacter;

use App\Character;
use App\Species;
use App\Inventory;
use App\Place;
use App\Weapons;

class CharacterController extends Controller
{
	public function Index()
	{
		$species = Species::all()->flatten();
		$user_character = Character::find(Auth::id());
		// dd($user_character);
    	return view('/Character.Index', compact('species', 'user_character'));
	}
    public function Create(CreateNewCharacter $request)
    {
    	$species = Species::find($request->input('species'));

    	if (Character::find(Auth::id()) === 1) {
			return redirect()->route('CharacterIndex')->with('error', 'You can only have 1 character');
    	} 
    	else{	
	    	$character_new = new Character;
	    	$character_new->character_name = $request->input('character_name');
	    	$character_new->character_level = 1;
	    	$character_new->character_exp = 0;
	    	$character_new->virtual_coins = 1000;
	    	$character_new->character_health = $species->species_health;
	    	$character_new->character_stamania = $species->species_stamania;
	    	$character_new->character_attack = $species->species_attack;
	    	$character_new->character_defence = $species->species_defence;
	    	$character_new->user_id = Auth::id();
	    	$character_new->species_id = $request->input('species');
	    	$character_new->current_place_id = $species->planet->planet_id;
	    	$character_new->save();

	    	$inventory_new = new Inventory;
	    	$inventory_new->character_id = Auth::id();
	    	$inventory_new->armour_id = $species->base_weapon_id;
	    	$inventory_new->weapon_id = $species->base_armour_id;
	    	$inventory_new->save();

	    	return redirect()->route('CharacterIndex')->with('succes', 'Your character is created succesfully!' );
	    }
    }
}
