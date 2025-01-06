@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">Manager Profile</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Name : {{ $managers->name }}</h5>
            <p class="card-text">Manager ID: {{ $managers->id }}</p>
            <p class="card-text">Address : {{ $managers->address }}</p>
            <p class="card-text">Mobile : {{ $managers->mobile }}</p>
            <p class="card-text">Age : {{ $managers->age }}</p>
            <p class="card-text">Account Created : {{ $managers->created_at }}</p>
            <p class="card-text">Last Update : {{ $managers->updated_at }}</p>
        </div>


    </div>
</div>
@endsection