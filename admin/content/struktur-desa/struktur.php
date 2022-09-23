<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Struktur Desa</h3>
      </div>

      <div class="title_right">
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <a href="tambah-pemerintah.php" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Pemerintah</a>
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
                        <th>Nama</th>
                        <th>Tempat/TGL Lahir</th>
                        <th>Agama</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php 
                          $no = 1;
                          $qTampil=mysqli_query($connect, "SELECT * FROM tb_pemerintah");
                          foreach ($qTampil as $key) {
                      ?>
                       <?php
                        $tanggal = date('d', strtotime($key['tgl_lahir']));
                        $bulan = date('F', strtotime($key['tgl_lahir']));
                        $tahun = date('Y', strtotime($key['tgl_lahir']));
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
                        <td><?php echo $key['nama'];?></td>
                        <td><?php echo $key['tmp_lahir'];?>,<?php echo $tanggal . " " . $bulanIndo[$bulan] . " " . $tahun; ?></td>
                        <td><?php echo $key['agama'];?></td>
                        <td><?php echo $key['jabatan'];?></td>
                        <td><a href="<?php echo "gambar/".$key['foto']; ?>"><img style="width: 50px" "height:50px" src="<?php echo "gambar/".$key['foto']; ?>">
                            </a>
                          </td>
                        <td>
                          <a href="edit-pemerintah.php?id=<?php echo $key['nama'];?>" class="btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                          <a href="hapus-pemerintah.php?id=<?php echo $key['id_pemerintah'];?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i></a>
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
