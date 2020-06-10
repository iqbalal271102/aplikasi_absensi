<?php 


// <----------  ini sudah tapi belum dari absen siswa nya ------->
include "koneksi.php";
$pages = 'outbox_autoreplay.php';
$secon = 2 ;
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
  $pecah = explode("#", $pesan);

  $keyword = $pecah['0'];
  $keyword1 = $pecah['1'];
  $keyword2 = $pecah['2'];
  $keyword3 = $pecah['3'];


  // echo $keyword;


if (strtoupper($keyword)=='ABSEN' && strtoupper($keyword1) && strtoupper($keyword2) && strtoupper($keyword3)) {
  // KIRIM sms berhasil masuk;


  $nis = $pecah['1'];
  $waktu = $pecah['2'];



  $tanggal_belum = $pecah['3']; //2019-11-04
  $tanggal = date('Y-m-d', strtotime($tanggal_belum));//04-11-2019


  // echo "<br>"; echo $kelas;echo "<br>"; echo $tanggal;
  $sqll = "SELECT * FROM as_siswa where nis ='$nis' ";
  $sql_cek = mysqli_query($conn,$sqll);
  $assoc = mysqli_fetch_assoc($sql_cek);
  $nomor = $assoc['nomor_telpon_ortu'];
  echo $nomor;
  
// $nomor = '+6282282175993';


// if ($nomor == $nohp) {

   // cari keterangan kalkulus berdasar NIM
     $query2 = "SELECT * FROM `as_absen_siswa` JOIN as_jam_pelajaran ON as_absen_siswa.id_jam_pelajaran = as_jam_pelajaran.id_jam_pelajaran JOIN as_kelas on as_absen_siswa.id_kelas = as_kelas.id_kelas 
     where nis ='$nis' and as_absen_siswa.id_jam_pelajaran ='$waktu'  and tanggal_masuk='$tanggal_belum'  ";
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


          //cek bila data keterangan tidak ditemukan
     if (mysqli_num_rows($hasil_keterangan)) ;
     {
        // bila nama ditemukan
        $data2 = mysqli_fetch_array($hasil_keterangan);
        // $nilai_keterangan = $data2['keterangan'];
        if ($waktu == 1) {
          $reply = "Ananda ".$nilai_nama." Kelas ".$nilai_kelas." "." Keterangan Absensinya pada pagi ini ".$nilai_keterangan." "." Pada Tanggal ".$nilai_tanggal;
        }if ($waktu == 2) {
          $reply = "Ananda ".$nilai_nama." Kelas ".$nilai_kelas." "." Keterangan Absensinya pada Siang ini ".$nilai_keterangan." "." Pada Tanggal ".$nilai_tanggal;
        }
        
     }

     

  

$sql_phones = mysqli_query($conn,"SELECT ID FROM phones");
  $sql_ID = mysqli_fetch_assoc($sql_phones);
  $ID = $sql_ID['ID'];

// query outbox
  $kirim = mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID)
  VALUES ('$nohp', '$ID','$reply', 'Gammu .128.90')");

    $ubah = mysqli_query($conn,"UPDATE inbox SET Processed ='true' where ID = '$id' ");




}else{

  $sql_phones = mysqli_query($conn,"SELECT ID FROM phones");
  $sql_ID = mysqli_fetch_assoc($sql_phones);
  $ID = $sql_ID['ID'];
  $k = '< spasi >kd waktu 1 pagi 2 siang';

// query outbox
  $kirim = mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID)
  VALUES ('$nohp', '$ID','format yang anda masukan salah silahkan ikuti format berikut:Absen<spasi>Nis Siswa<spasi>kd_wkt 1:p 2:s<spasi>tanggal mengunakan format (tahun-bulan-hari)', 'Gammu .128.90')");

    $ubah = mysqli_query($conn,"UPDATE inbox SET Processed ='true' where ID = '$id' ");

}
  



}

die();




 ?>