$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
	// Kita sembunyikan dulu untuk loadingnya
	$("#loading").hide();
	
	$("#jurusan").change(function(){ // Ketika user mengganti atau memilih data jurusan
		$("#kelas").hide(); // Sembunyikan dulu combobox kelas nya
		$("#loading").show(); // tampillkan loadingnya
	
		$.ajax({
			type: "POST", // Method pengiriman data bisa dengan GET atau POST
			url: "option_kelas.php", // Isi dengan url/path file php yang dituju
			data: {jurusan : $("#jurusan").val()}, // data yang akan dikirim ke file yang dituju
			dataType: "json",
			beforeSend: function(e) {
				if(e && e.overrideMimeType) {
					e.overrideMimeType("application/json;charset=UTF-8");
				}
			},
			success: function(response){ // Ketika proses pengiriman berhasil
				$("#loading").hide(); // Sembunyikan loadingnya

				// set isi dari combobox kelas
				// lalu munculkan kembali combobox kelasnya
				$("#kelas").html(response.data_kelas).show();
			},
			error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
				alert(thrownError); // Munculkan alert error
			}
		});
    });
});




