@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Product Details Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" name="name" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Stock</label>
                                <input type="number" name="stock" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="desciption" id="Description" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Brand</label>
                                <input type="text" name="brand" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" name="quantity" class="form-control mb-3">
                            </div>
                            <button type="submit" class="btn btn-primary ">Save Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
