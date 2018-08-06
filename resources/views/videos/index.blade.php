@extends('main') @section('content')

<!--Banner Wrap Start-->
<section class="sub_banner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sub_banner_hdg">
                    <h3>{{$course->name}} Videos</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ct_breadcrumb">
                    <ul>
                        <li>
                            <a href="{{route('welcome')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('courses.index')}}">Courses</a>
                        </li>
                        <li>
                            <a href="#">{{$course->name}} Videos</a>
                        </li>
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
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">{{$course->name}}</h3>
                    <div class="table-responsive">
                        <table id="course-table" class="table table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                        style="width: 180px;">Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 76px;">Actions</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                                        style="width: 76px;">Seen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $video)
                                <tr role="row" class="odd">
                                    <td>{{$video->title}}</td>
                                    <td class="text-nowrap">
                                        <a href="{{route('video.show', $video->id)}}" data-toggle="tooltip" data-original-title="Show">
                                            <i class="fa fa-eye text-inverse m-r-10"></i>
                                        </a>
                                    </td>
                                    <td style="color:red">NO</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!--Content Wrap End-->

@endsection

@section('scripts')
<script>
$(document).ready( function () {
    $('#video-table').DataTable();
} );
</script>
@endsection
