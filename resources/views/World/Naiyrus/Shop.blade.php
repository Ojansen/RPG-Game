@extends('layouts.world')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@foreach ($shop->weapons as $weapon)
				{{ $weapon->weapon_price }}
				<a href="{{ url('World/Venus/Shop/weapon') }}/{{ $weapon->weapon_id }}">buy {{ $weapon->weapon_name }}</a>
			@endforeach
			@foreach ($shop->armour as $armour)
				{{ $armour->armour_price }}
				<a href="{{ url('World/Venus/Shop/armour') }}/{{ $armour->armour_id }}">buy {{ $armour->armour_name }}</a>
			@endforeach
		</div>
	</div>
</div>
@endsection