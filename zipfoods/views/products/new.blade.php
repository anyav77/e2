<!-- /views/products/show.blade.php -->
@extends('templates.master')

@section('title')
Add New Product
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div id='product-show'>

    <h2>Add New Product</h2>
    <form method='POST' id='add-product' action='/products/add-product'>

        <div class='form-group'>
            <label for='name'>Product Name</label>
            <input type='text' class='form-control' name='name' id='name' value='{{ $app->old("name")}}'>
        </div>

        <div class='form-group'>
            <label for='description'>Description</label>
            <textarea name='description' id='description' class='form-control'>{{ $app->old('description')}}</textarea>
        </div>

        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='text' class='form-control' name='price' id='price' value='{{ $app->old("price")}}'>
        </div>

        <div class='form-group'>
            <label for='available'>Available</label>
            <input type='number' class='form-control' name='available' id='available'
                value='{{ $app->old("available")}}'>
        </div>

        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='text' class='form-control' name='weight' id='weight' value='{{ $app->old("weight")}}'>
        </div>

        <div class='form-group'>
            <label for='perishable'>Perishable</label>
            <input type='radio' class='form-control' name='perishable' id='perishable' value=1 checked>
            <input type='radio' class='form-control' name='perishable' id='perishable' value=0>
        </div>

        <button type='submit' class='btn btn-primary'>Add Product</button>
    </form>

    <p class='product-description'>
    </p>

</div>

<a href='/products'>Check out our other products</a>
@endsection