<?php

namespace App\Providers\model;

use Illuminate\Support\ServiceProvider;
use DB;
use Auth;

class LayoutsModel extends ServiceProvider
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
        date_default_timezone_set('Asia/Jakarta');
    }


    public function ListLayouts(){

        $layouts = DB::table('layouts_menu as tb1')
                    ->select('tb1.nama_menu','tb1.title','tb2.name','tb1.id')
                    ->leftjoin('users as tb2','tb1.cby','=','tb2.id')
                    ->where('tb1.isdelete','0')->get();

        return $layouts;
    }

    public function ListLayoutsFirst($id){

        $layouts = DB::table('layouts_menu as tb1')
                    ->select('tb1.nama_menu','tb1.title','tb1.isi','tb1.id')
                    ->where('tb1.isdelete','0')
                    ->where('tb1.id','=',$id)
                    ->first();

        return $layouts;

    }

    public function tentangkami(){

        $layouts = DB::table('layouts_menu as tb1')
                    ->select('tb1.isi')
                    ->where('tb1.isdelete','0')
                    ->where('tb1.id','=','1')
                    ->first();

        return $layouts;

    }

    public function kontakkami(){

        $layouts = DB::table('layouts_menu as tb1')
                    ->select('tb1.isi')
                    ->where('tb1.isdelete','0')
                    ->where('tb1.id','=','2')
                    ->first();

        return $layouts;

    }

    public function rancangankerja(){


        $layouts = DB::table('layouts_menu as tb1')
                    ->select('tb1.isi')
                    ->where('tb1.isdelete','0')
                    ->where('tb1.id','=','3')
                    ->first();

        return $layouts;

    }

    public function EditLayoutsFirst($kokit){

        $edit   = DB::table('layouts_menu')->where('id',$kokit['id'])->update([

                'isi'       => $kokit['isi'],
                'mby'       => $kokit['mby'],
                'mdate'     => $kokit['mdate']

        ]);

        return $edit;

    }

    
}
