<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls");
?>

	<form action="" class="posting" method="post">
		<h3 style="text-align: center;">
		SMK NEGERI 1 KAHAT<br>
		JALAN BANDAR AGUNG
		<hr>
		Data Siswa
		</h3>

		</table>
		<br><br>

		<table width="" border="2" align="center">
		<tr bgcolor="#ffffff">



		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Nis</strong></div></td>
		<td><div align="center"><strong>Nama Siswa</strong></div></td>
		<td><div align="center"><strong>Kelas</strong></div></td>
		<td style="width:1px;"><strong>JK</strong></td>
		<td><div align="center"><strong>alamat</strong></div></td>
		<td><div align="center"><strong>tanggallahir</strong></div></td>
		<td><div align="center"><strong>Nomor Hp Orang tua</strong></div></td>
		</tr>

		<?php
		include '../../koneksi.php';
		$no=0;
		  $tampil="SELECT * FROM as_siswa as s INNER JOIN as_kelas as k ON s.id_kelas=k.id_kelas  ";
		  $qryTampil=mysqli_query($conn,$tampil);
		  while ($dataTampil=mysqli_fetch_array($qryTampil)) {
		  	$querySiswa = mysqli_query($conn,"select * from as_siswa where nis = '$dataTampil[nis]' && id_kelas = '$dataTampil[id_kelas]'");
		  	$dataSiswa = mysqli_fetch_array($querySiswa);
		 $no++;
		 ?>

		<tr bgcolor="#FFFFFF">
		<td align="center"><?php echo $no ; ?></td>
		<td align="center"><?php echo $dataTampil['nis']; ?></td>
		<td align="center"><?php echo $dataTampil['nama_siswa']; ?></td>
		<td align="center"><?php echo $dataTampil['kelas']; ?></td>
		<td style="width:1px;"><?php echo $dataTampil['jenis_kelamin']; ?></td>
		<td align="center"><?php echo $dataTampil['alamat']; ?></td>
		<td align="center"><?php echo $dataTampil['tanggal_lahir']; ?></td>
		<td align="center"><?php echo $dataTampil['nomor_telpon_ortu']; ?></td>

		</tr>
		<?php } ?>
		</table>
	</form>
