<?php

include "koneksi.php";

$sql = mysql_query(" SELECT * FROM prodi");

while ($data = mysql_fetch_array($sql)) {
    echo "<option value='$data[kodeProdi]'>$data[kodeProdi] - $data[namaProdi]</option>";
}

?>