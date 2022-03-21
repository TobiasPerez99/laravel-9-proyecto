<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
       @include('includes.header')
   <div id="main" class="row">
           @yield('content')
   </div>
    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>
