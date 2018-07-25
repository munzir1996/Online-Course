<!-- Left navbar-header -->

<div class="navbar-default sidebar" role="navigation">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar active" style="overflow: hidden; width: auto; height: 100%;">
            <ul class="nav in" id="side-menu">
                <li class="nav-small-cap m-t-10">--- Main Menu</li>
                
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="icon-people p-r-10"></i>
                        <span class="hide-menu"> Teachers
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{route('adminteachers.index')}}">All Teachers</a>
                        </li>
                        <li>
                            <a href="{{route('adminteachers.create')}}">Add Teacher</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-graduation-cap p-r-10"></i>
                        <span class="hide-menu"> Students
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{route('adminusers.index')}}">All Students</a>
                        </li>
                        <li>
                            <a href="{{route('adminusers.create')}}">Add Student</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-bars p-r-10"></i>
                        <span class="hide-menu"> Courses
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{route('admincourses.index')}}">All Courses</a>
                        </li>
                        <li>
                            <a href="{{route('admincourses.create')}}">Add Course</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-book p-r-10"></i>
                        <span class="hide-menu"> Library
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{route('adminvideos.index')}}">Library Assets</a>
                        </li>
                        <li>
                            <a href="{{route('adminvideos.create')}}">Add Library Asset</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 0px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 930.222px;"></div>
        <div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
    </div>
</div>

<!-- Left navbar-header end -->
