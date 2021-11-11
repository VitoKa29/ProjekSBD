<center><br><h1>Cetak Laporan</h1></center>
<form method = "POST" class="form-horizontal"  action = "proses_cetak_laporan.php" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Dari Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal_dari" class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sampai Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal_sampai" class="form-control" required autocomplete="off">
                    </div>
                  </div>
              
              

                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Cetak Laporan" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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