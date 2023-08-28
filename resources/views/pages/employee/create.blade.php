@extends('layouts.default')
   @section('styles')
   <style>
    body{
        background-color: blue;
    }
   </style>
   @endsection
   @section('content')  
      <h2 class="text-center">Employee Form</h2>
        <form action="{{route('employee')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="text-center">
            <!-- x user defined name ha ye kuch bi ho sakta ha or input jis name se component ki file bnaty han -->
            <x-input type="text" name="name" label="Enter your name"/>
            <x-input type="text" name="designation" label="Enter your designation "/>
            <x-input type="email" name="email" label="Enter your email"/>
          <button type="submit" class="btn btn-primary" style="border-radius: 40px;">Submit</button>
          </div>
        </form>
    @endsection