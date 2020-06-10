<?php include "header.php"; date_default_timezone_set('Asia/Jakarta');?>
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

        <li class=" treeview">
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
            <i class="fa fa-photo"></i>
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
          <li class="active"><a href="absen_siswa.php">
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
            <li class="active"><a href="absen_cek_rekap_siswa.php"><i class="fa fa-book"></i> Absen Cek Rekap Siswa</a></li>
            <li ><a href="absen_rekap_siswa.php"><i class="fa fa-book"></i>Rekap Absen Bulanan Siswa</a></li>
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
          <li class="active"><a href="absen_siswa.php">
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
         <li class=""> <!-- class="active treeview menu-open" -->
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
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
              <li><a href="#"><i class="fa fa-user"></i> Absen</a></li>
        <li class="active">Absen_siswa</li>
      </ol>
    </section>
<br>
    <!-- Main content ============================================================================================================ -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">



<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="glyphicon glyphicon-check"></i> Absen Siswa .
            <small class="pull-right"><?php  ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">


<form action="#" method="POST">


      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><!-- Select2 --></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
              <label></label>
                <?php  $tanggal   = date('Y-m-d');
                 ?>
                <input type="date" name="tanggal"  class="form-control " value="<?php echo $tanggal ?>" > 
              </div>
            </div>
            <div class="col-md-2">

              <div class="form-group">
                <label></label>
                <select name="id_pelajaran" class="form-control select2" style="width: 100%;">
                  <?php
                 include "koneksi.php";
                  // buat ambil kategori
                 $id_users=$_SESSION['userid'];
                    $sql_s= "SELECT * FROM as_pelajaran JOIN as_guru on as_pelajaran.id_pelajaran=as_guru.id_pelajaran JOIN as_users on as_users.id_guru=as_guru.id_guru WHERE as_users.id_users ='$id_users' ";
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


            </div>
            <!-- /.col -->


          <div class="col-md-3">
              <div class="form-group">
              <label></label>
              <select class="form-control select2" name="jam_ngajar" >

                  <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_jam_pelajaran";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                    $jam ="";


                        echo "<option   value='0'>"."Waktu Mengajar"."</option>";
                     foreach ($query_s as $key => $value) {
                  if ($value['nama_jam']=='1') {
                      $jam ="Pagi";

                   }elseif ($value['nama_jam']=='2') {
                     $jam ="Siang";

                   }
                       echo "<option   value='".$value['id_jam_pelajaran']."'>".$jam."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }




                  ?>
                </select>

              </div>
          </div>
            

          <!--   <div class="col-md-2">
              <div class="form-group">
              <label></label>
              <select class="form-control select2" name="id_jurusan"  >

                      <?php
                      include "koneksi.php";
                       // buat ambil kategori
                         $sql_s= "SELECT * FROM as_jurusan";
                         $query_s = mysqli_query($conn,$sql_s);
                         $hasil_s= mysqli_num_rows($query_s);
                        if ($hasil_s>0) {
                         echo "<option >"."Pilih jurusan"."</option>";
                          foreach ($query_s as $key => $value) {
                            echo "<option   value='".$value['id_jurusan']."'>".$value['jurusan']."</option>";
                           }
                        }else{
                            echo "<option value='0'> data tidak ada</option>";
                        }
                       ?>
                </select>

              </div>
          </div> -->

            <div class="col-md-2">
              <div class="form-group">
              <label></label>
              <select class="form-control select2" name="id_kelas"  onchange="showUser(this.value)">
                <option value="">Pilih Kelas</option>
                <?php 
                $sql = "SELECT * FROM as_kelas ";
                $sq = mysqli_query($conn,$sql);
                foreach ($sq as $key => $data) {
                  echo '
                    "<option value="'.$data["id_kelas"].'">'.$data["kelas"].'</option>"

                  ';
                }

                 ?>
                
                

                </select>

              </div>
          </div>

            <div class="col-md-2">
              <div class="form-group">
                <label></label>
              </div>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
      </div>




        </div>

        <div class="col-xs-12">
              <div id="txtHint">
              <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title"> Daftar Absen Siswa </span>

              </div>

            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">


          <div class="box-body table-responsive no-padding">
            <div class="box-body ">

              <?php

              $tbl= " ";
                 $tbl.= "<table id='example1' class='table table-bordered table-striped' id='tampil'>";
                 $tbl.= "<thead>";
                 $tbl.= "<tr>";
                 $tbl.= "<th '>No</th>";
                 $tbl.= "<th>Nis</th>";
                 $tbl.= "<th '>Nama Siswa</th>";
                 $tbl.= "<th '>Kelas</th>";
                 $tbl.= "<th '>Jk</th>";
                 $tbl.= "<th '>Keterangan</th>";
                 $tbl.= "</tr>";
                 $tbl.= "</thead>";

               if (isset($_POST['tampil'])) {
                $id_kelas = $_POST['id_kelas'];
                $sql=" SELECT * FROM as_siswa as s join as_kelas as k on s.id_kelas=k.id_kelas  where s.id_kelas= '$id_kelas'  ";
                $sql_h=mysqli_query($conn,$sql);
              $no=1;
                 if (mysqli_num_rows($sql_h) > 0) {
                  $nomor = 1;
                   // jika ada looping untuk membaca seluruh data
                   // dan tampilkan kedalam tabel
                   foreach ($sql_h as $key => $value) {
                     $tbl.= "<tr>";
                     $tbl.= "<td>".$nomor."</td>";
                     $tbl.= "<td style='width:22px;'>"."<input  type='text' class='c' name='nis[]' value=".$value['nis'].">"."</td>";
                     $tbl.= "<td>".$value['nama_siswa']."</td>";
                     $tbl.= "<td>".$value['kelas']."</td>";
                     $tbl.= "<td>".$value['jenis_kelamin']."</td>";
                     $tbl.= "<td>

                        Hadir<input type='radio' class='flat' name='nama_radio[$nomor]' checked='checked' value='Hadir'/>
                        Izin<input type='radio' class='flat' name='nama_radio[$nomor]' value='Izin'/>
                        Alpha<input type='radio' class='flat' name='nama_radio[$nomor]' value='Alpha'/>
                        Dispen<input type='radio' class='flat' name='nama_radio[$nomor]' value='Dispen'/>

                        </td>";
                      $tbl.= "<td>"."<textarea name='catatan_siswa[]'>  </textarea>"."</td>";
                     $tbl.= "</tr>";
                $nomor++;


           }}
           $tbl.= "</table>"; 
           
           print($tbl);

           ?>

           <style type="text/css">
            .c {
              border:none;
              display: disabled;
              outline: none;
              background:transparent;
            }
             
           </style>

           <div class="col-md-3">
                  <div class="form-group">
                <label></label>
                  <input type="submit" name="simpan" value="simpan" class="btn btn-block btn-success">
                </div>
            </div>

            </div>
            <?php  } ?>
            
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
        </div>


            <!-- /.box-body -->
          </div>
</form>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div></section></div></section></div>

    </section>

<?php
    if (isset($_POST['simpan'])) {
      $id_pelajaran   = $_POST['id_pelajaran'];
      $id_kelas       = $_POST['id_kelas'];
      $jam_ngajar   = $_POST['jam_ngajar'];
      $tanggal        = $_POST['tanggal'];
    // Koneksi ke database
    include 'koneksi.php';
  //PERINTAH MENGECEK AGAR TIDAK TERDAPAT USER YANG SAMA

  $cek_absensi=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM as_absen_siswa WHERE id_kelas = '$id_kelas' and id_pelajaran='$id_pelajaran' and id_jam_pelajaran='$jam_ngajar' and tanggal_masuk ='$tanggal'"));
  if ($cek_absensi > 0) {
      echo '<script language="javascript">
          alert ("Data Absensi Sudah Ada");
          window.location="absen_siswa.php";
          </script>';
          exit();
  }else{
    // Ambil variabel yang dikirim dari form
    $nis          = $_POST['nis'];
  $id_pelajaran   = $_POST['id_pelajaran'];
  $nama           = $_POST['nama'];
  $kode_kelas     = $_POST['id_kelas'];
  // $id_jurusan     = $_POST['id_jurusan'];
  $jam_ngajar     = $_POST['jam_ngajar'];
  $tanggal        = $_POST['tanggal'];
  $nama_radio     = $_POST['nama_radio'];

  $catatan_siswa  = $_POST['catatan_siswa'];
  $jumlah_dipilih = count($nis);

    // Query Input Data
  for($x=0; $x<$jumlah_dipilih; $x++){

      mysqli_query($conn,"INSERT INTO as_absen_siswa values (null,'$nis[$x]','$nama[$x]','$id_pelajaran','$kode_kelas','$nama_radio[$x]','$catatan_siswa[$x]','$jam_ngajar','$tanggal',0)");

    }

      mysqli_query($conn,"INSERT INTO as_notifikasi (id_kelas,id_jam_pelajaran,id_pelajaran,tanggal,comment_status) values ('$kode_kelas','$jam_ngajar','$id_pelajaran','$tanggal',0)");
    // Apabila query untuk menginput data benar
        {
      echo '<script language="javascript">
          alert ("Data Absensi Berhasil Diinput");
          window.location="absen_siswa.php";
          </script>';
          exit();
  }
  }
    }

    ?>



            <!-- /.box-body ====================================================================================================== -->



<?php include 'footer.php'; ?>


<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajax/absen.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>


  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Load librari/plugin jquery nya -->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  
  <!-- Load File javascript config.js -->
  <script src="js/tes.js" type="text/javascript"></script>
  <!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">

  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

   
  })
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

