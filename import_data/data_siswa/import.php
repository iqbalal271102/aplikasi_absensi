<?php
/*

--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
*/

// Load file koneksi.php
include "koneksi.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'data.xlsx';

	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';

	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
	$kelas 			= $row['A'];  // Ambil data kelas	
	$nis 			= $row['B']; // Ambil data NIS
	$nama 			= $row['C']; // Ambil data nama
	$jk 			= $row['D']; // Ambil data jk
	$alamat_siswa 	= $row['E']; // Ambil data Alamat siswa

	$tgl_lahir = DateTime::createFromFormat('d/m/y', $row['F']);
	$tgl_lahir = date('Y-m-d'); // Ambil data tanggal

	 
	$noHp_siswa 	= $row['G']; // Ambil data noHp_siswa
	$nama_ayah		= $row['H']; // Ambil data nama ayah
	$pekerjaan_ayah	= $row['I']; // Ambil data pekerjaan ayah
	$nama_ibu		= $row['J']; // Ambil data nama ibu
	$pekerjaan_ibu	= $row['K']; // Ambil data pekerjaan ibu
	$alamat_ortu	= $row['L']; // Ambil data alamat orang tua
	$noHp_ortu		= $row['M']; // Ambil data nomor hp orang tua


	



// 		// Cek jika semua data tidak diisi
		if($nis == "" && $nama == "" && $kelas == "" && $jk == ""  && $alamat_siswa == "" && $tgl_lahir == "" && $noHp_siswa == "" && $nama_ayah =="" && $pekerjaan_ayah =="" && $nama_ibu =="" && $pekerjaan_ibu =="" && $alamat_ortu =="" && $noHp_ortu =="")
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Buat query Insert
			$query = "INSERT INTO as_siswa (
								   id_kelas,
								   nis,
								   nama_siswa,
								   jenis_kelamin,
								   alamat,
								   tanggal_lahir,
								   nomor_telpon,
								   nama_ayah,
								   pekerjaan_ayah,
								   nama_ibu,
								   pekerjaan_ibu,
								   alamat_ortu,
								   nomor_telpon_ortu) 
								   VALUES (
								   '$kelas',
								   '$nis', 
								   '$nama',
								   '$jk', 
								   '$alamat_siswa',
								   '$tgl_lahir',
								   '$noHp_siswa',
								   '$nama_ayah',
								   '$pekerjaan_ayah', 
								   '$nama_ibu', 
								   '$pekerjaan_ibu', 
								   '$alamat_ortu', 
								   '$noHp_ortu');";


			// Eksekusi $query
			mysqli_query($connect, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}

?><script type="text/javascript">alert("sukses simpan data"); window.location ='../../siswa_data.php'; </script>
<?php
// header('location: index.php '); // Redirect ke halaman awal
?>
