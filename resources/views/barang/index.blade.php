@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Pekerja</h1>
  <p class="mb-4">Data Pekerja Dinas Sosial Sukabumi</p>

  <a href="{{ route('barang.create') }}" class="mb-4 btn btn-primary btn-icon-split">
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
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Pendidikan</th>
                        <th>Tingkat Ijazah</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($barangs as $barang)
                        <tr>
                          <td>{{ $barang->nip }}</td>
                          <td>{{ $barang->nama }}</td>
                          <td>{{ $barang->supplier->name ?? 'Tidak Menjabat' }}</td>
                          <td>{{ $barang->pendidikan }}</td>
                          <td>{{ $barang->ijazah }}</td>
                          <td>{{ $barang->ttl }}</td>
                          <td>{{ $barang->jenis_kelamin }}</td>
                          <td>
                            <a href="/barang/{{ $barang->id }}" class="btn btn-info btn-circle btn-sm">
                              <i class="fas fa-eye"></i>
                          </a>
                          @can('isAdmin')
                            <a href="/barang/{{ $barang->id }}/edit" class="btn btn-success btn-circle btn-sm">
                              <i class="fas fa-pen"></i>
                          </a>
                          <form action="/barang/{{ $barang->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                          </form>
                          </td>
                          @endcan
                        </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection