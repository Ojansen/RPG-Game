@extends('layouts.world')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="banner">Welcome to {{ $shop->shop_name }}</h2>
		<div class="col-md-3">
			<ul class="menu-list">
				<li onclick="menuToggle('Weapons')">Weapons<span class="stat-info badge">{{ count($shop->weapons) }}</span></li>
				<li onclick="menuToggle('Armour')">Armour<span class="stat-info badge">{{ count($shop->armour) }}</span></li>
				<li onclick="menuToggle('Food')">Food<span class="stat-info badge">{{ count($shop->food) }}</span></li>
				<li onclick="menuToggle('Hardware')">Hardware<span class="stat-info badge">{{ count($shop->hardware) }}</span></li>
				<li onclick="menuToggle('Vehicle')">Vehicle<span class="stat-info badge">{{ count($shop->vehicle) }}</span></li>
			</ul>
		</div>
		<div class="col-md-9" id="Weapons"> 
			@foreach ($shop->weapons as $weapon)
			<div class="col-md-3">
				<div class="block">
					<p>Name : {{ $weapon->weapon_name }}</p>
					<p>Type : {{ $weapon->weapon_type }}
					<span class="stat-info">Rarity : {{ $weapon->rarity }} </span></p>
					<p>Damage : {{ $weapon->weapon_damage }}
					<span class="stat-info">Firespeed : {{ $weapon->weapon_firespeed }}</span></p>
					<p>Critical hit : {{ $weapon->weapon_crit_hit }}
					<span class="stat-info">Chance : {{ $weapon->weapon_crit_chance }}% </span> </p>
					<p>{{ $weapon->weapon_description }}</p>
					<p style="height: 48px;">
						<span id="money" style="line-height: 40px;">Price : {{ $weapon->weapon_price }}</span>
						<a href="{{ url('World/Ostilia/Shop/weapon') }}/{{ $weapon->weapon_id }}" class="btn btn-space">Buy</a></p>
				</div>
			</div>
			@endforeach
		</div>
		<div class="col-md-9" id="Armour" style="display: none;"> 
			@foreach ($shop->armour as $armour)
			<div class="col-md-3"> 
				{{ $armour->armour_price }}
				<a href="{{ url('World/Ostilia/Shop/armour') }}/{{ $armour->armour_id }}">buy {{ $armour->armour_name }}</a>
			</div>
			@endforeach
		</div>
		</div>
	</div>
</div>
@endsection