


<?php include "koneksi.php";


date_default_timezone_set('Asia/Jakarta');
session_start();
if (!isset($_SESSION['akses'])){
  header("location:index.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smk N 1 Lahat | Dashboard</title>

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
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <style type="text/css">
            .c {
              border:none;
              display: disabled;
              outline: none;
              background:transparent;
            }

              input[name=nama_siswa] {
                disabled: true; /* Does not work */
                
                 }
             
           </style>

<!--            <style type="text/css">

</style> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">

  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">





</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SMK</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SMKN</b> 1 LAHAT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

<?php if ($_SESSION['akses']== 1 or $_SESSION['akses']== 3 ){ ?>
         <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="fa fa-bell-o" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu" id="dropdown-menu"></ul>
      </li>
<?php } ?>


          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
           $id_users=$_SESSION['userid'];
          $sql_admin="SELECT * FROM as_users WHERE id_users='$id_users'";
                  $query = mysqli_query($conn,$sql_admin);
                  $id_usersn= mysqli_num_rows($query);
                    if ($id_usersn > 0) {
              $user = mysqli_fetch_assoc($query);

             echo "<img src=img/".$user['foto']." class='user-image' alt='User Image'>";
          }
                    ?>
              <!-- <img src="dist/img/IMG_20180626_001305_086.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">  <?php
              $id_users=$_SESSION['userid'];
          $sql_admin="SELECT * FROM as_users WHERE id_users='$id_users'";
                  $query = mysqli_query($conn,$sql_admin);
                  $id_usersn= mysqli_num_rows($query);
                    if ($id_usersn > 0) {
              $user = mysqli_fetch_assoc($query);
              echo $user['userFullname'];
            }

             ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php
 $id_users=$_SESSION['userid'];
          $sql_admin="SELECT * FROM as_users WHERE id_users='$id_users'";
                  $query = mysqli_query($conn,$sql_admin);
                  $id_usersn= mysqli_num_rows($query);
                    if ($id_usersn > 0) {
                              $user = mysqli_fetch_assoc($query);

                            echo "<img src=img/".$user['foto']." class='img-circle' alt='User Image'>";
                    }


?>
                <!-- <img src="dist/img/IMG_20180626_001305_086.jpg" class="img-circle" alt="User Image"> -->

                <p>
                    <?php
              $id_users=$_SESSION['userid'];
          $sql_admin="SELECT * FROM as_users WHERE id_users='$id_users'";
                  $query = mysqli_query($conn,$sql_admin);
                  $id_usersn= mysqli_num_rows($query);
                    if ($id_usersn > 0) {
              $user = mysqli_fetch_assoc($query);
              echo $user['userFullname'];
            }

             ?>
                  <small>sebagai <?php

                  $sql_akses="SELECT * FROM as_users WHERE id_users='$id_users'";
                  $query_ak = mysqli_query($conn,$sql_akses);
                  $id_akses= mysqli_num_rows($query_ak);
                    if ($id_akses > 0) {
                    $user = mysqli_fetch_assoc($query_ak);
            }

            if ($user['id_level']==1) {
              echo "admin";
            }if ($user['id_level']==2) {
              echo "Guru Mata Pelajaran";
            }if ($user['id_level']==3) {
              echo "Wali Kelas";
            }



                   ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
<!--                 <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class=" ">
                  <center><a href="logout.php" class="btn btn-default btn-flat">Sign out</a></center>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
