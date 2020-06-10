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
                  <?php if ($_SESSION['akses']== 1){
?>
         <li class=""> <!-- class="active treeview menu-open" -->
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

<!--           <li class=" treeview">
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
            <li class=""><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
          </ul>
        </li>


      </ul><?php } ?>


      <?php if ($_SESSION['akses']== 2){
?>
         <li class=""> <!-- class="active treeview menu-open" -->
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
            <li ><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
          </ul>
        </li>


      </ul><?php } ?>

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
            <li class="active"><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
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
        <li><a href="#"><i class="fa fa-book"></i>Absen</a></li>
  <li class="active">Rekap Absen Harian</li>
      </ol>
    </section>
<br>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

<div class="col-md-12">
            <div class="box box-info">

<form action="#" class="posting" method="post">
	<table align="left" border="0">
	<h1 align="center">Cek Absensi </h1>
		<?php
		$pelajaran=$_POST['pelajaran']; 
    $jam_ngajar=$_POST['JAM'];
    $tanggal=$_POST['tanggal'];
		$kode_kelas=$_POST['kode_kelas'];
		?>

            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
              <div class="row">

                <div class="col-sm-2">
                  <select name="pelajaran" class="form-control select2" style="width: 100%;">


                          <?php
                          include "koneksi.php";
                          $id_users=$_SESSION['userid'];
                          $sql="SELECT * FROM as_pelajaran WHERE id_pelajaran = '$pelajaran' ";
                          $hasil_query=mysqli_query($conn,$sql);
                          while($baris=mysqli_fetch_object($hasil_query))
                          {
                            echo"<option value=$baris->id_pelajaran>$baris->pelajaran</option>";
                          }
                          ?>
             </select>
                </div>

                <div class="col-sm-2">
                  <select class="form-control select2" name="kode_kelas" >

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_kelas WHERE id_kelas = '$kode_kelas'";
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

                <div class="col-sm-2">

                  <select class="form-control select2" name="jam" >

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_jam_pelajaran where id_jam_pelajaran ='$jam_ngajar' ";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                    $jam ="";

                     foreach ($query_s as $key => $value) {
                  if ($value['nama_jam']==1) {
                      $jam ="Pagi";

                   }elseif ($value['nama_jam']==2) {
                     $jam ="Siang";

                   }elseif ($value['nama_jam']==3) {
                      $jam ="Jam Ketiga";

                   }
                       echo "<option selected='selected' value='".$value['id_jam_pelajaran']."'>".$jam."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }




                  ?>
                </select>


            </div>

            <div class="col-sm-2">

              <input type="date" name="tanggal" id="tanggal" disabled="disabled" value="<?php echo "$tanggal"?>"   class="form-control" placeholder="Tanggal">
            </div>

                </div>





              </div>
            </div>


	</table>

		<div class="box-body table-responsive no-padding">
      <div class="box-body">
      <table class="table table-bordered">
         <tr>
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Nis</strong></div></td>
		<td><div align="center"><strong>Nama Siswa</strong></div></td>
		<td><div align="center"><strong>Kelas</strong></div></td>
    <td><div align="center"><strong>Jenis Kelamin</strong></div></td>
		<td><div align="center"><strong>Keterangan Absen</strong></div></td>
    <td><div align="center"><strong>Catatan Siswa</strong></div></td>
		<td colspan="2"><div align="center"><strong>Aksi</strong></div></td>
		</tr>

		<?php
		include "koneksi.php";
		$no=0;
		  $tampil="SELECT * FROM as_absen_siswa join as_kelas on as_absen_siswa.id_kelas = as_kelas.id_kelas

               WHERE as_absen_siswa.id_kelas='$kode_kelas' and id_pelajaran = '$pelajaran' and id_jam_pelajaran = '$jam_ngajar' and tanggal_masuk='$tanggal'";
		  $qryTampil=mysqli_query($conn,$tampil);
		  while ($dataTampil=mysqli_fetch_array($qryTampil)) {
		  	$querySiswa = mysqli_query($conn,"select * from as_siswa where nis = '$dataTampil[nis]' && id_kelas = '$dataTampil[id_kelas]'");
		  	$dataSiswa = mysqli_fetch_array($querySiswa);
		 $no++;
		 ?>

		<tr bgcolor="#FFFFFF">
		<td align="center"><?php echo $no ; ?></td>
		<td align="center"><?php echo $dataTampil['nis']; ?></td>
		<td align="center"><?php echo $dataSiswa['nama_siswa']; ?></td>
		<td align="center"><?php echo $dataTampil['kelas']; ?></td>
    <td align="center"><?php echo $dataSiswa['jenis_kelamin']; ?></td>
		<td align="center"><?php echo $dataTampil['keterangan']; ?></td>
    <td align="center"><?php echo $dataTampil['catatan_siswa']; ?></td>
		<td><a class='btn btn-xs btn-warning' href="absen_cek_edit_siswa.php?id_absen_siswa=<?php echo $dataTampil['id_absen_siswa']."&nis=".$dataTampil['nis']; ?>"><i class='fa fa-edit'></i></a></div></td>
		</tr>
		<?php } ?>
		</table><br>
		<a href="absen_cetak_cek_absen_siswa.php?tanggal=<?php echo $tanggal ?>&kode_kelas=<?php echo $kode_kelas ?>&id_pelajaran=<?php echo $pelajaran ?>&jam=<?php echo $value['id_jam_pelajaran'] ?>"><input type="button" class="btn  btn-success" value="Download Excel" /></a><br>
</form>
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
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

   
  })
</script>
