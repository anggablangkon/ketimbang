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
    	/*
        memgambil data untuk menampilkan postingan
        */
        $postingan    = app('ArtikelModel')->Postingan($slug);
        $idpenulis    = $postingan->id;

        /*
        mengambil lima postingan
        */
        $listpost     = app('ArtikelModel')->Listpost($idpenulis);
        $no           = 1;

        /*
        membuat views pembaca postingan
        */
        $viewers      = app('ArtikelModel')->Viewers($slug);

    	return view('/bacapostingan', compact('postingan','listpost','no'));

    }

    public function lihatdonasi($slug)
    {
    	//memgambil data untuk menampilkan postingan
        $postingan    = app('ArtikelModel')->Postingan($slug);
        $donasi       = app('ArtikelModel')->Donasi();
        /*
        membuat views pembaca postingan
        */
        $viewers      = app('ArtikelModel')->Viewers($slug);

    	return view('/lihatdonasi', ['postingan' => $postingan, 'donasi' => $donasi]);

    }


    public function aktifitasdandonasi()
    {
        
        $blogs     = app('ArtikelModel')->ListBlogs();
        
        $paginate1 = $blogs;  

        return view('/aktifitasdandonasi', ['blogs' => $blogs, 'paginate1' => $paginate1]);
    }

    public function aktifitasdonasi()
    {

        $donasi     = app('ArtikelModel')->ListDonasi();
        $paginate   = $donasi;
        return view('/aktifitasdonasi', compact('donasi','paginate'));

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

    #update 04 09 2020
    public function searchblogs(Request $request){

        $judul       = $request->search;
        $blogs       = app('ArtikelModel')->SearchArtikel($judul);
        $paginate1   = $blogs;

        return view('/aktifitasdandonasi', ['blogs' => $blogs, 'paginate1' => $paginate1]);

    }

    public function searchdonasi(Request $request){

        $judul       = $request->search;
        $donasi      = app('ArtikelModel')->SearchDonasi($judul);
        $paginate    = $donasi; 

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
}
