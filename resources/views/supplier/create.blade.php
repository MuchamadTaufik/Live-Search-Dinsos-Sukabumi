@extends('dashboard.layouts.main')

@section('container')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah data jabatan</h1>

  <div class="row">
    <div class="col-md-6">
      <form class="" action="/supplier" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Jabatan</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Nama Jabatan..." value="{{ old('name') }}">
            @error('name')
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