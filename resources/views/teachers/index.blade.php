@extends('main')

@section('content')

<!--Banner Wrap Start-->
    <section class="sub_banner_wrap">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                	<div class="sub_banner_hdg">
                    	<h3>Our Teachers</h3>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="ct_breadcrumb">
                    	<ul>
                        	<li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="#">Our Teachers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Wrap End-->
    
    <!--Content Wrap Start-->
    <div class="ct_content_wrap">
    	<section>
        	<div class="container">
                <div class="row">
                    @foreach($teachers as $teacher)
                    <div class="col-md-3 col-sm-6">
                    	<div class="ct_teacher_outer_wrap">
                            
                        	<figure>
                            	<img alt="" src="{{asset('images/'.$teacher->image.'/'.$teacher->image)}}">
                            </figure>
                            <div class="ct_teacher_wrap">
                            	<h5><a href="#">{{$teacher->name}}</a></h5>
                                <span>{{$teacher->degree}} / {{$teacher->department}}</span>
                                <ul>
                                	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
    </div>
    <!--Content Wrap End-->

@endsection
