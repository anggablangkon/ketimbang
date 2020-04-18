@extends('layouts/layoutsadminnew')

@section('content')

<div class="row">

	<!-- membuat alert selamat datang -->
	<div class="col-sm-12">

		<div class="alert alert-success" style="color: black;">
			<strong> Hallo </strong> {{Auth::user()->name}}, Selamat datang dihalaman <b>Dashboard</b>
		</div>

		<div class="row">

		</div>

	</div>


</div>

@endsection