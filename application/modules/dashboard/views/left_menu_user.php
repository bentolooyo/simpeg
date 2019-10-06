<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Kusuka<sup>Inv</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->



  <!-- Nav Item - Pages Collapse Menu -->


  <!-- Nav Item - Utilities Collapse Menu -->


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Transaksi
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Data Transaksi</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Barang Invertory:</h6>

        <a class="collapse-item" href="<?php echo base_url('laporan/') ?>"> <i class="fas fa-fw fa-eye"></i> Pencarian Data</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Menu Lain:</h6>
        <!-- <a class="collapse-item" href="<?php echo base_url('t_lapor/diagram') ?>" > <i class="fa fa-university"></i>  Diagram</a> -->
        <a class="collapse-item" href="<?php echo base_url('laporan/cetak') ?>" > <i class="fa fa-print"></i> Cetak Data</a>
      </div>
    </div>
  </li>






  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
