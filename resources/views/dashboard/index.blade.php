@extends('dashboard.layouts.main')

@section('container')
  <center><img src="images/logo.png" alt="" width="120" height="120">
  <h1 class="h4 mb-4 mt-2 text-gray-800">Selamat Datang {{ auth()->user()->name }}</h1>
</center>

<div class="container" style="margin-top: 50px;">
  <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
          <div class="form-group">
              <h5>Cari Biodata Pekerja</h5>
              <input type="text" name="search" id="search" placeholder="Enter search NIP" class="form-control" onfocus="this.value=''">
          </div>
          <div id="search_list"></div>
      </div>
      <div class="col-lg-3"></div>
  </div>
</div>
@endsection