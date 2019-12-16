@extends('templates.master')

@section('title')
Attempts History
@endsection

@section('content')
<h2>Attempts History</h2>

<ul>
    @foreach($attempts as $attempt)
    <li>{{ $attempt['timestamp']}}</li>
    @endforeach
</ul>

@endsection