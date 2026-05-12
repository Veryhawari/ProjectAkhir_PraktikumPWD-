<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$layanan = $_POST['layanan'];
$produk = $_POST['produk'];
$barber = $_POST['barber'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$pembayaran = $_POST['pembayaran'];

$total = 0;

/* HARGA LAYANAN */

if ($layanan == 'Classic Haircut') {
    $total += 50000;
} elseif ($layanan == 'Hair + Wash') {
    $total += 30000;
} elseif ($layanan == 'Hair Styling') {
    $total += 60000;
} elseif ($layanan == 'Beard Trim') {
    $total += 25000;
} elseif ($layanan == 'Hair Treatment') {
    $total += 120000;
} elseif ($layanan == 'Face Treatment') {
    $total += 90000;
} elseif ($layanan == 'Hair Spa') {
    $total += 100000;
} elseif ($layanan == 'Premium Package') {
    $total += 350000;
}

/* HARGA PRODUK */

if ($produk == 'Curly Pomade') {
    $total += 78000;
} elseif ($produk == 'Clay Pomade') {
    $total += 78000;
} elseif ($produk == 'Hair Powder') {
    $total += 69000;
} elseif ($produk == 'Hair Tonic') {
    $total += 50000;
}

/*
|--------------------------------------------------------------------------
| CEK JADWAL BENTROK 30 MENIT
|--------------------------------------------------------------------------
*/

$cek = mysqli_query($koneksi, "

SELECT *
FROM booking

WHERE tanggal = '$tanggal'
AND barber = '$barber'

AND ABS(
    TIMESTAMPDIFF(
        MINUTE,
        STR_TO_DATE(jam, '%H:%i'),
        STR_TO_DATE('$jam', '%H:%i')
    )
) < 30

");

if (mysqli_num_rows($cek) > 0) {

    echo "
    <script>
        alert('Jadwal barber bentrok! Minimal jarak booking 30 menit atau ganti tukang cukur.');
        window.history.back();
    </script>
    ";

    exit;
}

/* SIMPAN KE DATABASE */

mysqli_query(
    $koneksi,
    "INSERT INTO booking
(
nama,
no_hp,
layanan,
produk,
barber,
tanggal,
jam,
pembayaran,
total_harga
)

VALUES
(
'$nama',
'$no_hp',
'$layanan',
'$produk',
'$barber',
'$tanggal',
'$jam',
'$pembayaran',
'$total'
)"
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Konfirmasi Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">

        <h2>Booking Berhasil</h2>

        <p><b>Nama:</b> <?= $nama; ?></p>

        <p><b>Layanan:</b> <?= $layanan; ?></p>

        <p><b>Produk:</b> <?= $produk; ?></p>

        <p><b>Barber:</b> <?= $barber; ?></p>

        <p>
            <b>Total Harga:</b>
            Rp <?= number_format($total, 0, ',', '.'); ?>
        </p>

        <p>
            <b>Metode Pembayaran:</b>
            <?= $pembayaran; ?>
        </p>

        <hr>

        <?php if ($pembayaran == 'QRIS') { ?>

            <h3>Silakan Scan QRIS Di Kasir</h3>

        <?php } ?>

        <?php if ($pembayaran == 'Tunai') { ?>

            <h3>Silakan Bayar Di Tempat</h3>

        <?php } ?>

        <br>

        <a href="index.php" class="btn-kembali">
            Kembali Ke Home
        </a>

    </div>

</body>

</html>