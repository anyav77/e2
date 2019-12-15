@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')
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
<form method="GET" action="process.php">
    <input type="radio" value="rock" id="rock" name="choice">
    <label for="rock">Rock</label>
    <input type="radio" value="paper" id="paper" name="choice">
    <label for="paper">Paper</label>
    <input type="radio" value="scissors" id="scissors" name="choice">
    <label for="scissors">Scissors</label>
    <br>
    <button type="submit">Submit</button>
</form>
@endsection