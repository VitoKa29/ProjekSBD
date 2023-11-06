
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=tambah_sesi" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Sesi</label>
                    <div class="col-sm-10">
                      <input type="text" name="kode_sesi" class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-10">
                    <select name="hari" class="form-control" required>
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
                      <input type="time" name="jam_mulai" class="form-control" required  autocomplete="off">
                    </div> 
                                  
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Selesai</label>
                    <div class="col-sm-10">
                      <input type="time" name="jam_selesai" class="form-control" required  autocomplete="off">
                    </div> 
                                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Tambah Sesi" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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