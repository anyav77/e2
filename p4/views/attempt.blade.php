@extends('templates.master')

@section('title')
Attempt {{ $attempt['id'] }} Details
@endsection

@section('content')
<a href="/attempts">&larr; Return to game history </a>
<h2>Attempt {{ $attempt['id'] }}</h2>
Played at {{ $attempt['timestamp'] }}: <br>
Player {{ $attempt['name'] }} chose {{ $attempt['player1'] }} <br>
Computer chose {{ $attempt['player2'] }} <br>
<h4>Winner: {{ $attempt['winner'] }}</h4>
@endsection