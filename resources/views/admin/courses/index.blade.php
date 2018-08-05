@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">All Courses</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="active">All Courses</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Courses Table</h3>
        <div class="table-responsive">
            <table id="course-table" class="table table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
                            style="width: 180px;">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                            style="width: 76px;">Level</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                            style="width: 76px;">Duration</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                            style="width: 76px;">Teacher</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                            style="width: 285px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{$course->name}}</td>
                        <td>{{$course->level}}</td>
                        <td>{{$course->duration}} Hours</td>
                        <td>{{$course->teacher->name}}</td>
                        <td class="text-nowrap">
                            <a href="{{route('admincourses.show', $course->id)}}" data-toggle="tooltip" data-original-title="Show">
                                <i class="fa fa-eye text-inverse m-r-10"></i>
                            </a>
                            <a href="{{route('admincourses.edit', $course->id)}}" data-toggle="tooltip" data-original-title="Edit">
                                <i class="fa fa-pencil text-inverse m-r-10"></i>
                            </a>
                            <a href="#" data-toggle="tooltip" data-original-title="Delete">
                                <i class="fa fa-close text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection @section('scripts')
<script>
    $(document).ready(function () {
        $('#course-table').DataTable();
    });
</script>
@endsection