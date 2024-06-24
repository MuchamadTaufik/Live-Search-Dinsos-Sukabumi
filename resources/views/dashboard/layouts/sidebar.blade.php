<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
      <div class="sidebar-brand-text mx-3">Dinas Sosial Sukabumi</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  @can('isAdmin')
      <!-- Heading -->
  <div class="sidebar-heading">
    Admin
  </div>
  
  <!-- Nav Item - Charts -->

    <li class="nav-item">
        <a class="nav-link" href="{{ route('supplier.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Jabatan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Pekerja</span></a>
    </li>
  @endcan

  @can('isUser')
      <!-- Heading -->
  <div class="sidebar-heading">
    User
  </div>
  @endcan


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->