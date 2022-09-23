<?php 
include ('../header.php');
include ('../sidebar.php');

$id = $_GET['id'];
$qCek = mysqli_query($connect,"SELECT * FROM tb_penduduk WHERE nik='$id'");
while($row = mysqli_fetch_array($qCek)){
    ?>
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Info Data <?php echo $row['nama'];?></h3>
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
        <form action="#" class="form-label-left input_mask">

            <input type="hidden" name="id" class="form-control" value="<?php echo $row['nik'];?>">

            <div class="form-row">
               <div class="form-group col-md-6">
                <label>Nomor KK</label>
                <input type="text" name="no_kk" class="form-control" value="<?php echo $row['no_kk'];?>" readonly>
            </div>

            <div class="form-group col-md-6">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)" value="<?php echo $row['nik'];?>" readonly>
                <script>
                  function hanyaAngka(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                    return true;
                }
            </script>
        </div>

        <div class="form-group col-md-6">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Jenis Kelamin</label>
            <input type="text" name="jk" class="form-control" value="<?php echo $row['jk'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Status DLM Keluarga</label>
            <input type="text" name="jk" class="form-control" value="<?php echo $row['shdk'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tmp_lahir'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Agama</label>
            <input type="text" name="agama" class="form-control" value="<?php echo $row['agama'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Nama Ayah</label>
            <input type="text" name="nama_ayah" class="form-control" value="<?php echo $row['ayah'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Nama Ibu</label>
            <input type="text" name="nama_ibu" class="form-control" value="<?php echo $row['ibu'];?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label>Dusun</label>
            <input type="text" name="dusun" class="form-control" value="<?php echo $row['dusun'];?>" readonly>
      </div>

      <div class="form-group col-md-6">
        <label>RW</label>
        <input type="text" name="rw" class="form-control" value="<?php echo $row['rw'];?>" readonly>
  </div>

  <div class="form-group col-md-6">
    <label>RT</label>
   <input type="text" name="rt" class="form-control" value="<?php echo $row['rt'];?>" readonly>
</div>

<div class="form-group col-md-6">
    <label>Pendidikan di KK</label>
    <input type="text" name="pend_kk" class="form-control" value="<?php echo $row['pendidikan'];?>" readonly>
</div>

<div class="form-group col-md-6">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan" class="form-control" value="<?php echo $row['pekerjaan'];?>" readonly>
</div>

<div class="form-group col-md-6">
    <label>Status Perkawinan</label>
    <input type="text" name="sts_perkawinan" class="form-control" value="<?php echo $row['sts_perkawinan'];?>" readonly>
</div>

<div class="form-group col-md-6">
    <label>Kewarganegaraan</label>
    <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $row['kewarganegaraan'];?>" readonly>
</div>
</div>

<div class="ln_solid"></div>
<a href="data-penduduk.php" class="btn btn-warning"> Kembali</a>
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