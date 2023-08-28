@extends('layouts.default')
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->designation }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->created_at }}</td>
                <td><a href="{{ route('pages.employee.show', ['employee' => $employee->id]) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
