<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">

        <a href="" class="logo">
            <img src="{{asset('admin/assets/img/logo.svg')}}" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">

            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{asset('admin/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img src="{{asset('admin/assets/img/profile.jpg')}}" alt="{{Auth::user()->name}}" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p><a href="" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('profile.show-info', 1) }}">My Profile</a>
                                <a class="dropdown-item" href="{{ route('profile.edit', 1) }}">Setting</a>
                                <a class="dropdown-item" href="{{route('contact-us.index')}}">Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
