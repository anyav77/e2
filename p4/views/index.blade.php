@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@if($app->old('tie'))
<div class="alert alert-warning">
    It's a tie...
</div>
@endif


<div class="alert gameresult">
    @if($name)
    Nice try, {{ $name }}!<br>
    @endif
    @if($player1)
    You selected {{ $player1 }}<br>
    @endif
    @if($player2)
    Computer selected {{ $player2 }}<br>
    @endif
</div>

@if($winner['Player'])
player won
@endif

@if($winner['Computer'])
computer won
@endif

@if($winner['Tie'])
tie
@endif

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

    <label for="fname">Your Name:</label>
    <br>
    <input type="text" id="fname" name="fname" value="{{ $app->old('name')}}">
    <br>
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





@endsection