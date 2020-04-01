@extends('layouts/layoutadmin')

@section('title', 'Tambah data postingan komunitas')

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
					    <li><a href="{{ url('/tambahpostingan') }}" class="activer">Tambah Postingan</a></li>        
					  </ol>


					  <form action="{{ url('/updatepostingan') }}" method="post" enctype="multipart/form-data">
					  	@csrf
					  <!-- content -->
					 <div class="form-group">
					 	<label>Masukan Judul Postingan</label>
					 	<input type="text" autocomplete="off" autofocus required name="judul" class="form-control" id="judul" placeholder="Masukan Judul Postingan" onkeyup="createslug()" value="{{ $tampilkan->judul }}">
					 	<input type="hidden" name="slug" id="slug1" class="form-control" value="{{ $tampilkan->slug }}">
					 	<input type="hidden" name="id" class="form-control" value="{{ $tampilkan->id }}">
					 </div>

					 <div class="form-group">
					 	<label>Pilih Jenis Postingan</label>
					 	<select name="jenispost" required class="form-control">
					 		<option value="{{ $tampilkan->jenispost }}">{{ $tampilkan->jenispost }}</option>
					 		<option value="Blogs">Blogs</option>
					 		<option value="Donasi">Donasi</option>
					 	</select>
					 </div>

					 <div class="form-group">
					 	<label>Masukan Isi Postingan</label><br/>
					 	<textarea name="isipostingan" id="editor">{{ $tampilkan->isi }}</textarea>
					 </div>

					 <div class="form-group">
						  <label>Masukan foto Depan Postingan</label>
						  <br/>
						  <font color="red">Ket: Input foto dengan ukuran width : 634 X height 357 px dengan ukuran kurang dari 1 mb untuk membuat website optimal</font>

	                        <div class="">
	                        	<div class="">
	                        		<input type="file"  name="foto" id="file" onchange="return fileValidation()" />
	                        	</div>
	                        	<br/><br/>
	                        	<div class="">
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

					 <center>
					 	<input type="submit" value="SIMPAN" class="btn btn-primary" name="simpan">
					 	<input type="reset" value="Reset" class="btn btn-default" name="reset">
					 </center>

					 </form>

			      </div>
			      <!-- end panel body -->

			    </div>
			  </div>
			  
			</div> 
			<!-- end dashboard admin --->

		</div>

	</div>
	<!-- penutup container -->

	
@endsection