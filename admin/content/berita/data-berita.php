<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Berita</h3>
      </div>

      <div class="title_right">
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <a href="tambah-berita.php" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Berita</a>
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
                        <th>Tanggal Upload</th>
                        <th>Judul Berita</th>
                        <th>Kategori</th>
                        <th>Penulis</th>
                        <th>Deskripsi</th>
                        <th>Thumbnail</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php 
                      $no = 1;
                           $qTampil = mysqli_query($connect, "SELECT * FROM tb_berita");
                           foreach ($qTampil as $key) {
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['tgl_upload']; ?></td>
                        <td><?php echo $key['judul']; ?></td>
                        <td><?php echo $key['kategori']; ?></td>
                        <td><?php echo $key['penulis']; ?></td>
                        <td><?php echo substr($key['deskripsi'],0,300); ?></td>
                        <td><img style="width: 100px" "height:100px" src="<?php echo "gambar/".$key['foto']; ?>"></td>
                        <td>
                          <a href="edit-berita.php?id=<?php echo $key['judul']; ?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>

                          <a href="hapus-berita.php?id=<?php echo $key['id_berita']; ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i></a>
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
