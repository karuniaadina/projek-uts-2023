<?php
if(isset($_POST['submit'])){

  $email = $_POST ['email'];
  $password = $_POST ['password'];

  if($email == 'karuniaadina@gmail.com' && $password == 'depok256' ){
  header ('location: product.php' );
  exit;
}elseif($email == 'karunia@gmail.com' && $password == 'depok256' ){
  header('location: index.php');
  exit;

}else{
  echo 'email atau password yang anda masukan salah';

}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Kkitchenset's</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <form action="" method="POST" >
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="img/banner.jpg.jpeg" alt="logo Kkitchenset" width="10%">
    
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Masukan Email dan Password anda

      </p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <label for="email"></label>
          <input type="email" id="email" name="email" placeholder="Masukan Email Anda">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <label for="password"></label>
          <input type="password" id="password" name="password" placeholder="Masukan Password Anda">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block" >Login</button>
          </div>
         
        </div>
      </form>

        <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-google-plus mr-2"></i>Login Dengan Google
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">Lupa Password ?</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Registrasi User baru</a>
      </p>
    </div>
   
  </div>

</div>
</form>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- <script>
  function login(){
      let email = document.getElementById("email").value;
      let pass = document.getElementById("password").value;
      
      if(email == "admin@gmail.com" && pass == "mimin"){
          alert("Login Succes")
          location.href = "stoktoko.php";
      }else{
          alert("Login Failed")
      }
      
  }
</script> -->


</body>
</html>
