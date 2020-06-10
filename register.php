<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMK 1 BISA | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>REGI</b>STER</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">sihlakan login/p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Enter name">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Enter Username">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Enter password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->













<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>















<?php 


// <----------  ini sudah tapi belum dari absen siswa nya ------->
include "koneksi.php";
$pages = 'outbox_autoreplay.php';
$secon = 10 ;
header("Refresh:$secon;url=$pages");



  $inbox = "SELECT * FROM inbox WHERE Processed = 'false' ";
  $inbox_m = mysqli_query($conn,$inbox);





  foreach ($inbox_m as $key => $data){

  // membaca ID SMS
  $id = $data['ID'];

  // membaca no pengirim
  $nohp = $data['SenderNumber'];

  // membaca pesan SMS dan mengubahnya menjadi kapital
  $pesan = strtoupper($data['TextDecoded']);

  // proses parsing 

  // memecah pesan berdasarkan sepasi
  $pecah = explode(" ", $pesan);

  $keyword = $pecah['0'];

  // echo $keyword;


if (strtoupper($keyword)=='ABSEN') {
  // KIRIM sms berhasil masuk;
  
  $nis = $pecah['1'];
  // $kelas = $pecah['2'];
  $tanggal_belum = $pecah['2']; //2019-11-04
  $tanggal = date('Y-m-d', strtotime($tanggal_belum));//04-11-2019


  // echo "<br>"; echo $kelas;echo "<br>"; echo $tanggal;
    
  //   $sql_cek_nomor = "SELECT * FROM inbox as i JOIN  as_siswa as a_s on i.SenderNumber = a_s.nomor_telpon_ortu JOIN as_absen_siswa as abs on a_s.nis=abs.nis WHERE i.SenderNumber = +6282282175993 and a_s.nomor_telpon_ortu= +6282282175993 and abs.nis=17060050 and i.Processed = 'false'  ";
  //   $query_cek_nomor = mysqli_query($conn,$sql_cek_nomor);
  //   $assoc = mysqli_fetch_assoc($query_cek_nomor);
  //  echo $nomor = $assoc['SenderNumber'];
  //   echo $nomor2 = $assoc['nomor_telpon_ortu'];

  // if ($nomor == $nomor2) {
   
    // cari keterangan kalkulus berdasar NIM
     $query2 = "SELECT * FROM `as_absen_siswa` JOIN as_kelas on as_absen_siswa.id_kelas = as_kelas.id_kelas 
     where nis ='$nis'  and tanggal_masuk='$tanggal_belum'  ";
     $hasil_keterangan = mysqli_query($conn,$query2);

     $data2 = mysqli_fetch_array($hasil_keterangan);
     $nilai_nama = $data2['nama_siswa'];
     $nilai_kelas = $data2['kelas'];
        $nilai_keterangan = $data2['keterangan'];
        $nilai_tanggal_belum = $data2['tanggal_masuk'];
        $nilai_tanggal = date('d F Y', strtotime($nilai_tanggal_belum));
        echo "<br>";echo "<br>";
     echo $nilai_nama;
     echo "<br>";
     echo $nilai_kelas;
     echo "<br>";
     echo $nilai_keterangan;
     echo "<br>";
     echo $nilai_tanggal;
     echo "<br>";


          //cek bila data keterangan tidak ditemukan
     if (mysqli_num_rows($hasil_keterangan)) ;
     {
        // bila nama ditemukan
        $data2 = mysqli_fetch_array($hasil_keterangan);
        // $nilai_keterangan = $data2['keterangan'];

      echo  $reply = " ananda ".$nilai_nama." Kelas ".$nilai_kelas." "." Keterangan Absensinya ".$nilai_keterangan." "." Pada Tanggal ".$nilai_tanggal;
     }

  

// $sql_phones = mysqli_query($conn,"SELECT ID FROM phones");
//   $sql_ID = mysqli_fetch_assoc($sql_phones);
//   $ID = $sql_ID['ID'];

// // query outbox
//   $kirim = mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID)
//   VALUES ('$nohp', '$ID','$reply', 'Gammu .128.90')");

//     $ubah = mysqli_query($conn,"UPDATE inbox SET Processed ='true' where ID = '$id' ");


// }else{
//   echo "tidak sama";
// }


  }
   

// else{
//   $sql_phones = mysqli_query($conn,"SELECT ID FROM phones");
//   $sql_ID = mysqli_fetch_assoc($sql_phones);
//   $ID = $sql_ID['ID'];

//   $kirim_gagal = mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID)
//   VALUES ('$nohp', '$ID', 'Keterangan <sepasi> nama siswa <sepasi> kelas siswa contoh (Kelas.jurusan) <sepasi> tanggal dengan mengunakan format (tahun-bulan-hari)  ', 'Gammu .128.90')");

//   $ubah = mysqli_query($conn,"UPDATE inbox SET Processed ='true' ");
// }
//ubah status proses menjadi true;





}die();




/*

SELECT * FROM `as_absen_siswa` JOIN as_siswa on as_absen_siswa.nis = as_siswa.nis JOIN as_kelas on as_absen_siswa.id_kelas = as_kelas.id_kelas
where as_absen_siswa.nis =17060050  and tanggal_masuk='2019-11-07' and as_siswa.nomor_telpon_ortu =+6282282175993

*/



 ?>
