<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function list(){
		return view('pekerjaan');
	}
}
