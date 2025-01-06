@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Manager Edit Page</div>
    <div class="card-body">

        <form action="{{ url('manager/' .$managers->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$managers->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$managers->name}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$managers->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$managers->mobile}}" class="form-control"></br>
            <label>Age</label></br>
            <input type="text" name="age" id="age" value="{{$managers->age}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>



    </div>
</div>

@endsection