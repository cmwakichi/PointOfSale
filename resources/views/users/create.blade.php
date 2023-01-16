@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>User Details Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
