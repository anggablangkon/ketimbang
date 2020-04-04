<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class ArtikelController extends Controller
{
    public function bacapostingan($slug)
    {
    	//memgambil data untuk menampilkan postingan
    	$postingan    = DB::table('postingan')->where('slug', $slug)->first();

    	return view('/bacapostingan', ['postingan' => $postingan]);

    }

    public function lihatdonasi($slug)
    {
    	//memgambil data untuk menampilkan postingan
        $postingan    = DB::table('postingan')->where('slug', $slug)->first();

    	$donasi       = DB::table('postingan')->where('jenispost', 'donasi')->paginate(8);

    	return view('/lihatdonasi', ['postingan' => $postingan, 'donasi' => $donasi]);

    }


    public function aktifitasdandonasi()
    {
        
        $paginate  = $donasi = DB::table('postingan')->where('jenispost', 'donasi')->paginate(3);
        $paginate1 = $blogs  = DB::table('postingan')->where('jenispost', 'blogs')->paginate(6);

        return view('/aktifitasdandonasi', ['donasi' => $donasi, 'blogs' => $blogs, 'paginate' => $paginate, 'paginate1' => $paginate1]);
    }

    public function aktifitasdonasi()
    {
        
        $paginate  = $donasi = DB::table('postingan')->where('jenispost', 'donasi')->paginate(3);

       


        return view('/aktifitasdonasi', compact('donasi','paginate'));
    }
    
     public function tentangkami()    
    {
        return view('/tentangkami');
    }
    
    public function rancangankerja()
    {
        return view('/rancangankerja');
    }
    
    public function kontakkami()
    {
        return view('/kontakkami');
    }
    
    public function recruitment()
    {
        return view('/recruitment');
    }
    
    public function pengumumanrecruitment()
    {
        //mengambil data kedalam tabel
        $data   = DB::table('recruitment')->orderBy('nama', 'Asc')->get();
        
        return view('/pengumumanrecruitment', ['data' => $data]);
    }
    public function hash()
    {
        echo  hash::make('123456');
    }
}
