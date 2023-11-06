
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=tambah_pemakaian_ruang" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mata Kuliah</label>
                    <div class="col-sm-10">
                      <select name="matkul" class="form-control" required>
                        <option selected disabled>Pilih Mata Kuliah</option>
                        <?php include "matkul.php"; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                      <input type="text" name="tahun"  class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                    <select name="semester" class="form-control" required>
                        <option value="Gasal">Gasal</option>
                        <option value="Genap">Genap</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grup</label>
                    <div class="col-sm-10">
                      <input type="text" name="grup"  class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
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
                        <?php include "sesi.php"; ?>
                      </select>
                    </div>
                  </div>

                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Tambah Data" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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