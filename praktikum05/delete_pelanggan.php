<?php
require_once 'dbkoneksi.php';
// tangkap adatabase
$delete = $_GET['iddel'];
// buat queryy
$sql = "DELETE FROM pelanggan WHERE id=?";
// siapin queryy
$st = $dbh->prepare($sql);
// eksekusi query
$st->execute([$delete]);


header('location:list_pelanggan.php');
?>,