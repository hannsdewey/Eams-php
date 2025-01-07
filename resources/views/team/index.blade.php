@extends('layout')
@section('content')
<style>
.content-wrapper {
    margin-top: 60px;
}
</style>
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h2>Team Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/teams/create') }}" class="btn btn-success btn-sm" title="Add New team">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br /><br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Team Name</th>
                            <th>Team Manager</th>
                            <th>Team Employee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($teams->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">No teams found.</td>
                        </tr>
                        @else
                        @foreach($teams as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->TeamName }}</td>
                            <td>{{ $item->TeamManager }}</td>
                            <td>{{ $item->TeamEmployee }}</td>

                            <td>
                                <a href="{{ url('/teams/' . $item->id) }}" title="View team">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View</button>
                                </a>
                                <a href="{{ url('/teams/' . $item->id . '/edit') }}" title="Edit team">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i> Edit</button>
                                </a>
                                <form method="POST" action="{{ url('/teams/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete team"
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
</div>
@endsection