@extends('layouts.app')

@section('content')
<div class="ui grid stackable mt-5">
    <div class="four wide column"></div>

    <div class="eight wide column">
        <div class="ui segments">
            <div class="ui teal segment">
                <p>Dashboard</p>
            </div>
            <div class="ui segment">
                Welcome Back <strong>{{ Auth::user()->name }}</strong>
            </div>
        </div>
    </div>

    <div class="four wide column"></div>

</div>

@endsection
