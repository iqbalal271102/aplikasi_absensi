<?php 

include 'koneksi.php';

$q = $_GET['q'];
// $p = $_GET['P'];
// var_dump($p);

$query ="SELECT * FROM as_siswa as s join as_kelas as k on s.id_kelas=k.id_kelas  where s.id_kelas= '$q' ";

$result = mysqli_query($conn,$query);


 ?>
<form action="absen_siswa.php" method="post">
 <div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tr>
                  <th >No</th>
                  <!-- <th >Aksi</th> -->
                  <th >Nis</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin </th>
                  <th>Keterangan </th>

                </tr>
               <?php 
                       
                      $no=1;
                      foreach ($result as $key => $value) {
                 ?>
                <tbody>
                  <tr>
                    <td style="width: 50px;"><?php echo $no++; ?></td>
                    <td  ><input type="text" name="nis" value="<?php echo $value['nis']; ?>"></td>
                    <td  ><?php echo $value['nama_siswa']; ?></td>
                    <td  ><?php echo $value['kelas']; ?></td>
                    <td  ><?php echo $value['jenis_kelamin'] ?></td>
                    <td >
                    <select name="keterangan[]" class="input3" required>    
      <option value="Hadir" selected="selected">Hadir</option>
      <option value="Sakit">Sakit</option>
      <option value="Izin">Izin</option>
      <option value="Alpa">Alpa</option>
      </select>
                  </tr>
                    <?php }?>

                </tbody>
                <tfoot>
                </tfoot>
              </table>
              <input type="submit" name="po" value="kjhknmmnjknm">
            <!-- /.box-body -->
          </div>
          </form>

          <?php if (isset($_POST['po'])): ?>
            <script type="text/javascript">alert("ok")</script>
          <?php endif ?>


















<select name='keterangan[]' class='input3' required>
                                <option value='Hadir' selected='selected'>Hadir</option>
                                <option value='Sakit'>Sakit</option>
                                <option value='Izin'>Izin</option>
                                <option value='Alpa'>Alpa</option>
                              </select>
