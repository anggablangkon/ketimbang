@extends('layouts/layoutadmin')

@section('title', 'Tambah data anggota komunitas')

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
					    <li><a href="{{ url('/tambahanggota') }}" class="activer">Tambah Anggota</a></li>        
					  </ol>


					  <!-- content -->
					  <form action="{{ url('/simpananggota') }}" method="post" enctype="multipart/form-data">
					  @csrf
					  <div class="row">
					  	  <div class="col-sm-6">

					  	  <div class="form-group">
						    <label for="kdannggota">Kode Anggota </label>
						    <input type="text" placeholder="" class="form-control" style="width: 300px;" value="KNP-00{{ $noanggota+1 }}" disabled="">
						    <input type="hidden" placeholder="" class="form-control" style="width: 300px;" value="{{ $noanggota+1 }}" name="noanggota">
						  </div>

					  	  <div class="form-group">
						    <label for="email">Nama Lengkap </label>
						    <input type="text" class="form-control" required="" name="nama" autocomplete="off"  style="width: 300px;">
						  </div>

						  <div class="form-group">
						    <label for="status">Status Keanggotaan </label>
						    <select name="statuskeanggotaan" required="" class="form-control" style="width: 300px;">
						        <option value="">Piliha Status Keanggotaan</option>
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

						  <div class="col-sm-6">

					  	  <div class="form-group">
						    <label for="kdannggota">Alamat Facebook </label>
						    <input type="text" name="fb"  class="form-control" style="width: 300px;">
						  </div>

					  	  <div class="form-group">
						    <label for="email">Alamat Twitter </label>
						    <input type="text" name="email" class="form-control" autocomplete="off"  style="width: 300px;">
						  </div>

						  <div class="form-group">
						    <label for="status">Alamat Instagram </label>
						    <input type="text" name="ig" style="width: 300px;" class="form-control">
						  </div>

						  <div class="form-group">
						  	<button class="btn btn-primary">SIMPAN</button>
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


			<!-- membuat menu dashboar admin -->
			 <div class="panel-group" id="accordion">

			  <div class="panel panel-primary">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			      </h4>
			    </div>
			    <div  class="panel-collapse collapse in">
			      
			      <div class="panel-body">
			      <!-- content panel dashboard -->

			      <!-- breadacumb -->
			         <ol class="breadcrumb" style="background-color: none">
					    <li><a href="{{ url('/home') }}">Home</a></li>
					    <li><a href="{{ url('/tambahanggota') }}" class="activer">Data Anggota</a></li>        
					  </ol>

					  <div class="table-responsive">

					  <table id="example" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				                <th>No</th>
				                <th>Nama</th>
				                <th>Status</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php $no = 1; ?>
				        	@foreach($dataanggota as $tampil)
				            <tr>
				                <td>{{ $no++ }}</td>
				                <td>{{ $tampil->nama }}</td>
				                <td>{{ $tampil->statusanggota }}</td>
				                <td>
				                	<a href="" class="btn-xs btn-danger" data-toggle="modal" data-target="#myModal">Hapus</a>
				                	<!-- Modal digunakan untuk popuv delete data -->
									  <div class="modal fade" id="myModal" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Pemberitahuan Sistem</h4>
									        </div>
									        <div class="modal-body">
									          <p>Apakah Anda Yakin Akan Menghapus data <b>{{ $tampil->nama }}</b></p>
									          <p>Jika Benar Tekan Tombol <a class="btn btn-danger" href="{{ url('/hapusanggota') }}/{{ $tampil->noanggota }}">Hapus</a></p>
									        </div>
									        <div class="modal-footer">
									          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>
				                	<a href="{{ url('/editanggota') }}/{{ $tampil->noanggota }}"class="btn-xs btn-warning">Edit</a>
				                </td>
				            </tr>
				            @endforeach
				        </tbody>
				      </table>

				      </div>

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