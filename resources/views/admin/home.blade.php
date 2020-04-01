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
					    <li><a href="{{ url('/lihatpostingan') }}" class="activer">Lihat Postingan</a></li>        
					  </ol>


					  <!-- content -->

					  <div class="table-responsive">


					  <table id="example" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				                <th>No</th>
				                <th>Judul</th>
				                <th>Tanggal Post</th>
				                <th>Jenis Post</th>
				                <th>Oleh</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php $no = 1; ?>
				            @foreach($blogs as $tampil)
				            <tr>
				                <td>{{ $no++ }}</td>
				                <td>{{ $tampil->judul }}</td>
				                <td>{{ $tampil->date }}</td>
				                <td>
				                	@if($tampil->jenispost == 'Donasi')
				                	<span class="label label-success">{{ $tampil->jenispost }}</span>
				                	@else
				                	<span class="label label-primary">{{ $tampil->jenispost }}</span>
				                	@endif
				                </td>
				                <td>{{ $tampil->cby }}</td>
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
									          <p>Apakah Anda Yakin Akan Menghapus data <b>{{ $tampil->judul }}</b></p>
									          <p>Jika Benar Tekan Tombol <a class="btn btn-danger" href="{{ url('/hapuspostingan') }}/{{ $tampil->id }}">Hapus</a></p>
									        </div>
									        <div class="modal-footer">
									          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>
				                	<a  href="{{ url('/editpostingan') }}/{{ $tampil->id }}" class="btn-xs btn-warning">Edit</a>
				                </td>
				            </tr>
				            @endforeach
				        </tbody>
				      </table>

				  	  </div>
				  	  <!-- end table -->
				


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