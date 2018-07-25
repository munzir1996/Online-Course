<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials._head')
    @yield('stylesheets')
</head>
<body>
    
    @include('partials._nav')

    <div class="ct_wrapper">
        @include('partials._messages')
        @yield('content')
    </div>
    
    @include('partials._footer')
    @include('partials._javascript')

</body>
</html>