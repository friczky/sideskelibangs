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
  <link href="../assets/css/login.css" rel="stylesheet">

</head>

<body translate="no">
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="aksi/simpan-akun.php" method="POST">
      <h1>Registrasi</h1>
      <input type="text" name="nik" class="form-control" maxlength="16" placeholder="NIK" onkeypress="return hanyaAngka(event)" required>
            <script>
              function hanyaAngka(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
                }
            </script>
      <input type="text" name="nama" placeholder="Nama">
      <input type="text" name="kontak" placeholder="No Telepon">
      <input type="email" name="email" placeholder="Email">
      <input type="password" placeholder="Password">
      <button type="submit" name="submit">Register</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="cek-login.php" method="POST">
      <h1>Login</h1>
      <div class="social-container">
        <img src="../assets/img/Logo-KH.png" class="social" style="width: 100px; height:100px;">
      </div>
      <input type="text" placeholder="Enter NIK" name="nik">
      <input type="password" placeholder="Password" name="password">
      <button type="submit" name="submit">login</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Selamat Datang Di Website Resmi Kami</h1>
        <button class="ghost" id="signIn">Login</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Registrasi Disini</h1>
        <p></p>
        <button class="ghost" id="signUp">Register</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src="../assets/js/login.js"></script>
 
</body>
</html>
