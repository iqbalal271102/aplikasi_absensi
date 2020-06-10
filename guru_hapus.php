<?php 
include "koneksi.php";
if (isset($_GET['id_guru'])) {
	$id_guru = $_GET['id_guru'];
}

$sql ="DELETE FROM as_guru 		  WHERE id_guru = '$id_guru'";
$sqli = "DELETE FROM as_users 	  WHERE id_guru = '$id_guru'   ";
	$sql_h = mysqli_query ($conn,$sql);
	$sql_i = mysqli_query ($conn,$sqli);
if (mysqli_affected_rows($sql_h)) {
	header('location:guru_data.php');
}else{
	header('location:guru_data.php');
}


 ?>