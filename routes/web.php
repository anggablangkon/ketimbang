<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	//menampilkan data anggota 
    $anggota        = DB::table('anggota')->get();
    $blogs          = DB::table('postingan')->where('jenispost', 'blogs')->get();
    $donasi         = DB::table('postingan')->where('jenispost', 'donasi')->get();

    return view('index', ['anggota' => $anggota, 'blogs' => $blogs, 'donasi' => $donasi]);
});

Route::get('/tambahanggota', 'AdminController@tambahanggota');
Route::get('/listdataanggota', 'AdminController@listdataanggota');
Route::get('/hapusanggota/{noanggota}', 'AdminController@deletanggota');
Route::post('/simpananggota', 'AdminController@simpananggota');
Route::get('/editanggota/{noanggota}', 'AdminController@editanggota');
Route::post('/updateanggota', 'AdminController@updateanggota');



Route::get('/tambahpostingan', 'AdminController@tambahpostingan');
Route::get('/lihatpostingan', 'AdminController@lihatpostingan');
Route::post('/simpanpostingan', 'AdminController@simpanpostingan');
Route::get('/hapuspostingan/{id}', 'AdminController@hapuspostingan');
Route::get('/editpostingan/{id}', 'AdminController@editpostingan');
Route::post('/updatepostingan', 'AdminController@updatepostingan');


//membaca postingan kegiatan
Route::get('/bacapostingan/{slug}', 'ArtikelController@bacapostingan');
Route::get('/lihatdonasi/{slug}', 'ArtikelController@lihatdonasi');
Route::get('/aktifitasdandonasi', 'ArtikelController@aktifitasdandonasi');

Route::get('/tentangkami', 'ArtikelController@tentangkami');
Route::get('/rancangankerja', 'ArtikelController@rancangankerja');
Route::get('/kontakkami', 'ArtikelController@kontakkami');
Route::get('/recruitment', 'ArtikelController@recruitment');
Route::get('/pengumuman-recruitment', 'ArtikelController@pengumumanrecruitment');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
