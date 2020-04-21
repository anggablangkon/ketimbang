@extends('layouts/layoutsadminnew')

@section('title', 'Tambah data postingan komunitas')

@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section('content')
<!-- content -->
<form action="{{ url('/saveeditlayouts') }}" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-8" style="padding-bottom: 10px;">

			@include('assets/message')

			<div class="card card-body">
				<h5>Buat Postingan</h5>
				<hr/>
				@csrf
				<!-- content -->
				<div class="form-group">
					<label>Masukan Judul Postingan</label>
					<input type="text" autocomplete="off" autofocus required  class="form-control" id="judul" value="{{ $layouts->title }}" name="judul" disabled>


				</div>
				<textarea name="isi" class="form-control my-editor">{{ $layouts->isi }}</textarea>

				&nbsp;
				<input type="hidden" name="id" value="{{ $layouts->id }}">
				<input type="submit" style="padding-bottom: 4px;" style="width:10px;" value="SIMPAN" class="btn btn-primary" name="simpan">
				<input type="reset" value="RESET" class="btn btn-warning" name="reset">
				<a href="{{ url('/layoutsedit') }}" class="btn btn-info">Kembali</a>
			</div>

		</div>

	</div>

</div>
</form>

@endsection

@section('javascript')
<script src="{{ asset('/kokitindo/postingan.js') }}" defer></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>

{{-- Datepicker --}}
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	
</script>
@endsection