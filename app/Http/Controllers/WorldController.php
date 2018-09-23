<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Planet;
use App\Character;

class WorldController extends Controller
{
    public $character;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->character = Character::GetCharacter(Auth::id())->first();

            return $next($request);
        });
        
    }
    public function Index()
    {
    	if ($this->character == NULL) {
    		return redirect()->route('CharacterIndex')->with('error', 'You have to make a character first' );
    	} else {
	    	$character = $this->character;
	    	$planets = Planet::all()->flatten();
            // dd($character->place->first());
	    	return view('World.Index', compact('planets', 'character'));
	    }
    }

    public function Planet($planet_name)
    {
        $planet = Planet::all()->where('planet_name', $planet_name)->first();
        // dd($this->character->virtual_coins <= 500);
        if ($this->character->current_place_id == $planet->planet_id) {
            return view('World/'.$planet->planet_name.'.Index', compact('planet'));
        } elseif ($this->character->virtual_coins <= 499 ) {
            return redirect()->route('WorldIndex')->with('error', 'Ńot enough VC');
        }
        $this->character->current_place_id = $planet->planet_id;
        $this->character->virtual_coins = $this->character->virtual_coins - 500;
        $this->character->save();
        
        return view('World/'.$planet_name.'.Index', compact('planet'));
    }
}
