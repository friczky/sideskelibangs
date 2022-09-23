<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login Admin</title>

  <!-- Custom Theme Style -->
  <link href="assets/style-login.css" rel="stylesheet">
  <script src="assets/js-login.js"></script>

</head>

<body translate="no">
  <div class="container" id="container">
    <div class="form-container sign-in-container">

      <form action="cek-login.php" method="POST">
        <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
           echo " <div class='alert alert-warning d-flex align-items-center' role='alert'> 
           <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''>
           <use xlink:href='#exclamation-triangle-fill'/>
           </svg>
           <div><b> Username Atau Password Anda Salah!!! </div>
           </div>";
         }else if($_GET['pesan'] == "logout"){
          echo " <div class='alert alert-success d-flex align-items-center' role='alert'> 
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:''><use xlink:href='#check-circle-fill'/>
          </svg>
          <div> Anda telah berhasil logout 
          </div>
          </div>";
        }else if($_GET['pesan'] == "belum_login"){
          echo " <div class='alert alert-warning d-flex align-items-center' role='alert'> 
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Warning:''>
          <use xlink:href='#exclamation-triangle-fill'/>
          </svg>
          <div> Anda Harus Login Untuk mengakses Halaman Admin </div>
          </div>";

        }
      }
      ?>
        <h1>Sign in</h1>
        <div class="social-container">
        </div>
        <input type="text" placeholder="Username" name="username" required="">
        <input type="password" placeholder="Password" name="password" required="">
        <button type="submit" class="btn btn-success btn-block enter-btn">Log in</button>
      </form>

    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <h1>Welcome To Sistem Informasi Desa</h1>
          <img src="docs/images/Logo-KH.png" style="width: 150px; height: 200px;">
        </div>
      </div>
    </div>
  </div>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>


</body>
</html>
