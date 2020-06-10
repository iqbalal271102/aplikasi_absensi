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

      <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="admin_data.php"><i class="fa fa-users"></i> Daftar Users</a></li>
            <li ><a href="admin_tambah.php"><i class="fa fa-user-plus"></i> Tambah Users</a></li>
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

      <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="siswa_data.php"><i class="fa fa-users"></i> Daftar Siswa</a></li>
            <li class="active"><a href="siswa_tambah.php"><i class="fa fa-user-plus"></i> Tambah Siswa</a></li>
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

         <!-- <li class="treeview">
          <li><a href="absen_siswa.php">
            <i class="fa fa-book"></i>
            <span>Absen Siswa</span>
          </a></li>
        </li> -->


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
        <li><a href="#"><i class="fa fa-users"></i> Siswa</a></li>
        <li class="active">Siswa_Tambah</li>
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
              <h3 class="box-title">Tambah Siswa</h3>
            </div>



            <?php


// tambah guru

if (isset($_POST['Simpan'])) {
$kelas=$_POST['kelas'];
// $Jurusan=$_POST['Jurusan'];
$nis=$_POST['nis'];
$nama=strtoupper($_POST['nama']);
$jk=$_POST['jk'];
$alt=$_POST['alt'];
$tgl=$_POST['tgl'];
// $no=$_POST['no'];

$n_a=$_POST['nama_a'];
$p_a=$_POST['per_a'];
$n_i=$_POST['nama_i'];
$p_i=$_POST['Perkerjaan_ibu'];
$alt_ortu=$_POST['alt_ortu'];
$no_ortu=$_POST['no_ortu'];



$sql="INSERT INTO as_siswa (id_kelas,
nis,
nama_siswa,
jenis_kelamin,
alamat,
tanggal_lahir,
nomor_telpon,
nama_ayah,
pekerjaan_ayah,
nama_ibu,
pekerjaan_ibu,
alamat_ortu,
nomor_telpon_ortu
)values(
'$kelas',
'$nis',
'$nama',
'$jk',
'$alt',
'$tgl',
'',

'$n_a',
'$p_a',
'$n_i',
'$p_i',
'$alt_ortu',
'$no_ortu'

)";

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

 ?>





            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="#" method="POST">
              <div class="box-body">


                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nis</label>

                  <div class="col-sm-10">
                    <input type="text" name="nis" class="form-control" id="input" placeholder="Enter Nis" required>
                  </div>
                </div>

                  <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="input" placeholder="Enter Nama Siswa" required>
                  </div>
                </div>

                <!-- <div class="form-group">
                <label class="col-sm-2 control-label" >Jurusan</label>
                <div class="col-sm-10">
                 <select name="Jurusan" class="form-control select2" style="width: 100%;" id="jurusan" required>

  <?php
  // buat ambil kategori
    $sql_s= "SELECT * FROM as_jurusan";
    $query_s = mysqli_query($conn,$sql_s);
    $hasil_s= mysqli_num_rows($query_s);
    if ($hasil_s>0) {
      echo "<option >"."Pilih Jurusan"."</option>";
      foreach ($query_s as $key => $value) {
        echo "<option  value='".$value['id_jurusan']."'>".$value['jurusan']."</option>";
      }
    }else{
        echo "<option value='0'> data tidak ada</option>";
    }
    ?>
  </select>
  </div></div> -->

                 <div class="form-group">
                <label class="col-sm-2 control-label" >Kelas</label>
                <div class="col-sm-10">
                 <select name="kelas" class="form-control select2" style="width: 100%;" id="kelas" required>

  <?php
  // buat ambil kategori
    $sql_s= "SELECT * FROM as_kelas";
    $query_s = mysqli_query($conn,$sql_s);
    $hasil_s= mysqli_num_rows($query_s);
    if ($hasil_s>0) {
      echo "<option  >"."Pilih Kelas"."</option>";
      foreach ($query_s as $key => $value) {
        echo "<option   value='".$value['id_kelas']."'>".$value['kelas']."</option>";
      }
    }else{
        echo "<option value='0'> data tidak ada</option>";
    }
    ?>
  </select>
  </div></div>

                               <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="radio" name="jk" value="L" required checked=""> Laki-Laki
                    <input type="radio" name="jk" value="P"> Perempuan
                  </div>
                </div>

                  <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alt" class="form-control" id="input" placeholder="Enter Nama Alamat" required></textarea>
                  </div>
                </div>


                  <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Tanggal lahir</label>

                  <div class="col-sm-10">
                    <input type="date" name="tgl" class="form-control" id="input" placeholder="Enter" required>
                  </div>
                </div>

                <!-- <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">No Telpon</label>

                  <div class="col-sm-10">
                    <input type="text" name="no" class="form-control" id="input" placeholder="Enter" required>
                  </div>
                </div> -->

                  <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nama Ayah</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_a" class="form-control" id="input" placeholder="Enter Nama Ayah" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Perkerjaan Ayah</label>

                  <div class="col-sm-10">
                    <input type="text" name="per_a" class="form-control" id="input" placeholder="Enter Perkerjaan Ayah" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nama Ibu</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_i" class="form-control" id="input" placeholder="Enter Nama Ibu" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Perkerjaan Ibu</label>

                  <div class="col-sm-10">
                    <input type="text" name="Perkerjaan_ibu" class="form-control" id="input" placeholder="Enter Perkerjaan Ibu" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Alamat Orang Tua</label>

                  <div class="col-sm-10">
                    <textarea name="alt_ortu" class="form-control" id="input" placeholder="Enter Nama Alamat Orang Tua" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">No Telpon Orang Tua</label>

                  <div class="col-sm-10">
                    <input type="text" name="no_ortu" class="form-control" id="input" placeholder="Enter No Telpon Orang Tua" required>
                  </div>
                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">

                <a href="siswa_data.php"><input type="button" name="Cencel" class="btn btn-default" value="Cencel"></a>
                <input type="submit" name="Simpan" class="btn btn-info pull-right" value="Simpan">
              </div>
              <!-- /.box-footer -->
            </form>
          </div></div>




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

  <script src="js/jquery.min.js" type="text/javascript"></script>

  <!-- Load File javascript config.js -->
  <script src="js/tes.js" type="text/javascript"></script>
