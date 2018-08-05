@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Teacher Profile</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="active">Teacher Profile</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <!-- Image col -->
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <div class="user-bg">
                <img width="100%" alt="user" src="{{asset('images/'.$teacher->image.'/'.$teacher->image)}}">
            </div>
        </div>
    </div>
    <!-- / Image col -->
    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <div class="row">
                <div class="col-md-3 col-xs-6 b-r">
                    <strong>Name</strong>
                    <br>
                    <p class="text-muted">{{$teacher->name}}</p>
                </div>
                <div class="col-md-3 col-xs-6 b-r">
                    <strong>Degree</strong>
                    <br>
                    <p class="text-muted">{{$teacher->degree}}</p>
                </div>
                <div class="col-md-3 col-xs-6 b-r">
                    <strong>Department</strong>
                    <br>
                    <p class="text-muted">{{$teacher->department}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile col
</div>

@endsection