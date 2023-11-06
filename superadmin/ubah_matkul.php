<?php

include "koneksi.php";

$id = $_GET["id"];
$sql = mysql_query(" SELECT * FROM matakuliah inner join prodi on matakuliah.kodeProdi = prodi.kodeProdi WHERE matakuliah.idMtk = '$id'  ");
$data = mysql_fetch_assoc($sql);

?>
<form method = "POST" action="crud.php?aksi=ubah_matkul" class="form-horizontal" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data["idMtk"]; ?>">    
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Matkul</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["idMtk"]; ?>" class="form-control" disabled>
                    </div>
                  </div>                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Matkul</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_matkul" value="<?php echo $data["namaMtk"]; ?>" class="form-control" autofocus required autocomplete='off'>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai SKS</label>
                    <div class="col-sm-10">
                    <input type="number" name="sks" value="<?php echo $data["sks"]; ?>" class="form-control" required autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                      <select name="prodi" class="form-control" required>
                      <option value="<?php echo $data["kodeProdi"]; ?>" selected><?php echo $data['kodeProdi']," - ",$data['namaProdi']; ?></option>
                        <?php include "prodi.php"; ?>
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