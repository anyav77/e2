@extends('templates.master')

@section('title')
Attempt {{ $attempt['id'] }} Details
@endsection

@section('content')
<h2>Attempt {{ $attempt['id'] }}</h2>
Played at {{ $attempt['timestamp'] }}: <br>
Player {{ $attempt['name'] }} selected {{ $attempt['player1'] }} <br>
Computer selected {{ $attempt['player2'] }} <br>
<h4>Winner: {{ $attempt['winner'] }}</h4>
<a href="/attempts">View the history of attempts </a>
@endsection