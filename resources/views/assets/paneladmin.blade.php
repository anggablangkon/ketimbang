<a href="" class="btn btn-default btn-block">Panel Admin</a><br/>
<a href="{{ url('/tambahanggota') }}" class="btn btn-default btn-block">Tambah Anggota</a><br/>
<a href="{{ url('/tambahpostingan') }}" class="btn btn-default btn-block">Tambah Postingan</a><br/>
<a href="{{ url('/lihatpostingan') }}" class="btn btn-default btn-block">Lihat Postingan</a><br/>
<a class="btn btn-info btn-block" href="{{ route('logout') }}"
		onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
		{{ __('Keluar') }}
		</a>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>