<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\HospitalTrait;

use App\Meds;
use App\Character;
use App\Planet;
use App\Hospital;

class HospitalController extends Controller
{
    use HospitalTrait;
    
    public function Hospital()
    {

        $character = Character::GetCharacter(Auth::id())->first();
        $current_planet = Planet::GetCurrentPlanet($character->current_place_id);
        $planet = Planet::find($current_planet->planet_id);
        $meds = Meds::all()->where('hospital_id', $current_planet->planet_id);

        if ($current_planet->planet_id == $planet->planet_id) {
            $Hospital = Hospital::Find($planet->planet_id);
            switch ($planet->planet_id) {
                case '1':
                    return view('World/Ostilia.Hospital', compact('meds'));
                    break;
                case '2':
                    return view('World/Venus/Hospital', compact('meds'));
                    break;
                case '4':
                    return view('World/Saturn/Hospital', compact('meds'));
                    break;
                default:
                    return redirect()->route('WorldIndex')->with('error', 'You\'re not on '.$planet->planet_name);
                    break;
            }
        }
    }
    public function Heal()
    {
        $character = Character::GetCharacter(Auth::id())->first();
        $current_planet = Planet::GetCurrentPlanet($character->current_place_id);
        // dd($current_planet);
        return $this->HealPlayer($current_planet);
    }
}
