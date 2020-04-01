

@extends('layouts.layoutadmin')

@section('title', 'Halaman Administrator')

@section('content')
	
	<div class="container">
		
		<div class="col-sm-3">
			
			<!-- membuat menu dashboar admin -->
			 <div class="panel-group" id="accordion">

			  <div class="panel panel-primary">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#collapse1">
			        Dashboard</a>
			      </h4>
			    </div>
			    <div id="collapse1" class="panel-collapse collapse in">
			      
			      <div class="panel-body">
			      <!-- content panel dashboard -->
			      	@include('assets/paneladmin')
			      <!-- end -->
			      </div>

			    </div>
			  </div>
			  
			</div> 
			<!-- end dashboard admin --->

		</div>

		<div class="col-sm-9">
			
			<!-- membuat menu dashboar admin -->
			 <div class="panel-group" id="accordion">

			  <div class="panel panel-primary">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#collapse2">
			        Hallo! {{ Auth::user()->name }}</a>
			      </h4>
			    </div>
			    <div  class="panel-collapse collapse in">
			      
			      <div class="panel-body">
			      <!-- content panel dashboard -->

			      <!-- end -->
			      </div>

			    </div>
			  </div>
			  
			</div> 
			<!-- end dashboard admin --->

		</div>

	</div>
	<!-- penutup container -->

@endsection