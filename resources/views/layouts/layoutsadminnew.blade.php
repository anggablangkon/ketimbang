<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Ketimbang Ngemis - @yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        @include('layouts.assetsadmin.css')

        @yield('css')

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div> 

        <!-- Begin page -->
        <div id="wrapper">

        @include('layouts.assetsadmin.sidebar')

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                @desktop
                <div class="content">
                @enddesktop

                @include('layouts.assetsadmin.navbar')

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Ketimbang Ngemis</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Dashboard</h5>
                                </div>
                            </div>
    
                        </div><!-- container fluid -->

                            <!-- end row -->

                            @yield('content')
                            <!-- end row -->
                    </div> <!-- Page content Wrapper -->

                @desktop
                </div> 
                @enddesktop
                <!-- content -->

                @include('layouts.assetsadmin.footer')

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        @include('layouts.assetsadmin.js')

        @yield('javascript')

    </body>
</html>