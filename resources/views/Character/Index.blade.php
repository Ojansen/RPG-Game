@extends('layouts.app')

@section('content')
@if ($user_character == null)
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 22px;">
            <h3 class="heading">Species</h3>
            <div class="col-md-7">
                
                <p>Every species has his own unique abilities and benefits. <br> they all start at there home planet. Every character starts out with a 1000 VC (Virtual-Coins)</p>
            </div>
            <div class="col-md-5">
	            <form action="{{ route('CreateCharacter')}}" method="post" class="create-character">
	                {{ method_field('post') }}
	                {{ csrf_field() }}
	                <div class="form-group">
	                	<label>Character name</label>
	                    <input type="text" name="character_name" placeholder="Name" class="form-control">
	                </div>
	                <div class="form-group">
	                    <label>Character species</label>
	                    <select class="form-control" name="species">
	                        @foreach ($species as $kind)
	                            <option name="kind" value="{{ $kind->species_id }}">{{ $kind->species_type }}</option>
	                        @endforeach
	                    </select>
	                </div>
	                <div class="form-group">
	                    <input type="submit" name="submit" value="Create!" class="form-control btn btn-default">
	                </div>
	            </form>
	        </div>
        </div>
        <div class="col-md-12">
            @foreach ( $species as $kind )
                <div class="col-md-6">
                    <div class="character-table col-md-12">
                        <div class="col-md-3 col-xs-3">Type</div>
                        <div class="col-md-9 col-xs-9">{{$kind->species_type}}</div>
                        <div class="col-md-3 col-xs-3">Home Planet</div>
                        <div class="col-md-9 col-xs-9">{{$kind->planet->planet_name}}</div>
                        <div class="col-md-3 col-xs-3">Description</div>
                        <div class="col-md-9 col-xs-9">{{$kind->species_description}}</div>
                        <div class="col-md-3 col-xs-3">Benefits</div>
                        <div class="col-md-9 col-xs-9">{{$kind->species_benefits}}</div>
                        <div class="col-md-3 col-xs-3">Health</div>
                        <div class="col-md-9 col-xs-9">{{$kind->species_health}}</div>
                        <div class="col-md-3 col-xs-3">Defence</div>
                        <div class="col-md-9 col-xs-9">{{$kind->species_defence}}</div>
                        <div class="col-md-3 col-xs-3">Attack</div>
                        <div class="col-md-9 col-xs-9">{{$kind->species_attack}}</div>
                        <div class="col-md-3 col-xs-3">Stamania</div>
                        <div class="col-md-9 col-xs-9">{{$kind->species_stamania}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@elseif (!$user_character == NULL)
<div class="container-fluid">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-4" style="padding: 0px">
                <div class="col-md-5">
                    <h2 class="heading">Stats</h2>
                    <div class="block">
                        <p>Name<span class="stat-info">{{$user_character->character_name}}</span></p>
                        <p>Species<span class="stat-info">{{$user_character->species->species_type}}</span></p>
                        <p id="money">V€<span class="stat-info">{{$user_character->virtual_coins}}</span></p>
                        <hr>
                        <p id="health">Health<span class="stat-info">{{$user_character->character_health}}</span></p>
                        <p id="defence">Defence<span class="stat-info">{{$user_character->character_defence}}</span></p>
                        <p id="attack">Attack<span class="stat-info">{{$user_character->character_attack}}</span></p>
                        <p id="stamania">Stamania<span class="stat-info">{{$user_character->character_stamania}}</span></p>
                        <hr>
                        <p id="level">Level<span class="stat-info">{{ $user_character->character_level }}</span></p>
                        <p id="exp">Exp<span class="stat-info"><span class="stat-info"> {{ $user_character->character_exp }}</span></p>
                    </div>
                </div>
                <div class="col-md-7">
                    <h2 class="heading">Loadout</h2>
                    <div class="block">
                        @isset($user_character->weapons)
                            <p>Weapon<span class="stat-info">{{ $user_character->weapons->weapon_name }}</span></p>
                        @endisset
                        @isset($user_character->armour)
                            <p>Armour<span class="stat-info">{{ $user_character->armour->armour_name }}</span></p>
                        @endisset

                    </div>
                </div>
                <div class="col-md-12">
                    <h2 class="heading">Info</h2>
                    <div class="block item-info">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="padding: 0px;">
                <div class="col-md-6">
                    <h2 class="heading">Weapons</h2>
                    @for ($i = 0; $i < count($user_character->inventory->toArray()); $i++)
                        @foreach ($user_character->inventory[$i]->weapons as $weapons)
                                <div class="inventory-slot" id="show-info">
                        			<div class="inventory-sprite">
                                        <img src="data:image/jpeg;base64,">
                                    </div>
                                    <p>{{ $weapons->weapon_name}} - {{ $user_character->inventory[$i]->num_of_weapon_id}}X
                                    <a href="{{ url('Character/EquipWeapon') }}/{{ $weapons->weapon_id }}">
                                        @if($user_character->weapon_equipped == $weapons->weapon_id)
                                    UnEquip @else Equip
                                    @endif</a></p>
                                </div>
            			@endforeach
                    @endfor
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Armour</h2>
                    @for ($i = 0; $i < count($user_character->inventory->toArray()); $i++)
                        @foreach ($user_character->inventory[$i]->armour as $armour)
                                <div class="inventory-slot">
                                    <div class="inventory-sprite">
                                        <img src="data:image/jpeg;base64,">
                                    </div>
                                    <p>{{ $armour->armour_name}} - {{ $user_character->inventory[$i]->num_of_armour_id}}X
                                    <a href="{{ url('Character/EquipArmour') }}/{{ $armour->armour_id }}">
                                    @if($user_character->armour_equipped == $armour->armour_id)
                                    UnEquip @else Equip
                                    @endif</a></p>
                                </div>
                        @endforeach
                    @endfor
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Food</h2>
                    @for ($i = 0; $i < count($user_character->inventory->toArray()); $i++)
                        @foreach ($user_character->inventory[$i]->food as $food)
                                <div class="inventory-slot">
                                    <div class="inventory-sprite">
                                        <img src="data:image/jpeg;base64,">
                                    </div>
                                    <p>{{ $food->food_name}} - {{ $user_character->inventory[$i]->num_of_food_id}}X</p>
                                    <a href="{{ url('Character\UseFood')}}/{{ $food->food_id }}">Use</a>
                                </div>
                        @endforeach
                    @endfor
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Items</h2>
                    @for ($i = 0; $i < count($user_character->inventory->toArray()); $i++)
                        @foreach ($user_character->inventory[$i]->items as $items)
                                <div class="inventory-slot">
                                    <div class="inventory-sprite">
                                        <img src="data:image/jpeg;base64,">
                                    </div>
                                    <p>{{ $items->item_name}} - {{ $user_character->inventory[$i]->num_of_item_id}}X</p>
                                </div>
                        @endforeach
                    @endfor
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Meds</h2>
                    @for ($i = 0; $i < count($user_character->inventory->toArray()); $i++)
                        @foreach ($user_character->inventory[$i]->meds as $meds)
                                <div class="inventory-slot">
                                    <div class="inventory-sprite">
                                        <img src="data:image/jpeg;base64,">
                                    </div>
                                    <p>{{ $meds->meds_name}} - {{ $user_character->inventory[$i]->num_of_meds_id}}X</p>
                                    <a href="{{ url('Character/UseMeds') }}/{{ $meds->meds_id }}">Use</a>
                                </div>
                        @endforeach
                    @endfor
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Hardware</h2>
                    @for ($i = 0; $i < count($user_character->inventory->toArray()); $i++)
                        @foreach ($user_character->inventory[$i]->hardware as $hardware)
                                <div class="inventory-slot">
                                    <div class="inventory-sprite">
                                        <img src="data:image/jpeg;base64,">
                                    </div>
                                    <p>{{ $hardware->hardware_name}} - {{ $user_character->inventory[$i]->num_of_hardware_id}}X</p>
                                </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        </div>
	</div>
</div>
@endif
@endsection     