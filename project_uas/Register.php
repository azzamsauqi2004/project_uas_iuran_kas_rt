<?php
// Inisialisasi variabel untuk menyimpan pesan kesalahan atau sukses
$message = "";

// Cek apakah formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $status = $_POST["status"];
    // Menambahkan status dan role default
    $status = "active"; // Misalnya, status aktif
    $role = "user"; // Misalnya, peran pengguna

    // Contoh validasi sederhana, Anda harus melakukan validasi yang lebih kuat di aplikasi produksi
    if ($password !== $password) {
        $message = "Konfirmasi password tidak sesuai.";
    } else {
        // Melakukan hashing password sebelum disimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke dalam database atau tempat penyimpanan yang sesuai
        // Gantilah kode berikut dengan logika penyimpanan sesuai kebutuhan Anda
        // ...

        // Set pesan sukses
        $message = "Registrasi berhasil!";
    }

    

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <div class="col-md-6 offset-md-3 mx-auto">
        <h2 class="mb-4">Register</h2>
        <?php
        // Tampilkan pesan kesalahan atau sukses
        if (!empty($message)) {
            echo '<div class="alert alert-info">'.$message.'</div>';
        }
        ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="nama" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <input type="role" class="form-control" name="role" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="status" class="form-control" name="status" required>
            </div>

           
           
            
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>

<!-- Tambahkan script Bootstrap JS (jika diperlukan) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>