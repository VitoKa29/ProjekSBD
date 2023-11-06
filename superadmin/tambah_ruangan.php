
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=input_ruangan" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Ruang</label>
                    <div class="col-sm-10">
                      <input type="text" name="nomor_ruang"  class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gedung</label>
                    <div class="col-sm-10">
                      <input type="text" name="gedung" class="form-control" required  autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kapasitas</label>
                    <div class="col-sm-10">
                      <input type="number" id="kapasitas1"  name="kapasitas" class="form-control" required autocomplete="off">
                    </div>

                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Tambah Ruangan" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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