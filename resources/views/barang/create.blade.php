@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Data Pekerja</h1>

  <div class="row">
    <div class="col-md-6">
      <form class="" action="/barang" method="post">
        @csrf
        <div class="form-group">
            <label for="">NIP</label>
            <input type="number" name="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="isi dengan NIP" value="{{ old('nip') }}">
            @error('nip')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="isi dengan Nama Pekerja" value="{{ old('nama') }}">
            @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-group">
          <label for="">Jabatan</label>
          <select class="form-control" name="supplier_id">
            @foreach ($suppliers as $supplier)
              @if (old('supplier_id') == $supplier->id)
              <option value="{{ $supplier->id }}" selected>{{ $supplier->name }}</option>
              @else
              <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
              @endif
            @endforeach
          </select>
      </div>

        <div class="form-group">
            <label for="">Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" placeholder="isi dengan pendidikan" value="{{ old('pendidikan') }}">
            @error('pendidikan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="form-group">
          <label for="">Tingkat Ijazah</label>
          <input type="text" name="ijazah" class="form-control @error('ijazah') is-invalid @enderror" placeholder="isi dengan SMP, SMA, S1, S2, S3" value="{{ old('ijazah') }}">
          @error('ijazah')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
      </div>

        <div class="form-group">
          <label for="">Tempat Tanggal Lahir</label>
          <input type="text" name="ttl" class="form-control @error('ttl') is-invalid @enderror" placeholder="isi dengan Tempat Tanggal Lahir" value="{{ old('ttl') }}">
          @error('ttl')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
      </div>

      <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" placeholder="isi dengan L atau P" value="{{ old('jenis_kelamin') }}">
        @error('jenis_kelamin')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
    </div>

        <button type="submit" class="mb-4 btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="fas fa-check"></i>
          </span>
          <span class="text">Save</span>
        </button>
      </form>
    </div>
  </div>
@endsection