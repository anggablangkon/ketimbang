@extends('layouts/layoutsadminnew')


@section('content')
<!-- content -->
<div class="card m-b-30">
	<div class="card card-body">

		<a href="{{ url('/tambahpostingan') }}" class="btn btn-danger" @desktop style="width: 20%;" @enddesktop>
			<i class="dripicons-document-edit "></i>
			Buat Post Baru
		</a>

		<hr/>
		<div class="table-responsive">
		<table id="datatable" class="table  table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

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
						<span class="badge badge-primary">{{ strtoupper($tampil->jenispost) }}</span>
						@else
						<span class="badge badge-danger">{{ strtoupper($tampil->jenispost) }}</span>
						@endif
					</td>
					<td>{{ $tampil->cby }}</td>
					<td>
						<a href="" class="btn-sm btn-danger" data-toggle="modal" data-target="#myModal">Hapus</a>
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
										<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
									</div>
								</div>

							</div>
						</div>
						<a  href="{{ url('/editpostingan') }}/{{ $tampil->id }}" class="btn-sm btn-warning">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>

	</div>
</div>
@endsection