<?php

include "koneksi.php";

$sql = mysql_query(" SELECT * FROM sesi");

while ($data = mysql_fetch_array($sql)) {
    echo "<option value='$data[kodeSesi]'>$data[kodeSesi] - $data[hari] ($data[jam_mulai] - $data[jam_selesai])</option>";
}

?>