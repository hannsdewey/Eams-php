@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">Team Profile</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Team Name : {{ $teams->TeamName }}</h5>
            <p class="card-text">Team Manager : {{ $teams->TeamManager }}</p>
            <p class="card-text">Team Employee : {{ $teams->teamemployees }}</p>
            <p class="card-text">Account Created : {{ $teams->created_at }}</p>
            <p class="card-text">Last Update : {{ $teams->updated_at }}</p>

        </div>


    </div>
</div>
@endsection