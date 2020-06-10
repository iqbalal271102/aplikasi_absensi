<?php 
include "koneksi.php";

if (isset($_GET['id_jurusan'])) {
	$id_jurusan = $_GET['id_jurusan'];
}

$sql = "DELETE FROM as_jurusan Where id_jurusan = '$id_jurusan' ";
$s   = mysqli_query ($conn,$sql);

if (mysqli_affected_rows($conn)) {
  	
  	header("location:jurusan_data.php");
  } else{
  	header("location:jurusan_data.php");
  }


 ?>