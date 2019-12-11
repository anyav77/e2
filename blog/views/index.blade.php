@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

@if($newTitle)
<div class="alert alert-success">
    Your post {{ $newTitle }} was added.
</div>
@endif

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<a href="/posts">View all posts</a>
<h2>Create a new post</h2>
<form method="POST" action="save-new-post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $app->old('title') }}">
    <label for="content">Content:</label>
    <textarea id="content" name="content">{{ $app->old('content') }}</textarea>
    <button type="submit" class="btn btn-primary">Create new post</button>
</form>
@endsection