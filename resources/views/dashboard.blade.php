@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-6">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                     Welcome Back {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
