<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Bienvenido!</h6>
                    </div>
                    <a class="dropdown-item notify-item"
                        href="{{ route('auth.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fe-log-out"></i>
                    <span>Cerrar Sesión</span>
                    </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" >
                    @csrf
                </form>
                </div>
            </li>
            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>
        </ul>

        <div class="logo-box">
            <a href="#" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.svg')}}" alt="" height="40">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo-dark.svg')}}" alt="" height="40">
                </span>
            </a>

            <a href="#" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm-light.svg')}}" alt="" height="40">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo-light.svg')}}" alt="" height="40">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>
            <li>
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
