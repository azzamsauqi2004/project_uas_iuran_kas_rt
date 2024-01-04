<?php
include("koneksi_warga.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM iuran';
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
         table{
            width 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Data iuran</h1>
        <div class="main">
            <table>
                <tr>
                    <th>id</th>
                    <th>tanggal</th>
                    <th>warga_id</th>
                    <th>nominal</th>
                    <th>keterangan</th>
                    <th>Aksi</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>

                <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['tanggal'];?></td>
                    <td><?= $row['warga_id'];?></td>
                    <td><?= $row['nominal'];?></td>
                    <td><?= $row['keterangan'];?></td>
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
