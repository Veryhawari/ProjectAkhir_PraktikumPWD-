<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .show-password {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .show-password label {
            margin-left: 5px;
        }
    </style>

</head>

<body>

    <div class="form-container">

        <h2>Login Barbershop</h2>

        <form action="proses_login.php" method="POST">

            <input type="text" name="username" placeholder="Username" required>

            <input type="password" id="password" name="password" placeholder="Password" required>

            <div class="show-password">
                <input type="checkbox" id="showpass" onclick="lihatPassword()">
                <label for="showpass">Lihat Password</label>
            </div>
            <button type="submit">Login</button>

        </form>

        <p>
            Belum punya akun?
            <a href="register.php">Register</a>
        </p>

    </div>

    <script>
        function lihatPassword() {
            var x = document.getElementById("password");

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>