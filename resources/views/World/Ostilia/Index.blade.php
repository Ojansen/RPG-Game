@extends('layouts.world')

@section('content')
<!-- <span id="home-Earth"></span> -->
<!-- <img src="../img/Planets/h-earth.png" id="home-Earth"> -->
<div class="container">
	<div class="row">
		<a href="{{ route('OstiliaShop') }}">Shop</a>			
		<a href="{{ route('OstiliaHospital') }}">Hospital</a>			
	</div>
</div>
@endsection