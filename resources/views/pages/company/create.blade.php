   @extends('layouts.default')
   @section('styles')
   @push('title')
   <title> Home</title>
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
        <form action="{{route('formdata')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
            <!-- @if($errors->has('name')) -->
            <span style="color:red">{{$errors->first('name')}}</span>
            <!-- @endif -->
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{old('address')}}">
            <span style="color:red">{{$errors->first('address')}}</span>
          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-primary" style="border-radius: 40px;">Submit</button>
          </div>
                </form>
      </div>
    </div>
    @endsection