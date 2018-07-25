<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> @include('admin.adminpartials._head') 
    @yield('stylesheets')
</head>

<body>

    @include('admin.adminpartials._nav') @include('admin.adminpartials._sidebar')
    <div id="page-wrapper" style="min-height: 365px;">
        <div class="container-fluid">
            @include('admin.adminpartials._messages')
            
            @yield('content')
        </div>
    </div>

    @include('admin.adminpartials._javascript')
    @yield('scripts')

</body>

</html>