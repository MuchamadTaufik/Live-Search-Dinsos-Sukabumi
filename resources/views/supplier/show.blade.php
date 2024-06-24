@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Show Data Jabatan</h1>

  <div class="row">
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Jabatan</h6>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-light">
              <li class="list-group-item">Nama Jabatan : {{ $supplier->name }}</li>
            </ul>
        </div>
    </div>
    </div>
  </div>
@endsection