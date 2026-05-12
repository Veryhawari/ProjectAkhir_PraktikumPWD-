<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">

        <h2>Register User</h2>

        <form action="proses_register.php" method="POST">

            <input type="text" name="nama" placeholder="Nama Lengkap" required>

            <input type="text" name="username" placeholder="Username" required>

            <input type="text" name="password" placeholder="Password" required>

            <button type="submit">Daftar</button>

        </form>

    </div>

</body>

</html>