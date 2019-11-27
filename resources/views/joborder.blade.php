@extends('admin.app')


@section('content')
<section class="content-header">
    <a href="/joborder/tambah" class="btn btn-success btn-lg">
      <i class="fa fa-plus"></i>TAMBAH
    </a>
</section>

<section class="content">
  <div class="box">
    <div class="box-body">
  <table class="table table-bordered" id="example1">
  <thead>
    <tr>
      <th>ID JOB ORDER</th>
      <th>MERK & TIPE MOBIL</th>
      <th>NO PLAT</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $users)
    <tr>
      <td>{{ $users->id_jobOrder }}</td>
      <td>{{ $users->merkTipe }}</td>
      <td>{{ $users->noPlat }}</td>
      <td class="col-md-2">
        <a href="joborder/delete/{{ $users->id_jobOrder }}" 
          class= "btn btn-danger btn-xs"><i class="fa fa-trash"></i> DELETE </a>
        <a href="joborder/{{ $users->id_jobOrder }}" 
          class= "btn btn-warning btn-xs"><i class="fa fa-eye"></i> VIEW </a>
      </td>
    </tr>
    @endforeach

  </tbody>
  </table>
</div>
</div>
</section>
@endsection