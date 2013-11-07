<?php
$host = 'mysql7.000webhost.com'; $user = 'a1566486_root'; $pass = 'iman280793';$db = 'a1566486_myweb';
$cnn = mysql_connect($host, $user, $pass);
if (!$cnn) { exit('Koneksi Gagal'); }
$db = mysql_select_db($db);
if (!$db) { exit('Gagal Memilih Database'); }
?>
