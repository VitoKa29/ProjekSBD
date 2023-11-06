<?php

include "koneksi.php";

$sql = mysql_query(" SELECT * FROM matakuliah");

while ($data = mysql_fetch_array($sql)) {
    echo "<option value='$data[idMtk]'>$data[idMtk] - $data[namaMtk]</option>";
}

?>