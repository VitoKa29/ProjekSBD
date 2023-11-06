<?php

include "koneksi.php";

$sql = mysql_query(" SELECT * FROM ruangan");

while ($data = mysql_fetch_array($sql)) {
    echo "<option value='$data[nomorRuang]'>$data[nomorRuang]</option>";
}

?>