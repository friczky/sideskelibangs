<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Desa |</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <img src="frontend/assets/img/Logo-KH.png">
        <h1>SID<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="frontend/forms/struktur.php">Struktur Desa</a></li>
          <li><a href="frontend/forms/login.php">Login</a></li>


        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Selamat Datang Di <span> Website Resmi Desa Klibang</span></h2>
            <!-- <p data-aos="fade-up">Alhamdulillah</p> -->
            <!-- <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a> -->
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active" style=" background-image: url(frontend//assets/img/hero-carousel/bg3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(frontend/assets/img/hero-carousel/bg1.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(frontend/assets/img/hero-carousel/bg2.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

   <!-- ======= Blog Section ======= -->

   <section id="blog" class="blog">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <?php 
      include ('frontend/forms/aksi/koneksi.php');

      $query = mysqli_query($connect, "SELECT * FROM tb_berita ORDER BY tgl_upload DESC LIMIT 12");
      $content = mysqli_num_rows($query);
      ?>
      <div class="row gy-4 posts-list">
       <?php
       while($key = mysqli_fetch_array($query)){
        ?>
        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img style="width:420px; height: 200px;" src="<?php echo "admin/content/berita/gambar/".$key['foto'];?>" class="img-fluid" alt="">
              <?php
              $tanggal = date('d', strtotime($key['tgl_upload']));
              $bulan = date('F', strtotime($key['tgl_upload']));
              $tahun = date('Y', strtotime($key['tgl_upload']));
              $bulanIndo = array(
                'January' => 'Januari',
                'February' => 'Februari',
                'March' => 'Maret',
                'April' => 'April',
                'May' => 'Mei',
                'June' => 'Juni',
                'July' => 'Juli',
                'August' => 'Agustus',
                'September' => 'September',
                'October' => 'Oktober',
                'November' => 'November',
                'December' => 'Desember'
              );
              ?>
              <span class="post-date"><?php echo $tanggal . " " . $bulanIndo[$bulan] . " " . $tahun; ?></span>
            </div>
            <div class="post-content d-flex flex-column">
              <h3 class="post-title"><?php echo $key['judul'];?></h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2"><?php echo $key['penulis'];?></span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2"><?php echo $key['kategori'];?></span>
                </div>
              </div>

              <p><?php echo substr($key['deskripsi'],0,300);?></p>

              <hr>
              <a href='<?php echo "frontend/forms/detail-berita.php?id=".$key['judul']."" ?>' class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div><!-- End post list item -->
      <?php } ?>
    </div><!-- End blog  list -->
  </div>
</section><!-- End Blog Section -->


<section id="constructions" class="constructions">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Constructions</h2>
      <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
    </div>

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url(frontend/assets/img/constructions-1.jpg);"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url(frontend/assets/img/constructions-2.jpg);"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url(frontend/assets/img/constructions-3.jpg);"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                <h4 class="card-title">Error beatae dolor inventore aut</h4>
                <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url(frontend/assets/img/constructions-4.jpg);"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

    </div>

  </div>
</section><!-- End Constructions Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Services</h2>
      <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
    </div>

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="fa-solid fa-mountain-city"></i>
          </div>
          <h3>Nesciunt Mete</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
          </div>
          <h3>Eosle Commodi</h3>
          <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-compass-drafting"></i>
          </div>
          <h3>Ledo Markt</h3>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-trowel-bricks"></i>
          </div>
          <h3>Asperiores Commodit</h3>
          <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-helmet-safety"></i>
          </div>
          <h3>Velit Doloremque</h3>
          <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
          </div>
          <h3>Dolori Architecto</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
      <div class="col-lg-6 img-bg" style="background-image: url(frontend/assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-easel flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-patch-check flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Tride clov</a></h4>
            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>
</section><!-- End Alt Services Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">

    <ul class="nav nav-tabs row  g-2 d-flex">

      <li class="nav-item col-3">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <h4>Modisit</h4>
        </a>
      </li><!-- End tab nav item -->

      <li class="nav-item col-3">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
          <h4>Praesenti</h4>
        </a><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <h4>Explica</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <h4>Nostrum</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Voluptatem dignissimos provident</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Neque exercitationem debitis</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Voluptatibus commodi accusamu</h3>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
              </ul>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane" id="tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Omnis fugiat ea explicabo sunt</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

      </div>

    </div>
  </section><!-- End Features Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Burhanudin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">IT Janabadra</a>
      </div>
    </div>
  </div>

</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="frontend/assets/vendor/aos/aos.js"></script>
<script src="frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="frontend/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="frontend/assets/js/main.js"></script>

</body>

</html>