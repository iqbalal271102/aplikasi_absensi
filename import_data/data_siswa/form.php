
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import Data Siswa</title>

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Style untuk Loading -->
		<style>
        #loading{
			background: whitesmoke;
			position: absolute;
			top: 140px;
			left: 82px;
			padding: 5px 10px;
			border: 1px solid #ccc;
		}
		</style>

		<!-- Load File jquery.min.js yang ada difolder js -->
		<script src="js/jquery.min.js"></script>

		<script>
		$(document).ready(function(){
			// Sembunyikan alert validasi kosong
			$("#kosong").hide();
		});
		</script>
	</head>
	<body>
		<!-- Membuat Menu Header / Navbar -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white;"><b>Import Data Siswa</b></a>
				</div>
			</div>
		</nav>

		<!-- Content -->
		<div style="padding: 0 15px;">
			<!-- Buat sebuah tombol Cancel untuk kemabli ke halaman awal / view data -->
			<a href="" class="btn btn-danger pull-right">
				<span class="glyphicon glyphicon-remove"></span> Cancel
			</a>

			<h3>Form Import Data Siswa</h3>
			<hr>

			<!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
			<form method="post" action="" enctype="multipart/form-data">
				<a href="Format_siswa_.xlsx" class="btn btn-default">
					<span class="glyphicon glyphicon-download"></span>
					Download Format
				</a><br><br>

				<!--
				-- Buat sebuah input type file
				-- class pull-left berfungsi agar file input berada di sebelah kiri
				-->
				<input type="file" name="file" class="pull-left">

				<button type="submit" name="preview" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-eye-open"></span> Preview
				</button>
			</form>

			<hr>

			<!-- Buat Preview Data -->
			<?php
			// Jika user telah mengklik tombol Preview
			if(isset($_POST['preview'])){
				//$ip = ; // Ambil IP Address dari User
				$nama_file_baru = 'data.xlsx';

				// Cek apakah terdapat file data.xlsx pada folder tmp
				if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
					unlink('tmp/'.$nama_file_baru); // Hapus file tersebut

				$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
				$tmp_file = $_FILES['file']['tmp_name'];

				// Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
				if($ext == "xlsx"){
					// Upload file yang dipilih ke folder tmp
					// dan rename file tersebut menjadi data{ip_address}.xlsx
					// {ip_address} diganti jadi ip address user yang ada di variabel $ip
					// Contoh nama file setelah di rename : data127.0.0.1.xlsx
					move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

					// Load librari PHPExcel nya
					require_once 'PHPExcel/PHPExcel.php';

					$excelreader = new PHPExcel_Reader_Excel2007();
					$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
					$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

					// Buat sebuah tag form untuk proses import data ke database
					echo "<form method='post' action='import.php'>";

					// Buat sebuah div untuk alert validasi kosong
					echo "<div class='alert alert-danger' id='kosong'>
					Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
					</div>";

					echo "<table class='table table-bordered'>
					<tr>
						<th colspan='13' class='text-center'>Preview Data</th>
					</tr>
					<tr>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Kelas</th>
						<th>Jenis Kelamin</th>
						<th>Alamat Siswa</th>
						<th>Tanggal Lahir</th>
						<th>Nomor Telepon</th>
						<th>Nama Ayah</th>
						<th>Pekerjaan Ayah</th>
						<th>Nama Ibu </th>
						<th>Pekerjaan Ibu</th>
						<th>Alamat Orang Tua</th>
						<th>No Hp Orang Tua</th>
					</tr>";

					$numrow = 1;
					$kosong = 0;

						require_once '../../koneksi.php';

						// $sql_kelas = "SELECT kelas FROM as_kelas";
						// $query_kelas = mysqli_query($conn,$sql_kelas);
						// $result_kelas = mysqli_fetch_assoc($query_kelas);

						// echo $kelas = $result_kelas['kelas'];


					foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
						// Ambil data pada excel sesuai Kolom
						$kelas 			= $row['A']; // Ambil data kelas
						$nis 			= $row['B']; // Ambil data NIS
						$nama 			= $row['C']; // Ambil data nama
						$jk 			= $row['D']; // Ambil data jk
						$alamat_siswa 	= $row['E']; // Ambil data Alamat siswa
						$tgl_lahir 		= $row['F']; // Ambil data telepon
						$noHp_siswa 	= $row['G']; // Ambil data noHp_siswa
						$nama_ayah		= $row['H']; // Ambil data nama ayah
						$pekerjaan_ayah	= $row['I']; // Ambil data pekerjaan ayah
						$nama_ibu		= $row['J']; // Ambil data nama ibu
						$pekerjaan_ibu	= $row['K']; // Ambil data pekerjaan ibu
						$alamat_ortu	= $row['L']; // Ambil data alamat orang tua
						$noHp_ortu		= $row['M']; // Ambil data nomor hp orang tua

						// Cek jika semua data tidak diisi
						if($nis == "" && $nama == "" && $kelas == "" && $jk == "" && $alamat_siswa == "" && $tgl_lahir == "" && $noHp_siswa == "" && $nama_ayah=="" && $pekerjaan_ayah=="" && $nama_ibu=="" && $pekerjaan_ibu=="" && $alamat_ortu=="" && $noHp_ortu=="")
							continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

						// Cek $numrow apakah lebih dari 1
						// Artinya karena baris pertama adalah nama-nama kolom
						// Jadi dilewat saja, tidak usah diimport
						if($numrow > 1){
							// Validasi apakah semua data telah diisi
							$nis_td = ( ! empty($nis))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
							$nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
							$kelas_td = ( ! empty($kelas))? "" : " style='background: #E07171;'"; // Jika Kelas kosong, beri warna merah
							$jk_td = ( ! empty($kelas))? "" : " style='background: #E07171;'"; // Jika Kelas kosong, beri warna merah
							$alamat_siswa_td = ( ! empty($alamat_siswa))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$tgl_lahir_td = ( ! empty($tgl_lahir))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
							$noHp_siswa_td = ( ! empty($noHp_siswa))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
							$nama_ayah_td = ( ! empty($nama_ayah))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
							$pekerjaan_ayah_td = ( ! empty($pekerjaan_ayah))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
							$nama_ibu_td = ( ! empty($nama_ibu))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
							$pekerjaan_ibu_td = ( ! empty($pekerjaan_ibu))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
							$alamat_ortu_td = ( ! empty($alamat_ortu))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
							$noHp_ortu_td = ( ! empty($noHp_ortu))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

							// Jika salah satu data ada yang kosong
							if($nis == "" or $nama == "" or $kelas == "" or $jk == "" or $alamat_siswa == "" or $tgl_lahir == "" or $noHp_siswa == "" or $nama_ayah=="" or $pekerjaan_ayah=="" or $nama_ibu=="" or $pekerjaan_ibu=="" or $alamat_ortu=="" or $noHp_ortu==""){
								$kosong++; // Tambah 1 variabel $kosong
							}

							echo "<tr>";
							echo "<td".$nis_td.">".$nis."</td>";
							echo "<td".$nama_td.">".$nama."</td>";
							echo "<td".$kelas_td.">".$kelas."</td>";
							echo "<td".$jk_td.">".$jk."</td>";
							echo "<td".$alamat_siswa_td.">".$alamat_siswa."</td>";
							echo "<td".$tgl_lahir_td.">".$tgl_lahir."</td>";
							echo "<td".$noHp_siswa_td.">".$noHp_siswa."</td>";
							echo "<td".$nama_ayah_td.">".$nama_ayah."</td>";
							echo "<td".$pekerjaan_ayah_td.">".$pekerjaan_ayah."</td>";
							echo "<td".$nama_ibu_td.">".$nama_ibu."</td>";
							echo "<td".$pekerjaan_ibu_td.">".$pekerjaan_ibu."</td>";
							echo "<td".$alamat_ortu_td.">".$alamat_ortu."</td>";
							echo "<td".$noHp_ortu_td.">".$noHp_ortu."</td>";
							echo "</tr>";
						}

						$numrow++; // Tambah 1 setiap kali looping
					}

					echo "</table>";

					// Cek apakah variabel kosong lebih dari 1
					// Jika lebih dari 1, berarti ada data yang masih kosong
					if($kosong > 1){
					?>
						<script>
						$(document).ready(function(){
							// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
							$("#jumlah_kosong").html('<?php echo $kosong; ?>');

							$("#kosong").show(); // Munculkan alert validasi kosong
						});
						</script>
					<?php
					}else{ // Jika semua data sudah diisi
						echo "<hr>";

						// Buat sebuah tombol untuk mengimport data ke database
						echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
					}

					echo "</form>";
				}else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
					// Munculkan pesan validasi
					echo "<div class='alert alert-danger'>
					Hanya File Excel 2007(.xlsx) yang diperbolehkan
					</div>";
				}
			}
			?>
		</div>
	</body>
</html>

    <script>
    $(document).ready(function(){
      // Sembunyikan alert validasi kosong
      $("#kosong").hide();
    });
    </script>
