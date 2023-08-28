@extends('layouts/default')
@section('content')
@push('title')
   <title>Show Data</title>
your name is {{$company->name ?? ''}}
<br>
your address is {{$company->address ?? ''}}
<br>
    <a href="{{ route('companydata', ['company' => $company->id]) }}" class="btn btn-success">Submit Form</a>
    <a href="{{ route('pages.company.index', ['company' => $company->id]) }}" class="btn btn-info">Table Data</a>

@endsection