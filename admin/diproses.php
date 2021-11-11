<?php

include "koneksi.php";

$id = $_GET["id"];
$sql = mysql_query(" SELECT * FROM pengaduan WHERE id_pengaduan = '$id' ");
$data = mysql_fetch_array($sql);

?>
<center><h1>Tanggapan Laporan Diproses</h1></center>
<form method = "POST" action="crud.php?aksi=diproses" class="form-horizontal" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data["id_pengaduan"]; ?>">    
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Pengaduan</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["id_pengaduan"]; ?>" class="form-control" disabled>
                    </div>
                  </div>                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggapan</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="tanggapan" rows="6" cols="89" required></textarea>
                    </div>
                  </div>
                  
                  <input type="submit" value="Proses Pengaduan" name="kirim" class="btn btn-primary" style="margin-left:85%; margin-top:2%;">

                </div>

                <!-- /.card-body -->

                  

                <!-- /.card-footer -->
              </form>
            </div>
<script>
  function CekNilai(id){
    if (id < 0) {
      alert("Maaf, Nominal Nomor Telepon Tidak Bisa Kurang Dari 0");
    }
    
  }
</script>