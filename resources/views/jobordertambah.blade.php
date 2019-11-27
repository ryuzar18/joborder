@extends('admin.app')


@section('content')
<!-- Main content -->
<section class="content">
    <button class="btn btn-success btn-lg" form="formID" type="submit">
      <i class="fa fa-save"></i> Simpan
    </button>
    <button class="btn btn-info btn-lg" form="formID"  name="reset" type="reset">
      <i class="fa fa-times"></i> Reset
    </button>

  <div class="row">
  <div class="box-body">
  <form class="form-horizontal" action="/joborder/store" method="post" id="formID">
  {{ csrf_field() }}

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Data Job Order</h3>
    </div>

    <div class="form-group form-group-lg">
        <label class="col-md-2 control-label">Kode Job Order</label>
      <div class="col-md-8">
        <input type="text" name="id" class="form-control" value="{{ $id }}" readonly>
      </div>
    </div>

     <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Masuk</label>
      <div class="col-md-5">
        <input type="text" class="form-control pull-left" name="tglmasuk" id="datepicker">
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Tanggal Keluar</label>
      <div class="col-md-5">
        <input type="text" class="form-control pull-left" name="tglkeluar" id="datepicker2">
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
        <input type="text" name="merk" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nomor Plat Kendaraan</label>
      <div class="col-md-8">
        <input type="text" name="nopol" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nama Pemilik</label>
      <div class="col-md-8">
        <input type="text" name="nama" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Alamat Pemilik</label>
      <div class="col-md-8">
        <input type="text" name="alamat" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Telepon Pemilik</label>
      <div class="col-md-8">
        <input type="text" name="telepon" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Kondisi BBM</label>
      <div class="col-md-8">
        <input type="text" name="bbm" class="form-control" placeholder="Dalam %" required>
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
        <input class="form-check-input" type="checkbox" name="stnk" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Buku Manual</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="buku" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Head Lamp</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="head" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Reting&Hazard</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="reting" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Fog Lamp</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="fog" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Stop Lamp</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="stop" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Sensor Parkir</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="sensor" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Kaca</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="kaca" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">Kaca Film</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="film" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Wipper + Nozzle</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="wipper" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Spion + Remote</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="spion" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Watership</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="water" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Handle Pintu Luar</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="handle" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">List Body</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="list" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Karpet Lumpur</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="karpet" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Velg+Wheel Dop</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="velg" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Footstep</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="foot" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Tanduk Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="tanduk" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Talang Air</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="talang" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Remote</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="remote" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Spidometer</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="spidometer" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">AC</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="ac" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Tape+Power</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="tape" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Lighter</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="lighter" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Power Window</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="power" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Karpet Dasar</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="dasar" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Karpet & Bagasi</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="interior" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Plafon</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="plafon" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">Jok</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="jok" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">Deck Pintu </label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="deck" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Aki</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="aki" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Peredam Kap Mesin</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="peredam" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Grille</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="grille" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Logo</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="logo" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Klakson</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="klakson" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Sunroof</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="sunroof" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Kunci Roda</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="kunciroda" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Tools Kit</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="tools" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Dongkrak</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="dongkrak" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Segitiga</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="segitiga" form="formID" value="1"><label class="form-check-label">ADA</label>
      </div>

      <label class="col-md-2 control-label">Ban Serep</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="serep" form="formID" value="1"><label class="form-check-label">ADA</label>
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
        <input class="form-check-input" type="checkbox" name="spikir" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">2.Spion Kanan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="spinan" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">3.Lampu Depan Kanan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="depnan" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">4.Lampu Depan Kiri</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="depkir" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">5.Lampu Belakang Kiri</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="belkir" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">6.Lampu Belakang Kana</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="belnan" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">7.  Bumper</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="bumper" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">8.  Kap Mobil</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="kap" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">9.  Kaca Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="kacdep" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">10.  Kursi</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="kursi" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">11.  Kaca Belakang</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="kacbel" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">12.  Bagasi</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="bagasi" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">13.  Ban Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="bandep" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">14.  Ban Belakang</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="banbel" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">15.  Pintu Depan</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="pindep" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">16.  Pintu Belakang</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="pinbel" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

      <label class="col-md-2 control-label">17.  Kaca Samping</label>
      <div class="col-md-2">
        <input class="form-check-input" type="checkbox" name="kacsam" form="formID" value="1"><label class="form-check-label">BAGUS</label>
      </div>

    <img src="{{url('adminlte/car.png')}}"" height="400px" width="1000x;">

  </div>
  </div>

</section>

@endsection
