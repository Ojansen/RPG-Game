@extends('layouts.world')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- rework the planets to be optimal for every display!!!!!!!!
        <div class="col-md-10">
            <div class="universe">
                <div id="Sun" class="planet" data-toggle="tooltip" title="Sun"></div>
                @foreach ($planets as $planet)
                    @if ($planet->planet_name == "Saturn")
                        <div class="ring"></div>
                    @elseif ($planet->planet_name == "Earth")
                        <div id="Moon" data-toggle="tooltip" title="Moon"></div>
                    @endif
                    <div id="{{ $planet->planet_name }}" class="planet" data-toggle="tooltip" title="{{ $planet->planet_name }}">
                        <a href="{{ url('World') }}/{{ $planet->planet_name }}" >
                        </a>
                    </div>
                @endforeach
            </div>
        </div> -->
        <div class="col-md-12">
            <h2 class="banner">Planet info</h2>
            <h4 style="text-align: center;">You are on : {{$character->place->first()->planet->planet_name}}</h4>
            @foreach ($planets as $planet)
            <div class="col-md-4">
                <div class="planet-info">
                    <p>Name : {{$planet->planet_name}}</p>
                    <p>Temperature : {{$planet->planet_temperature}}º<span style="float: right;">{{$planet->planet_climate}}</span></p>
                    <p>Description: <br> {{$planet->planet_description}}</p>
                    <br>
                    <p style="height: 36px;"><a href="{{ url('World') }}/{{ $planet->planet_name }}" class="btn btn-space">Travel</a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection