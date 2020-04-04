<?php
#POSTINGAN (EDIT BY AHYAID - 3 APRIL 2020)
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Model\PostModel;
use Str;
use Auth;

class PostController extends Controller
{
	public function lihatpostingan()
    {
    	$blogs = app('PostModel')->getPostingan();

    	return view('/admin/lihatpostingan', ['blogs' => $blogs]);	    	
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
			
			$data['judul'] 		= $request->judul;
			$data['slug']  		= Str::slug($request->slug);
			$data['jenispost']  = $jenispost;
			$data['flag']		= $flag;
			$data['isi']		= $request->isi;
			$data['foto']		= '/imagepost/'.$foto->getClientOriginalName();
			$data['cby']		= Auth::user()->name;
			$data['mby']		= NULL;
			$data['date']		= Date('d M Y');
			$data['cdate']		= date('Y-m-d H:i:s');
			$data['mdate']		= NULL;
			$data['startdate']  = date('Y-m-d', strtotime($request->tgl_awal));
			$data['enddate']	= date('Y-m-d', strtotime($request->tgl_akhir));
			$data['nominal']    = $request->nominal;
			$data['isdelete']   = 0;


			//model, simpan ke tabel postingan
			$save  = app('PostModel')->getInsertPost($data);

	    	return redirect('/tambahpostingan')->with('success', 'Data Berhasil Disimpan');

	    }else{

	    	//memasukan data kedalam table postingan
	    	$destination = "imagepost";
	    	$foto        = $request->file('foto');
			$foto->move($destination, $foto->getClientOriginalName());
			
			$data['judul'] 		= $request->judul;
			$data['slug']  		= Str::slug($request->slug);
			$data['jenispost']  = $jenispost;
			$data['flag']		= $flag;
			$data['isi']		= $request->isi;
			$data['foto']		= 'imagepost/default.png';
			$data['cby']		= Auth::user()->name;
			$data['mby']		= NULL;
			$data['date']		= Date('d M Y');
			$data['cdate']		= date('Y-m-d H:i:s');
			$data['mdate']		= NULL;
			$data['startdate']  = date('Y-m-d', strtotime($request->tgl_awal));
			$data['enddate']	= date('Y-m-d', strtotime($request->tgl_akhir));
			$data['nominal']    = $request->nominal;
			$data['isdelete']   = 0;

			// model, simpan ke tabel postingan
			$save  = app('PostModel')->getInsertPost($data);

	    	return redirect('/tambahpostingan')->with('success', 'Data Berhasil Disimpan');

	    }


    }

    public function editpostingan($id)
    {
    	//mengambil data dari dalam database
    	$tampilkan = app('PostModel')->getPostById($id);

    	return view('admin/form/editpostingan', ['tampilkan' => $tampilkan]);
    }
}
