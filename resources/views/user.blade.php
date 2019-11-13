@extends('admin.app')


@section('content')
<section class="content-header">
    <a href="/user/tambah" class="btn btn-success btn-lg">
    <i class="fa fa-plus"></i>TAMBAH
    </a>
</section>

<section class="content">
  <div class="box">
    <div class="box-body">
  <table class="table table-bordered" id="example1">
  <thead>
    <tr>
      <th>NAMA</th>
      <th>JABATAN</th>
      <th>EMAIL</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $users)
    <tr>
      <td>{{ $users->name }}</td>
      <td>{{ $users->role }}</td>
      <td>{{ $users->email }}</td>
      <td>
        <a href="" 
          class= "btn btn-warning btn-xs"><i class="fa fa-edit"></i> EDIT </a>

        <a href="" 
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