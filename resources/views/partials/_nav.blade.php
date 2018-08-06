<!--Header Wrap Start-->
<header>

    <!--Navigation Wrap Start-->
    <div class="logo_nav_outer_wrap">
        <div class="container">
            <div class="logo_wrap">
                <a href="{{route('welcome')}}">
                    <img src="{{asset('vendor/images/logo.png')}}" alt="">
                </a>
            </div>
            <nav class="main_navigation">
                @if(Auth::check())
                <ul>
                    <li>
                        <a href="{{route('welcome')}}">Home
                            <span>MAIN PAGE</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('courses.index')}}">courses
                            <span>What We Offer</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('teachers.index')}}">Teachers
                            <span>OUR INSTURCTERS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contactus')}}">Contact Us
                            <span>Contact Us</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                            <b class="hidden-xs">{{Auth::user()->name}}</b>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <a href="{{ route('profile', Auth::user()->id) }}">
                                <i class="fa fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </nav>
            <!--DL Menu Start-->
            <div id="kode-responsive-navigation" class="dl-menuwrapper">
                <button class="dl-trigger">Open Menu</button>
                <ul class="dl-menu">
                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about-us.html">About Us</a>
                    </li>
                    <li class="menu-item kode-parent-menu">
                        <a href="#">courses</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="course-listing.html">Course Listing</a>
                            </li>
                            <li>
                                <a href="course-detail.html">Course Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item kode-parent-menu">
                        <a href="our-teacher.html">Teachers</a>
                    </li>
                    <li>
                        <a href="contact-us.html"> Us</a>
                    </li>
                </ul>
            </div>
            <!--DL Menu END-->
            @else
            <a href="{{ route('login') }}" class="btn btn-default">Login</a>
            <a href="{{ route('register') }}" class="btn btn-default">Register</a>
            @endif
        </div>
    </div>
    <!--Navigation Wrap End-->
</header>
<!--Header Wrap End-->