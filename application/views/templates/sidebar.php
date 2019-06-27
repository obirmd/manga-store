


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
        <div class="sidebar-brand-text mx-2">MANGA STORE</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard Member</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <h6>GENRE</h6>
      </div>

      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('genre/fantasy') ?>">
          <i class="fas fa-american-sign-language-interpreting"></i>
          <span>Fantasy</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('genre/action') ?>">
          <i class="fab fa-accessible-icon"></i>
          <span>Action</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('genre/adventure') ?>">
          <i class="far fa-angry"></i>
          <span>Advanture</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('genre/comedy') ?>">
          <i class="fab fa-angellist"></i>
          <span>Comedy</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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

         <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
           <div class="navbar-form navbar-left">
            <div class="input-group">
           <?php echo form_open('dashboard/search') ?> 
           <input type="text" name="keyword" class="form-control" placeholder="Cari Manga">
           <button type="submit" class="btn btn-info btn-sm">Cari</button>
           <?php echo form_close() ?>
           </div>
           </div>
           </form>  -->   


           <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <?php echo form_open('dashboard/cari') ?> 
                <input type="text" name="keyword" class="form-control" placeholder="Cari Manga">
                  <div class="input-group-append">
                    <button class="btn btn-info btn-sm" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>   
              </div>
              <?php echo form_close() ?>
            </div>
          </form>   


         <!--  <div class="navbar-form navbar-left">
           <?php echo form_open('dashboard/cari') ?> 
           <input type="text" name="keyword" class="form-control" placeholder="Cari Manga">
           <button type="submit" class="btn btn-info">Cari</button>
           <?php echo form_close() ?>
           </div>  -->

           <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">     
              <div class="navbar">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <i class="fas fa-fw fa-store"></i>
                    <?php 
                    $keranjang = 'keranjang belanja: '.$this->cart->total_items(). 'items'
                     ?>
                    <?php echo anchor('dashboard/detail_keranjang', $keranjang)  ?>
                  </li>
                </ul>
                 <div class="topbar-divider d-none d-sm-block"></div>

              <ul class="nav navbar-nav navbar-right">
                <?php if($this->session->userdata('username')) { ?>
                <li class="mt-1 text-info"><div><i class="far fa-user-circle mr-2"></i>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                <li class="ml-2 btn btn-warning btn-sm"><i class="fas fa-sign-out-alt mr-1"></i><?php echo anchor('auth/logout', 'Logout') ?></li>
                <?php } else { ?>
                <li><?php echo anchor('auth/login', 'Login'); ?></li>
                <?php } ?>
                
              </ul> 
              </div>
 



          </ul>

        </nav>
        <!-- End of Topbar -->