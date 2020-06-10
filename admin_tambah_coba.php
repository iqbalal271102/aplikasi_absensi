<?php include "header.php" ?>

<?php 
$akses = '<script type="text/javascript"> window.location ="home.php";</script>';
if ($_SESSION['akses'] =='2') {
      echo $akses;
}elseif ($_SESSION['akses'] =='3') {
  echo $akses;
}
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
         <li > <!-- class="active treeview menu-open" -->
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>

      <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="admin_data.php"><i class="fa fa-users"></i> Daftar Users</a></li>
            <li class="active"><a href="admin_tambah.php"><i class="fa fa-user-plus"></i> Tambah Users</a></li>
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


     <!--    <li class=" treeview">
          <a href="#">
            <i class="fa fa-university"></i>
            <span>Jurusan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="jurusan_data.php"><i class="fa fa-list"></i>Daftar Jursan</a></li>
            <li><a href="jurusan_tambah.php"><i class="fa fa-plus"></i>Tambah Jurusan</a></li>
          </ul>
        </li> -->


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


      </ul>
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
                <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
        <li class="active">Users_Tambah</li>
      </ol>
    </section>
<br>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->

<div class="col-md-12">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Users</h3>
            </div>


            <?php


// tambah suswa

if (isset($_POST['Simpan'])) {

$nama=$_POST['name'];
$username=$_POST['user'];
$gambar = $_FILES['file']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"
$foto = $_FILES['file']['name']; //Mengambil foto/url gambar pada input type="file" name="gambar"
$folder = "img/";
$pindah = move_uploaded_file($gambar, $folder.$foto); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi
$password=sha1($_POST['pass']);

$akses=$_POST['akses'];
// $guru=$_POST['guru'];
// $w_k=$_POST['w_kelas'];
if ($akses == 1) {
$sql="INSERT INTO as_users (UserFullname,Username,password,id_level,foto)values('$nama','$username','$password','$akses','$foto')";

if (mysqli_query($conn,$sql)) {

      $error=true;
       if ($error){
              echo '
                <div class="form-group">
                <label for="input" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-success"></i> Data Berhasil Di Tambah!</h4>
                
               </div>
                </div>

               ';
                  }

}else{
  echo "gagal";
}

}

$nip  = $_POST['nip'];
$pelajaran  = $_POST['pelajaran'];
$jk         = $_POST['jk'];
$alamat     = $_POST['alamat'];
$tgl        = $_POST['tgl'];


//jika akses nya 2
if ($akses == 2) {
$sql="INSERT INTO as_users (UserFullname,Username,password,id_level,foto)values('$nama','$username','$password','$akses','$foto')";
$id_users ="";

// $sql_guru = "INSERT into as_guru (id_guru,id_pelajaran,nip,nama_guru,jenis_kelamin,alamat,tanggal_lahir) values('$pelajaran','$nip','$nama','$jenis_kelamin','$alamat','$tgl')  ";
  // mysqli_query($conn,$sql_guru);

if (mysqli_query($conn,$sql)) {
  echo "id ".mysqli_insert_id($conn,'id_guru');

      $error=true;
       if ($error){
              echo '
                <div class="form-group">
                <label for="input" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-success"></i> Data Berhasil Di Tambah!</h4>
                
               </div>
                </div>

               ';
                  }

}else{
  echo "gagal";
}

}


//jika akses nya 3
if ($akses == 3) {
$sql="INSERT INTO as_users (UserFullname,Username,password,id_level,foto)values('$nama','$username','$password','$akses','$foto')";

if (mysqli_query($conn,$sql)) {

      $error=true;
       if ($error){
              echo '
                <div class="form-group">
                <label for="input" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-success"></i> Data Berhasil Di Tambah!</h4>
                
               </div>
                </div>

               ';
                  }

}else{
  echo "gagal";
}

}





}
 ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data"  >
              <div class="box-body">

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="input" placeholder="Enter Nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" name="user" class="form-control" id="input" placeholder="Enter Username">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">password</label>

                  <div class="col-sm-10">
                    <input type="password" name="pass" class="form-control" id="input" placeholder="Enter password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">foto :</label>

                  <div class="col-sm-10">
                    <input name="file" type="file" >
                  </div>
                </div>



                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">akses</label>

                  <div class="col-sm-10">
                    <select name="akses" class="form-control" id="select">
                      <option value="1">Admin</option>
                      <option value="2">Guru</option>
                      <option value="3">Wali Kelas</option>

                    </select>
                  </div>
                </div>



            <div id="guru" style="display: none">
  
              <div class="form-group">
                <label for="input" class="col-sm-2 control-label">Pelajaran</label>
                <div class="col-sm-10">
              <select name="pelajaran" class="form-control">
                      <option value="1">PBO</option>
                            <option value="2">B.INDO</option>
                      <option value="3">B.INGG</option>
              </select>
            </div>
            </div>

                 <!--  <div class="form-group">
                      <label for="input" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" class="form-control" >
                        </div>
                  </div> -->

              <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nip</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control"  name="nip" value="masukan Nip ">
                  </div>
                </div>

               <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Jenis Kelamin</label>
                 <div class="col-sm-10">
                <label>
                  <input type="radio" name="jk" class="flat-red" checked value="L">Laki Laki
                </label>
                <label>
                  <input type="radio" name="jk" class="flat-red" value="P">Perempuan
                </label>
                </div>
              </div>

              <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="input" placeholder="Enter Nama Nama"></textarea>
                  </div>
                </div>
                

              <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Tanggal lahir</label>

                  <div class="col-sm-10">
                    <input type="date" name="tgl" class="form-control" id="input" placeholder="Enter Nama jk">
                  </div>
                </div>

            </div>



<!--           <div id="wali_kelas" style="display: none">
  
  

              <select name="id_guru">

               <?php 
               $sql_guru= "SELECT * FROM as_guru";
               $sql1 = mysqli_query ($conn,$sql_guru);
               foreach ($sql1 as $key => $value) {
                 echo '

                 <option value="'.$value['id_guru'].'">'.$value['nama_guru'].'</option>
                    ';  
               }
               ?>
              </select><br><br>

        ................: <select name="k">
      <option value="1">XII.RPL</option>
      <option value="2">XI.RPL</option>
      <option value="3">X.RPL</option>
    </select><br><br>
  

  </div> -->



<!--                 <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Guru</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="guru" >

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_guru";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                       echo "<option >"."jika Terkait dengan Guru "."</option>";
                     foreach ($query_s as $key => $value) {
                       echo "<option   value='".$value['id_guru']."'>".$value['nama_guru']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Wali Kelas</label>

                  <div class="col-sm-10">
                    <select class="form-control" name="w_kelas" >

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_wali_kelas";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                       echo "<option >"."jika Terkait dengan Wali Kelas "."</option>";
                     foreach ($query_s as $key => $value) {
                       echo "<option   value='".$value['id_wali_kelas']."'>".$value['nama_guru']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                </select>
                  </div>
                </div> -->


              </div>
              <!-- /.box-body -->
              <div class="box-footer">

                <a href="admin_data.php"><input type="button" name="Cencel" class="btn btn-default" value="Cencel"></a>
                <input type="submit" name="Simpan" class="btn btn-info pull-right" value="Simpan">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>




 <!-- ============== -->



        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php'; ?>


<script type="text/javascript">

 var select = document.getElementById('select');

 select.addEventListener('change',function(){
 
  if(select.value == 2){
    document.getElementById('guru').style.display="block";
    document.getElementById('wali_kelas').style.display="none";
  // }else if(select.value == 1){
  //  document.getElementById('guru').style.display="none";
  //  document.getElementById('admin').style.display="block";
  //  document.getElementById('wali_kelas').style.display="none";
  }if(select.value == 3){
    document.getElementById('guru').style.display="none";
    
    document.getElementById('wali_kelas').style.display="block";
  }else{

    



  }

 });  


</script>
