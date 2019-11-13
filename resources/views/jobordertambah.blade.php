@extends('admin.app')


@section('content')
<!-- Main content -->
<section class="content">

  <div class="row">
  <div class="box-body">
  <form class="form-horizontal" action="/joborder/store" method="post">
  {{ csrf_field() }}

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Data Job Order</h3>
    </div>

    <div class="form-group form-group-lg">
        <label class="col-md-2 control-label">Kode Job Order</label>
      <div class="col-md-8">
        <input type="text" name="id" class="form-control" placeholder="Kode Job Order" required>
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

     <div class="form-group">
        <label class="col-md-2 control-label"></label>
      <div class="col-md-5">
        <button class="btn btn-success btn-lg" type="submit" ">
          <i class="fa fa-save"></i> Simpan
        </button>
        <button class="btn btn-info btn-lg" name="reset" type="reset" ">
          <i class="fa fa-times"></i> Reset
        </button>
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

     <div class="form-group">
        <label class="col-md-2 control-label">STNK</label>
      <div class="col-md-2">
        <label class="checkbox-inline"><input type="checkbox" name="stnk">Ada</label>
      </div>

      <label class="col-md-2 control-label">Buku Manual</label>
      <div class="col-md-2">
        <label class="checkbox-inline"><input type="checkbox" name="buku" value="1">Ada</label>
      </div>

      <label class="col-md-2 control-label">Head Lamp</label>
      <div class="col-md-2">
        <label class="checkbox-inline"><input type="checkbox" name="head" value="1">Ada</label>
      </div>
    </div>

    <br>
  </div>

</section>
@endsection