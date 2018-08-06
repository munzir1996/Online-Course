@extends('main') @section('content')

<!--Banner Wrap Start-->
<section class="sub_banner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sub_banner_hdg">
                    <h3>Course Detail</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ct_breadcrumb">
                    <ul>
                        <li>
                            <a href="{{route('welcome')}}">Home</a>
                        </li>
                        <li>
                            <a href="#">Course Detail</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner Wrap End-->

<section class="ct_blog_outer_wrap">
    <div class="container">
        <div class="row">
            <!--Blog Detail Wrap Start-->
            <div class="col-md-8">
                <div class="ct_blog_detail_outer_wrap">
                    
                    <div class="ct_blog_detail_des">
                        <figure>
                                <video width="320" height="240" controls>
                                    <source src="{{asset($video->video)}}" type="video/mp4">
                                  </video>
                        </figure>
                        <div class="ct_course_detail_wrap">
                            <h5>Course Information</h5>
                            <div class="row">
                                <div class="col-md-5">
                                    <ul class="ct_course_list">
                                        <li>
                                            <h6>Levels:</h6>
                                            <span>{{$course->level}}</span>
                                        </li>
                                        <li>
                                            <h6>Duration:</h6>
                                            <span>{{$course->duration}} Hours</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Detail Wrap End-->
        </div>

        <div class="ct_blog_detail_des_list">
            <h5>Description</h5>
            <p>{{$course->description}}</p>

        </div>
        <div class="ct_blog_author">
            <h5>About Author:</h5>
            <div class="ct_author_des">
                <figure>
                    <img src="{{asset('images/'.$course->teacher->image.'/'.$course->teacher->image)}}" alt="">
                </figure>
                <div class="ct_author_detail">
                    <h6>{{$course->teacher->name}}</h6>
                    <span>{{$course->teacher->degree}} / {{$course->teacher->department}}</span>
                    <div class="ct_share_link">
                        <h6>Social Links </h6>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


@endsection