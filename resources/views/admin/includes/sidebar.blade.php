
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('admin/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{Auth::user()->name}}
									<span class="user-level">Administrator</span>
									{{-- <span class="caret"></span> --}}
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
{{--                        <ul class="nav">--}}
{{--                            <li>--}}
{{--                                <a href="#profile2">--}}
{{--                                    <span class="link-collapse">My Profile</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#edit">--}}
{{--                                    <span class="link-collapse">Edit Profile</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#settings">--}}
{{--                                    <span class="link-collapse">Settings</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                         <span class="caret"></span>
                    </a>
{{--                     <div class="collapse" id="dashboard">--}}
{{--                        <ul class="nav nav-collapse">--}}
{{--                            <li>--}}
{{--                                <a href="../demo1/index.html">--}}
{{--                                    <span class="sub-item">Dashboard 1</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="../demo2/index.html">--}}
{{--                                    <span class="sub-item">Dashboard 2</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </li>
{{--                 <li class="nav-section">--}}
{{--							<span class="sidebar-mini-icon">--}}
{{--								<i class="fa fa-ellipsis-h"></i>--}}
{{--							</span>--}}
{{--                    <h4 class="text-section">Components</h4>--}}
{{--                </li> --}}


                <li class="nav-item">
                    <a data-toggle="collapse" href="#comments">
                        <i class="fas fa-comments"></i>
                        <p>Blogs Comments</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="comments">
                        <ul class="nav nav-collapse">
                            <li>
                            <a href="{{route('comments.index')}}">
                                    <span class="sub-item">All comments</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#users">
                        <i class="fas fa-users"></i>
                        <p>Courses</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav nav-collapse">
                            <li>
                            <a href="{{route('courses.index')}}">
                                    <span class="sub-item">All courses</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('courses.create')}}">
                                    <span class="sub-item">Add new course</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Blogs</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('blogs.index')}}">
                                    <span class="sub-item">All Blogs</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blogs.create')}}">
                                    <span class="sub-item">Add New Blog</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Category</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('categories.index')}}">
                                    <span class="sub-item">All Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('categories.create')}}">
                                    <span class="sub-item">Add New Category</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Skills</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('skills.index')}}">
                                    <span class="sub-item">All Skills</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('skills.create')}}">
                                    <span class="sub-item">Add New Skill</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Portfolio</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('portfolio.index')}}">
                                    <span class="sub-item">All Portfolio</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('portfolio.create')}}">
                                    <span class="sub-item">Add New Portfolio</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a data-toggle="collapse" href="#maps">--}}
{{--                        <i class="fas fa-map-marker-alt"></i>--}}
{{--                        <p>Profile</p>--}}
{{--                        <span class="caret"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="maps">--}}
{{--                        <ul class="nav nav-collapse">--}}
{{--                            <li>--}}
{{--                            <a href="{{route('profile2.index')}}">--}}
{{--                                    <span class="sub-item">Open Profile</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('profile2.create')}}">--}}
{{--                                        <span class="sub-item">Create New Profile</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a data-toggle="collapse" href="#charts">
                        <i class="far fa-chart-bar"></i>
                        <p>Experiences</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                            <a href="{{route('experiences.index')}}">
                                <span class="sub-item">All Experiences</span>
                            </a>
                            </li>
                            <li>
                                <a href="{{route('experiences.create')}}">
                                    <span class="sub-item">Add New Experiences</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                <a href="{{route('contact-us.index')}}">
                        <i class="fas fa-desktop"></i>
                        <p>Contact Us</p>
                        <span class="badge badge-success">{{\App\Models\Contact::IsNotSeen()->count()}}</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a data-toggle="collapse" href="#Educations">
                        <i class="fas fa-bars"></i>
                        <p>Educations</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="Educations">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('educations.index')}}">
                                    <span class="sub-item">All Educations</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('educations.create')}}">
                                    <span class="sub-item">Add New Education</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#services">
                        <i class="fas fa-tasks"></i>
                        <p>Services</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="services">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('services.index')}}">
                                    <span class="sub-item">All Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.create')}}">
                                    <span class="sub-item">Add New Service</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#testimonials">
                        <i class="fas fa-comments"></i>
                        <p>Testimonials</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="testimonials">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('testimonials.index')}}">
                                    <span class="sub-item">All Testimonials</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('testimonials.create')}}">
                                    <span class="sub-item">Add New Testimonial</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a data-toggle="collapse" href="#educations">--}}
{{--                        <i class="fas fa-bars"></i>--}}
{{--                        <p>Educations</p>--}}
{{--                        <span class="caret"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="educations">--}}
{{--                        <ul class="nav nav-collapse">--}}
{{--                            <li>--}}
{{--                                <a data-toggle="collapse" href="{{route('educations.index')}}">--}}
{{--                                    <span class="sub-item">All Educations</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-toggle="collapse" href="{{route('educations.create')}}">--}}
{{--                                    <span class="sub-item">Add New Education</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a data-toggle="collapse" href="#services">--}}
{{--                        <i class="fas fa-tasks"></i>--}}
{{--                        <p>Services</p>--}}
{{--                        <span class="caret"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="services">--}}
{{--                        <ul class="nav nav-collapse">--}}
{{--                            <li>--}}
{{--                            <a data-toggle="collapse" href="{{route('services.index')}}">--}}
{{--                                    <span class="sub-item">All Services</span>--}}
{{--                                </a>--}}

{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-toggle="collapse" href="{{route('services.create')}}">--}}
{{--                                        <span class="sub-item">Add New Service</span>--}}
{{--                                    </a>--}}

{{--                                </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a data-toggle="collapse" href="#testimonials">--}}
{{--                        <i class="fas fa-comments"></i>--}}
{{--                        <p>Testimonials</p>--}}
{{--                        <span class="caret"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="testimonials">--}}
{{--                        <ul class="nav nav-collapse">--}}
{{--                            <li>--}}
{{--                            <a data-toggle="collapse" href="{{route('testimonials.index')}}">--}}
{{--                                    <span class="sub-item">All Testimonials</span>--}}
{{--                                </a>--}}

{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-toggle="collapse" href="{{route('testimonials.create')}}">--}}
{{--                                        <span class="sub-item">Add New Testimonial</span>--}}
{{--                                    </a>--}}

{{--                                </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li class="mx-4 mt-2">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i
                                class="fa fa-key"></i> </span>{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
