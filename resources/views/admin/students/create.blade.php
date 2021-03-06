@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Add Student</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="active">Add Student</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Basic Information</h3>
            <form class="form-material form-horizontal" method="POST" action="{{ route('adminusers.store') }}">
                @csrf
                <div class="form-group">
                    <label class="col-md-12" for="name">Name
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="name" name="name" class="form-control" placeholder="enter your name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="email">Email
                    </label>
                    <div class="col-md-12">
                        <input type="email" id="email" name="email" class="form-control" placeholder="enter your example@email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="password">Password
                    </label>
                    <div class="col-md-12">
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                <a href="{{route('adminusers.index')}}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection