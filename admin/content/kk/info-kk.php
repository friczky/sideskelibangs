<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Info Keluarga</h3>
      </div>

      <div class="title_right">
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <!-- <a href="tambah-penduduk.php" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Penduduk</a> -->
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">    
              <div class="col-sm-12">
                <h3 style="text-align: center; color: #000;"><b>DATA KELUARGA</b></h3>
                <?php
                $qTampil = mysqli_query($connect, "SELECT * FROM tb_penduduk WHERE no_kk");
                foreach($qTampil as $row){
                  ?>
                  <h6 style="text-align: center; color: #000;"><b>No. <?php echo $row['no_kk']; ?></b></h6>
                  <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Tempat Lahir</th>
                          <th>TGL Lahir</th>
                          <th>Agama</th>
                          <th>Dusun</th>
                          <th>Pekerjaan</th>
                          <th>Pendidikan DLM KK</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $no = 1;
                        $qTampil = mysqli_query($connect, "SELECT * FROM tb_penduduk WHERE no_kk");
                        foreach($qTampil as $row){
                          ?>
                          <tr>
                            <?php
                            $tanggal = date('d', strtotime($row['tgl_lahir']));
                            $bulan = date('F', strtotime($row['tgl_lahir']));
                            $tahun = date('Y', strtotime($row['tgl_lahir']));
                            $bulanIndo = array(
                              'January' => 'Januari',
                              'February' => 'Februari',
                              'March' => 'Maret',
                              'April' => 'April',
                              'May' => 'Mei',
                              'June' => 'Juni',
                              'July' => 'Juli',
                              'August' => 'Agustus',
                              'September' => 'September',
                              'October' => 'Oktober',
                              'November' => 'November',
                              'December' => 'Desember'
                            );
                            ?>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $row['nik'];?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['tmp_lahir'];?></td>
                            <td><?php echo $tanggal . " " . $bulanIndo[$bulan] . " " . $tahun; ?></td>
                            <td><?php echo $row['agama'];?></td>
                            <td><?php echo $row['dusun'];?></td>
                            <td><?php echo $row['pekerjaan'];?></td>
                            <td style="width: 90px;"><?php echo $row['pendidikan'];?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /page content -->
<?php } ?>
<?php 
include ('../footer.php');
?>
