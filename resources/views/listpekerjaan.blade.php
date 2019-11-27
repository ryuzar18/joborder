@extends('admin.app')

@section('content')
<section class="content-header">
    <a href="tambah/{{ $data['datajoborder'][0]->id_jobOrder}}" class="btn btn-success btn-lg">
    <i class="fa fa-plus"></i>TAMBAH
    </a>
</section>

<section class="content">
  <div class="box">
    <div class="box-body">
  <table class="table table-bordered" id="example1">
  <thead>
    <tr>
      <th>ID Pekerjaan</th>
      <th>ID JOB ORDER</th>
      <th>URAIAN PEKERJAAN</th>
      <th>KOMENTAR PEKERJAAN</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data['datajoborder'] as $users)
    <tr>
      <td>{{ $users->id_pekerjaan}}</td>
      <td>{{ $users->id_jobOrder }}</td>
      <td>{{ $users->uraian_pekerjaan }}</td>
      <td>{{ $users->kom_pekerjaan }}</td>
      <td>
        <a href="edit/{{ $users->id_pekerjaan }}" 
          class= "btn btn-warning btn-xs"><i class="fa fa-edit"></i> EDIT </a>
        <a href="delete/{{ $users->id_pekerjaan}}" 
          class= "btn btn-danger btn-xs"><i class="fa fa-trash"></i> HAPUS </a>
      </td>
    </tr>
    @endforeach

  </tbody>
  </table>
</div>
</div>
</section>

@endsection