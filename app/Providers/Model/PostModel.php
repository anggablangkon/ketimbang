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

        #untuk mendapatkan id secara otomatis
        $result = DB::getPdo()->lastInsertId();
        return $result; 
    }

    public function getPostingan()
    {
        $sql  = DB::select('select 
                            tb1.judul, tb1.foto, tb1.id, tb1.date, tb1.jenispost, tb1.cby,
                            tb2.name 
                            from postingan tb1 
                            left join users tb2 on tb1.cby = tb2.id
                            order by tb1.cdate desc');
        
        return $sql;
    }

    public function getPostById($id)
    {
        $sql    = "select * from postingan where id='".$id."' ";
        $result = collect(\DB::select($sql))->first();
        return $result;
    }

    public function getUpdatePost($data)
    {
        $sql  = " update postingan set judul='".$data['judul']."',
                slug='".$data['slug']."',
                jenispost='".$data['jenispost']."',
                flag='".$data['flag']."',
                isi='".$data['isi']."',
                mby='".$data['mby']."',
                mdate='".$data['mdate']."',
                startdate='".$data['startdate']."',
                enddate='".$data['enddate']."',
                nominalpencapaian='".$data['nominal']."',
                isdelete='".$data['isdelete']."',
                foto='".$data['foto']."' 
                where id='".$data['id']."' ";

        $result = DB::update($sql);
        return $result;
    }
}
