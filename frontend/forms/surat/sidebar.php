<?php 
include '../aksi/koneksi.php';
?>
<?php date_default_timezone_set("Asia/Jakarta");?>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="clearfix"></div>
          <?php
          if($_SESSION['status']!="login"){
            header("location:../login.php?pesan=Anda_Belum_Login");
          }
          ?> 

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../../../admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Selamat Datang,</span>
              <?php
              $tampilPeg =mysqli_query($connect, "SELECT * FROM tbl_user WHERE nik='$_SESSION[nik]'");
              $peg    =mysqli_fetch_array($tampilPeg);
              ?>
              <h2><?php echo $peg['nama']; ?></h2>
          </div>
        </div>
        <!-- /menu profile quick info -->
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li><a href="daftar-surat.php"><i class="fa fa-file"></i> Buat Surat</a></li>
              <li><a href="#"><i class="fa fa-check-circle"></i> Surat Selesai</a></li>
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
            <a class="btn-sm btn-danger pull-right"  href="../logout.php"><i class="fa fa-power-off"></i> Log Out</a>
          </ul>
        </nav>
      </div>
    </div>
        <!-- /top navigation -->