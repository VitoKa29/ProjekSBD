
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=tambah_instansi" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_instansi" class="form-control" required autofocus autocomplete="off">
                    </div>

                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Tambah Instansi" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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