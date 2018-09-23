<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

use App\Armour;
use App\Weapons;
use App\Inventory;

use App\Loot;
use App\Items;
use App\Food;

trait LootTrait 
{
    public $inventory;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->inventory = Inventory::CharacterInventory(Auth::id());
            return $next($request);
        });
        
    }
    public function LootIndex($enemy, $character)
    {
        // dd($enemy);
        if ($enemy->loot_id > 1) {
            $id = collect(['item_id', 'weapon_id', 'armour_id', 'meds_id', 'food_id', 'loot_value']);
            $id = $id->random(1)->first();
            $num = 'num_of_'.$id;

            switch ($id) {
                case 'item_id':
                    $stuff = $enemy->loot->loot_item;
                    break;
                case 'weapon_id':
                    $stuff = $enemy->loot->loot_weapon;    
                    break;
                case 'armour_id':
                    $stuff = $enemy->loot->loot_armour;
                    break;
                case 'meds_id':
                    $stuff = $enemy->loot->loot_meds;
                    break;
                case 'food_id':
                    $stuff = $enemy->loot->loot_food;
                    break;
                case 'loot_value':
                    $stuff = $enemy->loot->loot_value;
                    break;
            }
            // $id = 'armour_id';
            // $num = 'num_of_armour_id';
            // dd($this->inventory->where($id, $stuff)->isEmpty());
            if ($stuff === $enemy->loot->loot_value) {
                $character->virtual_coins = $character->virtual_coins + $stuff;
                $character->save();
            }
            elseif ($this->inventory->where($id, $stuff)->isEmpty() == false) {
                for ($i=0; $i < $this->inventory->count(); $i++) { 
                    if ($this->inventory[$i]->$id === $stuff) {
                        $this->inventory[$i]->$num += 1;
                        $this->inventory[$i]->save();
                    }
                }
            } else {
                foreach ($this->inventory->where($id, null) as $inv) {
                    $inv->$id = $stuff;
                    $inv->$num += 1;
                    $inv->save();
                    // dd($inv);
                }
                // for ($i=0; $i < $this->inventory->count(); $i++) { 
                //     // dd($id, $this->inventory[$i]);
                //     if ($this->inventory[$i]->$id === null) {
                //         $this->inventory[$i]->$id = $stuff;
                //         $this->inventory[$i]->$num += 1;
                //     }
                //     $this->inventory[$i]->save();
                // }
            }
            if ($this->inventory->where($id, $stuff)->isEmpty() == true) {  
                $inventory_new = new Inventory;
                $inventory_new->character_id = Auth::id();
                $inventory_new->$id = $stuff;
                $inventory_new->$num = 1;
                $inventory_new->save();
            }
        } // end of checking for loot
    }
}
?>