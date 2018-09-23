<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

use App\Character;
use App\Enemy;

trait Leveling {

	public function AddExp($enemy, $character)
	{
		$character->character_exp = $character->character_exp + $enemy->enemy_exp;
		$character->save();
		$this->AddLevel($character);
	}

	private function AddLevel($character)
	{
		for ($i=1; $i < 1001; $i++) { 
			$level[$i] = ($i*$i*50) + $i*50;
		}

		$next_level = $character->character_level + 1;
		if ($character->character_exp >= $level[$next_level]) {
			$character->character_level += 1;
			$character->save();
		}
	}
}