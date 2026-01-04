<?php
include 'koneksi.php';

$jadwal_id = $_POST['jadwal_id'];
$nama = $_POST['nama'];
$kursi = $_POST['kursi'];
$kode = strtoupper(substr(md5(rand()),0,6));

mysqli_query($conn,
"INSERT INTO tiket 
(jadwal_id,nama_pemesan,no_kursi,status,kode_booking)
VALUES
('$jadwal_id','$nama','$kursi','booking','$kode')");

echo "Tiket berhasil dipesan<br>";
echo "Kode Booking: <b>$kode</b>";
?>