<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Aset Kendaraan Bermotor</h3>
      </div>

      <div class="title_right">
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <a href="tambah-inventaris.php" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Aset</a>
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
                <div class="card-box table-responsive">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>NUP</th>
                        <th>Merk/Type</th>
                        <th>Tahun Perolehan</th>
                        <th>NoPOL</th>
                        <th>No Mesin</th>
                        <th>No Rangka</th>
                        <th>No BPKB</th>
                        <th>Nilai Perolehan (Rp)</th>
                        <th>Kondisi Barang</th>
                        <th>Keterangan</th>
                        <th style="width:150px;">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no = 1;
                          $data = mysqli_query($connect, "SELECT * FROM tb_inven_kb");
                          foreach($data as $row){

                        $tanggal = date('d', strtotime($row['tanggal']));
                        $bulan = date('F', strtotime($row['tanggal']));
                        $tahun = date('Y', strtotime($row['tanggal']));
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
                      <tr> 
                        <td><?php echo $no++;?></td>
                        <td><?php echo $tanggal . " " . $bulanIndo[$bulan] . " " . $tahun; ?></td>
                        <td><?php echo $row['nama_barang'];?></td>
                        <td><?php echo $row['kode_barang'];?></td>
                        <td><?php echo $row['nup'];?></td>
                        <td><?php echo $row['merk'];?></td>
                        <td><?php echo $row['tahun_perolehan'];?></td>
                        <td><?php echo $row['nopol']; ?></td>
                        <td><?php echo $row['nomesin']; ?></td>
                        <td><?php echo $row['norangka']; ?></td>
                        <td><?php echo $row['nobpkb']; ?></td>                        
                        <td>Rp <?php echo $row['nilai'];?></td>
                        <td><?php echo $row['kondisi'];?></td>
                        <td><?php echo $row['keterangan'];?></td>

                        <!--Button Aksi-->
                          <td style="width:150px;">
                            <a href="edit-inventaris.php?id=<?php echo $row['id_kb']; ?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>

                            <a href="hapus-inventaris.php?id=<?php echo $row['id_kb']; ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i></a></td>
                          <!--End Button Aksi-->
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

<?php 
include ('../footer.php');
?>
