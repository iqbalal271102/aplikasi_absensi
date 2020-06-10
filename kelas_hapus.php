<?php 
include "koneksi.php";

if (isset($_GET['id_kelas'])) {
	$id_kelas = $_GET['id_kelas'];
}

$sql = "DELETE FROM as_kelas Where id_kelas = '$id_kelas' ";
$s   = mysqli_query ($conn,$sql);

if (mysqli_affected_rows($conn)) {
  	
  	header("location:kelas_data.php");
  } else{
  	header("location:kelas_data.php");
  }


 ?>