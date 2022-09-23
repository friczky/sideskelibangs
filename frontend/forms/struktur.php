<?php
include 'header.php';
?>

<main id="main">

  <!-- ======= Constructions Section ======= -->
  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <?php
        include ('aksi/koneksi.php');
        $data = mysqli_query($connect, "SELECT * FROM tb_vm");
        foreach ($data as $key) {
          ?>
          <h2>STRUKTUR ORGANISASI</h2>
          <h5>PEMERINTAH KABUPATEN KAPUAS HULU</h5>
          <h5>PERIODE <?php echo $key['periode'];?></h5>
          <?php } ?>
        </div>

        <div class="row gy-4">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(../assets/img/constructions-1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4>BIODATA KEPALA DESA</h4>
                    <table>
                      <tbody>
                        <tr>
                          <td style="text-align: left; width: 196.889px;"></td>
                          <td style="width: 18.2222px;">&nbsp;</td>
                          <td style="width: 329.333px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; width: 196.889px;">Nama</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">WAHYUDI HIDAYAT, S.T.</td>
                        </tr>
                        <tr>
                          <td style="width: 196.889px;">Tempat / Tanggal Lahir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td style="width: 196.889px;">Agama</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">ISLAM</td>
                        </tr>
                        <tr>
                          <td style="width: 196.889px;">Jabatan</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">WAKIL BUPATI KAPUAS HULU</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(../assets/img/constructions-2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4>BIODATA WAKIL KEPALA DESA</h4>
                    <table>
                      <tbody>
                        <tr>
                          <td style="text-align: left; width: 196.889px;"></td>
                          <td style="width: 18.2222px;">&nbsp;</td>
                          <td style="width: 329.333px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; width: 196.889px;">Nama</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">WAHYUDI HIDAYAT, S.T.</td>
                        </tr>
                        <tr>
                          <td style="width: 196.889px;">Tempat / Tanggal Lahir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td style="width: 196.889px;">Agama</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">ISLAM</td>
                        </tr>
                        <tr>
                          <td style="width: 196.889px;">Jabatan</td>
                          <td style="width: 18.2222px;">:</td>
                          <td style="width: 329.333px;">WAKIL BUPATI KAPUAS HULU</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card Item -->
        </div>
    </div>
  </section><!-- End Constructions Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-12">
        <?php 
            include ('aksi/koneksi.php');
            $sql = mysqli_query($connect, "SELECT * FROM tb_pemerintah WHERE id_pemerintah=4");
            foreach ($sql as $key) {
        ?>

        <img src="<?php echo "../../admin/content/struktur-desa/gambar/".$key['foto']; ?>">
      <?php } ?>
        </div>
      </div>
  </section><!-- End Services Section -->


  </main><!-- End #main -->
  <?php
  include 'footer.php';
  ?>
