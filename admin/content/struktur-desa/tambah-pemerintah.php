<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Pemerintah</h3>
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
            <form action="simpan-pemerintah.php" method="POST" class="form-label-left input_mask" enctype="multipart/form-data">

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" name="nama" placeholder="Nama Pemerintah">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Jabatan" name="jabatan">
                <span class="fa fa-pencil-square form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                <span class="fa fa-id-card-o form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="date" class="form-control has-feedback-left" placeholder="Tanggal Lahir" name="tgl_lahir">
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-12 col-sm-12  form-group has-feedback">
                <select class="form-control" name="agama">
                  <option>-- Pilih Agama --</option>
                  <option value="Islam">Islam</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>
              <br><br><br>


              <div class="col-md-12 col-sm-12  form-group ">
                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"></a>
                <input type="file" name="foto" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" >
              </div>

              <div class="col-md-12 col-sm-12  form-group">
                <p style="color: red">Upload Foto Pemerintah .png | .jpg | .jpeg </p>
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