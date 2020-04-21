<?php

namespace App\Providers\model;

use Illuminate\Support\ServiceProvider;
use DB;

class ArtikelModel extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function __construct(){

    }

    public function Postingan($slug){

        $postingan    = DB::table('postingan as tb1')
        ->select('tb1.judul','tb2.name','tb1.date','tb1.foto','tb1.isi','tb1.id','tb2.created_at','tb1.views','tb1.startdate','tb1.enddate','tb1.nominalpencapaian','tb1.slug')
        ->leftjoin('users as tb2','tb2.id','=','tb1.cby')
        ->where('tb1.slug', $slug)
        ->first();

        return $postingan;

    }

    public function Listpost($idpenulis){

        $listpost     = DB::table('postingan as tb1')
        ->select('tb1.judul','tb1.slug')
        ->where('tb1.cby','=',$idpenulis)
        ->where('tb1.jenispost','=','blogs')
        ->paginate(5);

        return $listpost;

    }

    public function Viewers($slug){

        $lihatview    = DB::table('postingan')->select('views')->where('slug','=',$slug)->first();
        $lihatview    = $lihatview->views + 1;

        $Viewers      = DB::table('postingan')
        ->where('slug','=',$slug)
        ->update([
            'views' => $lihatview
        ]);

    }

    public function Donasi(){

        $donasi       = DB::table('postingan')->where('jenispost', 'donasi')->paginate(8);

        return $donasi;
    }

    public function SearchArtikel($judul){

        #$blogs  = DB::table('postingan')->where('jenispost', 'blogs')->where('judul','like','%'.$judul.'%')->paginate(6);

        $blogs = DB::table('postingan as tb1')
                    ->select('tb1.slug','tb1.foto','tb1.judul','tb1.cby','tb2.name','tb1.date')
                    ->Join('users as tb2','tb1.cby','=','tb2.id')
                    ->where('tb1.jenispost', 'blogs')
                    ->where('judul','like','%'.$judul.'%')
                    ->get();

        return $blogs;
    }

    public function SearchDonasi($judul){

        #$donasi = DB::table('postingan')->where('jenispost', 'donasi')->where('judul','like','%'.$judul.'%')->get();

        $donasi = DB::table('postingan as tb1')
                    ->select('tb1.slug','tb1.foto','tb1.judul','tb1.cby','tb2.name')
                    ->Join('users as tb2','tb1.cby','=','tb2.id')
                    ->where('tb1.jenispost', 'donasi')
                    ->where('judul','like','%'.$judul.'%')->get();
                    
        return $donasi;
    }

    public function ListDonasi(){

        $donasi = DB::table('postingan as tb1')
                    ->select('tb1.slug','tb1.foto','tb1.judul','tb1.cby','tb2.name')
                    ->Join('users as tb2','tb1.cby','=','tb2.id')
                    ->where('tb1.jenispost', 'donasi')
                    ->orderByDesc('tb1.cdate')->paginate(3);

        return $donasi;
    }

    public function ListBlogs(){

        $blogs = DB::table('postingan as tb1')
                    ->select('tb1.slug','tb1.foto','tb1.judul','tb1.cby','tb2.name','tb1.date')
                    ->Join('users as tb2','tb1.cby','=','tb2.id')
                    ->where('tb1.jenispost', 'blogs')
                    ->orderByDesc('tb1.cdate')->get();

        return $blogs;
    }
}
