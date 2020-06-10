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



              <li class=" active treeview">
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
        <!-- ./col -->


<div class="col-md-12">
            <div class="box box-info">

<form action="absen_hasil_rekap_siswa.php" class="posting" method="post">

  <h2 align="center">Rekap Absensi Bulanan</h2><br><br>

  <?php if ($_SESSION['akses']== 1){?> <div class="form-group">
                  <label class="col-sm-1 control-label" >Pelajaran</label>
                  
                  <div class="col-sm-11">
                   <select name="Pelajaran" class="form-control select2" style="width: 100%;">

                           <?php
                           include "koneksi.php";
                           $id_users=$_SESSION['userid'];
                           $sqll="SELECT * FROM as_pelajaran ";
                           $hasil_queryy=mysqli_query($conn,$sqll);
                           while($baris=mysqli_fetch_object($hasil_queryy))
                           {
                             echo"<option value=$baris->id_pelajaran>$baris->pelajaran</option>";
                           }
                           ?>
              </select>
              </div><br></div><br><?php } ?>

            <?php if ($_SESSION['akses']== 2){?>    
              <div class="form-group">
                <label class="col-sm-1 control-label" >Pelajaran</label>
                
                <div class="col-sm-11">
                 <select name="Pelajaran" class="form-control select2" style="width: 100%;">

                         <?php
                         include "koneksi.php";
                         $id_users=$_SESSION['userid'];
                         $sqll="SELECT * FROM as_pelajaran JOIN as_guru on as_pelajaran.id_pelajaran=as_guru.id_pelajaran JOIN as_users on as_users.id_guru=as_guru.id_guru WHERE as_users.id_users ='$id_users' ";
                         $hasil_queryy=mysqli_query($conn,$sqll);
                         while($baris=mysqli_fetch_object($hasil_queryy))
                         {
                           echo"<option value=$baris->id_pelajaran>$baris->pelajaran</option>";
                         }
                         ?>
            </select>
            </div><br></div> <br><?php } ?>
<?php if ($_SESSION['akses']== 3){?> 
                  <div class="form-group">
                <label class="col-sm-1 control-label" >Pelajaran</label>
                <div class="col-sm-11">
                 <select name="Pelajaran" class="form-control select2" style="width: 100%;">

                         <?php
                         include "koneksi.php";
                         $id_users=$_SESSION['userid'];
                         $sqll="SELECT * FROM as_pelajaran ";
                         $hasil_queryy=mysqli_query($conn,$sqll);
                         while($baris=mysqli_fetch_object($hasil_queryy))
                         {
                           echo"<option value=$baris->id_pelajaran>$baris->pelajaran</option>";
                         }
                         ?>
            </select>
            </div><br></div><br><?php } ?>

              <?php if ($_SESSION['akses']== 1){?>

            <div class="form-group">
                <label class="col-sm-1 control-label" >Kelas</label>
                <div class="col-sm-11">
                 <select name="kode_kelas" class="form-control select2" style="width: 100%;" id="kelas">

                <option value="" selected="selected">--Pilih Kelas
                         <?php
                         include "koneksi.php";
                         $sql="SELECT * FROM as_kelas";
                         $hasil_query=mysqli_query($conn,$sql);
                         while($baris=mysqli_fetch_object($hasil_query))
                         {
                           echo"<option value=$baris->id_kelas>$baris->kelas</option>";
                         }
                         ?>
            </select>
            </div><br></div> <br>


             <?php } ?>

           <?php if ($_SESSION['akses']== 2){?>

            <div class="form-group">
                <label class="col-sm-1 control-label" >Kelas</label>
                <div class="col-sm-11">
                 <select name="kode_kelas" class="form-control select2" style="width: 100%;" id="kelas">

                <option value="" selected="selected">--Pilih Kelas
                         <?php
                         include "koneksi.php";
                         $sql="SELECT * FROM as_kelas";
                         $hasil_query=mysqli_query($conn,$sql);
                         while($baris=mysqli_fetch_object($hasil_query))
                         {
                           echo"<option value=$baris->id_kelas>$baris->kelas</option>";
                         }
                         ?>
            </select>
            </div><br></div>


             <br> <?php } ?>


                            <?php if ($_SESSION['akses']== 3){?>




                <div class="form-group">
                <label class="col-sm-1 control-label" >Kelas</label>
                <div class="col-sm-11">
                      <select class="form-control select2" name="kode_kelas"  id="kelas">

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
            </div><br></div><br><?php } ?>


                <div class="form-group">
                <label class="col-sm-1 control-label" >Bulan </label>
                <div class="col-sm-11">
                 <select name="bulan" class="form-control select2" style="width: 100%;">

                <option value="" selected="selected">--Pilih Bulan
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>



            </select>
            </div><br></div><br>

            <div class="form-group">
                <label class="col-sm-1 control-label" >Tahun </label>
                <div class="col-sm-11">
                 <select name="tahun" class="form-control select2" style="width: 100%;">

                <option value="" selected="selected">--Pilih Tahun
                  
                  <?php
                  $mulai= date('Y');
                 for($i = $mulai;$i<$mulai + 10;$i++){
                   $sel = $i == date('Y');
                   echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                 }
                 ?>



            </select>
            </div><br></div><br>

<!--                 <div class="form-group">
                <label class="col-sm-1 control-label" ></label>
                <div class="col-sm-11">
                 <select name="tahun" class="form-control select2" ">

                <option value="" selected="selected">--Pilih 


            </select>
            </div><br></div><br> -->


            <div class="form-group">
                <label class="col-sm-2 control-label" ></label>
                <div class="col-sm-8">
                    <td><input type="submit" class="btn btn-block btn-success" value="Tampilkan Absensi" />

            </div><br></div><br>


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
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

   
  })
</script>