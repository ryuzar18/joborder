<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PekerjaanController extends Controller
{
    public function list(){
		$users = DB::table('joborder')->get();
 
    	// mengirim data pegawai ke view index
    	return view('pekerjaanview',['users' => $users]);
	}

	public function tambah(){
		return view('pekerjaantambah');
	}

	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pekerjaan')->insert([
			'id_joborder' => $request->id,
			'uraian_pekerjaan' => $request->uraian,
			'kom_pekerjaan' => $request->komentar
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pekerjaan');
	 
	}
}
