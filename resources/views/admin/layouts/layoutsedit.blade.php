@extends('layouts/layoutsadminnew')


@section('content')
<!-- content -->
<div class="card m-b-30">
	<div class="card card-body">

		<hr/>
		<div class="table-responsive">
		<table id="datatable" class="table  table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; font-size: 12px;">
			<thead>
				<tr>
					<th>Nama Halaman</th>
					<th>Title</th>
					<th>Editing</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($layouts as $key => $values)
				<tr>
					<td>{{ $values->nama_menu }}</td>
					<td>{{ $values->title }}</td>
					<td>{{ $values->name }}</td>
					<td>
						<a title="hapus" href="" class="btn btn-sm btn-danger">
							<i class="dripicons-cross"></i>
						</a>
						<a  href="{{ url('/editlayouts') }}/{{ $values->id }}" class="btn btn-sm btn-info">
							<i class="dripicons-document-edit"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>

	</div>
</div>
@endsection