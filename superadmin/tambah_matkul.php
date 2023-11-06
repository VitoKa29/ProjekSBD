
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=tambah_matkul" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Matkul</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_matkul"  class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Matkul</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_matkul" class="form-control" required  autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                      <select name="prodi" class="form-control" required>
                        <option selected disabled>Pilih Prodi</option>
                        <?php include "prodi.php"; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai SKS</label>
                    <div class="col-sm-10">
                      <input type="number" name="sks" class="form-control" required autocomplete="off">
                    </div>

                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Tambah Matkul" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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