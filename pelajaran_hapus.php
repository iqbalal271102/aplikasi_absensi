<?php 
include "koneksi.php";

if (isset($_GET['id_pelajaran'])) {
	$id_pelajaran = $_GET['id_pelajaran'];
}


$sql= "DELETE FROM as_pelajaran WHERE id_pelajaran ='$id_pelajaran' ";
$sql_h = mysqli_query($conn,$sql);

if (mysqli_affected_rows($conn)) {
	header("location:pelajaran_data.php");
}else{
	header("location:pelajaran_data.php");
}

 ?>