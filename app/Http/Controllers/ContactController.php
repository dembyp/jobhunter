<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //kontak
        public function index() {
    	    	return view('Kontak');
    }
}
