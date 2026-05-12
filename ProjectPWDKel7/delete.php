<?php

session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: data_booking.php");
}

include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query(
    $koneksi,
    "DELETE FROM booking WHERE id='$id'"
);

if ($hapus) {

    echo "
    <script>
        alert('Data booking berhasil dihapus!');
        window.location='data_booking.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Data gagal dihapus!');
        window.history.back();
    </script>
    ";

}

?>