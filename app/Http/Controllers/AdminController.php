<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Str;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    //tampilan tambah data anggota
    public function tambahanggota()
    {
    	//membuat no anggota otomatis
    	$noanggota 		= DB::table('anggota')->orderBy('noanggota', 'desc')->first();
    	$dataanggota 	= DB::table('anggota')->get();
    	$noanggota 		= $noanggota->noanggota;

    	return view('admin/form/tambahanggota', ['noanggota' => $noanggota, 'dataanggota' => $dataanggota]);
    }

    public function listdataanggota(){

    	//membuat no anggota otomatis
    	$dataanggota 	= DB::table('anggota')->get();

    	return view('admin/listanggota', compact('dataanggota'));

    }

    public function simpananggota(Request $request)
    {
    	//membuat variabel parameter data
    	$noanggota 		= $request->noanggota;
    	$nama 			= $request->nama;
    	$statusanggota  = $request->statuskeanggotaan;
    	$foto 			= $request->foto;	
    	$fb 			= $request->fb;
    	$email 			= $request->email;
    	$ig 			= $request->ig;


    	//membuat kondisi untuk foto yang dimasukan 
	      if($request->foto == true)
	      {
	              //mendefinisikan foto kedalam sistem
	              $destination = "imageanggota";
	              $foto        = $request->file('foto');
	              $foto->move($destination, $noanggota.$foto->getClientOriginalName());


	              $simpan = DB::table('anggota')->insert([
	              	 'noanggota'	=> $noanggota,
	              	 'nama'			=> $nama,
	                 'statusanggota'=> $statusanggota,
	                 'fb'			=> $fb,
	                 'email'		=> $email,
	                 'ig' 			=> $ig,
	                 'foto' 		=> '/imageanggota/'.$noanggota.$foto->getClientOriginalName(),
	                 'cby'			=> Auth::user()->name,
	              ]);

	                 
	              //meredirect kedalam halaman berikutnya
	              return redirect('/tambahanggota')->with('success', 'Data Berhasil Disimpan');
	      }else{
	      		 
	      		 $simpan = DB::table('anggota')->insert([
	              	 'noanggota'	=> $noanggota,
	              	 'nama'			=> $nama,
	                 'statusanggota'=> $statusanggota,
	                 'fb'			=> $fb,
	                 'email'		=> $email,
	                 'ig' 			=> $ig,
	                 'foto' 		=> '/imageanggota/default.jpg',
	                 'cby'			=> Auth::user()->name,
	              ]);

	      		 //meredirect kedalam halaman berikutnya
	              return redirect('/tambahanggota')->with('delete', 'Data Berhasil Disimpan');


	      }


    }

    public function editanggota($noanggota)
    {
    	$data 		= DB::table('anggota')->where('noanggota', $noanggota)->first();

    	return view('/admin/form/editanggota', ['data' => $data]);
    }

    public function updateanggota(Request $request)
    {

    	//membuat variabel parameter data
    	$noanggota 		= $request->noanggota;
    	$nama 			= $request->nama;
    	$statusanggota  = $request->statuskeanggotaan;
    	$foto 			= $request->foto;	
    	$fb 			= $request->fb;
    	$email 			= $request->email;
    	$ig 			= $request->ig;

    	//memperbarui data anggota
    	//membuat kondisi untuk foto yang dimasukan 
	      if($request->foto == true)
	      {
	              //mendefinisikan foto kedalam sistem
	              $destination = "imageanggota";
	              $foto        = $request->file('foto');
	              $foto->move($destination, $foto->getClientOriginalName());


	              $simpan = DB::table('anggota')->where('noanggota', $noanggota)->update([
	              	 'noanggota'	=> $noanggota,
	              	 'nama'			=> $nama,
	                 'statusanggota'=> $statusanggota,
	                 'fb'			=> $fb,
	                 'email'		=> $email,
	                 'ig' 			=> $ig,
	                 'foto' 		=> '/imageanggota/'.$foto->getClientOriginalName(),
	                 'cby'			=> Auth::user()->name,
	              ]);

	                 
	              //meredirect kedalam halaman berikutnya
	              return redirect('/tambahanggota')->with('success', 'Data Berhasil Disimpan');
	      }else{
	      		 
	      		 $simpan = DB::table('anggota')->where('noanggota', $noanggota)->update([
	              	 'noanggota'	=> $noanggota,
	              	 'nama'			=> $nama,
	                 'statusanggota'=> $statusanggota,
	                 'fb'			=> $fb,
	                 'email'		=> $email,
	                 'ig' 			=> $ig,
	                 'cby'			=> Auth::user()->name,
	              ]);

	      		 //meredirect kedalam halaman berikutnya
	              return redirect('/tambahanggota')->with('success', 'Data Berhasil Disimpan');


	      }

    }

    public function deletanggota($noanggota)
    {
    	//menghapus data anggota
    	
    	DB::table('anggota')->where('noanggota', $noanggota)->delete();

    	return redirect('/listdataanggota')->with('success', 'Data Berhasil dihapus');
    }

    public function tambahpostingan()
    {
    	return view('admin/form/tambahpostingan');
    }

    public function simpanpostingan(Request $request)
    {
    	// memisahkan 1 dengan string di depannya
    	$string       = explode(',', $request->jenispost);
    	$flag 		  = $string[0];
    	$jenispost    = $string[1];

    	//membuat kondisi untuk foto yang dimasukan 
	    if($request->foto == true)
	    {

	    	//mendefinisikan foto kedalam sistem
	    	$destination = "imagepost";
	    	$foto        = $request->file('foto');
	    	$foto->move($destination, $foto->getClientOriginalName());

	    	//memasukan data kedalam table postingan
	    	$simpan = DB::table('postingan')->insert([

	    		'id'		=> NULL,
	    		'judul'		=> $request->judul,
	    		'slug' 		=> Str::slug($request->slug),
	    		'jenispost' => $jenispost,
	    		'flag' 		=> $flag,
	    		'isi' 		=> $request->isipostingan,
	    		'foto' 		=> '/imagepost/'.$foto->getClientOriginalName(),
	    		'cby'		=> Auth::user()->name,
	    		'mby'		=> NULL,
	    		'date'		=> Date('d M Y'),
	    		'cdate'		=> date('Y-m-d H:i:s'),
	    		'mdate'		=> NULL,
	    		'startdate' => $request->tgl_awal,
	    		'enddate'  => $request->tgl_akhir,
	    		'isdelete'  => 0,

	    	]);

	    	return redirect('/tambahpostingan')->with('success', 'Data Berhasil Disimpan');

	    }else{

	    	//memasukan data kedalam table postingan
	    	$simpan = DB::table('postingan')->insert([

	    		'id'		=> NULL,
	    		'judul'		=> $request->judul,
	    		'slug' 		=> $request->slug,
	    		'jenispost' => $request->jenispost,
	    		'isi' 		=> $request->isipostingan,
	    		'foto' 		=> '/imagepost/default.png',
	    		'cby'		=> Auth::user()->name,
	    		'date'		=> Date('d M Y'),
	    		'cdate'		=> date('Y-m-d H:i:s'),
	    		'mdate'		=> NULL,
	    		'startdate' => $request->tgl_awal,
	    		'enddate'  => $request->tgl_akhir,
	    		'isdelete'  => 0,

	    	]);

	    	return redirect('/tambahpostingan')->with('success', 'Data Berhasil Disimpan');

	    }


    }

    public function updatepostingan(Request $request)
    {
    	//membuat kondisi untuk foto yang dimasukan 
	    if($request->foto == true)
	    {

	    	//mendefinisikan foto kedalam sistem
	    	$destination = "imagepost";
	    	$foto        = $request->file('foto');
	    	$foto->move($destination, $foto->getClientOriginalName());

	    	//memasukan data kedalam table postingan
	    	$simpan = DB::table('postingan')->where('id', $request->id)->update([

	    		'judul'		=> $request->judul,
	    		'slug' 		=> $request->slug,
	    		'jenispost' => $request->jenispost,
	    		'isi' 		=> $request->isipostingan,
	    		'foto' 		=> '/imagepost/'.$foto->getClientOriginalName(),
	    		'cby'		=> Auth::user()->name,
	    		'date'		=> Date('d M Y'),

	    	]);

	    	return redirect('/tambahpostingan')->with('success', 'Data Berhasil Diperbarui');

	    }else{

	    	//memasukan data kedalam table postingan
	    	$simpan = DB::table('postingan')->where('id', $request->id)->update([

	    		'judul'		=> $request->judul,
	    		'slug' 		=> $request->slug,
	    		'jenispost' => $request->jenispost,
	    		'isi' 		=> $request->isipostingan,
	    		'cby'		=> Auth::user()->name,
	    		'date'		=> Date('d M Y'),

	    	]);

	    	return redirect('/tambahpostingan')->with('success', 'Data Berhasil Diperbarui');

	    }
    }

    public function editpostingan($id)
    {
    	//mengambil data dari dalam database
    	$tampilkan = DB::table('postingan')->where('id', $id)->first();

    	return view('admin/form/editpostingan', ['tampilkan' => $tampilkan]);
    }

    public function lihatpostingan()
    {
    	$blogs		= DB::table('postingan')->get();

    	return view('/admin/lihatpostingan', ['blogs' => $blogs]);	    	
    }

    public function hapuspostingan($id)
    {
    	//proses hapus postingan
    	Db::table('postingan')->where('id', $id)->delete();

    	return redirect('/lihatpostingan')->with('delete',  'Data Berhasil Dihapus');
    }

}
