<?php
// Inisialisasi variabel untuk menyimpan pesan kesalahan atau sukses
$message = "";

// Cek apakah formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Contoh validasi sederhana, Anda harus melakukan validasi yang lebih kuat di aplikasi produksi
    if ($username == "user" && $password == "password") {
        $message = "Login berhasil!";
    } else {
        $message = "Login gagal. Silakan coba lagi.";
    }
}
?>

<<!DOCTYPE html>
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
                <input type="password" class="form-control" name="password" required>
                
            </div>
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
