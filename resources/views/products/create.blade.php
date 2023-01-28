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
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Brand</label>
                                <input type="text" name="brand" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="password" name="price" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="password" name="quantity" class="form-control mb-3">
                            </div>
                            <button type="submit" class="btn btn-primary ">Save Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
