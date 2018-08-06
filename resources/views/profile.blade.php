@extends('main') @section('content')

<!--Banner Wrap Start-->
<section class="sub_banner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sub_banner_hdg">
                    <h3>Profile</h3>
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
                <form action="{{route('profile.edit', $user->id)}}" method="POST">
                    @csrf
                    {{method_field('PUT')}}

                    <label>User Name:</label>
                    <div class="input-group">
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" aria-describedby="basic-addon1">
                    </div>

                    <label>Email:</label>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" value="{{$user->email}}" aria-describedby="basic-addon1">
                    </div>

                    <label>Password:</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" placeholder="password" aria-describedby="basic-addon1">
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Edit</button>
                    <a href="{{route('welcome')}}" class="btn btn-default waves-effect waves-light m-r-10">Cancel</button>
                </form>
            </div>
        </div>
    </section>

</div>
<!--Content Wrap End-->

@endsection