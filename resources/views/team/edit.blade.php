@extends('layout')
@section('content')
<style>
.content-wrapper {
    margin-top: 60px;
}
</style>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">team Edit Page</div>
        <div class="card-body">

            <form action="{{ url('teams/' .$teams->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Team Name</label></br>
                <input type="text" name="teamname" id="teamname" class="form-control"></br>
                <label>Team Manager</label></br>
                <input type="text" name="teammanager" id="teammanager" class="form-control"></br>
                <label>Team Employee</label></br>
                <input type="text" name="teamemployee" id="teamemployee" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>


        </div>
    </div>
</div>

@endsection