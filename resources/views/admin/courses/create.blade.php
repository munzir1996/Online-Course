@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Add Course</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="active">Add Course</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Basic Information</h3>
            <form class="form-material form-horizontal" method="POST" action="{{ route('admincourses.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-12" for="name">Name</label>
                    <div class="col-md-12">
                        <input type="text" id="name" name="name" class="form-control" placeholder="enter course name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="description">Description</label>
                    <div class="col-md-12">
                        <textarea type="text" id="description" name="description" class="form-control" placeholder="enter course description"></textarea>
                    </div>
                    </div>
                <div class="form-group">
                    <label class="col-sm-12">Level</label>
                    <div class="col-sm-12">
                        <select class="form-control" name="level">
                            <option value="Begginer">Begginer</option>
                            <option value="Modreate">Modreate</option>
                            <option value="Expert">Expert</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-md-12" for="duration">Duration (hours)</label>
                        <div class="col-md-12">
                            <input type="text" id="duration" name="duration" class="form-control" placeholder="enter Number">
                        </div>
                    </div>
                <div class="form-group">
                        <label class="col-sm-12">Teacher</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="teacher_id">
                                @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label class="col-sm-12">Course Image</label>
                    <div class="col-sm-12">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput">
                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                <span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn btn-default btn-file">
                                <span class="fileinput-new">Select file</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image" id="image"> </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                <a href="{{route('admincourses.index')}}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection