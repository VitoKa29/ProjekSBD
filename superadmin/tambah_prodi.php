
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=tambah_prodi" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Prodi</label>
                    <div class="col-sm-10">
                      <input type="text" name="kode_prodi" class="form-control" required autofocus autocomplete="off">
                    </div>

                  
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Prodi</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_prodi" class="form-control" required autocomplete="off">
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
                <!-- /.card-body -->

                  <input type="submit" value="Tambah Prodi" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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