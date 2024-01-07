<?php

session_start();

$title = 'Data Warga';
include_once 'koneksi_warga.php';

if (isset($_POST['submit']))
{
    $users = $_POST['users'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '{$user}' AND password = ('{$password}') ";

    $result = mysqli_query($koneksi, $sql);
    if ($result && mysqli_affected_rows($koneksi) != 0)
    {
        $_SESSION['isLogin'] = true;
        $_SESSION['users'] = mysqli_fetch_array($result);

        header('location: index.php');
    } else {
        $errorMsg = "<p style=\"color:red;\">Gagal Login,
        silakan ulangi lagi.</p>";
    }

    include_once 'header.php';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <div class="col-md-6 offset-md-3 mx-auto">
        <h2 class="mb-4">Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required autocomplete="off">

            </div>
            <p class="text-center">Belum punya akun? <a href="Register.php">Register di sini</a></p>
            <p class="text-center">
                <a href="Forgot Password.php">Forgot password</a>
            </p>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

    <!-- Tambahkan script Bootstrap JS (jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
