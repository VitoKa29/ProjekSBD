
<form method = "POST" action="crud.php?aksi=tambah_peminjaman_ruang" class="form-horizontal" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
<input type="hidden" name="ruangan" value="<?php echo $_GET["ruangan"]; ?>">
<input type="hidden" name="nim" value="<?php echo $_GET["nim"]; ?>">
<input type="hidden" name="tanggal" value="<?php echo $_GET["tanggal"]; ?>">
<input type="hidden" name="sesi" value="<?php echo substr($_GET["sesi"],0,2); ?>">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ruangan</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $_GET["ruangan"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sesi</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $_GET["sesi"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $_GET["nim"]," - ", $_GET["nama"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $_GET["tanggal"]?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea name="keterangan" class="form-control" required autocomplete='off' rows='6'></textarea>
                    </div>
                  </div>
                  
                  <input type="submit" value="Tambah Data" name="kirim" class="btn btn-primary" style="margin-left:90%; margin-top:2%;">

                </div>

              </form>
            </div>
<script>
  function CekNilai(id){
    if (id < 0) {
      alert("Maaf, Nominal Nomor Telepon Tidak Bisa Kurang Dari 0");
    }
    
  }
</script>