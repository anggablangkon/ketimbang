<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	

	@include('assets/cssadmin')

</head>
<body>

	<header>
		<!-- navbar admin -->
		<nav class="navbar navbar-inverse">
			<div class="container">
			<a href="{{ url('/') }}">	
				<p class="navbar-text" style="color: white">Halaman Utama Admin</p>
			</a>
			</div>
		</nav> 
		<!-- enf navbar -->
	</header>

	<content>
		@yield('content')
	</content>

	<footer>
		@yield('footer')
	</footer>


	<!-- javascript -->
  	@include('assets/javascriptadmin')

</body>
</html>