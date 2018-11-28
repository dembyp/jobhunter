<?php

namespace App\Http\Controllers;
use App\PendaftarModel;
use Illuminate\Http\Request;
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
class PendaftarController extends Controller
{
    //Tabel Pencari Kerja
    public function index() {
    	$data = array(
    		'pendaftar' => PendaftarModel::all()
    		);
    	return view('pendaftar',$data);
    }

    public function detail($id) {
    	$pendaftar = PendaftarModel::find($id);
    	if(count($pendaftar) > 0) {
    		$data = array(
    			'pendaftar' => $pendaftar);
    		return view("detailpendaftar", $data);
    	}else {
    		return redirect('/pendaftarkerja');
    	}
    }
}
