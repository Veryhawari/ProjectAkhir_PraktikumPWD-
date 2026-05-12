<?php

session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: data_booking.php");
}

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM booking WHERE id='$id'"
);

$d = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">

        <h2>Edit Booking</h2>

        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

            <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>

            <input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>" required>

            <input type="text" name="layanan" value="<?php echo $d['layanan']; ?>" required>

            <input type="text" name="produk" value="<?php echo $d['produk']; ?>" required>

            <input type="text" name="barber" value="<?php echo $d['barber']; ?>" required>

            <input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>" required>

            <input type="time" name="jam" value="<?php echo $d['jam']; ?>" required>

            <input type="text" name="pembayaran" value="<?php echo $d['pembayaran']; ?>" required>

            <input type="number" name="total_harga" value="<?php echo $d['total_harga']; ?>" required>

            <button type="submit">
                Update Booking
            </button>

        </form>

    </div>

</body>

</html>