<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\InventoryTrait;


class InventoryController extends Controller
{
    use InventoryTrait;

	public function EquipWeapon($weapon_id)
    {
        return $this->Weapon($weapon_id);
    }
    public function EquipArmour($armour_id)
    {
        return $this->Armour($armour_id);
    }
    public function UseFood($food_id)
    {
        return $this->Food($food_id);
    }
    public function UseMeds($meds_id)
    {
        return $this->Meds($meds_id);
    }
}
