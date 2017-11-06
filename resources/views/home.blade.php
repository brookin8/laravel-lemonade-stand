@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
<h2>My Games</h2>

<p><a href="/games/create"><button class="btn btn-default">Start a New Game</button></a></p>

<h3>Active Games</h3>
<ul class="my-games">

    @foreach ($active_games as $game)

        <li><button class="btn btn-default btn-xs"><a href="/games/destroy/{{ $game->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></button><a href="/games/{{ $game->id }}">Game {{ $game->id }}</a></li>

    @endforeach

</ul>

<h3>Finished Games</h3>
<ul class="my-games">

    @foreach ($finished_games as $game)

        <li>Game {{ $game->id }}</li>

    @endforeach

</ul>

{{-- <ul class="my-games">
    
    
    <li><a href="/"><button class="btn btn-default btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></a></button> <a href="#">Game 1</a> - Day 8 - $24.87</li>
    <li><button class="btn btn-default btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></button> <a href="#">Game 2</a> - Ended - $34.33</li>
</ul> --}}

<h2>Leader Board</h2>

<ul class="leader-board">
    <li>Heath - $25,000</li>
    <li>Mario - $12,000</li>
    <li>Luigi - $8,000</li>
</ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection