@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Team Page</div>
    <div class="card-body">

        <form action="{{ url('teams') }}" method="post">
            {!! csrf_field() !!}

            <label>Team Name</label></br>
            <input type="text" name="teamname" id="teamname" class="form-control" required></br>

            <label>Team Manager</label></br>
            <select name="teammanager" id="teammanager" class="form-control" required>
                <option value="">Select Manager</option>
                @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                @endforeach
            </select></br>

            <label>Team Employees</label></br>
            @foreach($employees as $employee)
            <div>
                <input type="checkbox" name="teamemployees[]" value="{{ $employee->id }}"
                    id="employee_{{ $employee->id }}">
                <label for="employee_{{ $employee->id }}">{{ $employee->name }}</label>
            </div>
            @endforeach
            </br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>
@if(session('flash_message'))
<h6 class="alert alert-success">
    {{ session('flash_message') }}
</h6>
@endif
@stop