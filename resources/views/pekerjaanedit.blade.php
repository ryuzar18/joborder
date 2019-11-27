@extends('admin.app')

@section('content')
<section class="content">
    <button class="btn btn-success btn-lg" form="formID" type="submit" ">
      <i class="fa fa-save"></i> Simpan
    </button>
    <button class="btn btn-info btn-lg" form="formID"  name="reset" type="reset" ">
      <i class="fa fa-times"></i> Reset
    </button>

  <div class="row">
  <div class="box-body">
  <form class="form-horizontal" action="/pekerjaan/update" method="post" id="formID">
  {{ csrf_field() }}
  @foreach ($users as $users)

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Data Pekerjaan</h3>
    </div>

    <div class="form-group form-group-lg">
        <label class="col-md-2 control-label">ID Pekerjaan</label>
      <div class="col-md-5">
        <input type="text" name="id" class="form-control" value="{{ $users->id_pekerjaan }}" required readonly>
      </div>
    </div>

    <div class="form-group form-group-lg">
        <label class="col-md-2 control-label">ID Job Order</label>
      <div class="col-md-5">
        <input type="text" name="id_job" class="form-control" value="{{ $users->id_jobOrder }}" required readonly>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Uraian Pekerjaan</label>
      <div class="col-md-8">
        <textarea name="uraian" class="form-control">{{ $users->uraian_pekerjaan }}</textarea>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Komentar Pekerjaan</label>
      <div class="col-md-8">
        <textarea name="komentar" class="form-control">{{ $users->kom_pekerjaan }}</textarea>
      </div>
    </div>

    @endforeach


    <br>

  </form>
  </div>
  </div>
</section>

@endsection