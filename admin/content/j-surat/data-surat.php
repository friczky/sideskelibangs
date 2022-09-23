<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Jenis Surat</h3>
      </div>

      <div class="title_right">
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <a href="tambah-surat.php" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Jenis Surat</a>
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
                        <th>Nama Surat</th>
                        <th>Singkatan</th>
                        <th>Syarat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php 
                        $no=1;
                        $sql = mysqli_query($connect, "SELECT * FROM tb_surat");
                        foreach ($sql as $key) {
                      ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $key['nama_surat'];?></td>
                        <td><?php echo $key['singkatan'];?></td>
                        <td><?php echo $key['syarat'];?></td>
                        <td>
                          <a href="edit-surat.php?id=<?php echo $key['nama_surat'];?>" class="btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                          <a href="hapus-surat.php?id=<?php echo $key['id_surat'];?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php }?>
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
