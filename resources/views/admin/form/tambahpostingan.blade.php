@extends('layouts/layoutsadminnew')

@section('title', 'Tambah data postingan komunitas')

@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section('content')
<!-- content -->
<form action="{{ url('/simpanpostingan') }}" method="post" enctype="multipart/form-data">
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
					<input type="text" autocomplete="off" autofocus required name="judul" class="form-control" id="judul" placeholder="ketimbang ngemis xxxx" onkeyup="createslug()">
					<input type="hidden" name="slug" id="slug1" class="form-control">


				</div>

				{{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> --}}
				<textarea name="isi" class="form-control my-editor"></textarea>


			</div>

		</div>

		<div class="col-sm-4">

			<div class="card card-body">
				<h5>Action Postingan</h5>
				<hr/>
				<div class="form-group">
					<label>Pilih Jenis Postingan</label>
					<select name="jenispost" required class="form-control accordion-dropdpwn">
						<option value="" selected>Pilih Jenis Postingan</option>
						<option value="0,Blogs" class="collapsed text-dark" data-toggle="collapse"
						data-parent="#accordion" href="#blogs"
						aria-expanded="false" aria-controls="blogs">Blogs</option>
						@if(Auth::user()->flaglevel == 1)
						<option value="1,Donasi" class="collapsed text-dark" data-toggle="collapse"
						data-parent="#accordion" href="#donasi"
						aria-expanded="false" aria-controls="donasi">
						Donasi
						</option>
						@endif
				</select>

				<div class="accordion" id="accordion">
					<div class="accordion-group">
						<div id="donasi" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="accordion-inner">
								<h5 style="color: green;">Donasi <i class="fa fa-check"></i></h5>
							</div>
							<div class="form-group">
								<label>Tanggal Awal</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-th"></span>
									</div>
									<input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker"  name="tgl_awal">
								</div>
							</div>
							<div class="form-group">
								<label>Tanggal Akhir</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<span class="fa fa-date"></span>
									</div>
									<input placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir">
								</div>
							</div>

							<div class="form-group">
								<label>Target Nominal</label>
								<input type="text" autocomplete="off" autofocus name="nominal" class="form-control" id="judul" placeholder="Nominal">
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div id="blogs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="accordion-inner">
								<h5 style="color: green;">Blogs <i class="fa fa-check"></i></h5>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="form-group" style="padding-bottom: 1px;">
				<label>Masukan foto Depan Postingan</label>
				<br/>
				<font color="red">Ket: Input foto dengan ukuran kurang dari 2 mb untuk membuat website optimal</font>
				<div class="">
					<div class="">
						<input type="file"  name="foto" id="file" required onchange="return fileValidation()" />
					</div>
					<div class="">
						<!-- Image preview -->
						<div class="card-body">
							<div id="imagePreview"></div>
						</div>

					</div>

				</div>
			</div>

		</div>
		&nbsp;
		<div class="card card-body">
			<input type="submit" style="padding-bottom: 4px;" value="SIMPAN" class="btn btn-primary" name="simpan">
			<input type="reset" value="RESET" class="btn btn-warning" name="reset">
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
	$( function() {
		$( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy'}).val();
	} );
</script>

@endsection