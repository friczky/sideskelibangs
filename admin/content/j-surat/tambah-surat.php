<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Jenis Surat</h3>
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
            <form action="simpan-surat.php" method="POST" class="form-label-left input_mask">

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" name="nama_surat" placeholder="Nama Surat">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" name="singkatan" placeholder="Singkatan">
                <span class="fa fa-file form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-12 col-sm-12  form-group has-feedback">
                <?php
                $sql = mysqli_query($connect, "SELECT * FROM tb_syarat");
                foreach ($sql as $key) {
                  ?>

                  <ul class="to_do">
                    <li>
                      <p>
                        <input type="checkbox" class="flat" name="syarat[]" value="<?php echo $key['syarat']; ?>"> <?php echo $key['syarat']; ?> </p>
                      </li>
                    </ul>
                  <?php } ?>
                
                <p style="color:red;"><i>*Centang Syarat Surat Sesuai Jenis surat</i></p>
                </div>
                <div class="form-group row">
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9">
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <?php 
  include ('../footer.php');
?>