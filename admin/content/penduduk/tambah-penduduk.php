<?php 
include ('../header.php'); 
include ('../sidebar.php');
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Data Penduduk</h3>
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
    <form action="simpan-penduduk.php" method="POST" class="form-label-left input_mask">

        <div class="form-row">
           <div class="form-group col-md-6">
            <label>Nomor KK</label>
            <input type="text" name="no_kk" class="form-control" placeholder="Nomor KK">
        </div>

        <div class="form-group col-md-6">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)" placeholder="NIK">
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
        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
    </div>

    <div class="form-group col-md-6">
        <label>Jenis Kelamin</label>
        <select name="jk" class="form-control" required>
          <option value="">-- Pilih Jenis Kelamin --</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
      </select>
  </div>

  <div class="form-group col-md-6">
    <label>Status DLM Keluarga</label>
    <select class="form-control" name="shdk">
        <option>--Pilih Status--</option>
        <option value="Kepala Keluarga">Kepala Keluarga</option>
        <option value="Istri">Istri</option>
        <option value="Anak">Anak</option>
        <option value="Anak Tiri">Anak Tiri</option>
        <option value="Famili Lain">Famili Lain</option>
    </select>
</div>

<div class="form-group col-md-6">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
</div>

<div class="form-group col-md-6">
    <label>Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" class="form-control">
</div>

<div class="form-group col-md-6">
    <label>Agama</label>
    <select name="agama" class="form-control" required>
      <option value="">-- Pilih Agama --</option>
      <option value="Islam">Islam</option>
      <option value="Hindu">Hindu</option>
      <option value="Buddha">Buddha</option>
      <option value="Protestan">Protestan</option>
      <option value="Katolik">Katolik</option>
      <option value="Khonghucu">Khonghucu</option>
  </select>
</div>

<div class="form-group col-md-6">
    <label>Nama Ayah</label>
    <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
</div>

<div class="form-group col-md-6">
    <label>Nama Ibu</label>
    <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
</div>

<div class="form-group col-md-6">
    <label>Dusun</label>
    <select name="dusun" class="form-control" required>
      <option value="">-- Pilih Dusun --</option>
      <option value="KELIBANG SELATAN">KELIBANG SELATAN</option>
      <option value="KELIBANG SELATAN">KELIBANG UTARA</option>
  </select>
</div>

<div class="form-group col-md-6">
    <label>RW</label>
    <input type="text" name="rw" class="form-control" placeholder="RW">
</div>

<div class="form-group col-md-6">
    <label>RT</label>
    <input type="text" name="rt" class="form-control" placeholder="RT">
</div>

<div class="form-group col-md-6">
    <label>Pendidikan di KK</label>
    <input type="text" name="pend_kk" class="form-control" placeholder="Pendidikan Terakhir">
</div>

<div class="form-group col-md-6">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
</div>

<div class="form-group col-md-6">
    <label>Status Perkawinan</label>
    <select name="sts_perkawinan" class="form-control" required>
      <option>-- Pilih Status Perkawinan --</option>
      <option value="BELUM KAWIN">BELUM KAWIN</option>
      <option value="KAWIN">KAWIN</option>
      <option value="CERAI HIDUP">CERAI HIDUP</option>
      <option value="CERAI MATI">CERAI MATI</option>
  </select>
</div>

<div class="form-group col-md-6">
    <label>Kewarganegaraan</label>
    <select name="kewarganegaraan" class="form-control" required>
      <option>-- Pilih Kewarganegaraan --</option>
      <option value="WNI">WNI</option>
      <option value="WNA">WNA</option>
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

<?php 
include ('../footer.php');
?>