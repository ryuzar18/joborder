<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class JoborderController extends Controller
{
    public function list(){
		$users = DB::table('joborder')->get();
 
        return view('joborder',['users' => $users]);
	}

	public function edit($id){
		$users = DB::table('joborder')->where('id_jobOrder', $id)->get();
    	return view('joborderedit',['users' => $users]);
	}

	public function tambah(){
		$tanggal = Carbon::today()->toDateString();
		$rand = Str::random();
		$id = $tanggal."_".$rand;
		return view('jobordertambah',['id' => $id]);
	}

	public function delete($id){
	DB::table('joborder')->where('id_joborder',$id)->delete();
		
	return redirect('/joborder');
	}

	public function store(Request $request)
	{
		DB::table('joborder')->insert([
			'id_joborder' 		=> $request->id,
			'tgl_msk' 			=> $request->tglmasuk,
			'tgl_keluar' 		=> $request->tglkeluar,
			'merkTipe'			=> $request->merk,
			'nmPemilik' 		=> $request->nama,
			'alamatPemilik' 	=> $request->alamat,
			'noPlat' 			=> $request->nopol,
			'tlpPemilik' 		=> $request->telepon,
			'kon_bbm'			=> $request->bbm,

			'stnk' 					=> $request->stnk,
			'bukuManual' 			=> $request->buku,
			'headLamp' 				=> $request->head,
			'ratingHazard' 			=> $request->reting,
			'fogLamp' 				=> $request->fog,
			'stopLamp'				=> $request->stop,
			'sensorParkir' 			=> $request->sensor,
			'kon_kaca'				=> $request->kaca,
			'kon_kacaFilm' 			=> $request->film,
			'wipperNozzle' 			=> $request->wipper,
			'spionRemote' 			=> $request->spion,
			'weathership' 			=> $request->water,
			'handlePintu' 			=> $request->handle,
			'listBody' 				=> $request->list,
			'karpetLumpur' 			=> $request->karpet,
			'kon_velgWheelDop'		=> $request->velg,
			'footstep' 				=> $request->foot,
			'tandukDep' 			=> $request->tanduk,
			'talangAir' 			=> $request->talang,
			'remoteCentralLock' 	=> $request->remote,
			'kon_spidometer' 		=> $request->spidometer,
			'ac' 					=> $request->ac,
			'tapePower' 			=> $request->tape,
			'lighter' 				=> $request->lighter,
			'powerWindow' 			=> $request->power,
			'karpetDasar' 			=> $request->dasar,
			'karpetInteriorBagasi' 	=> $request->interior,
			'kon_plafonLampu'		=> $request->plafon,
			'kon_jokFungsi' 		=> $request->jok,
			'kon_deckPintu' 		=> $request->deck,
			'aki' 					=> $request->aki,
			'peredamKapMes' 		=> $request->peredam,
			'grille' 				=> $request->grille,
			'logo' 					=> $request->logo,
			'klakson' 				=> $request->klakson,
			'sunroof' 				=> $request->sunroof,
			'kunciRoda' 			=> $request->kunciroda,
			'toolsKit' 				=> $request->tools,
			'dongkrak'				=> $request->dongkrak,
			'segitiga' 				=> $request->segitiga,
			'banSerep' 				=> $request->serep,

			'kon_spionKir' 			=> $request->spikir,
			'kon_spionKan' 			=> $request->spinan,
			'kon_lampuDepKan' 		=> $request->depnan,
			'kon_lampuDepKir' 		=> $request->depkir,
			'kon_lampuBelKir' 		=> $request->belkir,
			'kon_lampuBelKan' 		=> $request->belnan,
			'kon_bumper' 			=> $request->bumper,
			'kon_kapMobil' 			=> $request->kap,
			'kon_kacaDep' 			=> $request->kacdep,
			'kon_kursi' 			=> $request->kursi,
			'kon_kacaBel' 			=> $request->kacbel,
			'kon_bagasi' 			=> $request->bagasi,
			'kon_banDep' 			=> $request->bandep,
			'kon_banBel' 			=> $request->banbel,
			'kon_pintuSamDep' 		=> $request->pindep,
			'kon_pintuSamBel' 		=> $request->pinbel,
			'kon_kacaSam' 			=> $request->kacsam
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/joborder');
	 
	}

	public function update(Request $request)
	{
		DB::table('joborder')->where('id_joborder',$request->id)->update([
			'tgl_msk' 			=> $request->tglmasuk,
			'tgl_keluar' 		=> $request->tglkeluar,
			'merkTipe'			=> $request->merk,
			'nmPemilik' 		=> $request->nama,
			'alamatPemilik' 	=> $request->alamat,
			'noPlat' 			=> $request->nopol,
			'tlpPemilik' 		=> $request->telepon,
			'kon_bbm'			=> $request->bbm,

			'stnk' 					=> $request->stnk,
			'bukuManual' 			=> $request->buku,
			'headLamp' 				=> $request->head,
			'ratingHazard' 			=> $request->reting,
			'fogLamp' 				=> $request->fog,
			'stopLamp'				=> $request->stop,
			'sensorParkir' 			=> $request->sensor,
			'kon_kaca'				=> $request->kaca,
			'kon_kacaFilm' 			=> $request->film,
			'wipperNozzle' 			=> $request->wipper,
			'spionRemote' 			=> $request->spion,
			'weathership' 			=> $request->water,
			'handlePintu' 			=> $request->handle,
			'listBody' 				=> $request->list,
			'karpetLumpur' 			=> $request->karpet,
			'kon_velgWheelDop'		=> $request->velg,
			'footstep' 				=> $request->foot,
			'tandukDep' 			=> $request->tanduk,
			'talangAir' 			=> $request->talang,
			'remoteCentralLock' 	=> $request->remote,
			'kon_spidometer' 		=> $request->spidometer,
			'ac' 					=> $request->ac,
			'tapePower' 			=> $request->tape,
			'lighter' 				=> $request->lighter,
			'powerWindow' 			=> $request->power,
			'karpetDasar' 			=> $request->dasar,
			'karpetInteriorBagasi' 	=> $request->interior,
			'kon_plafonLampu'		=> $request->plafon,
			'kon_jokFungsi' 		=> $request->jok,
			'kon_deckPintu' 		=> $request->deck,
			'aki' 					=> $request->aki,
			'peredamKapMes' 		=> $request->peredam,
			'grille' 				=> $request->grille,
			'logo' 					=> $request->logo,
			'klakson' 				=> $request->klakson,
			'sunroof' 				=> $request->sunroof,
			'kunciRoda' 			=> $request->kunciroda,
			'toolsKit' 				=> $request->tools,
			'dongkrak'				=> $request->dongkrak,
			'segitiga' 				=> $request->segitiga,
			'banSerep' 				=> $request->serep,

			'kon_spionKir' 			=> $request->spikir,
			'kon_spionKan' 			=> $request->spinan,
			'kon_lampuDepKan' 		=> $request->depnan,
			'kon_lampuDepKir' 		=> $request->depkir,
			'kon_lampuBelKir' 		=> $request->belkir,
			'kon_lampuBelKan' 		=> $request->belnan,
			'kon_bumper' 			=> $request->bumper,
			'kon_kapMobil' 			=> $request->kap,
			'kon_kacaDep' 			=> $request->kacdep,
			'kon_kursi' 			=> $request->kursi,
			'kon_kacaBel' 			=> $request->kacbel,
			'kon_bagasi' 			=> $request->bagasi,
			'kon_banDep' 			=> $request->bandep,
			'kon_banBel' 			=> $request->banbel,
			'kon_pintuSamDep' 		=> $request->pindep,
			'kon_pintuSamBel' 		=> $request->pinbel,
			'kon_kacaSam' 			=> $request->kacsam
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/joborder');
	}
}
