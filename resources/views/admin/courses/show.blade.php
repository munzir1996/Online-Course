@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Teacher Profile</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin')}}">Adminpanel</a>
            </li>
            <li class="active">Teacher Profile</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="white-box">
            <div class="row">
                <div class="col-md-12 m-b-20">
                    <img class="img-responsive" src="{{asset('images/'.$course->image.'/'.$course->image)}}" alt="course-image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6 b-r">
                    <strong>Course Name</strong>
                    <br>
                    <p class="text-muted">{{$course->name}}</p>
                </div>
                <div class="col-md-3 col-xs-6 b-r">
                    <strong>Level</strong>
                    <br>
                    <p class="text-muted">{{$course->level}}</p>
                </div>
                <div class="col-md-3 col-xs-6 b-r">
                    <strong>Teacher Name</strong>
                    <br>
                    <p class="text-muted">{{$course->teacher->name}}</p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <strong>Duration</strong>
                    <br>
                    <p class="text-muted">{{$course->duration}} Hours</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <strong>Description</strong>
                </div>
                <p class="text-muted">
                        {{$course->description}}
                </p>
            </div>
            <hr>
        </div>
    </div>
</div>

@endsection