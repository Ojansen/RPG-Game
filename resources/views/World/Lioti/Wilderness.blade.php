@extends('layouts.world')

@section('content')
<span id="home-Mars"></span>
<!-- <img src="../img/Planets/h-Mars.png" id="home-Earth"> -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="enemy">
				@foreach ($enemys as $enemy)
					{{$enemy}}
					<a href="{{ url('World/Lioti/Wilderness') }}/{{ $enemy->enemy_id }}">Attach</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection