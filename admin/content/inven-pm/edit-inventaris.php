<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Data Aset Tanah</h3>
      </div>

      <div class="title_right">
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <?php 
            $id = $_GET['id'];
            $qCek = mysqli_query($connect, "SELECT * FROM tb_inven_pm WHERE id_pm=$id");
            while($row = mysqli_fetch_array($qCek)){
            ?>
            <form action="update-inventaris.php" method="POST" class="form-label-left input_mask">
              <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_pm'];?>">

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="date" class="form-control" name="tanggal" value="<?php echo $row['tanggal'];?>">
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Nama Barang" name="nb" value="<?php echo $row['nama_barang'];?>">
                <span class="fa fa-pencil-square form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" placeholder="Kode Barang" name="kb" value="<?php echo $row['kode_barang'];?>">
                <span class="fa fa-code form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Nomor Urut Pemesanan (NUP)" name="nup" value="<?php echo $row['nup'];?>">
                <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" placeholder="Merk/Type" name="merk" value="<?php echo $row['merk'];?>">
                <span class="fa fa-code-fork form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Tahun Perolehan" name="tp" value="<?php echo $row['tahun_perolehan'];?>">
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <select class="form-control" name="kondisi">
                  <option><?php echo $row['kondisi'];?></option>
                  <option value="Baik">Baik</option>
                  <option value="Rusak Ringan">Rusak Ringan</option>
                  <option value="Rusak Berat">Rusak Berat</option>
                </select>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Nilai Perolehan (RP)" name="np" value="<?php echo $row['nilai'];?>">
                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-12 col-sm-12  form-group has-feedback">
                <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"><?php echo $row['keterangan'];?></textarea>
              </div>

              <div class="form-group row">
              </div>
                            
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9">
                  <a href="data-inventaris.php" class="btn btn-warning"> Cancel</a>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?php 
include ('../footer.php');
?>