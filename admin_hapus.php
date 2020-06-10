<?php 	
include "koneksi.php";
if (isset($_GET['id_users'])) {
	$id_users =$_GET['id_users'];
}

$sql = " DELETE FROM as_users where id_users =".$id_users. "";
$sql_h = mysqli_query($conn,$sql);

if (mysqli_affected_rows($conn)) {
	
	header("location:admin_data.php");
}else{
	header('location:admin_data.php');
}




 ?>