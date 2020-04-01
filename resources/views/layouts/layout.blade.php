<!DOCTYPE html>
<!-- halaman ini dikembangkan oleh team kokitindo.com -->
<!-- dan dimiliki oleh ketimbang ngemis pandeglang -->
<!-- hak cipta sepenuhnya diberikan kepada ketimbang ngemispandeglang -->
<html>
<head>
	<meta charset="utf-8">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <link rel="shortcut icon" href="{{ url('/images/favicon.ico') }}">
    <style type="text/css">
      .navbar{
        background-color: black;
      }
    </style>
	<title>@yield('title')</title>

	<!-- css internal -->
	@include('assets/css')

	<!-- css external -->
	@yield('css')


</head>
<body>

	<!-- ini adalah header -->
    <header id="home" class="hero-area-2">    
		@include('assets/navbar')

		@yield('halamanatas')
	</header>
	<!-- header end -->

	<!-- ini adalah content -->
	<content>
		@yield('content')
	</content>

	<!-- preloader  dan top link -->
	<!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

	<!-- ini adalah footer -->
	<footer>
    <!-- Footer Area Start -->
	<section class="footer-Content">
                  <div class="container">
                      
                      <center>
                        <img src="{{ asset('/images/knp.PNG') }}" style="width: 60px; height: 60px;">
                        <div class="textwidget">
                          <p>Ketimbang Ngemis Pandeglang </p>
                        </div>
                      </center>
                    
                  </div>
                  <!-- Copyright Start  -->
                  <div class="copyright">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="site-info float-left">
                            <p>&copy; {{ date('Y') }} - @Ketimbang Ngemis Pandeglang <a href="https://kokitindo.com" rel="nofollow"></a></p>
                          </div>              
                          <div class="float-right">  
                            <ul class="footer-social">
                                <li><a class="youtube" href="https://www.youtube.com/channel/UCm5jd-a-BzCTzSvZtmRfkOQ" target="_blank"><i class="lni-film-play"></i></a></li>
                              <li><a class="facebook" href="https://www.facebook.com/ketimbang.ngemis.pandeglang90" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                              <li><a class="instagram" href="https://www.instagram.com/ketimbang.ngemis.pandeglang" target="_blank"><i class="lni-instagram-filled"></i></a></li>
                            </ul> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    	<!-- Copyright End -->
	</section>
      <!-- Footer Section End --> 
	</footer>

	<!-- javascript internal -->
	@include('assets/javascript')

	<!-- javascript external -->
	@yield('javascript')




</body>
</html>
