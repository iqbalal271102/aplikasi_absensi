<?php
include "koneksi.php";
session_start();
error_reporting();

if (!isset($_SESSION['userid'])){
} else{

  header("location:home.php");
  }

if (!isset($_SESSION['user_id'])){
} else{

  header("location:home.php");
  }


$error = false;

if (isset($_POST["login"])) {
$username = mysqli_real_escape_string($conn,$_POST["username"]);
$password = mysqli_real_escape_string($conn,sha1($_POST["password"]));


$login= mysqli_query($conn,"select * from as_users where username = '$username ' AND password ='$password '");
$hasil= mysqli_num_rows($login);



if($hasil>0){
  $error = false; // tidak error
  foreach ($login as $key => $value) {
    $level=$value["id_level"];
    $id_users=$value["id_users"];
    if($level==1) {
      //maka dia admin
      header("location:home.php");
     }
     else if($level==2){
      header("location:home.php");
    }else if($level==3){
      header("location:home.php");
    }
  $_SESSION["akses"] = $level;
  $_SESSION["id_users"] = $id_users;
  $_SESSION["userid"] = $value["id_users"];
  $_SESSION["id_wali_kelas"] = $value["id_wali_kelas"]; // 5


  }


 $wali_kelas= mysqli_query($conn,"select * from as_wali_kelas where id_wali_kelas = ".$_SESSION["id_wali_kelas"] );
$wali_kelashasil= mysqli_num_rows($wali_kelas);

if ($wali_kelashasil > 0) {
  foreach ($wali_kelas as $key => $value) {
    
    $_SESSION['id_kelas'] = $value['id_kelas'];

  }

}




}else{
  $error = true;
}
}


 ?>







<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> | Log in</title>
  <link rel="shortcut icon" href="logo/logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="index2.html"><b>SMK</b>BISA</a> -->
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="row">
      <center><img src="img/SMK.png" style="width:100px;height:100px; margin-bottom: -20px;  "></center>
    </div>
    <center><p class="login-box-msg" ><h4><b>E-PARENTING ABSEN SISWA SMS GATEWAY DAN TELEGRAM</b></h4></p></center>

    <?php  
      if ($error){
        echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Oupppssss!</h4>
                Maaf username atau password anda salah! silahkan coba lagi!
               </div>';
      }

    ?>


   

    <form action="" method="post">
      <div class="form-group has-feedback">

        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   <!--  <a href="#">I forgot my password</a><br>
    <a href="memberRegristrasi.php" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
