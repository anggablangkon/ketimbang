@extends('layouts/layoutsadminnew')


@section('content')
<!-- content -->
<div class="card m-b-30">
	<div class="card card-body" style="background-color: #333; color: white;">
		<h4>Edit Data Anggota</h4>
		<hr/>
		
		<!-- content -->
		<form action="{{ url('/updateanggota') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-sm-6">

					<div class="form-group">
						<label for="kdannggota">Kode Anggota </label>
						<input type="text" placeholder="" class="form-control"  value="KNP-00{{ $data->noanggota }}" disabled="">
						<input type="hidden" placeholder="" class="form-control"  value="{{ $data->noanggota }}" name="noanggota">
					</div>

					<div class="form-group">
						<label for="email">Nama Lengkap </label>
						<input type="text" class="form-control" required="" value="{{ $data->nama }}" name="nama" autocomplete="off"  >
					</div>

					<div class="form-group">
						<label for="status">Status Keanggotaan </label>
						<select name="statuskeanggotaan" required="" class="form-control" >
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

					<div class="form-group">
						<label for="kdannggota">Alamat Facebook </label>
						<input type="text" name="fb" value="{{ $data->fb }}"  class="form-control" >
					</div>

					<div class="form-group">
						<label for="email">Alamat Twitter </label>
						<input type="text" name="email" value="{{ $data->email }}" class="form-control" autocomplete="off"  >
					</div>

					<div class="form-group">
						<label for="status">Alamat Instagram </label>
						<input type="text" name="ig"  value="{{ $data->ig }}"  class="form-control">
					</div>

				</div>

				<div class="col-sm-6">


					<b>Masukan foto disini</b><br/>
					<font color="red">Ket: Input foto dengan ukuran kurang dari 1 mb untuk membuat website optimal</font>
					<div class="" style="padding-bottom: 50px;">
						<div class="">
							<input type="file" name="foto" id="file" onchange="return fileValidation()" />
						</div>
						<div class="card">
							<!-- Image preview -->
							<div class="card-body">
								<div id="imagePreview"></div>
							</div>

						</div>

					</div>

					<div class="form-group">
						<button class="btn btn-primary">Perbaru Data</button>
						<button type="reset" class="btn btn-warning">Reset</button>
					</div>

				</div>




			</div>
		</form>

	</div>
</div>
@endsection