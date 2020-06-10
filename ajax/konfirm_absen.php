<?php
include "../koneksi.php";
$q = intval($_GET['q']);

var_dump($q);
?>



		<div class="col-md-12">

              <div id="txtHint">
              <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title"> Konfirmasi Siswa </span>

              </div>

            </div>
            </div>

              <div class="form-group">
              <div class="box-body table-responsive no-padding">
              <table class="table table-bordered" >
                  <tr>
                  <th><div align="center">No</div></th>
                  <!-- <th >Aksi</th> -->
                  <th ><div align="center">Nis</div>  </th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin </th>
                  <th>Keterangan </th>
                  <th>Nomor HP Orang Tua </th>

                </tr>
                <?php 

                       //  $kon = 0;
                       // $id_kelas = $_POST['id_kelas'];
                       // $tanggal = $_POST['tanggal'];
                       // $pelajaran = $_POST['id_pelajaran'];
                       // $jamm = $_POST['JAMM'];
                      $no=1;
                      $query ="SELECT * FROM as_absen_siswa as sa JOIN as_kelas as k on sa.id_kelas=k.id_kelas 
                      WHERE sa.id_kelas='$q'  ";

                      $query1 ="SELECT * FROM as_siswa join as_kelas on as_siswa.id_kelas=as_kelas.id_kelas WHERE as_kelas.id_kelas ='$q'  ";
                      $result1 = mysqli_query($conn,$query1);
                       $data = mysqli_fetch_assoc($result1);

                      $result = mysqli_query($conn,$query);
                      foreach ($result as $key => $value) {
                        $kon=$value['konfirmasi_walikelas'];
                 ?>
                <tbody>
                  <tr>
                    <td style="width: 50px;"><?php echo $no++; ?></td>
                    <td  ><input class="c" type="text" name="nis[]" value="<?php echo $value['nis']; ?>"></td>
                    <td  ><input class="c" type="text" name="nama_siswa[]" value="<?php echo $value['nama_siswa']; ?>"></td>
                    <td  ><input class="c"type="text" name="kelas[]" value="<?php echo $value['kelas']; ?>"></td>
                    <td  ><?php echo $data['jenis_kelamin'] ?></td>
                    <td  ><input class="c" type="text" name="keterangan[]" value="<?php echo $value['keterangan']; ?>"></td>
                    <td  ><input class="c"type="text" name="nomor_tel_ortu[]" value="<?php echo $value['nomor_telpon_ortu']; ?>"></td>
                  </tr>
                    <?php }?>


              </table>

              <?php
              $dis = "";
                if ( $kon > 0) {
                  $dis = "disabled";
                }

               ?>

			 <div class="col-xs-2">
                      <input type="submit" name="Konfirmasi" class="btn btn-block btn-success" value="Konfirmasi" <?php echo $dis; ?>>
              </div>

              </form>
            </div>
      </div>

            <?php if (isset($_POST['Konfirmasi'])) {
                       $id_kelas       = $_POST['id_kelas'];
                       $tanggal        = $_POST['tanggal'];
                       $pelajaran      = $_POST['id_pelajaran'];
                       $jam            = $_POST['JAMM'];
                       $nis            = $_POST['nis'];
                       $keterangan     = $_POST['keterangan'];
                       $nama_siswa     = $_POST['nama_siswa'];
                       $kelas          = $_POST['kelas'];
                       $no_tel_ortu    = $_POST['nomor_tel_ortu'];
                       $jumlah_dipilih = count($nama_siswa);

              $sql_u = mysqli_query($conn,"UPDATE as_absen_siswa SET konfirmasi_walikelas='1' where id_pelajaran='$pelajaran' and id_kelas ='$id_kelas' and id_jam_pelajaran ='$jam' and tanggal_masuk = '$tanggal'  ");

              $sql_phones = mysqli_query($conn,"SELECT ID FROM phones");
                $sql_ID = mysqli_fetch_assoc($sql_phones);
                $ID = $sql_ID['ID'];
                $tanggal_m= date("d-F-Y",strtotime($tanggal));
              if ($jam == 1) {
              for($x=0; $x<$jumlah_dipilih; $x++){
              $query =mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID) VALUES ('$no_tel_ortu[$x]', '$ID', 'Smk N 1 Lahat Memberi tahukan ananda $nama_siswa[$x] kelas $kelas[$x] hari ini tanggal $tanggal_m dinyatakan $keterangan[$x] di pagi hari ', 'Gammu .128.90')");
            }}
              if ($jam == 2) {
              for($x=0; $x<$jumlah_dipilih; $x++){
              $query =mysqli_query($conn,"INSERT INTO outbox (DestinationNumber, SenderID, TextDecoded, CreatorID) VALUES ('$no_tel_ortu[$x]', '$ID', 'Smk N 1 Lahat Memberi tahukan ananda $nama_siswa[$x] kelas $kelas[$x] hari ini tanggal $tanggal_m dinyatakan $keterangan[$x] di siang hari ', 'Gammu .128.90')");
            }}

            ?>
            <script type="text/javascript"> alert("berhasil di konfirmasi !!")</script>
            <?php } ?>


              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <!-- <div class="col-md-6"> -->





              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>