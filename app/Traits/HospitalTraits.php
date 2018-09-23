<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

use App\Character;
use App\Inventory;
use App\Enemy;

use App\Hospital;

trait HospitalTrait 
{
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

    public function HealPlayer($planet)
    {
        // $planet = ;
        // dd($planet);
        $route = $planet->planet_name.'Hospital';
        // dd($route);
        if ($this->character->character_health >= $this->character->species->species_health) {
            return redirect()->route($route)->with('succes', 'Healt already at max');
        }
        $diff = $this->character->species->species_health - $this->character->character_health;
        $cost = $diff * 10;
        if ($cost >= $this->character->virtual_coins) {
            return redirect()->route($route)->with('error', 'insufficiant Virtual-Coins');
        }
        $this->character->virtual_coins = $this->character->virtual_coins - $cost;
        $this->character->character_health = $this->character->character_health + $diff;
        
        $this->character->save();

        return redirect()->route($route)->with('succes', $diff . ' Health restored for V€ '.$cost);
    }
}
?>