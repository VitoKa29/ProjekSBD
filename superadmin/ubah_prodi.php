<?php

include "koneksi.php";

$id = $_GET["id"];
$sql = mysql_query(" SELECT * FROM prodi WHERE kodeProdi = '$id' ");
$data = mysql_fetch_array($sql);

?>
<form method = "POST" action="crud.php?aksi=ubah_prodi" class="form-horizontal" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data["kodeProdi"]; ?>">    
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Prodi</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["kodeProdi"]; ?>" class="form-control" disabled>
                    </div>
                  </div>                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Prodi</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_prodi" value="<?php echo $data["namaProdi"]; ?>" class="form-control" autocomplete='off' autofocus required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                    <select name="fakultas" class="form-control" required>
                      <option>Fakultas Teologi</option>
                      <option>Fakultas Arsitektur dan Desain </option>
                      <option>Fakultas Bioteknologi</option>
                      <option>Fakultas Bisnis</option>
                      <option>Fakultas Teknologi Informasi</option>
                      <option>Fakultas Kedokteran</option>
                      <option>Fakultas Kependidikan dan Humaniora</option>
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