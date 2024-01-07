<?php
error_reporting(E_ALL);
include_once 'koneksi_warga.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $no_rumah = $_POST['no_rumah'];
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];

    // Modifikasi query SQL
    $sql = "INSERT INTO warga (id, nik, nama, jenis_kelamin, no_hp, alamat, no_rumah, status, user_id)";
    $sql .= " VALUES ('{$id}', '{$nik}','{$nama}', '{$jenis_kelamin}', '{$no_hp}','{$alamat}', '{$no_rumah}', '{$status}', '{$user_id}')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        // Kueri berhasil dieksekusi
        echo"
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'warga.php'
        </script>
        
        ";
        
    } else {
        // Eksekusi kueri gagal
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>


<html>
    <head></head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            padding: 0px;
        }

        .container {
            max-width: 400px; /* Sesuaikan lebar container sesuai kebutuhan */
            
        }

        .main {
            margin-top: 20px;
        }

        .form-label {
            font-size: 15px; /* Sesuaikan ukuran font label */
        }

        .form-control {
            height: 30px; /* Sesuaikan tinggi input sesuai kebutuhan */
            font-size: 14px; /* Sesuaikan ukuran font input */
        }

        .form-select {
            height: 3px; /* Sesuaikan tinggi select sesuai kebutuhan */
            font-size: 14px; /* Sesuaikan ukuran font select */
        }

        .btn-primary {
            font-size: 14px; /* Sesuaikan ukuran font tombol */
        }
    </style>

</html>

<body>
<div class="container">
        <div class="main">
            <form method="post" action="tambah_warga.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="id" class="form-label">id</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">nik</label>
                    <input type="text" class="form-control" name="nik">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">jenis_kelamin</label>
                    <select class="form-select" name="jenis_kelamin">
                        <option value="L">L</option>
                        <option value="P">P</option>  
                    </select>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">no_hp</label>
                    <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="no_rumah" class="form-label">no_rumah</label>
                    <input type="text" class="form-control" name="no_rumah">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">status</label>
                    <select class="form-select" name="status">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">user_id</label>
                    <input type="text" class="form-control" name="user_id">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="simpan">
                </div>
            </form>
        </div>
    </div>
</body>
