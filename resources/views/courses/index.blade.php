@extends('main')

@section('content')

<!--Banner Wrap Start-->
<section class="sub_banner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sub_banner_hdg">
                    <h3>Courses Listing</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ct_breadcrumb">
                    <ul>
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="#">Courses Listing</a></li>
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
                @foreach($courses as $course)
                <div class="col-md-4 col-sm-6">
                    <div class="ct_course_list_wrap">
                        <figure>
                            <img src="{{asset('images/'.$course->image.'/'.$course->image)}}" alt="">
                            <figcaption class="course_list_img_des">
                                <div class="ct_zoom_effect"></div>
                                <div class="ct_course_link">
                                    <a href="{{route('courses.show', $course->id)}}">View Detail</a>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="popular_course_des">
                            <h5><a href="{{route('courses.show', $course->id)}}">{{$course->name}}</a></h5>
                            <p>{{ substr(strip_tags($course->description), 0, 50) }} {{ strlen(strip_tags($course->description)) > 50 ? "...":"" }}</p>
                            <div class="ct_course_meta">
                                <div class="course_author">
                                    <i class="fa fa-user"></i><a href="{{route('teachers.index')}}">{{$course->teacher->name}}</a>
                                </div>
                                <ul>
                                    <li><i class="fa fa-comment"></i><a href="#">{{$course->courseComments->count()}}</a></li>
                                    <li><i class="fa fa-users"></i><a href="#">{{$course->subscribes->count()}}</a></li>
                                </ul>
                            </div>
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
