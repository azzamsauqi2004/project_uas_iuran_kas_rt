<?php
// Pastikan untuk menyertakan koneksi ke database sebelum menggunakan fungsi hapus
$koneksi = mysqli_connect("localhost", "root", "", "iuran_kas_rt"); // Ganti "nama_database" dengan nama database yang sesuai

// Periksa koneksi ke database
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "ID: " . $id;
echo "Affected Rows: " . $affected_rows;


// Fungsi hapus dengan penggunaan prepared statement
function hapus($koneksi, $id) {
    $stmt = mysqli_prepare($koneksi, "DELETE FROM warga WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    mysqli_stmt_close($stmt);
    return $affected_rows;
}

// Periksa apakah parameter "id" ada dan berikan nilai default 0 jika tidak
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

// Panggil fungsi hapus dan periksa hasilnya
if ($_SERVER["REQUEST_METHOD"] === "POST" && hapus($koneksi, $id) > 0) {
    echo "
        <script>
        alert('Data berhasil dihapus');
        window.location.href = 'warga.php';
        </script>";
} else {
    echo "
        <script>
        alert('Gagal menghapus data atau data tidak ditemukan');
        window.location.href = 'warga.php';
        </script>";
}

// Tutup koneksi setelah digunakan
mysqli_close($koneksi);
?>

