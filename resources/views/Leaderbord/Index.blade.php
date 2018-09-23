@extends('layouts.app')

@section('content')
<span id="home-Earth"></span>
<!-- <img src="../img/Planets/h-earth.png" id="home-Earth"> -->
<div class="container">
	<div class="row">
			<div class="col-md-2 block">
				<h4>Search by name</h4>
				<form action="{{ url('/Leaderbord/Character') }}" method="post">
				@csrf
				<div class="input-group">
					<input type="text" name="character_name"  class="form-control">
					<br><br>
					<input type="submit" name="submit" value="Search"  class="form-control">
					<br><br>
				</div>
				</form>
			</div>
		<div class="col-md-offset-3">
			<div class="col-md-2 col-xs-2">
				<h6>Name</h6>
			</div>
			<div class="col-md-2 col-xs-2">
				<h6>Species</h6>
			</div>
			<div class="col-md-2 col-xs-2">
				<h6>Level</h6>
			</div>
			<div class="col-md-2 col-xs-2">
				<h6>Exp</h6>
			</div>
			<div class="col-md-2 col-xs-2">
				<h6>Attack</h6>
			</div>
			<div class="col-md-2 col-xs-2">
				<h6>Virtual-Coins</h6>
			</div>
		@foreach ($characters as $character)		
			<div class="col-md-2 col-xs-2">
				{{ $character->character_name }}
			</div>
			<div class="col-md-2 col-xs-2">
				{{ $character->species->species_type }}
			</div>
			<div class="col-md-2 col-xs-2">
				{{ $character->character_level }}
			</div>
			<div class="col-md-2 col-xs-2">
				{{ $character->character_exp }}
			</div>
			<div class="col-md-2 col-xs-2">
				{{ $character->character_attack }}
			</div>
			<div class="col-md-2 col-xs-2">
				{{ $character->virtual_coins }}
			</div>
		@endforeach
		</div>
	</div>
</div>
@endsection