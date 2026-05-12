<?php

session_start();
include 'koneksi.php';

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM booking ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="table-container">

        <h2>Data Booking</h2>

        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No</th>
                <th>Nama</th>

                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    ?>
                    <th>No HP</th>
                <?php } ?>

                <th>Layanan</th>
                <th>Produk</th>
                <th>Barber</th>
                <th>Tanggal</th>
                <th>Jam</th>

                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    ?>
                    <th>Metode Pembayaran</th>
                    <th>Total Harga</th>
                <?php } ?>

                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    ?>
                    <th>Aksi</th>
                <?php } ?>

            </tr>

            <?php

            $no = 1;

            while ($d = mysqli_fetch_array($data)) {

                ?>

                <tr>

                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>

                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                        ?>
                        <td><?= $d['no_hp']; ?></td>
                    <?php } ?>

                    <td><?= $d['layanan']; ?></td>
                    <td><?= $d['produk']; ?></td>
                    <td><?= $d['barber']; ?></td>
                    <td><?= $d['tanggal']; ?></td>
                    <td><?= $d['jam']; ?></td>

                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                        ?>
                        <td><?= $d['pembayaran']; ?></td>

                        <td>
                            Rp <?= number_format($d['total_harga'], 0, ',', '.'); ?>
                        </td>
                    <?php } ?>

                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                        ?>

                        <td>

                            <a href="edit.php?id=<?= $d['id']; ?>" class="edit-btn">

                                Edit

                            </a>

                            <a href="delete.php?id=<?= $d['id']; ?>" class="hapus-btn"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">

                                Delete

                            </a>

                        </td>

                    <?php } ?>

                </tr>

            <?php } ?>

        </table>

    </div>

    <br><br>

    <div class="kembali-container">

        <a href="index.php" class="btn-kembali">
            ← Kembali Ke Home
        </a>

    </div>

</body>

</html>