<?php 



date_default_timezone_set('Asia/Jakarta');
session_start();

if ($_SESSION['akses']== 1){
//fetch.php;
if(isset($_POST["view"]))
{
 include("connect.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE as_notifikasi SET comment_status=1 WHERE comment_status=0  ";
  mysqli_query($connect, $update_query);
 }
 $tgl = date("Y-m-d");
 $query = "SELECT * FROM as_notifikasi as an join as_kelas as ak on an.id_kelas = ak.id_kelas  JOIN as_pelajaran as ap on an.id_pelajaran = ap.id_pelajaran join as_jam_pelajaran as ajp on an.id_jam_pelajaran = ajp.id_jam_pelajaran where tanggal ='$tgl'  ORDER BY an.id_notifikasi DESC LIMIT 10";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
    $nama_jamm=" ";

    if ($row["nama_jam"]==1) {
      $nama_jamm = " Pagi";
    }else{
      $nama_jamm = " Siang";

    }
   $output .= '
   <li>
    <a href="#">
     <strong>'."hari ini kelas ".$row["id_kelas"] = $row["kelas"]." Pelajaran ".$row["id_pelajaran"]=$row["pelajaran"]." Jam Mengajar ".$row["id_jam_pelajaran"]=$nama_jamm." Pada Tanggal ".$row["tanggal"]." "."Telah Diabsen".'</strong><br />

    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 $query_1 = "SELECT * FROM as_notifikasi WHERE comment_status=0 and tanggal = '$tgl'";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}

}


if ($_SESSION['akses']== 3){
//fetch.php;
if(isset($_POST["view"]))
{
 include("connect.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE as_notifikasi as an join as_wali_kelas as wk on an.id_kelas=wk.id_kelas SET an.comment_status=1 WHERE an.comment_status=0 and an.id_kelas = " . $_SESSION['id_kelas'];
  mysqli_query($connect, $update_query);
 }
 $tgl = date("Y-m-d");
 $query = " SELECT * FROM as_notifikasi as an join as_kelas as ak on an.id_kelas = ak.id_kelas  JOIN as_pelajaran as ap on an.id_pelajaran = ap.id_pelajaran join as_jam_pelajaran as ajp on an.id_jam_pelajaran = ajp.id_jam_pelajaran where tanggal ='$tgl'and an.id_kelas ='".$_SESSION['id_kelas']."' ORDER BY an.id_notifikasi DESC LIMIT 10  " ;
 $result = mysqli_query($connect, $query);
 $output = '';

 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {


        $nama_jamm=" ";

    if ($row["nama_jam"]==1) {
      $nama_jamm = " Pagi";
    }else{
      $nama_jamm = " Siang";

    }
   $output .= '
   <li>
    <a href="#">
     <strong>'."hari ini kelas ".$row["id_kelas"] = $row["kelas"] ." Pelajaran ".$row["id_pelajaran"]=$row["pelajaran"]." Jam Mengajar ".$row["id_jam_pelajaran"]=$nama_jamm." Pada Tanggal ".$row["tanggal"]." "."Telah Diabsen".'</strong><br />

    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 $query_1 = "SELECT * FROM as_notifikasi as an 
             join as_wali_kelas as wk on an.id_kelas=wk.id_kelas where an.id_kelas =".$_SESSION["id_kelas"]." and comment_status=0  and tanggal = '$tgl'  ORDER BY an.id_notifikasi DESC LIMIT 10 ";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}

}






?>