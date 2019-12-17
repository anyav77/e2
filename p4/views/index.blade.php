@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')
<a href="/attempts">View the history of attempts </a>
<h2>Instructions</h2>
<ul>
    <li>Choose rock, paper, scissors from the list</li>
    <li>Click submit</li>
    <li>Your choice will be compared to the computer's choice:</li>
    <li>If the choices match, it's a tie</li>
    <li>Rock beats scissors</li>
    <li>Paper beats rock</li>
    <li>Scissors beat paper</li>
</ul>

<form method="POST" action="/process">
    <input type="hidden" id="timestamp" name="timestamp" value="2019-12-13 23:06:54">

    <input type="radio" id="rock" name="choice" value="rock">
    <label for="rock">Rock</label>

    <input type="radio" id="paper" name="choice" value="paper">
    <label for="paper">Paper</label>

    <input type="radio" id="scissors" name="choice" value="scissors">
    <label for="scissors">Scissors</label>

    <br>
    <button type="submit" class="btn btn-primary">Play!</button>
</form>

@if($player1)
<div class="alert alert-success">
    You selected {{$player1}}
    <br>
    Computer selected
    <br>
    Game Result:
</div>
@endif

@endsection