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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        /* Style untuk tampilan yang bersih, Anda dapat menyesuaikan sesuai kebutuhan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .message {
            color: red;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="login-form">
        <h2>Login</h2>

        <!-- Tampilkan pesan kesalahan atau sukses -->
        <?php if (!empty($message)) : ?>
            <p class="<?php echo ($message == "Login berhasil!") ? "success" : "message"; ?>"><?php echo $message; ?></p>
        <?php endif; ?>

        <!-- Formulir login -->
        <form action="" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>
