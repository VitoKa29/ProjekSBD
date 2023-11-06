
<form method = "POST" class="form-horizontal" action = "cek_ruangan.php" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Ruang</label>
                    <div class="col-sm-10">
                      <select name="ruangan" class="form-control" required>
                        <option selected disabled>Pilih Nomor Ruang</option>
                        <?php include "ruangan.php"; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sesi</label>
                    <div class="col-sm-10">
                      <select name="sesi" class="form-control" required>
                        <option selected disabled>Pilih Sesi</option>
                        <?php include "sesi2.php"; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal"  class="form-control" required autocomplete="off">
                    </div>
                  </div>


                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Cari Ruangan" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

                <!-- /.card-footer -->
              </form>
            </div>
<script>
  function checkInp(){

var x = document.getElementById("kapasitas1").value;
if (x <= 0){

alert("Maaf, nominal kapasitas harus lebih dari 0");
return False;
}

}
</script>