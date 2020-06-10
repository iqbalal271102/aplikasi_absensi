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

<?php if ($_SESSION['akses']== 1){
?>
      <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="admin_data.php"><i class="fa fa-users"></i> Daftar Users</a></li>
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

<!--         <li class=" treeview">
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
               <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
        <li class="active">Users_Data</li>
      </ol>
    </section>
<br>
    <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title"> Daftar Users </span>
                <a class='btn btn-xs  btn-success' href="admin_tambah.php"><i class ='fa fa-plus'></i> Tambah User </a>
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body table-responsive no-padding">
            <div class="box-body ">

              <?php
              $sql="SELECT * FROM as_users   ";
              $sql_h=mysqli_query($conn,$sql);
              $no=1;
              $tbl= " ";
                 $tbl.= "<table id='example1' class='table table-bordered table-striped'>";
                 $tbl.= "<thead>";
                 $tbl.= "<tr>";
                 $tbl.= "<th '>No</th>";
                 $tbl.= "<th>Aksi</th>";
                 $tbl.= "<th '>Nama Users</th>";
                 $tbl.= "<th '>Username</th>";
                 $tbl.= "<th '>Password</th>";
                 $tbl.= "<th '>Akses</th>";
                 $tbl.= "<th '>Foto</th>";
                 $tbl.= "</tr>";
                 $tbl.= "</thead>";

                 // cek apakah $biodata nilai kosong atau tidak
                 if (mysqli_num_rows($sql_h) > 0) {
                  $nomor = 1;
                   // jika ada looping untuk membaca seluruh data
                   // dan tampilkan kedalam tabel
                   foreach ($sql_h as $key => $value) {
                     $tbl.= "<tr>";
                     $tbl.= "<td>".$nomor."</td>";
                     $tbl.= "<td>
                    <a class='btn btn-xs btn-primary' href='admin_detailta.php?id_users=".$value['id_users']."'><i class='fa fa-eye'></i></a>
                    <a class='btn btn-xs btn-warning' href='admin_edit.php?id_users=".$value['id_users']."'><i class='fa fa-edit'></i></a>
                    <a class='btn btn-xs btn-danger' href='javascript:hapus(".$value['id_users'].")'><i class='fa fa-trash'></i></a></td>";
                     $tbl.= "<td>".$value['userFullname']."</td>";
                     $tbl.= "<td>".$value['username']."</td>";
                     $tbl.= "<td>".$value['password']."</td>";

                     $data = $value['id_level'];

                    if ($data == 1) {
                      $data = "admin";
                    }if ($data==2) {
                     $data = "Guru";
                    }if ($data==3) {
                     $data = "Wali Kelas";
                    }if ($data==4) {
                     $data = "Orang Tua";
                    }if ($data==5) {
                     $data = "Siswa";
                    }


                     $tbl.= "<td>".$data."</td>";
                     $tbl.= "<td> <img src='img/".$value['foto']."' width='50px' height='50px'></td>";
                     $tbl.= "</tr>";
                $nomor++;


           }}
           $tbl.= "</table>";
           print($tbl);



            ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>



        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

    </section>
    <!-- /.content -->
  </div>

 <script language="JavaScript" type="text/javascript">
      function hapus(id_users){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'admin_hapus.php?id_users=' + id_users;
        }
      }
    </script>
  <!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>