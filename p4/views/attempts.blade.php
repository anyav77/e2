@extends('templates.master')

@section('title')
Attempts History
@endsection

@if($app->old('attemptNotFound'))

<div class="alert alert-warning">
    Sorry, the attempt history you were looking for is not available.
</div>
@endif

@section('content')
<h2>Attempts History</h2>

<ul>
    @foreach($attempts as $attempt)
    <li><a href="/attempt?id={{ $attempt['id'] }}"> {{$attempt['timestamp']}} </a></li>
    @endforeach
</ul>

@endsection