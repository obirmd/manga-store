


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-dragon"></i>
        </div>
        <div class="sidebar-brand-text mx-1">ADMIN MANGA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dasboard_admin') ?>">
          <i class="far fa-user-circle"></i>
          <span>Dashboard Admin</span></a>
      </li>

       <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard Member</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_barang') ?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Data Manga</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
          <i class="fas fa-fw fa-file-invoice"></i>
          <span>Riwayat Pembelian</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Manga..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-info" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

             <ul class="nav navbar-nav navbar-right">
                <?php if($this->session->userdata('username')) { ?>
                <li class="mt-2 text-info"><div><i class="far fa-user-circle mr-2"></i>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                <li class="ml-2 mt-1 btn btn-warning btn-sm"><i class="fas fa-sign-out-alt mr-1"></i><?php echo anchor('auth/logout', 'Logout') ?></li>
                <?php } else { ?>
                <li><?php echo anchor('auth/login', 'Login'); ?></li>
                <?php } ?>
                
              </ul> 

          </ul>

        </nav>
        <!-- End of Topbar -->