
<?php
include "header.php" ;
date_default_timezone_set('Asia/Jakarta');
error_reporting(1);




?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
       <div class="user-panel">

        <div class="pull-left image">
          <?php
 $id_users=$_SESSION['userid'];
          $sql_admin="SELECT * FROM as_users WHERE id_users='$id_users'";
                  $query = mysqli_query($conn,$sql_admin);
                  $id_usersn= mysqli_num_rows($query);
                    if ($id_usersn > 0) {
                              $user = mysqli_fetch_assoc($query);

                            echo "<img src=img/".$user['foto']." class='img-circle' alt='User Image' height = ''>";
                    }?>
        </div>
        <div class="pull-left info">
          <p><?php
              $id_users=$_SESSION['userid'];
          $sql_admin="SELECT * FROM as_users WHERE id_users='$id_users'";
                  $query = mysqli_query($conn,$sql_admin);
                  $id_usersn= mysqli_num_rows($query);
                    if ($id_usersn > 0) {
              $user = mysqli_fetch_assoc($query);
              echo $user['userFullname'];
            }

             ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

<?php if ($_SESSION['akses']== 1){
?>
         <li class="active"> <!-- class="active treeview menu-open" -->
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_data.php"><i class="fa fa-users"></i> Daftar Users</a></li>
            <li><a href="admin_tambah.php"><i class="fa fa-user-plus"></i> Tambah Users</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Pesan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="sms_masuk.php"><i class="fa fa-inbox"></i> Pesan Masuk </a></li>
              <li><a href="sms_keluar.php"><i class="fa fa-send"></i> Pesan Keluar </a></li>
              <li ><a href="sms_kirim.php"><i class="fa fa-send"></i> Kirim Pesan  </a></li>
          </ul>
        </li>



              <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Guru</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="guru_data.php"><i class="fa fa-users"></i> Daftar Guru</a></li>
            <li><a href="guru_tambah.php"><i class="fa fa-user-plus"></i> Tambah Guru</a></li>
          </ul>
        </li>




      <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="siswa_data.php"><i class="fa fa-users"></i> Daftar Siswa</a></li>
            <li><a href="siswa_tambah.php"><i class="fa fa-user-plus"></i> Tambah Siswa</a></li>
          </ul>
        </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Wali Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="wali_data.php"><i class="fa fa-users"></i> Daftar Wali Kelas</a></li>
            <li><a href="wali_tambah.php"><i class="fa fa-user-plus"></i> Tambah Wali Kelas</a></li>
          </ul>
        </li>


              <li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i>
            <span>Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="kelas_data.php"><i class="fa fa-list"></i>Daftar Kelas</a></li>
            <li><a href="kelas_tambah.php"><i class="fa fa-plus"></i>Tambah Kelas</a></li>
          </ul>
        </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pelajaran_data.php"><i class="fa fa-database"></i> Daftar Pelajaran</a></li>
            <li><a href="pelajaran_tambah.php"><i class="fa fa-plus"></i> Tambah Pelajaran</a></li>
          </ul>
        </li>




              <li class=" treeview">
          <a href="#">
            <i class="fa fa-book "></i>
            <span>Rekap Absen Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
            <li ><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
          </ul>
        </li>


      </ul><?php } ?>


      <?php if ($_SESSION['akses']== 2){
?>
         <li class="active"> <!-- class="active treeview menu-open" -->
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>




         <li class="treeview">
          <li><a href="absen_siswa.php">
            <i class="fa fa-book"></i>
            <span>Absen Siswa</span>
          </a></li>
        </li>



              <li class=" treeview">
          <a href="#">
            <i class="fa fa-book "></i>
            <span>Rekap Absen Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
            <li ><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
          </ul>
        </li>


      </ul><?php } ?>

            <?php if ($_SESSION['akses']== 3){
?>
         <li class="active"> <!-- class="active treeview menu-open" -->
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>

        <!-- <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Sms Box</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="sms_box.php"><i class="fa fa-users"></i> Inbox Sms</a></li>
              <li><a href="#"><i class="fa fa-user-plus"></i> Send Sms</a></li>
            </ul>
          </li> -->
          <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Pesan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="sms_masuk.php"><i class="fa fa-inbox"></i> Pesan Masuk </a></li>
              <li><a href="sms_keluar.php"><i class="fa fa-send"></i> Pesan Keluar </a></li>
              <li ><a href="sms_kirim.php"><i class="fa fa-send"></i> Kirim Pesan  </a></li>
          </ul>
        </li>

              <li class=" treeview">
          <a href="#">
            <i class="fa fa-book "></i>
            <span>Rekap Absen Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
            <li ><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
          </ul>
        </li>


      </ul><?php } ?>




    </section>
    <!-- /.sidebar -->
  </aside>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
<br>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->




      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
 <!--            <div class="box-header with-border">
              <h3 class="box-title">Collapsible Accordion</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        
                        TUJUAN APLIKASI 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                     
                     Aplikasi ini berfungsi sebagai memberikan informasi kepada orang tua siswa agar dapat mengetahui keterangan absen siswa yang berada di sekolah melalui sms gateway dan telegram
                        
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <div class="box box-solid">
<!--             <div class="box-header with-border">
              <h3 class="box-title">Carousel</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <!-- <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li> -->
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="http://smkn1lahat.sch.id/" target="_blank"><img src="img/c1.JPEG" alt="First slide"></a>

                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                  <div class="item">
                     <a href="http://smkn1lahat.sch.id/" target="_blank"><img src="img/cc2.JPEG" alt="Second slide"></a>

                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                 
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>










      <div class="row">
        <!-- ./col -->
        <?php if ($_SESSION['akses']== 1){
?>

        <!-- ./col -->
        <!-- <div class="col-lg-3 col-xs-6"> -->
          <!-- small box -->
          <!-- <div class="small-box bg-yellow">
            <div class="inner">
              <h3><i class="fa fa-book"></i></h3>

              <p>Rekap Absen Siswa / Bulan</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="absen_rekap_siswa.php" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        <!-- </div> -->
        <!-- ./col -->

            <!-- <div class="col-lg-3 col-xs-6"> -->
          <!-- small box -->
          <!-- <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-book"></i></h3>

              <p>Cek Absen Siswa /hari</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="absen_cek_rekap_siswa.php" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        <!-- </div> -->
        <!-- ./col -->



      <?php } ?>


        <?php if ($_SESSION['akses']== 2){
?>
<!-- <div class="col-lg-3 col-xs-6">
         small box -->
          <!-- <div class="small-box bg-green">
            <div class="inner">
              <h3><i class="fa fa-book"></i></h3>

              <p>Absen Siswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="absen_siswa.php" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        <!-- </div>  -->




<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><i class="fa fa-book"></i></h3>

              <p>Rekap Absen Siswa / Bulan</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="absen_rekap_siswa.php" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-book"></i></h3>

              <p>Cek Absen Siswa /hari</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="absen_cek_rekap_siswa.php" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>

        <?php if ($_SESSION['akses']== 3){
?>


        <!-- <div class="col-lg-3 col-xs-6">
          small box -->
          <!-- <div class="small-box bg-yellow">
            <div class="inner">
              <h3><i class="fa fa-book"></i></h3>

              <p>Rekap Absen Siswa / Bulan</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="absen_rekap_siswa.php" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        <!-- </div>  -->

        <!-- <div class="col-lg-3 col-xs-6">
           small box -->
          <!-- <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-book"></i></h3>

              <p>Cek Absen Siswa /hari</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="absen_cek_rekap_siswa.php" class="small-box-footer">Info Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <?php } ?>




      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">


    <?php if ($_SESSION['akses']== 1){?>
          <div class="col-xs-12">
       <div class="box box-default">

<?php

$waktu_jam_mengajar = '';
$tanggal = '';
if (isset($_POST['JAMM'])) {
  $waktu_jam_mengajar = $_POST['JAMM'];
}

if (isset($_POST['tanggal'])) {
  $tanggal_1 = $_POST['tanggal'];
}else{
  $tanggal_1 = date('Y-m-d');
}


if (isset($_POST['id_pelajaran'])) {
  $id_pelajarann = $_POST['id_pelajaran'];

}if (isset($_POST['id_jurusan'])) {
  $id_jurusann = $_POST['id_jurusan'];
}
if (isset($_POST['id_kelas'])) {
  $id_kelass = $_POST['id_kelas'];
}




 ?>

        <div class="box-header with-border">
          <h3 class="box-title">Konfirmasi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form action="#" method="POST">
            <div class="col-sm-12 invoice-col">

              <div class="col-xs-2">
                <?php

                  // if ($tanggal_1 == $tanggal_1) {
                     $tanggal = $tanggal_1;
                  //  }

                 ?>
                      <input type="date" class="form-control"  name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>">
              </div>



              <div class="col-xs-2">
              <select class="form-control select2" name="JAMM" id="JAMM" >

                                        <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_jam_pelajaran";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                    $jam ="";



                        echo "<option   value=''>"."Waktu jam Mengajar"."</option>";
                     foreach ($query_s as $key => $value) {
                      $select = "";
                  if ($value['nama_jam']==1) {
                      $jam ="PAGI";

                   }elseif ($value['nama_jam']==2) {
                     $jam ="SIANG";

                   }

                   if ($waktu_jam_mengajar == $value['id_jam_pelajaran']) {
                     $select =  " selected=selected ";
                   }


                       echo "<option '".$select."'  value='".$value['id_jam_pelajaran']."'>".$jam."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }




                  ?>
                </select>
              </div>

              <div class="col-xs-2">
                <select class="form-control select2" name="id_pelajaran" id="id_pelajaran"  >

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                 $id_users=$_SESSION['userid'];
                    $sql_s= "SELECT * FROM as_pelajaran  ";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);

                   if ($hasil_s>0) {
                    echo "<option >"."pilih Pelajaran"."</option>";
                     foreach ($query_s as $key => $value) {
                      $s = "";

                      // mtk
                      // b indo
                      if ($id_pelajarann == $value['id_pelajaran']) {
                         $s = " selected=selected ";
                      }



                      echo "<option '".$s."'  value='".$value['id_pelajaran']."'>".$value['pelajaran']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                </select>
              </div>



             <!--    <div class="col-xs-2">
                      <select class="form-control select2" name="id_jurusan" id="jurusan"  >

                 <?php
                  // buat ambil kategori
                   $id_users=$_SESSION['userid'];
                    $sql_s= "SELECT * FROM as_jurusan ";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                    echo "<option >"."pilih Jurusan"."</option>";
                     foreach ($query_s as $key => $value) {
                      $s="";
                       if ($id_jurusann == $value['id_jurusan']) {
                         $s = " selected=selected ";
                      }
                       echo "<option '".$s."'  value='".$value['id_jurusan']."'>".$value['jurusan']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                </select>
              </div> -->

              <?php if (isset($_POST['id_kelas'])) {
                $id_kelas = $_POST['id_kelas'];
              } ?>
                <div class="col-xs-2">
                      <select class="form-control select2" name="id_kelas" >

                          <option>pilih Kelas</option>
                          <?php
                          $sql = mysqli_query($conn,"SELECT * FROM as_kelas");
                          foreach ($sql as $key => $data) {
                            $select= "";
                            if ($id_kelass == $data['id_kelas']) {

                              $select =  " selected=selected ";
                            }

                            echo "<option '".$select."'  value='".$data['id_kelas']."'>".$data['kelas']."</option>";

                          }


                           ?>
                </select>
              </div>


              <div class="col-xs-2">
                      <input type="submit" class="btn btn-block btn-success" name="tampil" value="klik">
              </div>
            </div>



            <div class="col-md-12">

              <div id="txtHint">
              <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title"> Konfirmasi Siswa </span>

              </div>

            </div>
            </div>

              <div class="form-group">
              <div class="box-body table-responsive no-padding">
              <table class="table table-bordered" >
                  <tr>
                  <th><div align="center">No</div></th>
                  <!-- <th >Aksi</th> -->
                  <th ><div align="center">Nis</div>  </th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin </th>
                  <th>Keterangan </th>
                  <th>Catatan Siswa </th>
                  <th>Nomor HP Orang Tua </th>

                </tr>
                <?php if (isset($_POST['tampil'])) {
                  # code...

                        $kon = 0;
                       $id_kelas = $_POST['id_kelas'];
                       $tanggal = $_POST['tanggal'];
                       $pelajaran = $_POST['id_pelajaran'];
                       $jamm = $_POST['JAMM'];
                      $no=1;


                      // $simpan = "INSERT INTO as_absen_siswa ("




                      $query ="SELECT * FROM as_absen_siswa as sa
                      JOIN as_kelas as k on sa.id_kelas=k.id_kelas
                      JOIN as_siswa on sa.nis = as_siswa.nis
                      JOIN as_pelajaran as p on sa.id_pelajaran=p.id_pelajaran
                      WHERE sa.id_kelas='$id_kelas'  and sa.id_pelajaran = '$pelajaran' and sa.id_jam_pelajaran = '$jamm'  and sa.tanggal_masuk ='$tanggal' ";

                      $query1 ="SELECT * FROM as_siswa join as_kelas on as_siswa.id_kelas=as_kelas.id_kelas WHERE as_kelas.id_kelas ='$id_kelas'  ";
                      $result1 = mysqli_query($conn,$query1);
                       $data = mysqli_fetch_assoc($result1);

                      $result = mysqli_query($conn,$query);
                      foreach ($result as $key => $value) {
                        $kon=$value['konfirmasi_walikelas'];
                 ?>
                <tbody>
                  <tr>
                    <td style="width: 50px;"><?php echo $no++; ?></td>
                    <td  ><input class="c" type="text" name="nis[]" value="<?php echo $value['nis']; ?>"></td>
                    <td  ><input class="c" type="text" name="nama_siswa[]" value="<?php echo $value['nama_siswa']; ?>"></td>

                    <td  ><input class="c"type="text" name="kelas[]" value="<?php echo $value['kelas']; ?>"></td>
                    <td  ><?php echo $value['jenis_kelamin'] ?></td>
                    <td  ><input class="c" type="text" name="keterangan[]" value="<?php echo $value['keterangan']; ?>"></td>
                    <td  ><input class="c" type="text" name="catatan_siswa[]" value="<?php echo $value['catatan_siswa']; ?>"></td>
                    <td  ><input class="c"type="text" name="nomor_tel_ortu[]" value="<?php echo $value['nomor_telpon_ortu']; ?>"></td>
                  </tr>
                    <?php }}?>


              </table>

              <?php
              $dis = "";
                if ( $kon > 0) {
                  $dis = "disabled";
                }

               ?>

             <?php if (isset($_POST['tampil']) ) {
            ?> <div class="col-xs-2">
                      <input type="submit" name="Konfirmasi" class="btn btn-block btn-success" value="Konfirmasi" <?php echo $dis; ?>>
              </div>
            <?php  }  ?>

              </form>
            </div>
      </div>

            <?php if (isset($_POST['Konfirmasi'])) {
                       $id_kelas       = $_POST['id_kelas'];
                       $tanggal        = $_POST['tanggal'];
                       $pelajaran      = $_POST['id_pelajaran'];
                       $jam            = $_POST['JAMM'];
                       $nis            = $_POST['nis'];
                       $keterangan     = $_POST['keterangan'];
                       $nama_siswa     = $_POST['nama_siswa'];
                       $jurusan        = $_POST['jurusan'];
                       $kelas          = $_POST['kelas'];
                       $no_tel_ortu    = $_POST['nomor_tel_ortu'];
                       $jumlah_dipilih = count($nama_siswa);

              $sql_u = mysqli_query($conn,"UPDATE as_absen_siswa SET konfirmasi_walikelas='1' where id_pelajaran='$pelajaran' and id_kelas ='$id_kelas' and id_jam_pelajaran ='$jam' and tanggal_masuk = '$tanggal'  ");

              $sql_phones = mysqli_query($conn,"SELECT ID FROM phones");
                $sql_ID = mysqli_fetch_assoc($sql_phones);
                $ID = $sql_ID['ID'];
                $tanggal_m= date("d-F-Y",strtotime($tanggal));
              if ($jam == 1) {
              for($x=0; $x<$jumlah_dipilih; $x++){
              $query =mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID) VALUES ('$no_tel_ortu[$x]', '$ID', 'Smk N 1 Lahat Menginformasikan ananda $nama_siswa[$x] kelas $kelas[$x].$jurusan[$x] Pagi ini tanggal $tanggal_m  Absensinya dinyatakan $keterangan[$x] ', 'Gammu .128.90')");
            }}
              if ($jam == 2) {
              for($x=0; $x<$jumlah_dipilih; $x++){
              $query =mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID) VALUES ('$no_tel_ortu[$x]', '$ID', 'Smk N 1 Lahat Menginformasikan ananda $nama_siswa[$x] kelas $kelas[$x].$jurusan[$x] Sore ini tanggal $tanggal_m Absensinya dinyatakan $keterangan[$x] ', 'Gammu .128.90')");
            }}

            ?>
            <script type="text/javascript"> alert("berhasil di konfirmasi !!")</script>
            <?php } ?>


              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <!-- <div class="col-md-6"> -->





              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      <?php } ?>
      <!-- akhir dari akses level 1 -->


    <?php if ($_SESSION['akses']== 3){?>
          <div class="col-xs-12">
       <div class="box box-default">

<?php


if (isset($_POST['JAMM'])) {
  $waktu_jam_mengajarr = $_POST['JAMM'];
}

if (isset($_POST['tanggal'])) {
  $tanggal_2 = $_POST['tanggal'];
}else{
  $tanggal_2 = date('Y-m-d');
}

if (isset($_POST['id_pelajaran'])) {
  $id_pel = $_POST['id_pelajaran'];

}



 ?>

        <div class="box-header with-border">
          <h3 class="box-title">Konfirmasi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form action="#" method="POST">
            <div class="col-sm-12 invoice-col">

              <div class="col-xs-2">
                <?php $tanggal = $tanggal_2 ?>
                      <input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal ?>">
              </div>

              <div class="col-xs-2">
              <select class="form-control select2" name="JAMM">

                                        <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_jam_pelajaran";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                    $jam ="";


                        echo "<option   value='0'>"."Waktu jam Mengajar"."</option>";
                     foreach ($query_s as $key => $value) {
                      $select = "";
                  if ($value['nama_jam']==1) {
                      $jam ="PAGI";

                   }elseif ($value['nama_jam']==2) {
                     $jam ="SIANG";

                   }

                   if ($waktu_jam_mengajarr == $value['id_jam_pelajaran']) {
                     $select =  " selected=selected ";
                   }

                       echo "<option '".$select."'  value='".$value['id_jam_pelajaran']."'>".$jam."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }




                  ?>
                </select>
              </div>

              <div class="col-xs-2">
                <select class="form-control select2" name="id_pelajaran" id="id_pelajaran"  >

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                 $id_users=$_SESSION['userid'];
                    $sql_s= "SELECT * FROM as_pelajaran  ";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);


                   if ($hasil_s>0) {
                    echo "<option >"."pilih Pelajaran"."</option>";
                     foreach ($query_s as $key => $value) {
                      $s = "";
                      if ($id_pel == $value['id_pelajaran']) {
                         $s = " selected=selected ";
                      }

                      echo "<option '".$s."'  value='".$value['id_pelajaran']."'>".$value['pelajaran']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                </select>
              </div>


              <?php
              // if (isset($_POST['id_kelas'])) {
              //   $id_kelas = $_POST['id_kelas'];
              // }
              ?>
               <!--  <div class="col-xs-2">
                      <select class="form-control select2" name="id_jurusan" >

                 <?php
                  // buat ambil kategori
                   $id_users=$_SESSION['userid'];
                    $sql_s= "SELECT * FROM as_kelas JOIN as_jurusan on as_kelas.id_jurusan=as_jurusan.id_jurusan   JOIN as_wali_kelas on as_kelas.id_kelas=as_wali_kelas.id_kelas JOIN as_users on as_users.id_wali_kelas=as_wali_kelas.id_wali_kelas WHERE as_users.id_users ='$id_users' ";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                     foreach ($query_s as $key => $value) {
                       echo "<option   value='".$value['id_jurusan']."'>".$value['jurusan']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                </select>
              </div> -->


              <?php if (isset($_POST['id_kelas'])) {
                $id_kelas = $_POST['id_kelas'];
              } ?>
                <div class="col-xs-2">
                      <select class="form-control select2" name="id_kelas" >

                 <?php
                  // buat ambil kategori
                   $id_users=$_SESSION['userid'];
                    $sql_s= "SELECT * FROM as_kelas JOIN as_wali_kelas on as_kelas.id_kelas=as_wali_kelas.id_kelas JOIN as_users on as_users.id_wali_kelas=as_wali_kelas.id_wali_kelas WHERE as_users.id_users ='$id_users' ";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                     foreach ($query_s as $key => $value) {
                       echo "<option   value='".$value['id_kelas']."'>".$value['kelas']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                </select>
              </div>





              <div class="col-xs-2">
                      <input type="submit" class="btn btn-block btn-success" name="tampil" value="klik">
              </div>
            </div>



            <div class="col-md-12">
              <div class="form-group">
              <div class="box-body table-responsive no-padding">
              <table class="table table-bordered" id="txtHint">
                  <tr>
                  <th><div align="center">No</div></th>
                  <!-- <th >Aksi</th> -->
                  <th ><div align="center">Nis</div>  </th>
                  <th>Nama Siswa</th>
                  <!-- <th>Jurusan </th> -->
                  <th>Kelas</th>
                  <th>Jenis Kelamin </th>
                  <th>Keterangan </th>
                  <th>Catatan Siswa </th>
                  <th>Nomor HP Orang Tua </th>

                </tr>
                <?php if (isset($_POST['tampil'])) {
                  # code...

                        $kon = 0;
                       $id_kelas = $_POST['id_kelas'];
                       $tanggal = $_POST['tanggal'];
                       $pelajaran = $_POST['id_pelajaran'];
                       $jamm = $_POST['JAMM'];
                      $no=1;
                      $query ="SELECT * FROM as_absen_siswa as sa
                      JOIN as_kelas as k on sa.id_kelas=k.id_kelas
                      JOIN as_siswa on sa.nis = as_siswa.nis
                      JOIN as_pelajaran as p on sa.id_pelajaran=p.id_pelajaran
                      WHERE sa.id_kelas='$id_kelas'  and sa.id_pelajaran = '$pelajaran' and sa.id_jam_pelajaran = '$jamm'  and sa.tanggal_masuk ='$tanggal' ";

                      $query1 ="SELECT * FROM as_siswa join as_kelas on as_siswa.id_kelas=as_kelas.id_kelas WHERE as_kelas.id_kelas ='$id_kelas'  ";
                      $result1 = mysqli_query($conn,$query1);
                       $data = mysqli_fetch_assoc($result1);

                      $result = mysqli_query($conn,$query);
                      foreach ($result as $key => $value) {
                        $kon=$value['konfirmasi_walikelas'];
                 ?>
                <tbody>
                  <tr>
                    <td style="width: 50px;"><?php echo $no++; ?></td>
                    <td  ><input class="c" type="text" name="nis[]" value="<?php echo $value['nis']; ?>"></td>
                    <td  ><input class="c" type="text" name="nama_siswa[]" value="<?php echo $value['nama_siswa']; ?>"></td>
                    <!-- <td  ><input class="c" type="text" name="jurusan[]" value="<?php echo $value['jurusan']; ?>"></td> -->
                    <td  ><input class="c" type="text" name="kelas[]" value="<?php echo $value['kelas']; ?>"></td>
                    <td  ><?php echo $value['jenis_kelamin'] ?></td>
                    <td  ><input class="c" type="text" name="keterangan[]" value="<?php echo $value['keterangan']; ?>"></td>
                    <td  ><input class="c" type="text" name="catatan_siswa[]" value="<?php echo $value['catatan_siswa']; ?>"></td>
                    <td  ><input class="c" type="text" name="nomor_tel_ortu[]" value="<?php echo $value['nomor_telpon_ortu']; ?>"></td>
                  </tr>
                    <?php }}?>


              </table>

              <?php
              $dis = "";
                if ( $kon > 0) {
                  $dis = "disabled";
                }

               ?>

             <?php if (isset($_POST['tampil']) ) {
            ?> <div class="col-xs-2">
                  <input type="submit" name="Konfirmasi" class="btn btn-block btn-success" value="Konfirmasi" <?php echo $dis; ?>>
              </div>
            <?php  }  ?>

              </form>
            </div></div>

            <?php if (isset($_POST['Konfirmasi'])) {
                       $id_kelas       = $_POST['id_kelas'];
                       $tanggal        = $_POST['tanggal'];
                       $pelajaran      = $_POST['id_pelajaran'];
                       $jam            = $_POST['JAMM'];
                       $nis            = $_POST['nis'];
                       $keterangan     = $_POST['keterangan'];
                       $catatan_siswa  = $_POST['catatan_siswa'];
                       $nama_siswa     = $_POST['nama_siswa'];
                       $jurusan        = $_POST['jurusan'];
                       $kelas          = $_POST['kelas'];
                       $no_tel_ortu    = $_POST['nomor_tel_ortu'];
                       $jumlah_dipilih = count($nama_siswa);

              $sql_u = mysqli_query($conn,"UPDATE as_absen_siswa SET konfirmasi_walikelas='1' where id_pelajaran='$pelajaran' and id_kelas ='$id_kelas' and id_jam_pelajaran ='$jam' and tanggal_masuk = '$tanggal'  ");

                $sql_phones = mysqli_query($conn,"SELECT ID FROM phones");
                $sql_ID = mysqli_fetch_assoc($sql_phones);
                $ID = $sql_ID['ID'];

                $tanggal_m= date("d-F-Y",strtotime($tanggal));
                if ($jam == 1) {
              for($x=0; $x<$jumlah_dipilih; $x++){
              $query =mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID) VALUES ('$no_tel_ortu[$x]', '$ID', 'Smk N 1 Lahat Menginformasikan ananda $nama_siswa[$x] kelas $kelas[$x].$jurusan[$x] Pagi ini tanggal $tanggal_m dinyatakan $keterangan[$x] ', 'Gammu .128.90')");
            }}
              if ($jam == 2) {
              for($x=0; $x<$jumlah_dipilih; $x++){
              $query =mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID) VALUES ('$no_tel_ortu[$x]', '$ID', 'Smk N 1 Lahat Menginformasikan ananda $nama_siswa[$x] kelas $kelas[$x].$jurusan[$x] Sore ini tanggal $tanggal_m Absensinya dinyatakan $keterangan[$x] ', 'Gammu .128.90')");
            }}

            ?>
            <script type="text/javascript"> alert("berhasil di konfirmasi !!")</script>
            <?php } ?>


              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <!-- <div class="col-md-6"> -->
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      <?php } ?>








      </div>


    </section>
    <!-- /.content -->
  </div>
 <?php include "footer.php" ?>



<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- Load File javascript config.js -->
<script src="js/tes.js" type="text/javascript"></script>



<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()


  })
</script>
