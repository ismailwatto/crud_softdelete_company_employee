@extends('layouts.default')
   @section('styles')
   @push('title')
   <title> Update</title>
   <style>
    body{
        background-color: red;
    }
   </style>
   @endsection
   @section('content')
   <div class="row justify-content-center">
      <div class="col-md-6">

        <h2 class="text-center">Company Form</h2>
        <form action="{{ route('pages.company.update', ['id' => $company->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" id="id" placeholder="Enter name" name="id" value="{{$company->id}}">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $company->name}}">
            <!-- @if($errors->has('name')) -->
            <span style="color:red">{{$errors->first('name')}}</span>
            <!-- @endif -->
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$company->address}}">
            <span style="color:red">{{$errors->first('address')}}</span>
          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-primary" style="border-radius: 40px;">update</button>
          </div>
                </form>
      </div>
    </div>
    @endsection