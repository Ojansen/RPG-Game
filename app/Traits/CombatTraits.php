<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use App\Traits\Leveling;
use App\Traits\LootTrait;

use App\Character;
use App\Inventory;
use App\Enemy;
use App\Planet;

trait Combat {

	public $inventory, $character;

    use Leveling, LootTrait;

	public function __construct()
	{
		$this->middleware(function ($request, $next) {
			$this->inventory = Inventory::CharacterInventory(Auth::id());
            $this->character = Character::GetCharacter(Auth::id())->first();

            return $next($request);
        });
		
	}

    public function Fight($enemy_id) 
    {
        //Create everything we need
        $enemy = Enemy::find($enemy_id);
        $planetId = Planet::find($enemy->planet_id);

        $enemyHealth = $enemy->enemy_health;
        $characterHealth = $this->character->character_health;

        //Combat calculation
        while (1 <= 100) {
            $enemyHealth = $enemyHealth - $this->character->character_attack;
            $characterHealth = $characterHealth - $enemy->enemy_attack; 
            if ($enemyHealth < 0) {
                $this->character->character_health = $characterHealth;
                $this->character->save();
                break;
            } elseif ($characterHealth < 0) {
                $this->character->character_health = $characterHealth;
                $this->character->save();
                break;
            }
        }
    	
    	// Looting
    	$this->LootIndex($enemy, $this->character);

        //Add exp + level
        $this->AddExp($enemy, $this->character);
        
        if ($enemyHealth < 0 ) {
            return redirect('World/'.$planetId->planet_name.'/Wilderness')->send()->with('succes', 'You have defeated the '.$enemy->enemy_name);
		} elseif ($characterHealth < 0) {
			return redirect('World/'.$planetId->planet_name.'/Wilderness')->with('error', 'Oh no You died');
		}
    }
}
?>