<?php

include "koneksi.php";

$sql = mysql_query(" SELECT * FROM mahasiswa");

while ($data = mysql_fetch_array($sql)) {
    echo "<option value='$data[nim]'>$data[nim] - $data[nama]</option>";
}

?>