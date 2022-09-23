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
        <h2><small>*Isi Data Sesuai Dengan Data Diri Penduduk</small></h2>
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
    <form action="" method="POST" class="form-label-left input_mask">

       <div class="form-row">
         <div class="form-group col-md-6">
            <label>Nomor KK</label>
            <input type="text" name="fno_kk" class="form-control" placeholder="Nomor KK" required>
        </div>

        <div class="form-group col-md-6">
            <label>NIK</label>
                <input type="text" name="nik" class="form-control" maxlength="16" placeholder="NIK" onkeypress="return hanyaAngka(event)" required>
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
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
        </div>

        <div class="form-group col-md-6">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jk">
                <option value="" hidden>Pilih Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>Tempat Lahir</label>
            <input type="text" name="ftempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
        </div>

        <div class="form-group col-md-6">
            <label>Tanggal Lahir</label>
            <input type="date" name="ftgl_lahir" class="form-control" required>
        </div>

        <div class="form-group col-md-6">
            <label>Agama</label>
            <input type="text" name="fagama" class="form-control" placeholder="Agama" required>
        </div>

        <div class="form-group col-md-6">
            <label>Nama Ayah</label>
            <input type="text" name="fnama_ayah" class="form-control" placeholder="Nama Ayah" required>
        </div>

        <div class="form-group col-md-6">
            <label>Nama Ibu</label>
            <input type="text" name="fnama_ibu" class="form-control" placeholder="Nama Ibu" required>
        </div>

        <div class="form-group col-md-6">
            <label>Dusun</label>
            <select name="fdusun" class="form-control" required>
              <option value="">-- Dusun --</option>
              <option value="">a</option>
          </select>
        </div>

        <div class="form-group col-md-6">
            <label>RW</label>
            <select name="frw" class="form-control" required>
              <option value="">-- RW --</option>
              <option value="">-- RW --</option>
              <option value="001">001</option>
              <option value="002">002</option>
              <option value="003">003</option>
              <option value="004">004</option>
              <option value="005">005</option>
              <option value="006">006</option>
              <option value="007">007</option>
              <option value="008">008</option>
              <option value="009">009</option>
              <option value="001">010</option>
              <option value="002">011</option>
              <option value="003">012</option>
          </select>
        </div>

        <div class="form-group col-md-6">
            <label>RT</label>
            <select name="frt" class="form-control" required>
              <option value="">-- RT --</option>
              <option value="001">01</option>
              <option value="002">02</option>
              <option value="003">03</option>
              <option value="004">04</option>
              <option value="005">05</option>
              <option value="006">06</option>
              <option value="007">07</option>
              <option value="008">08</option>
              <option value="009">09</option>
              <option value="010">10</option>
              <option value="011">11</option>
              <option value="012">12</option>
          </select>
        </div>

        <div class="form-group col-md-6">
            <label>Pendidikan di KK</label>
            <select name="fpend_kk" class="form-control" required>
                <option value="">-- Pendidikan di KK --</option>
                <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                <option value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                <option value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                <option value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                <option value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                <option value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                <option value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                <option value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                <option value="-">-</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>Pendidikan Ditempuh</label>
            <select name="fpend_ditempuh" class="form-control" required>
                <option value="">-- Pendidikan Ditempuh --</option>
                <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                <option value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                <option value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                <option value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                <option value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                <option value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                <option value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                <option value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                <option value="-">-</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>Pekerjaan</label>
            <input type="text" name="fpekerjaan" class="form-control" placeholder="Pekerjaan" required>
        </div>

        <div class="form-group col-md-6">
            <label>Status Perkawinan</label>
            <select name="fstatus_perkawinan" class="form-control" required>
                <option value="">-- Status Perkawinan --</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Cerai">Cerai</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>Status Kependudukan</label>
            <select name="fkewarganegaraan" class="form-control" required>
                <option value="">-- Kewarganegaraan --</option>
                <option value="tetap">Tetap</option>
                <option value="pindah">Pindah</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label>Golongan Darah</label>
            <select name="fgol_darah" class="form-control" required>
                <option value="">-- Golongan Darah --</option>
                <option value="td">TIDAK TAHU</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
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