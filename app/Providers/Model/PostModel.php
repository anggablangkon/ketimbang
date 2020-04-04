<?php

namespace App\Providers\Model;

use Illuminate\Support\ServiceProvider;
use DB;

class PostModel extends ServiceProvider
{
    public function __construct(){

    }

    public function getInsertPost($data)
    {
        $sql    = 'insert into postingan (id, judul, slug, jenispost, flag, isi, foto, cby, mby, date, cdate, mdate, startdate, enddate, nominalpencapaian, 
                 isdelete) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $result = DB::insert($sql, array(null, $data['judul'], $data['slug'], $data['jenispost'], $data['flag'], $data['isi'], $data['foto'], $data['cby'], $data['mby'], $data['date'], $data['cdate'], $data['mdate'], $data['startdate'], $data['enddate'], $data['nominal'], $data['isdelete']));
        return $result; 
    }

    public function getPostingan()
    {
        $sql  = DB::select('select * from postingan order by cdate desc');
        return $sql;
    }

    public function getPostById($id)
    {
        $sql    = 'select * from postingan where id="'.$id.'" ';
        $result = collect(\DB::select($sql))->first();
        return $result;
    }
}
