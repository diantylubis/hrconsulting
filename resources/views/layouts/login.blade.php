<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
   <!--bootstrap css-->
   @include('includes.styles')
    
   <!--css-->
   @yield('styling')
 
</head>
<body>

     <!--content-->  
    @yield('content')

    <!--bootstrap JS-->
    @include('includes.scripts')

</body>
</html>
