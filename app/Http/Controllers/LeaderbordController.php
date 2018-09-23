<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Leaderbord;
use App\Character;

class LeaderbordController extends Controller
{
    public function Index()
    {
    	$characters = Character::all()->sortByDesc('character_level')->splice(0,25);
    	// dd($characters);
    	return view('/Leaderbord.Index', compact('characters'));
    }
    public function NameSearch(Request $request)
    {
    	$character = $request->input('character_name');
		$character = Character::all()->where('character_name', $character)->first();
		if ($character == NULL) {
			return redirect()->route('LeaderbordIndex')->with('error', $request->input('character_name').' not found try again.');
		}
    	// dd($character);
    	return view('/Leaderbord/Character', compact('character'));
    }
}
