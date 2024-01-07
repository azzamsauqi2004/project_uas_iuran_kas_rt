<?php
error_reporting(E_ALL);
include_once 'koneksi_warga.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal;'];
    $warga_id = $_POST['warga_id'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];
    $jenis_iuran = $_POST['jenis_iuran'];
   

    $sql = "UPDATE iuran SET";
    $sql .= " id = '{$id}', tanggal = '{$tanggal}',";
    $sql .= " warga_id = '{$warga_id}', nominal = '{$nominal}', keterangan = '{$keterangan}',";
    $sql .= " jenis_iuran = '{$jenis_iuran}',";
    $sql .= " WHERE id = '{$id}'";

    $result = mysqli_query($koneksi, $sql);

    header('location: iuran.php');
}

$id = $_GET['?'];
$sql = "SELECT * FROM iuran";
$result = mysqli_query($koneksi, $sql);

if (!$result) die('Error: data tidak tersedia');
$data = mysqli_fetch_array($result);

function is_select($var, $val) {
    if ($var == $val) return 'selected="selected"';
    return false;
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
            <form method="post" action="tambah_iuran.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="id" class="form-label">id</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">tanggal</label>
                    <input type="text" class="form-control" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">warga_id</label>
                    <input type="text" class="form-control" name="warga_id" value="<?php echo $data['warga_id']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">nominal</label>
                    <input type="text" class="form-control" name="nominal" value="<?php echo $data['nominal']; ?>">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">keterangan</label>
                    <select class="form-select" name="keterangan" value="<?php echo $data['jenis_iuran']; ?>">
                        <option value="Lunas">Lunas</option>
                        <option value="Belum lunas">belum lunas</option>  
                    </select>
                    <div class="mb-3">
                    <label for="nama" class="form-label">jenis_iuran</label>
                    <input type="text" class="form-control" name="jenis_iuran" value="<?php echo $data['jenis_iuran']; ?>">
                </div>
                    <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="ubah data">
                </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    include "koneksi_warga.php";
    if(isset($_POST['proses'])){
        mysqli_query($koneksi, "update iuran set  
        tanggal = '$_POST[tanggal]',
        warga_id = '$_POST[warga_id]'
        nominal = '$_POST[nominal]'
        keterangan = '$_POST[keterangan]'
        jenis_iuran = '$_POST[jenis_iuran]'
        where id_iuran = '$_GET[id]'");

        echo "Data barang telah diubah";


    }
    ?>
</body>
