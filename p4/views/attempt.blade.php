@extends('templates.master')

@section('title')
Attempt {{ $attempt['id'] }} Details
@endsection

@section('content')
<h2>Attempt {{ $attempt['id'] }} Details</h2>
Played at {{ $attempt['timestamp'] }} <br>
Player {{ $attempt['name'] }} selected {{ $attempt['player1'] }} <br>
Computer selected {{ $attempt['player2'] }} <br>
The winner is {{ $attempt['winner'] }} <br>
<a href="/attempts">View the history of attempts </a>
@endsection