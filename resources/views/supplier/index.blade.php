@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Jabatan</h1>
  <p class="mb-4">Tambahkan data jabatan di Dinas Sosial Sukabumi</p>

  <a href="{{ route('supplier.create') }}" class="mb-4 btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data</span>
  </a>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Nama Jabatan</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($suppliers as $supplier)
                      <tr>
                        <td>{{ $supplier->name }}</td>
                        <td>
                          <a href="/supplier/{{ $supplier->id }}" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                          <a href="/supplier/{{ $supplier->id }}/edit" class="btn btn-success btn-circle btn-sm">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form action="/supplier/{{ $supplier->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                          </button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection