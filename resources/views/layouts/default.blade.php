<!DOCTYPE html>
<html>
<head>
   @include('include.head')
   @yield('styles')
   <style>
    form{
        background-color: yellow;
        padding: 20px;

    }
   </style>
  </head>
<body>
<div class="container">
    <header class="row">
        @include('include.header')
    </header>
    <div class="row justify-content-center">
    <div class="col-md-12">
       @yield('content')
    </div>
    </div>
    <footer class="row">
        @include('include.footer')
    </footer>
</div>
</body>
</html>