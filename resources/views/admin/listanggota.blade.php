@extends('layouts/layoutsadminnew')


@section('content')
<!-- content -->
<div class="card m-b-30">
	<div class="card card-body">
		<h5>List Data Anggota</h5>
		<hr/>

		<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                               
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
						<a href="" class="btn-sm btn-danger" data-toggle="modal" data-target="#myModal">
							<i class="dripicons-document-remove"></i>
							Hapus
						</a>
						&nbsp;
						<!-- Modal digunakan untuk popuv delete data -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah Anda Yakin Akan Menghapus data <b>{{ $tampil->nama }}</b></p>
										<p>Jika Benar Tekan Tombol <a class="btn btn-danger" href="{{ url('/hapusanggota') }}/{{ $tampil->noanggota }}">Hapus</a></p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>

							</div>
						</div>
						<a href="{{ url('/editanggota') }}/{{ $tampil->noanggota }}"class="btn-sm btn-warning">
							<i class="dripicons-document-edit"></i>
							Edit
						</a>
						&nbsp;
						<a href=""class="btn-sm btn-primary">
							<i class="dripicons-rocket"></i>
							Invite Member
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
@endsection