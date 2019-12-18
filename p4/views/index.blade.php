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

@if($name)
<h4>Nice try, {{ $name }}!</h4>
@endif

@if($winner)
You chose {{ $player1 }}.
Computer chose {{ $player2 }}
@if($winner == 'Player')
<div class="alert alert-success">
    Congratulations! You won.
</div>
@elseif($winner == 'Computer')
<div class="alert alert-dark">
    Sorry, you lost ...
</div>
@else
<div class="alert alert-warning">
    It's a tie...
</div>
@endif
@endif


<a href="/attempts">Game history </a>
<h2>Instructions</h2>
<ul>
    <li>Choose rock, paper, scissors from the list</li>
    <li>Click "Play!"</li>
    <li>Your choice will be compared to the computer's choice:</li>
    <li>If the choices match, it's a tie</li>
    <li>Rock beats scissors</li>
    <li>Paper beats rock</li>
    <li>Scissors beat paper</li>
</ul>

<form method="POST" action="/process">

    <label for="name">Your Name:</label>
    <br>
    <input type="text" id="fname" name="name" value="{{ $app->old('name')}}">
    <br>
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