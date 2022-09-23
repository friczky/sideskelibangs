<?php 
include ('../header.php');
include ('../sidebar.php');

$id = $_GET['id'];
$sql = mysqli_query($connect, "SELECT * FROM tb_pemerintah WHERE nama='$id'");
while($row = mysqli_fetch_array($sql)){ 
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Data Pemerintah</h3>
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
            <form action="update-pemerintah.php" method="POST" class="form-label-left input_mask" enctype="multipart/form-data">

               <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_pemerintah'];?>">
              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" name="nama" placeholder="Nama Pemerintah" value="<?php echo $row['nama'];?>">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Jabatan" name="jabatan" value="<?php echo $row['jabatan'];?>">
                <span class="fa fa-pencil-square form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $row['tmp_lahir'];?>">
                <span class="fa fa-id-card-o form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="date" class="form-control has-feedback-left" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>">
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-12 col-sm-12  form-group has-feedback">
                <select class="form-control" name="agama">
                  <option>-- Pilih Agama --</option>
                  <option <?php if($row['agama'] == 'Islam'){ echo 'selected'; } ?> value="Islam">Islam</option>
                  <option <?php if($row['agama'] == 'Protestan'){ echo 'selected'; } ?> value="Protestan">Protestan</option>
                  <option <?php if($row['agama'] == 'Katolik'){ echo 'selected'; } ?> value="Katolik">Protestan</option>
                  <option <?php if($row['agama'] == 'Hindu'){ echo 'selected'; } ?> value="Hindu">Hindu</option>
                  <option <?php if($row['agama'] == 'Buddha'){ echo 'selected'; } ?> value="Buddha">Buddha</option>
                  <option <?php if($row['agama'] == 'Khonghucu'){ echo 'selected'; } ?> value="Khonghucu">Khonghucu</option>
                </select>
              </div>
              <br><br><br>


              <img src="gambar/<?php echo $row['foto'] ?>" width="150px" height="120px" /></br><br>

                <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br><br>

                <input name="foto" id="gambar" type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">

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
<?php } ?>


<?php 
include ('../footer.php');
?>