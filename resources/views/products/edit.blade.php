@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product Details Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="2" class="form-control mb-3">{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Brand</label>
                                <input type="text" name="brand" value="{{ $product->brand }}"
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" name="price" value="{{ $product->price }}"
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" name="qty" value="{{ $product->qty }}" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Alert Stock</label>
                                <input type="number" name="alert_stock" value="{{ $product->alert_stock }}"
                                    class="form-control mb-3">
                            </div>
                            <button type="submit" class="btn btn-primary ">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
