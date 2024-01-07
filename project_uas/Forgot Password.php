<?php
// Inisialisasi variabel untuk menyimpan pesan kesalahan atau sukses
$message = "";

// Cek apakah formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $email = $_POST["email"];

    // Contoh validasi sederhana, Anda harus melakukan validasi yang lebih kuat di aplikasi produksi
    // Misalnya, periksa apakah email valid dan apakah email tersebut ada di database

    // Gantilah kode berikut dengan logika validasi dan reset password sesuai kebutuhan Anda
    // ...

    // Set pesan sukses atau kesalahan
    $message = "Link reset password telah dikirimkan ke alamat email Anda.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <div class="col-md-6 offset-md-3 mx-auto">
        <h2 class="mb-4">Forgot Password</h2>
        <?php
        // Tampilkan pesan kesalahan atau sukses
        if (!empty($message)) {
            echo '<div class="alert alert-info">'.$message.'</div>';
        }
        ?>
        <form action="forgot_password.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
        <p class="text-center mt-3">
            <a href="login.php">Kembali ke halaman login</a>
        </p>
    </div>
</div>

<!-- Tambahkan script Bootstrap JS (jika diperlukan) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
