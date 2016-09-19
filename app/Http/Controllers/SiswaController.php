<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    public function siswa()
    {    	
    	return view('siswa');
	}
}
