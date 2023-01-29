@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Add Products</h4>
                            <a href="{{ route('products.create') }}" style="float: right" class="btn btn-dark"><i
                                    class="fa fa-plus"></i>
                                Add new products
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Brand</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('products.edit', $product) }}"
                                                        class="btn btn-info btn-sm"><i class="fa-fa-edit"></i>Edit</a>
                                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="confirm('Are you sure you want to delete the product?')"><i
                                                                class="fa fa-trash"></i>Delete product</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
