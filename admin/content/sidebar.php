<?php 
//session_start();
include '../../config/koneksi.php';
?>
<?php date_default_timezone_set("Asia/Jakarta");?>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="clearfix"></div>
          <?php
          //session_start();
          if($_SESSION['status']!="login"){
            header("location:../../index.php?pesan=Anda_Belum_Login");
          }
          ?> 

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../../production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $_SESSION['username']; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="../dashboard/dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a><i class="fa fa-envelope-o"></i> Surat <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">                    
                    <li><a href="../j-surat/data-surat.php">Jenis Surat</a></li>
                    <li><a href="../surat-masuk/data-surat.php">Surat Masuk</a></li>
                    <li><a href="../surat-keluar/data-surat.php">Surat Keluar</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav side-menu">
                <li><a href="../syarat/data-syarat.php"><i class="fa fa-file"></i> Syarat Surat</a></li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-database"></i> Master Desa<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="../kk/data-kk.php">Kepala Keluarga</a></li>
                    <li><a href="../penduduk/data-penduduk.php">Penduduk</a></li>
                  </ul>
                </li>
              </ul>

              <ul class="nav side-menu">
                <li><a><i class="fa fa-folder-open-o"></i> Aset Desa<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="../inven-tanah/data-inventaris.php">Aset Tanah</a></li>
                    <li><a href="../inven-kb/data-inventaris.php">Aset Kendaraan Bermotor</a></li>
                    <li><a href="../inven-pm/data-inventaris.php">Aset Peralatan & Mesin</a></li>
                    <li><a href="../inven-bangunan/data-inventaris.php">Aset Bangunan</a></li>
                    <li><a href="../inven-jij/data-inventaris.php">Aset JIJ</a></li>
                    <li><a href="../inven-tetap/data-inventaris.php">Aset Tetap Lainnya</a></li>
                    <li><a href="../inven-barang/data-inventaris.php">Aset Barang Yg Tdk Dlm Inven </a></li>
                  </ul>
                </li>
              </ul>

                  <ul class="nav side-menu">
                    <li><a href="../berita/data-berita.php"><i class="fa fa-globe"></i> Berita</a></li>
                    <li><a href="../struktur-desa/struktur.php"><i class="fa fa-circle-o-notch"></i> Struktur Desa</a></li>
                  </ul>
                </div>
              </div>
              <!-- /sidebar menu -->
              <div class="sidebar-footer hidden-small">
              </div>
            </div>
          </div>

          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <a class="btn-sm btn-danger pull-right"  href="../../index.php"><i class="fa fa-power-off"></i> Log Out</a>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->