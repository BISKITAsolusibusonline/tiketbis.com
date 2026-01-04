<?php
$id = $_GET['id'];
?>

<h2>Form Pemesanan</h2>

<form action="simpan.php" method="POST">
    <input type="hidden" name="jadwal_id" value="<?= $id; ?>">
    <input type="text" name="nama" placeholder="Nama Pemesan" required>
    <input type="number" name="kursi" placeholder="No Kursi" required>
    <button type="submit">Pesan Tiket</button>
</form>