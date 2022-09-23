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
            <h3>Edit Data (<?php echo $row['nama'];?>)</h3>
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
        <form action="update-penduduk.php" method="POST" class="form-label-left input_mask">
            <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_penduduk'];?>">

            <div class="form-row">
             <div class="form-group col-md-6">
                <label>Nomor KK</label>
                <input type="text" name="no_kk" class="form-control" value="<?php echo $row['no_kk'];?>" >
            </div>

            <div class="form-group col-md-6">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)" value="<?php echo $row['nik'];?>">
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
            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'];?>">
        </div>

        <div class="form-group col-md-6">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control" value="<?php echo $row['jk']; ?>" required>
              <option value="">-- Pilih Jenis Kelamin --</option>
              <option <?php if($row['jk'] == 'Laki-Laki'){ echo 'selected'; } ?> value="Laki-Laki">Laki-Laki</option>
              <option <?php if($row['jk'] == 'Perempuan'){ echo 'selected'; } ?> value="Perempuan">Perempuan</option>
          </select>
      </div>

      <div class="form-group col-md-6">
        <label>Status DLM Keluarga</label>
        <input type="text" name="shdk" class="form-control" value="<?php echo $row['shdk'];?>">
    </div>

    <div class="form-group col-md-6">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tmp_lahir'];?>">
    </div>

    <div class="form-group col-md-6">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir'];?>">
    </div>

    <div class="form-group col-md-6">
        <label>Agama</label>
        <select name="agama" class="form-control" value="<?php echo $row['agama']; ?>" required>
          <option value="">-- Pilih Agama --</option>
          <option <?php if($row['agama'] == 'Islam'){ echo 'selected'; } ?> value="Islam">Islam</option>
          <option <?php if($row['agama'] == 'Hindu'){ echo 'selected'; } ?> value="Hindu">Hindu</option>
          <option <?php if($row['agama'] == 'Buddha'){ echo 'selected'; } ?> value="Buddha">Buddha</option>
          <option <?php if($row['agama'] == 'Protestan'){ echo 'selected'; } ?> value="Protestan">Protestan</option>
          <option <?php if($row['agama'] == 'Katolik'){ echo 'selected'; } ?> value="Katolik">Katolik</option>
          <option <?php if($row['agama'] == 'Khonghucu'){ echo 'selected'; } ?> value="Khonghucu">Khonghucu</option>
      </select>
  </div>

  <div class="form-group col-md-6">
    <label>Nama Ayah</label>
    <input type="text" name="nama_ayah" class="form-control" value="<?php echo $row['ayah'];?>">
</div>

<div class="form-group col-md-6">
    <label>Nama Ibu</label>
    <input type="text" name="nama_ibu" class="form-control" value="<?php echo $row['ibu'];?>">
</div>

<div class="form-group col-md-6">
    <label>Dusun</label>
    <select name="dusun" class="form-control" value="<?php echo $row['dusun']; ?>" required>
      <option value="">-- Pilih Dusun --</option>
      <option <?php if($row['dusun'] == 'KELIBANG SELATAN'){ echo 'selected'; } ?> value="KELIBANG SELATAN">KELIBANG SELATAN</option>
      <option <?php if($row['dusun'] == 'KELIBANG UTARA'){ echo 'selected'; } ?> value="KELIBANG SELATAN">KELIBANG UTARA</option>
  </select>
</div>

<div class="form-group col-md-6">
    <label>RW</label>
    <input type="text" name="rw" class="form-control" value="<?php echo $row['rw'];?>">
</div>

<div class="form-group col-md-6">
    <label>RT</label>
    <input type="text" name="rt" class="form-control" value="<?php echo $row['rt'];?>">
</div>

<div class="form-group col-md-6">
    <label>Pendidikan di KK</label>
    <input type="text" name="pend_kk" class="form-control" value="<?php echo $row['pendidikan'];?>">
</div>

<div class="form-group col-md-6">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan" class="form-control" value="<?php echo $row['pekerjaan'];?>">
</div>

<div class="form-group col-md-6">
    <label>Status Perkawinan</label>
    <select name="sts_perkawinan" class="form-control" value="<?php echo $row['sts_perkawinan']; ?>" required>
      <option value="">-- Pilih Status Perkawinan --</option>
      <option <?php if($row['sts_perkawinan'] == 'BELUM KAWIN'){ echo 'selected'; } ?> value="BELUM KAWIN">BELUM KAWIN</option>
      <option <?php if($row['sts_perkawinan'] == 'KAWIN'){ echo 'selected'; } ?> value="KAWIN">KAWIN</option>
      <option <?php if($row['sts_perkawinan'] == 'CERAI HIDUP'){ echo 'selected'; } ?> value="CERAI HIDUP">CERAI HIDUP</option>
      <option <?php if($row['sts_perkawinan'] == 'CERAI MATI'){ echo 'selected'; } ?> value="CERAI MATI">CERAI MATI</option>
  </select>
</div>

<div class="form-group col-md-6">
    <label>Kewarganegaraan</label>
    <select name="kewarganegaraan" class="form-control" value="<?php echo $row['kewarganegaraan']; ?>" required>
      <option value="">-- Pilih Kewarganegaraan --</option>
      <option <?php if($row['kewarganegaraan'] == 'WNI'){ echo 'selected'; } ?> value="WNI">WNI</option>
      <option <?php if($row['kewarganegaraan'] == 'WNA'){ echo 'selected'; } ?> value="WNA">WNA</option>
  </select>
</div>
</div>

<div class="ln_solid"></div>
<a href="data-penduduk.php" class="btn btn-warning"> Kembali</a>
<input type="submit" name="submit" value="Simpan" class="btn btn-success">
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