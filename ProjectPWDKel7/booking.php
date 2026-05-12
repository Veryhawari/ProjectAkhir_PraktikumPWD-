<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Booking</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Booking Barbershop</h2>

    <form action="proses_booking.php" method="POST">

    <input type="text" name="nama" placeholder="Nama" required>

    <input type="text" name="no_hp" placeholder="Nomor Telepon" required>

    <!-- PILIH LAYANAN -->
    <select name="layanan" required>

        <option value="">Pilih Layanan</option>
        
        <option value="Classic Haircut">
            Classic Haircut - Rp50.000
        </option>

        <option value="Hair + Wash">
            Hair + Wash - Rp30.000
        </option>

        <option value="Hair Styling">
            Hair Styling - Rp60.000
        </option>

        <option value="Beard Trim">
            Beard Trim - Rp25.000
        </option>

        <option value="Hair Treatment">
            Hair Treatment - Rp120.000
        </option>

        <option value="Face Treatment">
            Face Treatment - Rp90.000
        </option>

        <option value="Hair Spa">
            Hair Spa - Rp100.000
        </option>

        <option value="Premium Package">
            Premium Package - Rp350.000
        </option>

    </select>

    <!-- PILIH PRODUK -->
    <select name="produk">

        <option value="">Beli Product (Optional)</option>

        <option value="Curly Pomade">
            Premium Pomade - Rp78.000
        </option>

        <option value="Clay Pomade">
            Hair Clay Matte - Rp78.000
        </option>

        <option value="Hair Powder">
            Hair Powder - Rp69.000
        </option>

        <option value="Hair Tonic">
            Hair Tonic - Rp50.000
        </option>

    </select>

    <!-- PILIH BARBER -->
    <select name="barber" required>

        <option value="">Pilih Barber</option>

        <option>Adrian Fernando</option>
        <option>Kevin Mahendra</option>
        <option>Rizky Alvaro</option>

    </select>

    <!-- TANGGAL -->
    <input type="date" name="tanggal" required>

    <!-- JAM -->
    <input type="time" name="jam" required>

    <!-- PEMBAYARAN -->
    <select name="pembayaran" required>

        <option value="">Metode Pembayaran</option>

        <option>QRIS</option>
        <option>Tunai</option>

    </select>

    <button type="submit">
        BOOKING SEKARANG
    </button>

</form>

    <a href="data_booking.php" class="lihat-data">
        Lihat Data Booking
    </a>

</div>

</body>
</html>