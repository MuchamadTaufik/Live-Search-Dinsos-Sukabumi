@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Pekerja</h1>

  <div class="row">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Data Pekerja</h6>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-light">
              <li class="list-group-item">NIP : {{ $barang->nip }}</li>
              <li class="list-group-item">Nama : {{ $barang->nama }}</li>
              <li class="list-group-item">Jabatan : {{ $barang->supplier->name }}</li>
              <li class="list-group-item">Pendidikan : {{ $barang->pendidikan }}</li>
              <li class="list-group-item">Tingkat Ijazah : {{ $barang->ijazah }}</li>
              <li class="list-group-item">Tempat Tanggal Lahir : {{ $barang->ttl}}</li>
              <li class="list-group-item">Jenis Kelamin : {{ $barang->jenis_kelamin }}</li>
            </ul>
        </div>
    </div>
    </div>
  </div>
@endsection