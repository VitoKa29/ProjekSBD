<?php

include 'proses.php';
$db = new database();

foreach( $db->detail($_GET["id"]) as $data ){
    
}
foreach( $db->tanggapan($_GET["id"]) as $data1 ){
    
}

?>
<form method = "POST" class="form-horizontal" style="margin-left:7%;margin-right:10%;margin-top:5%;"  enctype = "multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Pengaduan</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["id_pengaduan"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["tgl_pengaduan"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["judul"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Isi Laporan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="isi" rows="6" cols="89" disabled><?php echo $data["isi_laporan"]; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori Laporan</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["kategori"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["lokasi"]; ?>" class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Instansi Tujuan</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["instansi_tujuan"]; ?>" class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $data["status"]; ?>" class="form-control" disabled>
                    </div>
                  </div>
         
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <img src="gambar/<?php echo $data["foto"]; ?>" width="500" height="300">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Ditanggapi</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php 
                      if( empty($data1["tgl_tanggapan"]) ){
                        echo "-";
                      }else{
                        echo $data1["tgl_tanggapan"];
                      } 
                      
                      ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Petugas Yang Menanggapi</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php 
                      if( empty($data1) ){
                        echo "-";
                      }else{
                        $sql1 = mysql_query(" SELECT * FROM petugas WHERE id_petugas = '$data1[id_petugas]' ");
                        $hasil1 = mysql_fetch_array($sql1);
                        echo $hasil1["nama_petugas"] ." - ". $hasil1["level"];
                      } 
                      
                      ?>" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggapan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="isi" rows="6" cols="89" disabled><?php 
                        if( empty($data1["tanggapan"]) ){
                          echo "-";
                        }else{
                          echo $data1["tanggapan"];
                        } 
                      ?></textarea>
                    </div>
                  </div>
                  
                </div>

                <!-- /.card-body -->

                  

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