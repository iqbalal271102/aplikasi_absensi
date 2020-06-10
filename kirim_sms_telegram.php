<?php
	
error_reporting(0);

// ==== BEGIN / variabel must be adjusted ====

$token = "bot"."1096779471:AAGoDJR-9X6UbHtfSiOBEx9wZeT44fKJjNM";
$proxy = "";
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_dbname = "absensi_getway";

// ==== END / variabel must be adjusted ====


$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_dbname);
if(! $conn ) {
  die('Could not connect: ' . mysqli_error($conn));
}




$updates = file_get_contents("php://input");
$updates = json_decode($updates,true);
$pesan = $updates[message][text];
// $pesan = $updates[message][phone];   //nomor hp 
$chat_id = $updates[message][chat][id];
$nama_depan = $updates[message][chat][first_name]; $nama_belakang = $updates[message][chat][last_name];


$pecah = explode("#", $pesan);

$keyword = $pecah[0];
$keyword1 = $pecah[1];
$keyword2 = $pecah[2];
$keyword3 = $pecah[3];
// $nama = $pecah[1];
// $alamat = $pecah[2];
// $hp = $pecah[3];


if(strtoupper($keyword)=='ABSEN' && strtoupper($keyword1) && strtoupper($keyword2) && strtoupper($keyword3)){

$nis = $pecah[1];
$tanggal_belum = $pecah[2];
$tanggal = date('Y-m-d', strtotime($tanggal_belum));//04-11-2019
$waktu = $pecah[3];



// cari keterangan kalkulus berdasar NIM
     $query2 = "SELECT * FROM `as_absen_siswa` inner join as_kelas on as_absen_siswa.id_kelas=as_kelas.id_kelas where as_absen_siswa.nis ='$nis' and as_absen_siswa.tanggal_masuk ='$tanggal_belum' and as_absen_siswa.id_jam_pelajaran ='$waktu'";
     $hasil_keterangan = mysqli_query($conn,$query2);

     $data2 = mysqli_fetch_array($hasil_keterangan);
     $nilai_nama = $data2['nama_siswa'];
     $nilai_kelas = $data2['kelas'];


        // $nilai_keterangan = "hadir";
        $nilai_keterangan = $data2['keterangan'];
        $nilai_tanggal_belum = $data2['tanggal_masuk'];
        // $nilai_tanggal = date('d F Y', strtotime($nilai_tanggal_belum));
     //    echo "<br>";echo "<br>";
     // echo $nilai_nama;
     // echo "<br>";
     // echo $nilai_kelas;
     // echo "<br>";
     // echo $nilai_keterangan;
     // echo "<br>";
     // echo $nilai_tanggal;

     if (mysqli_num_rows($hasil_keterangan))
     {
        // bila nama ditemukan
        $data2 = mysqli_fetch_array($hasil_keterangan);
        // $nilai_keterangan = $data2['keterangan'];

        // $pesan_balik = "okoko";
        // $pesan_balik = "Ananda $nilai_nama Kelas  $nilai_kelas  Keterangan Absensinya pada pagi ini $nilai_keterangan Pada Tanggal $nilai_tanggal_belum";

        if ($waktu == 1 ) {
            $pesan_balik = "Ananda  $nilai_nama  Kelas  $nilai_kelas  Keterangan Absensinya pada pagi ini '$nilai_keterangan' Pada Tanggal $nilai_tanggal_belum ";

        }elseif ($waktu == 2 ) {
            
            $pesan_balik = "Ananda  $nilai_nama  Kelas  $nilai_kelas  Keterangan Absensinya pada siang ini  '$nilai_keterangan' Pada Tanggal $nilai_tanggal_belum ";
        }

        }else{
        	$pesan_balik = "Ananda  Belum Mengabsen di sekolah";
        }
        
     }elseif (strtoupper($keyword)=='/PANDUAN' or strtoupper($keyword)=='/PANDUAN@IQBAL27_BOT') {  // <==== BUKU PANDUAN =====>
    
        $pesan_balik = "Assalamu'alikum wr.wb kami dari sistem E-ABSENSI SISWA SMK N 1 LAHAT yang akan memberikan pelayanan kepada Bapak/Ibu yang ingin mengetahui absensi kehadiran anak dari Bapak/Ibu yang berada di SMK NEGERI 1 LAHAT berikut panduan yang bisa Bapak/Ibu akses melalui sistem ini, silahkan klik/pilih nomor sesuai dengan keinginan Bapak/Ibu : 1./absen , 2./infosmk ";

    }elseif (strtoupper($keyword)=='/ABSEN') {  // <==== BUKU PANDUAN =====>
    
        $pesan_balik = "Format untuk memperoleh info ABSEN SISWA sebagai berikut : ABSEN%23[NIS]%23[TANGGAL(thn-bln-hr)]%23[KD_WAKTU KETERANGAN] Contoh 0514689%232020-01-18%23 1(PAGI) atau 2(SIANG) ";

    }elseif (strtoupper($keyword)=='/INFOSMK') {
    
        $pesan_balik = " http://smkn1lahat.sch.id/ ";

    }


    else $pesan_balik = "Mohon maaf format yang Anda kirim salah, silahkan klik /panduan ini ";





$url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan_balik";

echo $url;

$ch = curl_init();
	
if($proxy==""){
	$optArray = array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_CAINFO => "C:\cacert.pem"	
	);
}
else{ 
	$optArray = array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_PROXY => "$proxy",
		CURLOPT_CAINFO => "C:\cacert.pem"	
	);	
}
	
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
	
$err = curl_error($ch);
curl_close($ch);	
	
if($err<>"") echo "Error: $err";
else echo "Pesan Terkirim";
?>