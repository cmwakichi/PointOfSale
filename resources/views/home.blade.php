@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 mt-3">
                <div class="card">
                    <h4 class="card-header" style="background: #008B8B; color:#fff;">
                        <marquee behaviour="">Welcome to POS Management System.</marquee>
                    </h4>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
