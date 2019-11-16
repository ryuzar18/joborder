@extends('admin.app')

@section('content')
<section class="content-header">
    <h1 class="">CV. MKS</h1>
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
      <td>
        <a href="pekerjaan/{{ $users->id_jobOrder }}" 
          class= "btn btn-warning btn-xs"><i class="fa fa-edit"></i> VIEW </a>
      </td>
    </tr>
    @endforeach

  </tbody>
  </table>
</div>
</div>
</section>

@endsection