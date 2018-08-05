@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">All Assets</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="active">All Assets</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Assets Table</h3>
        <div class="table-responsive">
                <table id="assets-table" class="table table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                style="width: 180px;">Title</th>
                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 285px;">Course</th>
                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                                style="width: 76px;">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$video->title}}</td>
                            <td>{{$video->course->name}}</td>
                            <td>{{$video->name}}</td>
                            <td class="text-nowrap">
                                <a href="{{route('adminteachers.show', $video->id)}}" data-toggle="tooltip" data-original-title="Show">
                                    <i class="fa fa-eye text-inverse m-r-10"></i>
                                </a>
                                <a href="{{route('adminteachers.edit', $video->id)}}" data-toggle="tooltip" data-original-title="Edit">
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

@endsection

@section('scripts')
<script>
$(document).ready( function () {
    $('#assets-table').DataTable();
} );
</script>
@endsection