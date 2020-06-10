<?php
header("Content-type: application/vnd-ms-excel");
// header("Content-type: application/vnd-ms-word");
header("Content-Disposition: attachment; filename=Rekap_Absensi_siswa.xls");
?>
<form action="" method="">
		<?php
			$pelajaran=$_GET['id_pelajaran'];
			$kode_kelas=$_GET['kode_kelas'];
			$bulan=$_GET['bulan'];
			$tahun=$_GET['tahun'];
		?>
		<h3 style="text-align: center;">
		SMK N 1 LAHAT<br>
		JALAN BANDAR AGUNG
		<hr>
		Rekap Absensi Bulanan
		</h3>
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
                   if ($hasil_s>0) {
                     foreach ($query_s as $key => $value) { 
                      echo "<option  selected='selected' value='".$value['id_kelas']."'>".$value['kelas']."</option>";
                      }
                   }else{
                       echo "<option value='0'> data tidak ada</option>";
                   }
                  ?>||
                </td>
     
				<td><label for="bulan"> Bulan : </label> <?php echo $_GET['bulan']; ?>||<label for="tahun"> Tahun :</label> <?php echo $_GET['tahun']; ?></td>
				

                
			</tr>
		</table>
		<br><br>
		<table width="600" border="1" align="center">
		<tr>
		<td><div align="center"><strong>No</strong></div></td>
		<td><div align="center"><strong>Nis</strong></div></td>
		<td><div align="center"><strong>Nama Siswa</strong></div></td>
		<td><div align="center"><strong>Kelas</strong></div></td>
		<td><div align="center"><strong>Jk</strong></div></td>
		<td><div align="center"><strong>Hadir</strong></div></td>
		<td><div align="center"><strong>Sakit</strong></div></td>
		<td><div align="center"><strong>Izin</strong></div></td>
		<td><div align="center"><strong>Alpa</strong></div></td>
		</tr>
		
		<?php
		include "koneksi.php";	
		$no=0;
		  $tampil="SELECT * FROM as_siswa join as_kelas on as_siswa.id_kelas=as_kelas.id_kelas where as_siswa.id_kelas='$kode_kelas'";
		  $qryTampil=mysqli_query($conn,$tampil);
		  $assox = mysqli_fetch_assoc($qryTampil);
		  $kelas = $assox['kelas'];
		  while ($dataTampil=mysqli_fetch_array($qryTampil)) {

			$sql1 = mysqli_query($conn,"select * from as_absen_siswa  where nis = $dataTampil[nis] && id_pelajaran = '$pelajaran' && keterangan='Sakit' && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun'");
			 $sakit = mysqli_num_rows($sql1);
			 
			  $hadir = mysqli_num_rows(mysqli_query($conn,"select * from as_absen_siswa where nis = $dataTampil[nis] && id_pelajaran = '$pelajaran' && keterangan='Hadir'  && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun' "));

			  $izin = mysqli_num_rows(mysqli_query($conn,"select * from as_absen_siswa  where nis = $dataTampil[nis] && id_pelajaran = '$pelajaran' && keterangan='Izin' && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun'  "));

			  $alpa = mysqli_num_rows(mysqli_query($conn,"select * from as_absen_siswa  where nis = $dataTampil[nis] && id_pelajaran = '$pelajaran' && keterangan='Alpa'  && MONTH(tanggal_masuk)='$bulan' && YEAR(tanggal_masuk)='$tahun' "));
		  	$no++;
		 ?>		 
		<tr bgcolor="#FFFFFF">
		<td align="center"><?php echo $no ; ?></td>
		<td align="center"><?php echo $dataTampil['nis']; ?></td>
		<td align="center"><?php echo $dataTampil['nama_siswa']; ?></td>
		<td align="center"><?php echo $dataTampil['kelas']; ?></td>
		<td align="center"><?php echo $dataTampil['jenis_kelamin']; ?></td>
		<td align="center"><?php echo $hadir ?></td>
		<td align="center"><?php echo $sakit ?></td>
		<td align="center"><?php echo $izin ?></td>
		<td align="center"><?php echo $alpa  ?></td>
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
</body>
</html>