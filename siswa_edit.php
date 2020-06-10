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
        <li class="active">Siswa_Edit</li>
      </ol>
    </section>
<br>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->


        <?php if (isset($_GET['id_siswa'])) {
          $id_siswa = $_GET['id_siswa'];
        }

        $Sql = "SELECT * FROM as_siswa where id_siswa = '$id_siswa'";
        $sql_s = mysqli_query($conn,$Sql);
        $data = mysqli_fetch_assoc($sql_s);
        // $jurusan =$data['id_jurusan'];
        $Kelas =$data['id_kelas'];

        ?>


<div class="col-md-12">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Siswa</h3>
            </div>



            <?php


// tambah guru

if (isset($_POST['Simpan'])) {

$nis=$_POST['nis'];
$nama=strtoupper($_POST['nama']);
// $Jurusan=$_POST['Jurusan'];
$kelas=$_POST['kelas'];
$jk=$_POST['jk'];
$alt=$_POST['alt'];
$Tanggal=$_POST['tgl'];
// $no=$_POST['no'];

$n_a=$_POST['nama_a'];
$p_a=$_POST['per_a'];
$n_i=$_POST['nama_i'];
$p_i=$_POST['Perkerjaan_ibu'];
$alt_ortu=$_POST['alt_ortu'];
$no_ortu=$_POST['no_ortu'];

$sql="UPDATE as_siswa SET
                          id_kelas = '$kelas',

                          nis ='$nis',
                          nama_siswa = '$nama',
                          jenis_kelamin = '$jk',
                          alamat = '$alt',
                          tanggal_lahir = '$Tanggal',
                          nomor_telpon = '',

                          nama_ayah       = '$n_a',
                          pekerjaan_ayah  = '$p_a',
                          nama_ibu        = '$n_i',
                          pekerjaan_ibu   ='$p_i',
                          alamat_ortu     = '$alt_ortu',
                          nomor_telpon_ortu     = '$no_ortu'

                           WHERE id_siswa = '$id_siswa'";
if (mysqli_query($conn,$sql)) {
    $error=true;
       if ($error){
              echo '
                <div class="form-group">
                <label for="input" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-success"></i> Data Berhasil Di Edit!</h4>

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
                    <input type="text" name="nis" value="<?php echo $data['nis'] ?>" class="form-control" id="input" placeholder="Enter Nis">
                  </div>
                </div>

                               <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" value="<?php echo $data['nama_siswa'] ?>" class="form-control" id="input" placeholder="Enter Nama Siswa">
                  </div>
                </div>

                <!--  <div class="form-group">
                <label class="col-sm-2 control-label" >Jurusan</label>
                <div class="col-sm-10">
                 <select name="Jurusan" class="form-control select2" style="width: 100%;" id="jurusan">

  <?php
  // buat ambil kategori
    $sql_s= "SELECT * FROM as_jurusan";
    $query_s = mysqli_query($conn,$sql_s);
    $hasil_s= mysqli_num_rows($query_s);
    if ($hasil_s>0) {
      foreach ($query_s as $key => $value) {
       if( $jurusan === $value['id_jurusan']){
        echo "<option selected='selected'  value='".$value['id_jurusan']."'>".$value['jurusan']."</option>";
        }else{
          echo "<option  value='".$value['id_jurusan']."'>".$value['jurusan']."</option>";
        }
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
                 <select name="kelas" class="form-control select2" style="width: 100%;" id="kelas">

  <?php


  // buat ambil kategori
    $sql_s= "SELECT * FROM as_kelas";
    $query_s = mysqli_query($conn,$sql_s);
    $hasil_s= mysqli_num_rows($query_s);
    if ($hasil_s>0) {
      foreach ($query_s as $key => $value) {
        if( $Kelas === $value['id_kelas']){
        echo "<option selected='selected'  value='".$value['id_kelas']."'>".$value['kelas']."</option>";
        }else{
          echo "<option  value='".$value['id_kelas']."'>".$value['kelas']."</option>";
        }
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
                  <?php
        $status = $data['jenis_kelamin'];
            if ($status == "L") {
                echo "<div class='col-sm-10'>";
                echo "<div class='form-check'>";
                echo "<input type='radio' name='jk' value='L'  required='' checked >LAKI-LAKI<br>";
                echo "<input type='radio' name='jk' value='p'  required=''>PEREMPUAN <br>";
                echo "</div>";
                echo "</div>";

            }else{
              echo "<div class='col-sm-10'>";
                echo "<div class='form-check'>";
                echo "<input type='radio' name='jk' value='L'  required='' >LAKI-LAKI <br>";
                echo "<input type='radio' name='jk' value='P'  required='' checked >PEREMPUAN <br>";
                echo "</div>";
                echo "</div>";
            }


         ?>
                  </div>
                </div>

                  <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alt" class="form-control" value="" id="input" placeholder="Enter Nama Alamat"><?php echo $data['alamat'] ?></textarea>
                  </div>
                </div>


                  <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Tanggal lahir</label>

                  <div class="col-sm-10">
                    <input type="date" name="tgl" value="<?php echo $data['tanggal_lahir'] ?>" class="form-control" id="input" placeholder="Enter">
                  </div>
                </div>

<!--                 <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">No Telpon</label>

                  <div class="col-sm-10">
                    <input type="text" name="no" value="<?php echo $data['nomor_telpon'] ?>" class="form-control" id="input" placeholder="Enter">
                  </div>
                </div> -->

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nama Ayah</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_a" value="<?php echo $data['nama_ayah'] ?>" class="form-control" id="input" placeholder="Enter Nama Ayah">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Pekerjaan Ayah</label>

                  <div class="col-sm-10">
                    <input type="text" name="per_a" value="<?php echo $data['pekerjaan_ayah'] ?>" class="form-control" id="input" placeholder="Enter Perkerjaan Ayah">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nama Ibu</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_i" value="<?php echo $data['nama_ibu'] ?>" class="form-control" id="input" placeholder="Enter Nama Ibu">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Pekerjaan Ibu</label>

                  <div class="col-sm-10">
                    <input type="text" name="Perkerjaan_ibu" value="<?php echo $data['pekerjaan_ibu'] ?>" class="form-control" id="input" placeholder="Enter Perkerjaan Ibu">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Alamat Orang Tua</label>

                  <div class="col-sm-10">
                    <textarea name="alt_ortu" class="form-control" id="input" placeholder="Enter Nama Alamat Orang Tua" ><?php echo $data['alamat_ortu'] ?></textarea>
                  </div>
                </div>

                                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Nomor Telpon Orang Tua</label>

                  <div class="col-sm-10">
                    <input type="text" name="no_ortu" value="<?php echo $data['nomor_telpon_ortu'] ?>" class="form-control" id="input" placeholder="Enter Perkerjaan Ibu">
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
