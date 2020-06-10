<?php 
include "koneksi.php";

if (isset($_GET['id_wali_kelas'])) {
	
	$id_wali_kelas = $_GET['id_wali_kelas'];
}

$sql = "DELETE FROM as_wali_kelas where id_wali_kelas = '$id_wali_kelas'   ";
$sqli = "DELETE FROM as_users 	  where id_wali_kelas = '$id_wali_kelas'   ";
$q	= mysqli_query( $conn,$sql);
$qi	= mysqli_query( $conn,$sqli);

if (mysqli_affected_rows($conn)) {
	#
	header("location:wali_data.php");
}else{
	header("location:wali_data.php");
}


 ?>