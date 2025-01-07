@extends('layout')
@section('content')
<style>
.content-wrapper {
    margin-top: 60px;
}
</style>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">Employee Page</div>
        <div class="card-body">

            <form action="{{ url('employee') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Position</label></br>
                <input type="text" name="position" id="position" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                <label>Age</label></br>
                <input type="text" name="age" id="age" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>


        </div>
    </div>

    @stop