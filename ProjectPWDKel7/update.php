<?php

session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: data_booking.php");
}

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$layanan = $_POST['layanan'];
$produk = $_POST['produk'];
$barber = $_POST['barber'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$pembayaran = $_POST['pembayaran'];
$total_harga = $_POST['total_harga'];

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
AND id != '$id'

AND (
    TIME_TO_SEC(
        TIMEDIFF(jam, '$jam')
    ) BETWEEN -1800 AND 1800
)

");

/*
|--------------------------------------------------------------------------
| JIKA BENTROK
|--------------------------------------------------------------------------
*/

if (mysqli_num_rows($cek) > 0) {

    echo "
    <script>
        alert('Jadwal barber bentrok! Minimal jarak booking 30 menit atau ganti tukang cukur.');
        window.history.back();
    </script>
    ";

    exit;
}

/*
|--------------------------------------------------------------------------
| UPDATE DATA
|--------------------------------------------------------------------------
*/

$update = mysqli_query(
    $koneksi,

    "UPDATE booking SET

nama='$nama',
no_hp='$no_hp',
layanan='$layanan',
produk='$produk',
barber='$barber',
tanggal='$tanggal',
jam='$jam',
pembayaran='$pembayaran',
total_harga='$total_harga'

WHERE id='$id'"

);

if ($update) {

    echo "
    <script>
        alert('Data booking berhasil diupdate!');
        window.location='data_booking.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Data gagal diupdate!');
        window.history.back();
    </script>
    ";

}

?>