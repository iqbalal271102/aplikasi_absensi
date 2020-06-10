<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Cek_Absensi_Harian.xls");
?>

	<form action="" class="posting" method="post">
		<h3 style="text-align: center;">
		SMK NEGERI 1 KAHAT<br>
		JALAN BANDAR AGUNG
		<hr>
		Rekap Absensi Harian
		</h3>
		<?php
		if(isset($_GET['tanggal']))
		$pelajaran  = $_GET['id_pelajaran'];
		$tanggal  = $_GET['tanggal'];
		$jam  = $_GET['jam'];
		$kode_kelas=$_GET['kode_kelas'];
		?>
				<table >
			<tr>
				<td>Pelajaran  :

                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM  as_pelajaran  WHERE as_pelajaran.id_pelajaran = '$pelajaran'";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                   if ($hasil_s>0) {
                     foreach ($query_s as $key => $value) {
                      echo "<option  selected='selected' value='".$value['id_pelajaran']."'>".$value['pelajaran']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>
                ||</td>
                <td>Kelas  :
                 <?php
                 include "koneksi.php";
                  // buat ambil kategori
                    $sql_s= "SELECT * FROM as_kelas WHERE id_kelas = '$kode_kelas' ";
                    $query_s = mysqli_query($conn,$sql_s);
                    $hasil_s= mysqli_num_rows($query_s);
                    $assox = mysqli_fetch_assoc($query_s);
		  			 $kelas = $assox['kelas'];

                   if ($hasil_s>0) {
                     foreach ($query_s as $key => $value) {
                      echo "<option  selected='selected' value='".$value['id_kelas']."'>".$value['kelas']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>||
                </td>

				<td><label for="tahun"> Tanggal :</label> <?php echo $_GET['tanggal']; ?></td>



			</tr>
		</table>
		<br><br>

		<table width="" border="2" align="center">
		<tr bgcolor="#ffffff">
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Nis</strong></div></td>
		<td><div align="center"><strong>Nama Siswa</strong></div></td>
		<td><div align="center"><strong>Kelas</strong></div></td>
		<td style="width:1px;"><strong>JK</strong></td>
		<td><div align="center"><strong>Keterangan Absen</strong></div></td>
		<td><div align="center"><strong>Jam</strong></div></td>
		</tr>

		<?php
		include 'koneksi.php';
		$no=0;
		  $tampil="SELECT * FROM as_absen_siswa join as_kelas on as_absen_siswa.id_kelas = as_kelas.id_kelas

               WHERE as_absen_siswa.id_kelas='$kode_kelas' and id_pelajaran = '$pelajaran' and id_jam_pelajaran='$jam' and tanggal_masuk='$tanggal'";
		  $qryTampil=mysqli_query($conn,$tampil);
		  while ($dataTampil=mysqli_fetch_array($qryTampil)) {
		  	$querySiswa = mysqli_query($conn,"select * from as_siswa where nis = '$dataTampil[nis]' && id_kelas = '$dataTampil[id_kelas]'");
		  	$dataSiswa = mysqli_fetch_array($querySiswa);
		 $no++;
		 ?>

		<tr bgcolor="#FFFFFF">
		<td align="center"><?php echo $no ; ?></td>
		<td align="center"><?php echo $dataTampil['nis']; ?></td>
		<td align="center"><?php echo $dataSiswa['nama_siswa']; ?></td>
		<td align="center"><?php echo $dataTampil['kelas']; ?></td>
		<td style="width:1px;"><?php echo $dataSiswa['jenis_kelamin']; ?></td>
		<td align="center"><?php echo $dataTampil['keterangan']; ?></td>

		<?php

		$jam = " ";

		if ($dataTampil['id_jam_pelajaran'] == 1) {

			$jam ="jam Pagi";

		}if ($dataTampil['id_jam_pelajaran'] == 2) {

			$jam ="jam Siang";

		}?>

		<td align="center"><?php echo $jam ?></td>
		</tr>
		<?php } ?>
		</table>
		&nbsp;
		<div align="right">
			Lahat,
			<?php
			$namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
			echo date("j")." ".$namabulan[date("n")]." ".date("Y");
			?>
			<br />
			Kepala Sekolah SMK 1 lahat
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			...........................................................
		</div>

			<div align="left">
			Lahat,
			<?php
			$namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
			echo date("j")." ".$namabulan[date("n")]." ".date("Y");
			?>
			<br />
			Wali kelas <?php echo $kelas ?>
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			...........................................................
		</div>
	</form>
