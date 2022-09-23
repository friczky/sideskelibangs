<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Aset Tanah</h3>
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
                        <th>Luas (M2)</th>
                        <th>Tahun Perolehan</th>
                        <th>Bukti Kepemilikan</th>
                        <th>Nilai Perolehan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php 
                      $no = 1;
                           $qTampil = mysqli_query($connect, "SELECT * FROM tb_tanah");
                           foreach ($qTampil as $key) {
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['tanggal']; ?></td>
                        <td><?php echo $key['nama_barang']; ?></td>
                        <td><?php echo $key['kode_barang']; ?></td>
                        <td><?php echo $key['nup']; ?></td>
                        <td><?php echo $key['luas_tanah']; ?></td>
                        <td><?php echo $key['tahun_perolehan']; ?></td>
                        <td><?php echo $key['bukti']; ?></td>
                        <td>Rp <?php echo $key['nilai']; ?></td>
                        <td><?php echo $key['keterangan']; ?></td>
                        <td>
                          <a href="edit-inventaris.php?id=<?php echo $key['id_tanah']; ?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>

                          <a href="hapus-inventaris.php?id=<?php echo $key['id_tanah']; ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i></a>
                        </td>
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
