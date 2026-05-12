<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "barbershop"
);

if (!$koneksi) {
    die("Koneksi gagal");
}

?>