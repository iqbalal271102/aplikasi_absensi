<?php include "header.php" ?>
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
            <li>
                <!-- class="active treeview menu-open" -->
                <a href="home.php">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <?php if ($_SESSION['akses']== 1){
?>
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

            <li class=" treeview">
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


            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-book "></i>
                    <span>Rekap Absen Siswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
                    <li><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
                </ul>
            </li>

        </ul> <?php } ?>

                    <?php if ($_SESSION['akses']== 2){?>

                        <li class="treeview">
          <li class="active"><a href="absen_siswa.php">
            <i class="fa fa-book"></i>
            <span>Absen Siswa</span>
          </a></li>
        </li>

                        <li class="active treeview">
                <a href="#">
                    <i class="fa fa-book "></i>
                    <span>Rekap Absen Siswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
                    <li><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
                </ul>
            </li>

                     <?php } ?>  

                       <?php if ($_SESSION['akses']== 3){
?>
         <li class=""> <!-- class="active treeview menu-open" -->
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
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




              <li class="active treeview">
          <a href="#">
            <i class="fa fa-book "></i>
            <span>Rekap Absen Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
            <li class="active"><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
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
          <li><a href="#"><i class="fa fa-book"></i>Absen</a></li>
    <li class="active">Rekap Edir Absen Harian</li>
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


                    <form action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <?php
    include "koneksi.php";
    $id_absen_siswa=$_GET['id_absen_siswa'];
    $query=mysqli_query($conn,"select * from as_absen_siswa where id_absen_siswa='$id_absen_siswa' && nis='$_GET[nis]'");
    $querySiswa=mysqli_query($conn,"select nama_siswa from as_siswa where nis='$_GET[nis]'");
    ?>
                        <h1 align="center">Edit Data Absensi</h1>
                        <table border="0">
                            <?php
    while($row=mysqli_fetch_array($query)){
      $nis=$row['nis'];
      $keterangan=$row['keterangan'];
    ?>
                            <?php
    while($row1=mysqli_fetch_array($querySiswa)){
    ?>
                            <tr>
                                <td><input type="hidden" name="id_absen_siswa" value="<?php echo $row['id_absen_siswa'];?>" /></td>
                            </tr>



            <div class="box-body">
                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nis</label>

                  <div class="col-sm-10">
                    <input type="text" name="nis" class="form-control select2" id="input" placeholder="Enter nis " value="<?php echo $row['nis'];?>" disabled="disabled">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nama Siswa</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_siswa" class="form-control select2" id="input" placeholder="Enter Nama Siswa" value="<?php echo $row1['nama_siswa'];?>" disabled="disabled">
                  </div>
                </div>

            <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="text" name="tanggal" class="form-control select2" id="input" placeholder="Enter Nama Siswa" value="<?php echo $row['tanggal_masuk'];?>" disabled="disabled">
                  </div>
                </div>

          <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Keterangan</label>
             <div class="col-sm-10">
                <select name="keterangan" class="form-control select2">
                    <option value="" selected="selected">--Pilih Keterangan
                    <option value="Hadir" <?php if ($keterangan=="Hadir") { echo "selected=\"selected\""; } ?>>Hadir</option>
                    <option value="Sakit" <?php if ($keterangan=="Sakit") { echo "selected=\"selected\""; } ?>>Sakit</option>
                    <option value="Izin" <?php if ($keterangan=="Izin") { echo "selected=\"selected\""; } ?>>Izin</option>
                    <option value="Alpa" <?php if ($keterangan=="Alpa") { echo "selected=\"selected\""; } ?>>Alpa</option>
                    </select>
            </div>
          </div>

          <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Catatan Siswa</label>

                  <div class="col-sm-10">
                    <textarea class="form-control select2" name="catatan_siswa"><?php echo$row['catatan_siswa'] ?></textarea>
                  </div>
                </div>
          
          <div class="form-group">
                  <label for="input" class="col-sm-2 control-label"></label>
             <div class="col-sm-10">
<input type="submit" name="edit" class="btn btn-block btn-success" value="Update" />

            </div>
          </div>
          </div>
            


                            <?php } ?>
                            <?php } ?>
                        </table>
                    </form>

                    <?php

include "koneksi.php";
// $id_absensi = $_POST['id_absensi'];
if (isset($_POST['edit'])) {


$id_absen_siswa=$_GET['id_absen_siswa'];
$keterangan  = $_POST['keterangan'];
$catatan_siswa  = $_POST['catatan_siswa'];

$query=mysqli_query($conn,"UPDATE as_absen_siswa SET keterangan='$keterangan',catatan_siswa='$catatan_siswa' WHERE id_absen_siswa='$id_absen_siswa'");
{
      echo '<script language="javascript">
          alert ("Data Absensi Berhasil Diupdate");
          window.location="absen_cek_rekap_siswa.php";
          </script>';
          exit();
  }
}



   ?>


                    <!-- ============== -->



                    <!-- ./col -->
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
