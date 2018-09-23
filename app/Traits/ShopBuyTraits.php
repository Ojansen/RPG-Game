<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

use App\Character;
use App\Inventory;
use App\Enemy;
use App\Planet;

use App\Armour;
use App\Weapons;
use App\Hospital;
use App\Meds;

trait BuyStuff {

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

    public function Weapon($weapon_id) {

        $weapon = Weapons::all()->where('shop_id', $this->character->current_place_id)->where('weapon_id', $weapon_id)->first();
        if ($weapon == null) {
            return redirect()->route('WorldIndex')->with('error', 'Not found.');
        }

        if ($this->character->virtual_coins < $weapon->weapon_price ) {
            return redirect()->route('Shop')->with('error', 'insufficiant Virtual-Coins');
        } else {
            $this->character->virtual_coins = $this->character->virtual_coins - $weapon->weapon_price;

            if ($this->inventory->where('weapon_id', $weapon_id)->isEmpty() == true) {
                    
                $inventory_new = new Inventory;
                $inventory_new->character_id = Auth::id();
                $inventory_new->weapon_id = $weapon->weapon_id;
                $inventory_new->num_of_weapon_id = 1;
                $inventory_new->save();
            }
            elseif ($this->inventory->where('weapon_id', $weapon_id)->isEmpty() == false) {
                for ($i=0; $i < $this->inventory->count(); $i++) { 
                    if ($this->inventory[$i]->weapon_id === $weapon->weapon_id) {
                        $this->inventory[$i]->num_of_weapon_id += 1;
                        $this->inventory[$i]->save();
                    }
                }
            }
            $this->character->save();
            $weapon->save();

        }
        $planet = Planet::find($this->character->current_place_id)->first();
        $planet_name = $planet->planet_name.'Shop';
        // dd($planet_name);
        return redirect()->route($planet_name)->with('succes', 'Succesfully purchesed '.$weapon->weapon_name.' for V€ '.$weapon->weapon_price);
    }

    public function Armour($armour_id)
    {
        $armour = Armour::all()->where('shop_id', $this->character->current_place_id)->where('armour_id', $armour_id)->first();
        if ($armour == null) {
            return redirect()->route('WorldIndex')->with('error', 'Not found.');
        }

        if ($this->character->virtual_coins < $armour->armour_price ) {
            return redirect()->route('Shop')->with('error', 'insufficiant Virtual-Coins');
        } else {
            $this->character->virtual_coins = $this->character->virtual_coins - $armour->armour_price;

            if ($this->inventory->where('armour_id', $armour_id)->isEmpty() == true) {
                    
                $inventory_new = new Inventory;
                $inventory_new->character_id = Auth::id();
                $inventory_new->armour_id = $armour->armour_id;
                $inventory_new->num_of_armour_id = 1;
                $inventory_new->save();
            }
            
            if ($this->inventory->where('armour_id', $armour_id)->isEmpty() == false) {
                for ($i=0; $i < $this->inventory->count(); $i++) { 
                    if ($this->inventory[$i]->armour_id === $armour->armour_id) {
                        $this->inventory[$i]->num_of_armour_id += 1;
                        // dd($this->inventory->where('armour_id', $armour_id)->first());
                        $this->inventory[$i]->save();
                    }
                }
            }
            $this->character->save();
            $armour->save();

        }
        return redirect()->route('Shop')->with('succes', 'Succesfully purchesed '.$armour->armour_name.' for V€ '.$armour->armour_price);
    }

    public function Meds($meds_id)
    {
        $meds = Meds::all()->where('hospital_id', $this->character->current_place_id)->where('meds_id', $meds_id)->first();
        $planet = Planet::find($meds->hospital_id);
        if ($meds == NULL) {
            return redirect()->route($planet->planet_name.'Hospital')->with('error', 'Not found.');
        } 
        if ($this->character->virtual_coins < $meds->meds_price ) {
            return redirect()->route($planet->planet_name.'Hospital')->with('error', 'insufficiant Virtual-Coins');
        } else {
            $this->character->virtual_coins = $this->character->virtual_coins - $meds->meds_price;

            if ($this->inventory->where('meds_id', $meds_id)->isEmpty() == true) {
                    
                $inventory_new = new Inventory;
                $inventory_new->character_id = Auth::id();
                $inventory_new->meds_id = $meds->meds_id;
                $inventory_new->num_of_meds_id = 1;
                $inventory_new->save();
            }
            elseif ($this->inventory->where('meds_id', $meds_id)->isEmpty() == false) {
                for ($i=0; $i < $this->inventory->count(); $i++) { 
                    if ($this->inventory[$i]->meds_id === $meds->meds_id) {
                        $this->inventory[$i]->num_of_meds_id += 1;
                        $this->inventory[$i]->save();
                    }
                }
            }
            $this->character->save();
            $meds->save();
        }
        return redirect()->route($planet->planet_name.'Hospital')->with('succes', 'Succesfully purchesed '.$meds->meds_name.' for V€ '.$meds->meds_price);
    }
}
?>