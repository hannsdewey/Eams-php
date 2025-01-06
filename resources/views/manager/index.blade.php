@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Manager Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('manager/create') }}" class="btn btn-success btn-sm" title="Add New Manager">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br /><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($managers->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">No Managers found.</td>
                    </tr>
                    @else
                    @foreach($managers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->age }}</td>
                        <td>
                            <a href="{{ url('/manager/' . $item->id) }}" title="View Manager">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    View</button>
                            </a>
                            <a href="{{ url('/manager/' . $item->id . '/edit') }}" title="Edit Manager">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i> Edit</button>
                            </a>
                            <form method="POST" action="{{ url('/manager/' . $item->id) }}" accept-charset="UTF-8"
                                style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Manager"
                                    onclick="return confirm('Confirm delete')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection