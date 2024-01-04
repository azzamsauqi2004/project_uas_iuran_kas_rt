<?php
include("koneksi_warga.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM warga';
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 4vh;
}

th, td{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th{
    background-color: #f2f2f2;
}


.contaner{
    margin: 20px;
    padding: 20px;
    text-align: center;
    display: grid;
    justify-content: center;
    font-weight: bold;
    
    
}

nav{
    margin: 0%;
    padding: 18px;
    

}

a{
    text-decoration: none;
    padding: 7px;
    color: black;
}
div{
    height: 10vh;
}

section{
    margin-top: 10vh;
}
    </style>
</head>
<body>
<html>
    <head>
    </head>

    <body>
        
    <div class="container">
    <h1 class="text-center">Data warga</h1>
    <div class="main">
        <section>
        <a class="btn btn-primary" href="tambah_warga.php" role="button">Tambah Data</a>
        </section>
    <table>
    <tr>
    <th>id</th>
    <th>nik</th>
    <th>nama</th>
    <th>jenis_kelamin</th>
    <th>no_hp</th>
    <th>alamat</th>
    <th>no_rumah</th>
    <th>status</th>
    <th>user_id</th>
    <th>aksi</th>
    </tr>
  <?php if($result): ?>
  <?php while($row = mysqli_fetch_array($result)): ?>
  <tr>

 <td><?= $row['id'];?></td>
 <td><?= $row['nik'];?></td>
 <td><?= $row['nama'];?></td>
 <td><?= $row['jenis_kelamin'];?></td>
 <td><?= $row['no_hp'];?></td>
 <td><?= $row['alamat'];?></td>
 <td><?= $row['no_rumah'];?></td>
 <td><?= $row['status'];?></td>
 <td><?= $row['user_id'];?></td>
 <td>
    <button type="button" class="btn btn-warning">Edit</button>
    <button type="button" class="btn btn-danger">Hapus</button>
 </td>
 
 
 

 </tr>
 <?php endwhile; else: ?>
 <tr>
 <td colspan="7">Belum ada data</td>
 </tr>
 <?php endif; ?>
 </table>
 </div>
 </div>
    </body>
</html>
</body>