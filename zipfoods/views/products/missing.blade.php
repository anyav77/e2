<!-- /views/products/show.blade.php -->
@extends('templates.master')

@section('title')
Product not found
@endsection

@section('content')
<div id='product-show'>
    <h2>Product {{ $id }} not found</h2>
    <p class='product-description'>
        Oh no - we were not able to find the product you were looking for.
    </p>

</div>

<a href='/products'>Check out our other products</a>
@endsection