<?php 
include ('header.php');
include ('sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <center style="color: #000000; font-weight: bold;">
           <div class="alert alert-info alert-dismissible " role="alert">
            <h3>Pilih Surat Sesuai Kebutuhan Anda!!!!</h3>
            <h6>Pilih Salah Satu Dan Masukkan Nik Anda</h6>
          </div>
        </center>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
       <?php 
       //$id=$_GET['id_surat'];
       $sql = mysqli_query($connect, "SELECT * FROM tb_surat");
       foreach ($sql as $key) {
        ?>
        <div class="col-md-4 col-sm-4  profile_details">
          <div class="well profile_view">
            <div class="col-sm-12">

              <div class="left col-md-7 col-sm-7">
                <h2><b><?php echo $key['nama_surat'];?></b></h2>
                <p><strong>Syarat: </strong><?php echo $key['syarat']; ?> </p>
               <!--  <ul class="list-unstyled">
                  <li><i class="fa fa-building"></i> Address: </li>
                  <li><i class="fa fa-phone"></i> Phone #: </li>
                </ul> -->
              </div>
              <div class="right col-md-5 col-sm-5 text-center">
                <img src="../../assets/img/surat.png" alt="" class="img-circle img-fluid">
              </div>
            </div>
            <div class="col-sm-12 emphasis">
              <a href="#" type="button" class="btn btn-block btn-primary btn-sm text-center">Buat Surat</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

</div>
</div>
</div>
</div>



</div>



<?php 
include ('footer.php');
?>
