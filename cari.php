<?php
include 'koneksi.php';

$asal    = $_GET['asal'];
$tujuan = $_GET['tujuan'];
$tanggal = $_GET['tanggal'];

$query = mysqli_query($conn,
"SELECT * FROM jadwal 
 WHERE asal='$asal' 
 AND tujuan='$tujuan' 
 AND tanggal='$tanggal'");
?>

<h2>Hasil Pencarian</h2>

<?php while($row = mysqli_fetch_assoc($query)){ ?>
    <p>
        Jam: <?= $row['jam']; ?> <br>
        Harga: Rp<?= $row['harga']; ?><br>
        <a href="pesan.php?id=<?= $row['id']; ?>">Pesan</a>
    </p>
    <hr>
<?php } ?>