<?php

include "koneksi.php";

$id = $_GET["id"];
$sql = mysql_query(" SELECT * FROM petugas WHERE id_petugas = '$id' ");
$data = mysql_fetch_array($sql);

?>
<form method = "POST" action="crud.php?aksi=ubah_petugas" class="form-horizontal" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data["id_petugas"]; ?>">    
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["id_petugas"]; ?>" class="form-control" disabled>
                    </div>
                  </div>                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["username"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" value="<?php echo $data["nama_petugas"]; ?>" class="form-control" autofocus required autocomplete='off'>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data["level"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="number" name="telepon" value="<?php echo $data["telp"]; ?>" class="form-control" required autocomplete='off'>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Instansi</label>
                    <div class="col-sm-10">
                    <select name="instansi" class="form-control" required>
                      <option><?php echo $data["instansi"]; ?></option>
                      <?php include "instansi.php"; ?>
                    </select>
                    </div>
                  </div>
                  
                  <input type="submit" value="Ubah Data" name="kirim" class="btn btn-primary" style="margin-left:90%; margin-top:2%;">

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