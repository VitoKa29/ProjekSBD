<center><br><h1>Form Pengaduan</h1></center>
<form method = "POST" class="form-horizontal"  action = "crud.php?aksi=tambah" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                      <input type="text" name="judul" class="form-control" required autofocus autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Isi Laporan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="isi" rows="6" cols="89" required></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Kejadian</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" required autocomplete="off">
                    </div>
                  </div>
              
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi Kejadian</label>
                    <div class="col-sm-10">
                      <input type="text" name="lokasi" class="form-control" required  autocomplete="off" placeholder="Ketik Lokasi Kejadian">
                    </div>
                  </div>    
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Instansi Tujuan</label>
                    <div class="col-sm-10">
                    <select name="instansi" class="form-control" required>
                      <option selected disabled>Pilih Instansi Tujuan</option>
                      <?php include "instansi.php"; ?>
                    </select>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori Laporan</label>
                    <div class="col-sm-10">
                    <select name="kategori" class="form-control" required>
                      <option selected disabled>Pilih Kategori Laporan</option>
                      <?php include "kategori.php"; ?>
                    </select>
                    </div>
                  </div>
         
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <input type="file" name="gambar" class="form-control" required>
                    </div>
                  </div>
                  
                </div>

                <!-- /.card-body -->

                  <input type="submit" value="Ajukan Laporan" name="kirim" class="btn btn-primary" style="margin-left:84%; margin-top:2%;">

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