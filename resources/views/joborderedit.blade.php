@extends('admin.app')


@section('content')
<!-- Main content -->
<section class="content">
    <button class="btn btn-success btn-lg" form="formID" type="submit">
      <i class="fa fa-save"></i> Edit
    </button>
    <button class="btn btn-info btn-lg" form="formID"  name="reset" type="reset">
      <i class="fa fa-times"></i> Reset
    </button>

  <div class="row">
  <div class="box-body">
  <form class="form-horizontal" action="/joborder/update" method="post" id="formID">
  {{ csrf_field() }}
  @foreach ($users as $users)
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Data Job Order</h3>
    </div>

    <div class="form-group form-group-lg">
        <label class="col-md-2 control-label">Kode Job Order</label>
      <div class="col-md-8">
        <input type="text" name="id" class="form-control" value="{{ $users->id_jobOrder }}" required readonly>
      </div>
    </div>

     <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Masuk</label>
      <div class="col-md-5">
        <input type="text" class="form-control pull-left" value="{{ $users->tgl_msk }}" name="tglmasuk" id="datepicker" required="">
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Keluar</label>
      <div class="col-md-5">
        <input type="text" class="form-control pull-left" name="tglkeluar" value="{{ $users->tgl_keluar }}" id="datepicker2" required=""e>
      </div>
    </div>


  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Data Mobil</h3>
    </div>

    <!-- INI UNTUK MERK TIPE MOBIL, NO POLISI, nama alamat telepon pemilik  -->
    <!-- YANG PERLU DIGANTI ITU NAME, DAN LABELNYA SAJA -->
    <div class="form-group">
        <label class="col-md-2 control-label">Merk dan Tipe Mobil</label>
      <div class="col-md-8">
        <input type="text" name="merk" class="form-control" value="{{ $users->merkTipe }}" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nomor Plat Kendaraan</label>
      <div class="col-md-8">
        <input type="text" name="nopol" class="form-control" value="{{ $users->noPlat }}" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nama Pemilik</label>
      <div class="col-md-8">
        <input type="text" name="nama" class="form-control" value="{{ $users->nmPemilik }}" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Alamat Pemilik</label>
      <div class="col-md-8">
        <input type="text" name="alamat" class="form-control" value="{{ $users->alamatPemilik }}" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Telepon Pemilik</label>
      <div class="col-md-8">
        <input type="text" name="telepon" class="form-control" value="{{ $users->tlpPemilik }}" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Kondisi BBM</label>
      <div class="col-md-8">
        <input type="text" name="bbm" class="form-control" placeholder="Dalam %" value="{{ $users->kon_bbm }}" required>
      </div>
    </div>

    <br>

  </form>
  </div>
  </div>

  <div class="box-body">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Kelengkapan Mobil</h3>
    </div>


<!-- INI UNTUK KELENGKAPAN MOBIL  -->
<!-- YANG PERLU DIGANTI ITU NAME, DAN LABELNYA SAJA -->
    <div class="form-group">
      <label class="col-md-2 control-label">STNK</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->stnk }}"name="stnk" form="formID" value="{{ $users->stnk }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Buku Manual</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->bukuManual }}"name="buku" form="formID" value="{{ $users->bukuManual }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Head Lamp</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->headLamp }}"name="head" form="formID" value="{{ $users->headLamp }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Reting&Hazard</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->ratingHazard }}"name="reting" form="formID" value="{{ $users->ratingHazard }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Fog Lamp</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->fogLamp }}"name="fog" form="formID" value="{{ $users->fogLamp }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Stop Lamp</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->stopLamp }}"name="stop" form="formID" value="{{ $users->stopLamp }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Sensor Parkir</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->sensorParkir }}"name="sensor" form="formID" value="{{ $users->sensorParkir }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Kaca</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_kaca }}"name="kaca" form="formID" value="{{ $users->kon_kaca }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">Kaca Film</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_kacaFilm }}"name="film" form="formID" value="{{ $users->kon_kacaFilm }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Wipper + Nozzle</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->wipperNozzle }}"name="wipper" form="formID" value="{{ $users->wipperNozzle }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Spion + Remote</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->spionRemote }}"name="spion" form="formID" value="{{ $users->spionRemote }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Watership</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->weathership }}"name="water" form="formID" value="{{ $users->weathership }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Handle Pintu Luar</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->handlePintu }}"name="handle" form="formID" value="{{ $users->handlePintu }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">List Body</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->listBody }}"name="list" form="formID" value="{{ $users->listBody }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Karpet Lumpur</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->karpetLumpur }}"name="karpet" form="formID" value="{{ $users->karpetLumpur }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Velg+Wheel Dop</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_velgWheelDop }}"name="velg" form="formID" value="{{ $users->kon_velgWheelDop }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Footstep</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->footstep }}"name="foot" form="formID" value="{{ $users->footstep }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Tanduk Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->tandukDep }}name="tanduk" form="formID" value="{{ $users->tandukDep }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Talang Air</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->talangAir }}"name="talang" form="formID" value="{{ $users->talangAir }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Remote</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->remoteCentralLock }}"name="remote" form="formID" value="{{ $users->remoteCentralLock }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Spidometer</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_spidometer }}"name="spidometer" form="formID" value="{{ $users->kon_spidometer }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">AC</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->ac }}"name="ac" form="formID" value="{{ $users->ac }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Tape+Power</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->tapePower }}"name="tape" form="formID" value="{{ $users->tapePower }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Lighter</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->lighter }}"name="lighter" form="formID" value="{{ $users->lighter }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Power Window</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->powerWindow }}"name="power" form="formID" value="{{ $users->powerWindow }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Karpet Dasar</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->karpetDasar }}"name="dasar" form="formID" value="{{ $users->karpetDasar }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Karpet & Bagasi</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->karpetInteriorBagasi }}"name="interior" form="formID" value="{{ $users->karpetInteriorBagasi }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Plafon</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_plafonLampu }}"name="plafon" form="formID" value="{{ $users->kon_plafonLampu }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">Jok</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_jokFungsi }}"name="jok" form="formID" value="{{ $users->kon_jokFungsi }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">Deck Pintu </label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_deckPintu }}"name="deck" form="formID" value="{{ $users->kon_deckPintu }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Aki</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->aki }}"name="aki" form="formID" value="{{ $users->aki }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Peredam Kap Mesin</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->peredamKapMes }}"name="peredam" form="formID" value="{{ $users->peredamKapMes }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Grille</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->grille }}"name="grille" form="formID" value="{{ $users->grille }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Logo</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->logo }}"name="logo" form="formID" value="{{ $users->logo }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Klakson</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->klakson }}"name="klakson" form="formID" value="{{ $users->klakson }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Sunroof</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->sunroof }}"name="sunroof" form="formID" value="{{ $users->sunroof }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Kunci Roda</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kunciRoda }}"name="kunciroda" form="formID" value="{{ $users->kunciRoda }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Tools Kit</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->toolsKit }}"name="tools" form="formID" value="{{ $users->toolsKit }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Dongkrak</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->dongkrak }}"name="dongkrak" form="formID" value="{{ $users->dongkrak }}"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Segitiga</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->segitiga }}"name="segitiga" form="formID" value="{{ $users->segitiga }}"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Ban Serep</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->banSerep}}"name="serep" form="formID" value="{{ $users->banSerep}}"><label class="form-check-label">ADA</label>
      </div>
    </div>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  </div>

  <div class="box-body">

  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Kondisi Mobil</h3>
    </div>

    <!-- iNI UNTUK KONDISI MOBIL -->
    <!-- YANG PERLU DIGANTI ITU NAME, DAN LABELNYA SAJA -->
    <div class="form-group">
      <label class="col-md-2 control-label">1.Spion Kiri  </label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_spionKir }}"name="spikir" form="formID" value="{{ $users->kon_spionKir }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">2.Spion Kanan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_spionKan }}"name="spinan" form="formID" value="{{ $users->kon_spionKan }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">3.Lampu Depan Kanan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_lampuDepKan }}"name="depnan" form="formID" value="{{ $users->kon_lampuDepKan }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">4.Lampu Depan Kiri</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_lampuDepKir }}"name="depkir" form="formID" value="{{ $users->kon_lampuDepKir }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">5.Lampu Belakang Kiri</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_lampuBelKir }}"name="belkir" form="formID" value="{{ $users->kon_lampuBelKir }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">6.Lampu Belakang Kana</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_lampuBelKan }}"name="belnan" form="formID" value="{{ $users->kon_lampuBelKan }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">7.Bumper</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_bumper}}"name="bumper" form="formID" value="{{ $users->kon_bumper}}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">8.Kap Mobil</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_kapMobil }}"name="kap" form="formID" value="{{ $users->kon_kapMobil }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">9.Kaca Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_kacaDep }}"name="kacdep" form="formID" value="{{ $users->kon_kacaDep }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">10.  Kursi</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_kursi }}"name="kursi" form="formID" value="{{ $users->kon_kursi }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">11.  Kaca Belakang</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_kacaBel }}"name="kacbel" form="formID" value="{{ $users->kon_kacaBel }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">12.  Bagasi</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_bagasi }}"name="bagasi" form="formID" value="{{ $users->kon_bagasi }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">13.  Ban Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_banDep }}"name="bandep" form="formID" value="{{ $users->kon_banDep }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">14.  Ban Belakang</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_banBel }}"name="banbel" form="formID" value="{{ $users->kon_banBel }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">15.  Pintu Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_pintuSamDep }}"name="pindep" form="formID" value="{{ $users->kon_pintuSamDep }}"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">16.  Pintu Belakang</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_1"name="pinbel" form="formID" value="{{ $users->kon_pintuSamBel }}"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">17.  Kaca Samping</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" id="id_{{ $users->kon_kacaSam }}"name="kacsam" form="formID" value="{{ $users->kon_kacaSam }}" ><label class="form-check-label">BAGUS</label>
      </div>
      @endforeach

    <img src="{{url('adminlte/car.png')}}"" height="400px" width="1000x;">
    <SCRIPT LANGUAGE="JavaScript">
    var inputs = document.querySelectorAll('#id_1');
      for(var i = 0; i < inputs.length; i++) {
        inputs[i].checked = true;
      }
    </script>

  </div>
  </div>

</section>


@endsection
