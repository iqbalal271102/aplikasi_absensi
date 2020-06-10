<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID Provinsi yang dikirim via ajax post
$id_kelas = $_POST['kelas'];

// Buat query untuk menampilkan data kota dengan provinsi tertentu (sesuai yang dipilih user pada form)
$sql = mysqli_query($conn, "SELECT * FROM as_siswa WHERE id_kelas='".$id_kelas."' ORDER BY kelas");

// Buat variabel untuk menampung tag-tag option nya
// Set defaultnya dengan tag option Pilih

while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$html = "<option value='".$data['id_kelas']."'>".$data['kelas']."</option>"; // Tambahkan tag option ke variabel $html
}

$callback = array('data_siswa'=>$html); // Masukan variabel html tadi ke dalam array $callback dengan index array : data_kota

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>
