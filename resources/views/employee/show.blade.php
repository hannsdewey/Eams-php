@extends('layout')
@section('content')
<style>
.content-wrapper {
    margin-top: 60px;
}
</style>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">Employee Profile</div>
        <div class="card-body">
            <div class="position-relative">
                <!-- Profile Picture -->
                @if ($employees->profile_picture)
                <img src="{{ asset('storage/' . $employees->profile_picture) }}" alt="Profile Picture"
                    style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; position: absolute; right: 10px;">
                @endif

                <!-- Employee Details -->
                <div style="margin-top: 10px;">
                    <!-- Pushes the text down to avoid overlap -->
                    <h5 class="card-title">Name : {{ $employees->name }}</h5>
                    <p class="card-text">Employee ID : {{ $employees->id }}</p>
                    <p class="card-text">Address : {{ $employees->address }}</p>
                    <p class="card-text">Mobile : {{ $employees->mobile }}</p>
                    <p class="card-text">Age : {{ $employees->age }}</p>
                    <p class="card-text">Account Created : {{ $employees->created_at }}</p>
                    <p class="card-text">Last Update : {{ $employees->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection