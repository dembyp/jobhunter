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

Route::get('/', 'HomeController@index');
//untuk get dan post
route::match(['get','post'], '/daftar','DaftarController@index');
//list pendaftar kerja
route::get('/pendaftarkerja','PendaftarController@index');
//untuk detail pendaftar
route::get('/pendaftarkerja/detail/{id}', 'PendaftarController@detail');
//untuk tentang web
Route::get('/tentang', 'TentangController@index');
//untuk kontak
Route::get('/kontak', 'ContactController@index');
