@extends('layouts.world')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('OstiliaHeal') }}">Heal</a>
			
		</div>
		<div class="col-md-12">
			@foreach ($meds as $med)
			<div class="col-md-3">
			<div class="block"> 
				<p>Name<span class="stat-info">{{ $med->meds_name }}</span></p>
				<p>Effect<span class="stat-info"> {{ $med->meds_description }}</span></p>
				<a class="btn" href="{{ url('/World/Ostilia/Hospital/meds') }}/{{ $med->meds_id }}">Buy</a>
			</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection