@extends('layouts.default')
@section('content')
@push('title')
<title>Data Table</title>
@endpush

<a href="{{ url('companyd') }}" class="btn btn-success float-end ms-1">Submit Form</a>
<a href="{{ url('company/trash') }}" class="btn btn-primary float-end">Go To Trash</a>

<h1 class="mt-2 mb-1 text-center">Database Data</h1>

<form action="" class="d-flex justify-content-center">
    <div class="col-md-6">
        <input type="search" name="search" id="search" class="form-control" placeholder="Search" value="{{ old('search', $search) }}">
        <button class="btn btn-primary">Search</button>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->address }}</td>
                <td>{{ $company->created_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('pages.company.show', ['company' => $company->id]) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('pages.company.edit', ['id' => $company->id]) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('pages.company.destroy', ['id' => $company->id]) }}" class="btn btn-danger">Trash</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    {{ $companies->links('pagination::bootstrap-4') }}
</div>
@endsection
