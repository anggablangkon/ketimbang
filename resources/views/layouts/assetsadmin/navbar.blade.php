 <!-- Top Bar Start -->
 <div class="topbar">
 
    <div class="topbar-left	d-none d-lg-block">
        <div class="text-center">

            <a href="{{url('/')}}" class="logo"><img src="{{ asset('/images/knp.PNG') }}" height="50" alt="logo"></a>
        </div>
    </div>

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">
           {{--  <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                <form role="search" class="app-search">
                    <div class="form-group mb-0"> 
                        <input type="text" class="form-control" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form> 
            </li> --}}
        <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="mdi mdi-bell-outline noti-icon"></i>
            <span class="badge badge-success badge-pill noti-icon-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
            <!-- item-->
            <div class="dropdown-item noti-title">
                <span class="badge badge-danger float-right">0</span>
                <h5>Notification</h5>
            </div>

            <div class="slimscroll" style="max-height: 230px;">

               
            </div>

        </div>
    </li>

    <li class="list-inline-item dropdown notification-list">
        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="mdi mdi-logout m-r-5 text-muted">
            </i>
            Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</li>

</ul>

<ul class="list-inline menu-left mb-0">
    <li class="list-inline-item">
        <button type="button" class="button-menu-mobile open-left waves-effect">
            <i class="ion-navicon"></i>
        </button>
    </li>
</ul>

<div class="clearfix"></div>

</nav>

</div>
                    <!-- Top Bar End -->