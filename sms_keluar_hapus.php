<?php 
include "koneksi.php";

if (isset($_GET['ID'])) {
	$ID = $_GET['ID'];
}

$sql = "DELETE FROM outbox Where ID = '$ID' ";
$s   = mysqli_query ($conn,$sql);

if (mysqli_affected_rows($conn)) {
  	
  	header("location:sms_keluar.php");
  } else{
  	header("location:sms_keluar.php");
  }


 ?>

