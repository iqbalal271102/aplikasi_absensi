<?php 
include 'koneksi.php';
if (isset($_GET['id_siswa'])) {
	$id_siswa = $_GET['id_siswa'];



}

$sql = "DELETE FROM as_siswa WHERE id_siswa = '$id_siswa'  ";
	$sql_l = mysqli_query($conn,$sql);

	if (mysqli_affected_rows($conn)) {
		header("location:siswa_data.php");
	}else{
		header("location:siswa_data.php");
	}

 ?>