@extends('layouts.app-panel')

@section('content')

	<h1>Game {{ $day->game_id }}</h1>
	<h3>Day : {{ $day->day }}</h3>
	<h3>Condition Id : {{ $day->condition_id }}</h3>
	<h3>Temperature Id : {{ $day->temperature }}</h3>
	<a href="/days/create/{{ $day->game_id }}"><button class="btn btn-default">Move to Next Day</button></a>

@endsection