<?php

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM users
WHERE username='$username'
AND password='$password'"
);

$data = mysqli_fetch_array($query);

if ($data) {

    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['role'] = $data['role'];

    echo "
    <script>
        alert('Login berhasil!');
        window.location='index.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Username atau password salah!');
        window.history.back();
    </script>
    ";

}

?>