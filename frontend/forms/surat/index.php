<?php 
include ('header.php');
include ('sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">

  <?php
  $qTampil = mysqli_query($connect, "SELECT * FROM tb_vm");
  foreach ($qTampil as $key) {
    ?>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <center style="color: #000000; font-weight: bold;">
              <h5>VISI DAN MISI</h5>
              <h5>PEMERINTAH KAPUAS HULU</h5>
              <h5>PERIODE <?php echo $key['periode']; ?></h5>
            </center>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <h5>Visi</h5>
                  <p><?php echo $key['visi'];?></p>
                  <h5>Misi</h5>
                  <p><?php echo $key['misi']; ?></p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php } ?>

  
</div>



<?php 
include ('footer.php');
?>
