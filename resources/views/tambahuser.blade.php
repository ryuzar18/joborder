@extends('admin.app')


@section('content')
<section class="content-header">
    
</section>

<section class="content">
  <div class="box">
    <div class="box-body">
    <form action="/user/store" method="post">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label class="col-md-2 control-label">Nama USER</label>
      <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama pengguna" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Nama USER</label>
      <div class="col-md-5">
        <input type="text" name="nama" class="form-control" placeholder="Nama pengguna" required>
      </div>
    </div>

    </form>
    </div>
  </div>
</section>

@endsection