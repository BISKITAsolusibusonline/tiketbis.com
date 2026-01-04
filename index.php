<!DOCTYPE html>
<html>
<head>
    <title>Cari Tiket Bus</title>
</head>
<body>
<h2>Cari Tiket Bus</h2>

<form action="cari.php" method="GET">
    <input type="text" name="asal" placeholder="Kota Asal" required>
    <input type="text" name="tujuan" placeholder="Kota Tujuan" required>
    <input type="date" name="tanggal" required>
    <button type="submit">Cari</button>
</form>

</body>
</html>