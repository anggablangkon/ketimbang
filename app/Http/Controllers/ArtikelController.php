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
    	$postingan    = DB::table('postingan as tb1')
                        ->select('tb1.judul','tb2.name','tb1.date','tb1.foto','tb1.isi','tb2.id','tb2.created_at')
                        ->leftjoin('users as tb2','tb2.id','=','tb1.cby')
                        ->where('tb1.slug', $slug)
                        ->first();

        $idpenulis    = $postingan->id;

        //mengambil lima postingan
        $listpost     = DB::table('postingan as tb1')
                        ->select('tb1.judul','tb1.slug')
                        ->where('tb1.cby','=',$idpenulis)
                        ->where('tb1.jenispost','=','blogs')
                        ->paginate(5);
        $no           = 1;

    	return view('/bacapostingan', compact('postingan','listpost','no'));

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
        
        $paginate  = $donasi = DB::table('postingan')->where('jenispost', 'donasi')->orderByDesc('cdate')->paginate(3);


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
