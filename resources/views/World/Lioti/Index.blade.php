@extends('layouts.world')

@section('content')
<span id="home-Mars"></span>
<!-- <img src="../img/Planets/h-Mars.png" id="home-Earth"> -->
<div class="container">
	<div class="row">
		<!-- <a href="{{-- route('MarsShop') --}}">Shop</a>			 -->
		<a href="{{ url('/World') }}/{{ $planet->planet_name }}/{{ 'Wilderness' }}">Enter Wilderness</a>
	</div>
</div>
@endsection