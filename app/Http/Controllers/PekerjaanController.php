<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PekerjaanController extends Controller
{
    public function list(){
		$users = DB::table('joborder')->get();
    	return view('pekerjaanview',['users' => $users]);
	}

	public function getid($id){
		$data['datajoborder']=DB::table('pekerjaan')->where('id_jobOrder',$id)->get();
		$data['id']=DB::table('pekerjaan')->where('id_jobOrder',$id)->get('id_jobOrder');
		return view('listpekerjaan',['data'=>$data]);
	}

	public function tambah($id){
		$rand = Str::random();
		$data['idpekerjaan'] = $id."_".$rand;
		$data['idjoborder'] = $id;
		return view('pekerjaantambah',['data' => $data]);
	}

	public function delete($id){
		DB::table('pekerjaan')->where('id_pekerjaan',$id)->delete();
		return redirect('/pekerjaan');
	}

	public function edit($id){
		$users = DB::table('pekerjaan')->where('id_pekerjaan', $id)->get();
    	return view('pekerjaanedit',['users' => $users]);
	}

	public function update(Request $request){
		DB::table('pekerjaan')->where('id_pekerjaan',$request->id)->update([
			'id_pekerjaan' => $request->id,
			'id_joborder' => $request->id_job,
			'uraian_pekerjaan' => $request->uraian,
			'kom_pekerjaan' => $request->komentar
		]);
		return redirect('/pekerjaan');
	}

	public function store(Request $request){
		// insert data ke table pegawai
		DB::table('pekerjaan')->insert([
			'id_pekerjaan' => $request->id,
			'id_joborder' => $request->id_job,
			'uraian_pekerjaan' => $request->uraian,
			'kom_pekerjaan' => $request->komentar
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pekerjaan');
	 
	}
}
