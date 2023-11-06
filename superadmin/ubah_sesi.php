<?php

include "koneksi.php";

$id = $_GET["id"];
$sql = mysql_query(" SELECT * FROM sesi WHERE kodeSesi = '$id' ");
$data = mysql_fetch_array($sql);

?>
<form method = "POST" action="crud.php?aksi=ubah_sesi" class="form-horizontal" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
<input type="hidden" name="id" value="<?php echo $data["kodeSesi"]; ?>">    
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Sesi</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["kodeSesi"]; ?>" class="form-control" disabled>
                    </div>
                  </div>                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-10">
                    <select name="hari" class="form-control" required>
                    <option value="<?php echo $data["hari"]; ?>" disabled><?php echo $data["hari"]; ?></option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jumat">Jumat</option>
                      <option value="Sabtu">Sabtu</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Mulai</label>
                    <div class="col-sm-10">
                      <input type="time" name="jam_mulai" value="<?php echo $data["jam_mulai"]; ?>" class="form-control" autocomplete='off' autofocus required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Selesai</label>
                    <div class="col-sm-10">
                      <input type="time" name="jam_selesai" value="<?php echo $data["jam_selesai"]; ?>" class="form-control" autocomplete='off' autofocus required>
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