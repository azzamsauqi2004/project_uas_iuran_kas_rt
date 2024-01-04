<?php
error_reporting(E_ALL);
include_once 'koneksi_warga.php';

if (isset($_POST['submit']))
{
    $id = $_POST['id'];   
    $nik = $_POST['nik'];   
    $nama = $_POST['nama'];   
    $jenis_kelamin = $_POST['jenis_kelamin']; 
    $no_hp = $_POST['no_hp'];  
    $alamat = $_POST['alamat']; 
    $no_rumah = $_POST['no_rumah'];    
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];

    $sql ='UPDATE warga SET';
    $sql =  $sql = "id = '{$id}', nik = '{$nik}',";
    $sql = "nama = '{$nama}', jenis_kelamin= '{$jenis_kelamin}',  no_hp ='{$no_hp}'";  
    $sql = "alamat = '{$alamat}', no_rumah= '{$no_rumah}',  status ='{$status}', user_id='{$user_id}'";  

    header('location: warga.php');

}

$id = $_GET['id'];
$sql = "SELECT * FROM warga WHERE warga = ''";
$result = mysqli_query($koneksi,$sql);
 
if (!$result) die('Error: data tidak tersedia');
$data = mysqli_fetch_array($result);

function is_select($var, $val){
    if($var == $val) return 'selected="selected"';
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Ubah data</h1>
        <div class="main">
            <form method="post" action="ubah_warga.php" enctype="multipart/form-data">
                <div class="input">
                    <label>id</label>
                    <input type="text" name="id" value="<?php echo $data['id'];?>">
                </div>
                <div class="input">
                    <label>nik</label>
                    <input type="text" name="nik" value="<?php echo $data['nik'];?>">
                </div>
                <div class="input">
                    <label>nama</label>
                    <input type="text" name="nama" value="<?php echo $data['nama'];?>">
                </div>
                <div class="input">
                    <label>jenis_kelamin</label>
                    <select name="jenis_kelamin">
                    <option <?php echo is_select('L',$data['jenis_kelamin']);?> value="L">L</option>
                    <option <?php echo is_select('P',$data['jenis_kelamin']);?> value="P">P</option>
                    </select>
                </div>
                <div class="input">
                    <label>no_hp</label>
                    <input type="text" name="no_hp" value="<?php echo $data['no_hp'];?>">
                </div>
                <div class="input">
                    <label>alamat</label>
                    <input type="text" name="alamat" value="<?php echo $data['alamat'];?>">
                </div>
                <div class="input">
                    <label>no_rumah</label>
                    <input type="text" name="nama" value="<?php echo $data['no_rumah'];?>">
                </div>
                <div class="input">
                    <label>status</label>
                    <select name="status">
                    <option <?php echo is_select('1',$data['status']);?> value="1">1</option>
                    <option <?php echo is_select('2',$data['status']);?> value="2">2</option>
                    <option <?php echo is_select('3',$data['status']);?> value="3">3</option>
                    <option <?php echo is_select('4',$data['status']);?> value="4">4</option>
                    <option <?php echo is_select('5',$data['status']);?> value="5">5</option>
                    <option <?php echo is_select('6',$data['status']);?> value="6">6</option>
                    </select>
                </div>
                <div class="input">
                    <label>user_id</label>
                    <input type="text" name="user_id" value="<?php echo $data['user_id'];?>">
                </div>
                <div class="submit">
                        <input type="hidden" name="id" value=" <?php echo $data['id_warga']; ?>"/>
                        <input type="submit" name="submit" value="simpan"/>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
