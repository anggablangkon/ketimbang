@extends('layouts/layoutadmin')

@section('title', 'Edit data anggota komunitas')

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
			      @include('assets/message')

			      <!-- breadacumb -->
			         <ol class="breadcrumb" style="background-color: none">
					    <li><a href="{{ url('/home') }}">Home</a></li>
					    <li><a href="{{ url('/tambahanggota') }}" class="activer">Edit Anggota</a></li>        
					  </ol>


					  <!-- content -->
					  <form action="{{ url('/updateanggota') }}" method="post" enctype="multipart/form-data">
					  @csrf
					  <div class="row">
					  	  <div class="col-sm-6">

					  	  <div class="form-group">
						    <label for="kdannggota">Kode Anggota </label>
						    <input type="text" placeholder="" class="form-control" style="width: 300px;" value="KNP-00{{ $data->noanggota }}" disabled="">
						    <input type="hidden" placeholder="" class="form-control" style="width: 300px;" value="{{ $data->noanggota }}" name="noanggota">
						  </div>

					  	  <div class="form-group">
						    <label for="email">Nama Lengkap </label>
						    <input type="text" class="form-control" required="" value="{{ $data->nama }}" name="nama" autocomplete="off"  style="width: 300px;">
						  </div>

						  <div class="form-group">
						    <label for="status">Status Keanggotaan </label>
						    <select name="statuskeanggotaan" required="" class="form-control" style="width: 300px;">
						    	<option value="{{ $data->statusanggota }}"><font color="green">{{ $data->statusanggota }}</font></option>
						    	<option value="Founder">Founder</option>
						        <option value="Co-Founder">Co-Founder</option>
						    	<option value="Ketua">Ketua</option>
						    	<option value="Sekretaris">Sekretaris</option>
						    	<option value="Admin Media">Admin Media</option>
						    	<option value="Eksekutor">Eksekutor</option>
						    	<option value="Anggota">Anggota</option>
						    </select>
						  </div>

						  <b>Masukan foto disini</b><br/>
						  <font color="red">Ket: Input foto dengan ukuran kurang dari 1 mb untuk membuat website optimal</font>
	                        <div class="">
	                        	<div class="">
	                        		<input type="file" name="foto" id="file" onchange="return fileValidation()" />
	                        	</div>
	                        	<div class="">
	                        	<br/><br/>
	                        	<div class="container">
	                        	<div class="card">
	                        		<!-- Image preview -->
	                        		<div class="card-body">
	                        			<div id="imagePreview"></div>
	                        		</div>
	                        	</div>
	                        	</div>
	                        	
	                        	</div>

	                        </div>

						  </div>

						  <div class="col-sm-6">

					  	  <div class="form-group">
						    <label for="kdannggota">Alamat Facebook </label>
						    <input type="text" name="fb" value="{{ $data->fb }}"  class="form-control" style="width: 300px;">
						  </div>

					  	  <div class="form-group">
						    <label for="email">Alamat Twitter </label>
						    <input type="text" name="email" value="{{ $data->email }}" class="form-control" autocomplete="off"  style="width: 300px;">
						  </div>

						  <div class="form-group">
						    <label for="status">Alamat Instagram </label>
						    <input type="text" name="ig"  value="{{ $data->ig }}" style="width: 300px;" class="form-control">
						  </div>

						  <div class="form-group">
						  	<button class="btn btn-primary">Perbarui Data</button>
						  	<button type="reset" class="btn btn-default">RESET</button>
						  </div>

						  </div>




					  </div>
					  </form>


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