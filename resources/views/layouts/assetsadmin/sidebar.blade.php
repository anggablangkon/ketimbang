 <!-- ========== Left Sidebar Start ========== -->
 <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">

            <a href="{{ url('/') }}" class="logo"><img src="{{ asset('/images/knp.png') }}" height="40" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft" >

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ url('/home') }}" class="waves-effect">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard <span class="badge badge-success badge-pill float-right"></span></span>
                    </a>
                </li>

                @if(Auth::user()->flaglevel == 1)
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user-group"></i> <span> Keanggotaan </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/tambahanggota') }}">Tambah Anggota</a></li>
                        <li><a href="{{ url('/listdataanggota') }}">List Data Anggota</a></li>
                    </ul>
                </li>
                @endif

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i> <span> Kegiatan </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/lihatpostingan') }}">Post Artikel</a></li>
                    </ul>
                </li>

                <li class="menu-title">Panel</li>

                 <li>
                    <a href="{{ url('/layoutsedit') }}" class="waves-effect">
                        <i class="dripicons-direction"></i>
                        <span> Layout Edit <span class="badge badge-success badge-pill float-right"></span></span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
            <!-- Left Sidebar End -->