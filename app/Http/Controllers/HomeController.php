<?php

namespace App\Http\Controllers;
use App\PendaftarModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Membuat Home
    public function index() {
    	$data = array(
    		"pendaftar"=>PendaftarModel::inRandomOrder()->take(4)->get());
    	return view("home",$data);
    }
}
