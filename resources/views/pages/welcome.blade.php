@extends('main')

@section('content')

<!--Banner Wrap Start-->
    <div class="banner_outer_wrap">
    	<ul class="">
        	<li>
            	<img src="{{asset('vendor/images/welcome.jpg')}}" style="height: 500px" alt="">
                <div class="ct_banner_caption">
                	<h4 class="fadeInDown">WELCOME TO <span>EDU LEARN</span></h4>
                    <span class="fadeInDown">Learning Online is Easy Now</span>
                    <h2 class="fadeInDown">WE ARE THE BEST <br/> IN Online EDUCATION</h2>
                    <p class="fadeInDown">HELLO, ARE YOU READY TO START RIGHT NOW ?</p>
                </div>
            </li>
        </ul>
    </div>
    <!--Banner Wrap End-->

    <!--Content Wrap Start-->
    <div class="ct_content_wrap">
        <!--Get Started Wrap Start-->
        <section>
        	<div class="container">
            	
                
                <div class="row">
                	<div class="col-md-4 col-sm-6">
                    	<div class="get_started_services">
                        	<div class="get_started_icon">
                            	<i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="get_icon_des">
                            	<h5>Experience Your Self</h5>
                                <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                <a href="#">View More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    	<div class="get_started_services">
                        	<div class="get_started_icon">
                            	<i class="fa fa-bookmark-o"></i>
                            </div>
                            <div class="get_icon_des">
                            	<h5>MASTER LEARNING</h5>
                                <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                <a href="#">View More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    	<div class="get_started_services">
                        	<div class="get_started_icon">
                            	<i class="fa fa-television"></i>
                            </div>
                            <div class="get_icon_des">
                            	<h5>ONLINE LEARNING</h5>
                                <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                <a href="#">View More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--Get Started Wrap End-->
        
        <!--Courses By Subject Wrap Start-->
        <section class="ct_courses_subject_bg">
        	<div class="container">
            	<!--Heading Style 1 Wrap Start-->
                <div class="ct_heading_1_wrap ct_white_hdg">
                	<h3>Cources By Subject</h3>
                    <span><img src="{{asset('vendor/images/hdg-01.png')}}" alt=""></span>
                </div>
                <!--Heading Style 1 Wrap End-->
                
                <!--Courses Subject List Wrap Start-->
                <div class="courses_subject_carousel owl-carousel">
                	<div class="item">
                        <div class="course_subject_wrap ct_bg_1">
                            <i class="fa fa-area-chart"></i>
                            <div class="course_subject_des">
                                <p><span>Industrial</span>Business Analysis</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_2">
                            <i class="fa fa-users"></i>
                            <div class="course_subject_des">
                                <p><span>Social Media</span>Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_3">
                            <i class="fa fa-briefcase"></i>
                            <div class="course_subject_des">
                                <p><span>Business</span>Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_4">
                            <i class="fa fa-play-circle"></i>
                            <div class="course_subject_des">
                                <p><span>Movie</span>Production</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_5">
                            <i class="fa fa-television"></i>
                            <div class="course_subject_des">
                                <p><span>3D Arts</span>& Sciences</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_6">
                            <i class="fa fa-book"></i>
                            <div class="course_subject_des">
                                <p><span>Library</span>Managment</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_1">
                            <i class="fa fa-area-chart"></i>
                            <div class="course_subject_des">
                                <p><span>Industrial</span>Business Analysis</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_2">
                            <i class="fa fa-briefcase"></i>
                            <div class="course_subject_des">
                                <p><span>Industrial</span>Business Analysis</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course_subject_wrap ct_bg_3">
                            <i class="fa fa-users"></i>
                            <div class="course_subject_des">
                                <p><span>Industrial</span>Business Analysis</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Courses Subject List Wrap End-->
            </div>
        </section>
        <!--Courses By Subject Wrap End-->
        
        
    </div>
    <!--Content Wrap End-->

@endsection
