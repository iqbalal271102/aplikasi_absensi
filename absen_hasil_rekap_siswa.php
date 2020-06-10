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
            <li ><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
            <li class="active"><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
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
				<li class="active">Rekap Absen Bulanan</li>
      </ol>
    </section>
<br>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">


<div class="col-md-12">
            <div class="box box-info">


<form action="" class="posting" method="post">
	<table align="left" border="0">
	<h2 align="center">Rekap Absensi Bulan</h2>
		<?php
		$Pelajaran=$_POST['Pelajaran'];
    // $kode_jurusan=$_POST['kode_jurusan'];
    $kode_kelas=$_POST['kode_kelas'];
		$bulan=$_POST['bulan'];
		$tahun=$_POST['tahun'];
		if (isset($_POST['cetak'])) {
			$kode_kelas=$_POST['kode_kelas'];
			$bulan=$_POST['bulan'];
			$tahun=$_POST['tahun'];
		}
		?>



            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
              <div class="row">

                <div class="col-sm-2">
                  <select class="form-control select2" name="Pelajaran"  >

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM  as_pelajaran  WHERE as_pelajaran.id_pelajaran = '$Pelajaran'";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                     foreach ($query_s as $key => $value) {
                      echo "<option  selected='selected' value='".$value['id_pelajaran']."'>".$value['pelajaran']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
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
                  <input type="text" name="bulan" id="bulan"   value="<?php echo "$bulan"?>" class="form-control" placeholder="Bulan" disabled="disabled">
                </div>
                <div class="col-sm-2">
                  <input type="text" name="tahun" id="tahun"   value="<?php echo "$tahun"?>"  class="form-control" placeholder="Tahun" disabled="disabled">
                </div>
              </div>
            </div>



	</table>
		<div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
		<tr bgcolor="">
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Nis</strong></div></td>
		<td><div align="center"><strong>Nama Siswa</strong></div></td>
		<!-- <td><div align="center"><strong>Jurusan</strong></div></td> -->
    <td><div align="center"><strong>Kelas</strong></div></td>
    <td><div align="center"><strong>Jenis Kelamin</strong></div></td>
		<td><div align="center"><strong>Hadir</strong></div></td>
		<td><div align="center"><strong>Sakit</strong></div></td>
		<td><div align="center"><strong>Izin</strong></div></td>
		<td><div align="center"><strong>Alpa</strong></div></td>
		</tr>

		<?php
		include "koneksi.php";
		$no=0;
		  $tampil="SELECT * FROM as_siswa join as_kelas on as_siswa.id_kelas=as_kelas.id_kelas  where as_siswa.id_kelas='$kode_kelas'  ";
		  $qryTampil=mysqli_query($conn,$tampil);
		  while ($dataTampil=mysqli_fetch_array($qryTampil)) {
		  	$sql1 = mysqli_query($conn,"select * from as_absen_siswa  where nis = $dataTampil[nis] && id_pelajaran = '$Pelajaran' && keterangan='Sakit' && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun'   ");
			 $sakit = mysqli_num_rows($sql1);
			  $sql2 =
			  $hadir = mysqli_num_rows(mysqli_query($conn,"select * from as_absen_siswa where nis = $dataTampil[nis] && id_pelajaran = '$Pelajaran'  &&  keterangan='Hadir' && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun'  "));
			  $sql3 =
			  $izin = mysqli_num_rows(mysqli_query($conn,"select * from as_absen_siswa  where nis = $dataTampil[nis] && id_pelajaran = '$Pelajaran' && keterangan='Izin' && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun'   "));
			  $sql4 =
			  $alpa = mysqli_num_rows(mysqli_query($conn,"select * from as_absen_siswa  where nis = $dataTampil[nis] && id_pelajaran = '$Pelajaran' && keterangan='Alpa' && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun'   "));


		  	$no++;
		 ?>

		<tr bgcolor="#FFFFFF">
		<td align="center"><?php echo $no ; ?></td>
		<td align="center"><?php echo $dataTampil['nis']; ?></td>
		<td align="center"><?php echo $dataTampil['nama_siswa']; ?></td>
		<!-- <td align="center"><?php echo $dataTampil['jurusan']; ?></td> -->
    <td align="center"><?php echo $dataTampil['kelas']; ?></td>
    <td align="center"><?php echo $dataTampil['jenis_kelamin']; ?></td>
		<td align="center"><?php echo $hadir ?></td>
		<td align="center"><?php echo $sakit ?></td>
		<td align="center"><?php echo $izin ?></td>
		<td align="center"><?php echo $alpa  ?></td>
		</tr>
		<?php } ?>
		</table><br>

            <div class="form-group">
                <div class="col-sm-3">
                   <a href="absen_cetak_rekap_siswa.php?kode_kelas=<?php echo $kode_kelas ?>&bulan=<?php echo $bulan ?>&tahun=<?php echo $tahun ?>&id_pelajaran=<?php echo $Pelajaran ?>"><input type="button" class="btn btn-block btn-success" value="Download Excel" /></a>

            </div></div>
	</form>






 <!-- ============== -->



        <!-- ./col -->
      </div><br>
    </div>


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
