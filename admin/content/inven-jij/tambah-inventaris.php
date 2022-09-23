<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Aset Jalan, Irigasi, Jaringan</h3>
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
            <form action="simpan-inventaris.php" method="POST" class="form-label-left input_mask">

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="date" class="form-control" name="tanggal" >
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Janis Jalan, Irigasi, Jaringan" name="jenis_jij">
                <span class="fa fa-pencil-square form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" placeholder="Kode Barang" name="kb">
                <span class="fa fa-code form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Nomor Urut Pemesanan (NUP)" name="nup">
                <span class="fa fa-sort-numeric-asc form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" placeholder="Ukuran" name="ukuran">
                <span class="fa fa-th-large form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Tahun Perolehan" name="tp">
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" placeholder="Type" name="type">
                <span class="fa fa-file form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Nilai Perolehan (RP)" name="np">
                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-12 col-sm-12  form-group has-feedback">
                <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"></textarea>
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
            <br><br>
            <div class="col-md-12 col-sm-12  form-group has-feedback">
                <h5>Petunjuk Pengisian:</h5>
                <p>1. Diisi nomor urut</p>
                <p>2. Diisi Jenis Tanah (Tanah Kantor/sewa/tegalan dll)</p>
                <p>3. Diisi Kode Barang sesuai Kodefikasi</p>
                <p>4. Diisi no urut penfaftaran barang sesuai buku inventaris</p>
                <p>6. Diisi luas tanah</p>
                <p>7. Diisi Tahun Perolehan</p>
                <p>8. Diisi alas hak/bukti kepemilikan atas tanah atau bukti lainya</p>
                <p>9. Diisi Lokasi Tanah, Batas-batas atau keterangan lainya yang terkait dengan tanah tersebut</p>
              </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?php 
include ('../footer.php');
?>