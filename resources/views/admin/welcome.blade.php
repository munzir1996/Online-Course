@extends('admin.main') @section('content')

<div class="row bg-title">

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin') }}">Dashboard</a>
            </li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->

</div>
<!-- End .row title -->

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="row row-in">
                <div class="col-lg-3 col-sm-6 row-in-br">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <i data-icon="E" class="linea-icon linea-basic"></i>
                            <h5 class="text-muted vb">Students</h5>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-danger">{{$users->count()}}</h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistic -->
                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">Videos</h5>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-megna">169</h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistic -->
                <div class="col-lg-3 col-sm-6 row-in-br">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">Teachers</h5>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-primary"
                            data-counter="counterup" data-value="{{$teachers->count()}}">{{$teachers->count()}}</h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistic -->
                <div class="col-lg-3 col-sm-6  b-0">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">Courses</h5>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-success">{{$courses->count()}}</h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistic -->
            </div>
        </div>
    </div>
    <!-- End .col -->
</div>
<!-- End .row -->
@endsection