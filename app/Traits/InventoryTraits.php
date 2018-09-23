<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

use App\Character;
use App\Inventory;

use App\Food;
use App\Weapons;
use App\Armour;
use App\Meds;
use App\Items;
use App\Hardware;

trait InventoryTrait {

	public $inventory;
	public $character;

	public function __construct()
	{
		$this->middleware(function ($request, $next) {
			$this->inventory = Inventory::CharacterInventory(Auth::id());
            $this->character = Character::GetCharacter(Auth::id())->first();

            return $next($request);
        });
		
	}
    public function Weapon($weapon_id)
    {
        $weapon = Weapons::find($weapon_id);
        $power = $weapon->weapon_damage * $this->inventory->where('weapon_id', $weapon_id)->first()->num_of_weapon_id;
    	if ($this->character->weapon_equipped == NULL) {
            $this->character->character_attack = $this->character->species->species_attack + $power;
    		$this->character->weapon_equipped = $weapon->weapon_id;

    	} elseif ($this->character->weapon_equipped <> $weapon_id) {
            $this->character->character_attack = $this->character->species->species_attack;
            $this->character->character_attack = $weapon->weapon_damage * $this->inventory->where('weapon_id', $weapon_id)->first()->num_of_weapon_id + $this->character->species->species_attack;

    		$this->character->weapon_equipped = $weapon->weapon_id;
    	} else {
    		$this->character->weapon_equipped = NULL;
            $this->character->character_attack = $this->character->species->species_attack;
    	}
        
        
    	$this->character->save();
    	return redirect()->route('CharacterIndex');
    }
    public function Armour($armour_id)
    {
        $armour = Armour::find($armour_id);
        $def = $armour->armour_defence * $this->inventory->where('armour_id', $armour_id)->first()->num_of_armour_id;
        // dd($def);
    	if ($this->character->armour_equipped == NULL) {
            $this->character->character_defence = $this->character->species->species_defence + $def;
            $this->character->armour_equipped = $armour->armour_id;

        } elseif ($this->character->armour_equipped <> $armour_id) {
            $this->character->character_defence = $this->character->species->species_defence;
            $this->character->character_defence = $armour->armour_defence * $this->inventory->where('armour_id', $armour_id)->first()->num_of_armour_id + $this->character->species->species_defence;

            $this->character->armour_equipped = $armour->armour_id;
        } else {
            $this->character->armour_equipped = NULL;
            $this->character->character_defence = $this->character->species->species_defence;
        }
    	$this->character->save();
    	return redirect()->route('CharacterIndex');
    }
    public function Food($food_id)
    {
    	$food = Food::find($food_id);
    	$inventory = $this->inventory->where('character_id', Auth::id())->where('food_id', $food_id)->first();
    	switch ($food->food_type) {
    		case 'Fruit':
    			if ($inventory->num_of_food_id <= 1) {
    				$inventory->num_of_food_id = NULL;
    				$inventory->food_id = NULL;
    			} else {
    				$inventory->num_of_food_id = $inventory->num_of_food_id - 1;
    			}
	    		$this->character->character_health = $this->character->character_health + $food->food_effect;
    			break;
    		
    		default:
    			# code...
    			break;
    	}
		$inventory->save();
    	$this->character->save();
    	return redirect()->route('CharacterIndex');
    }
    public function Meds($meds_id)
    {
    	$meds = Meds::find($meds_id);
    	$inventory = Inventory::where('character_id', Auth::id())->where('meds_id', $meds_id)->first();
    	switch ($meds->meds_type) {
    		case 'Health':
    			if ($inventory->num_of_meds_id <= 1) {
    				$inventory->num_of_meds_id = NULL;
    				$inventory->meds_id = NULL;
    			} else {
    				$inventory->num_of_meds_id = $inventory->num_of_meds_id - 1;
    			}
	    		$this->character->character_health = $this->character->character_health + $meds->meds_effect;
    			break;
    		
    		default:
    			# code...
    			break;
    	}
		$inventory->save();
    	$this->character->save();
    	return redirect()->route('CharacterIndex');
    }
}