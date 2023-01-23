@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Details Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ @old('name', $user->name) }}"
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{ @old('email', $user->email) }}"
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" value="{{ @old('phone', $user->phone) }}"
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirm_pwd" class="form-control mb-3">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <select type="text" name="is_admin" class="form-control mb-3">
                                    <option value="{{ $user->is_admin == 2 ? 'Cashier' : 'Admin' }}">Admin</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Cashier</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary ">Update User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
