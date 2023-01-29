@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Order Products</h4>
                            <a href="{{ route('products.create') }}" style="float: right" class="btn btn-dark"><i
                                    class="fa fa-plus"></i>
                                Add new order
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select name="product_id" id="product_id" class="form-control">
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="qty[]" id="qty" class="form-control">
                                        </td>
                                        <td>
                                            <input type="number" name="price[]" id="price" class="form-control">
                                        </td>
                                        <td>
                                            <input type="number" name="discount[]" id="discount" class="form-control">
                                        </td>
                                        <td>
                                            <input type="number" name="total[]" id="total" class="form-control">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Search product</h4>
                        </div>
                        <div class="card-body">
                            ..........
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
