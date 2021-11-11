
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=tambah_petugas" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" name="password" class="form-control" required autocomplete="off">
                    </div>
                  </div>   
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                      <input type="text" value="Petugas" class="form-control" disabled>
                    </div>
                  </div>  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Instansi</label>
                    <div class="col-sm-10">
                    <select name="instansi" class="form-control" required>
                      <option selected disabled>Pilih Instansi</option>
                      <?php include "instansi.php"; ?>
                    </select>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input type="number" name="telepon" class="form-control" required autocomplete="off">
                    </div>
                  </div>  

                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Tambah Petugas" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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