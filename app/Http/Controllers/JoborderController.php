<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoborderController extends Controller
{
    public function list(){
		return view('joborder');
	}

	public function tambah(){
		return view('jobordertambah');
	}

	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('joborder')->insert([
			'id_joborder' => $request->id,
			'tgl_msk' => $request->tglmasuk,
			'tgl_keluar' => $request->tglkeluar,
			'stnk' => $request->stnk,
			'bukuManual' => $request->buku,
			'headLamp' => $request->head
		]);
		dd($request->all());
		// alihkan halaman ke halaman pegawai
		return redirect('/joborder');
	 
	}
}
