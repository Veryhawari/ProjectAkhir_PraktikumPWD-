<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query(
    $koneksi,
    "SELECT * FROM users
WHERE username='$username'"
);

if (mysqli_num_rows($cek) > 0) {

    echo "
    <script>
        alert('Username sudah digunakan!');
        window.history.back();
    </script>
    ";

} else {

    $simpan = mysqli_query(
        $koneksi,
        "INSERT INTO users(nama,username,password,role)
    VALUES('$nama','$username','$password','user')"
    );

    if ($simpan) {

        echo "
        <script>
            alert('Register berhasil!');
            window.location='login.php';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Register gagal!');
            window.history.back();
        </script>
        ";

    }

}

?>