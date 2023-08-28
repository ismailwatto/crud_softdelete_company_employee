@extends('layouts.default')
@section('content')
@push('title')
   <title>Trash Data</title>
@endpush
<div class="container">
<a href="{{ url('companydata') }}" class="btn btn-success float-right">Company Data</a>
    <h1 class="mt-4 mb-4 text-center">Trash Data</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
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
                                <a href="{{ route('pages.company.restore', ['id' => $company->id]) }}" class="btn btn-primary">Restore</a>
                                <a href="{{ route('pages.company.delete', ['id' => $company->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
