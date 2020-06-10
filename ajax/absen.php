
<?php
include "../koneksi.php";
$q = intval($_GET['q']);

?>



        <div class="col-xs-12">
              
              <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title"> Daftar Absen Siswa </span>
            </div>
        </div>


                 <div class="box-body table-responsive no-padding">


          <div class="box-body table-responsive no-padding">
            <div class="box-body ">

              <?php

              $tbl= " ";
                 $tbl.= "<table id='example1' class='table table-bordered table-striped' id='tampil'>";
                 $tbl.= "<thead>";
                 $tbl.= "<tr>";
                 $tbl.= "<th '>No</th>";
                 $tbl.= "<th>Nis</th>";
                 $tbl.= "<th '>Nama Siswa</th>";
                 // $tbl.= "<th '>Kelas</th>";
                 // $tbl.= "<th '>Jk</th>";
                 $tbl.= "<th '>Keterangan</th>";
                 $tbl.= "<th '>Catatan Siswa</th>";
                 $tbl.= "</tr>";
                 $tbl.= "</thead>";

                
                $sql=" SELECT * FROM as_siswa as s join as_kelas as k on s.id_kelas=k.id_kelas  where s.id_kelas= '$q'  ";
                $sql_h=mysqli_query($conn,$sql);
                 if (mysqli_num_rows($sql_h) > 0) {
                  $nomor = 1;
                  $no=0;
                   // jika ada looping untuk membaca seluruh data
                   // dan tampilkan kedalam tabel
                   foreach ($sql_h as $key => $value) {
                     $tbl.= "<tr>";
                     $tbl.= "<td>".$nomor."</td>";
                     $tbl.= "<td style='width:22px;'>"."<input  type='text' class='c' name='nis[]' value=".$value['nis'].">"."</td>";$tbl.= "<td style='width:22px;'>"."<input  type='text' class='c' name='nama[]' value='".$value['nama_siswa']."'>"."</td>";
                     // $tbl.= "<td>".$value['nama_siswa']."</td>";
                     // $tbl.= "<td>".$value['kelas']."</td>";
                     // $tbl.= "<td>".$value['jenis_kelamin']."</td>";
                     $tbl.= "<td>
                        <label class='e' /><input type='radio'class='d' name='nama_radio[$no]' checked='checked' value='Hadir'/>Hadir
                        <input type='radio'class='d' name='nama_radio[$no]' value='Izin'/>Izin
                        <input type='radio' class='d' name='nama_radio[$no]' value='Alpa'/>Alpha
                        <input type='radio' class='d' name='nama_radio[$no]' value='Sakit'/>Sakit
                        <input type='radio' class='d' name='nama_radio[$no]' value='Dispen'/>Dispen
                              </td>";
                      $tbl.= "<td>"."<textarea name='catatan_siswa[]'>  </textarea>"."</td>";

                     $tbl.= "</tr>";
                $nomor++;
                $no++;


           }
           $tbl.= "</table>"; 
           
           print($tbl);

           ?>

           <style type="text/css">
            .c {
              font-size:14px;
              color: black;
              border:none;
              display: disabled;
              outline: none;
              background:transparent;
            }
            .d{
              color: blue;
              background: blue;
              width:15px;

              height:15px;
            }
            .e{
              height:20px;
              color: black;
            }




             
           </style>

           <div class="col-md-3">
                  <div class="form-group">
                <label></label>
                  <input type="submit" name="simpan" value="simpan" class="btn btn-block btn-success">
                </div>
            </div>

            </div>
            <?php  } ?>
            
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
        </div>
   </div>








</body>
</html>


<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>