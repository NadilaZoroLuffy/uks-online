<?php
require 'function.php';
require '../nav/navsiswa.php';

if(isset($_POST["submit"])){
    if(tambahkunjungan($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('form kunjungan berhasil dikirim');
            window.location = 'kunjungan.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('form kunjungan gagal dikirim');
            window.location = 'kunjungan.php';
        </script>
    ";
    }
}
$date = new DateTime('now');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .main{
            padding:65px 125px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="box"><br>
            <h3>Data kunjungan</h3><br>
    
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="nama_lengkap">Nama lengkap</label><br>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br>
    
                <label for="kelas">Kelas</label><br>
                <input type="text" name="kelas" id="kelas" class="form-control"><br>
    
                <label for="tanggal">Tanggal</label><br>
                <input type="text" name="tanggal" id="tanggal" class="form-control" readonly value="<?php echo $date->format('d-m-Y : H:i:s'); // 21-01-2017 05:13:03 ?>"><br>

                <label for="keperluan">Keperluan</label><br>
                <input type="text" name="keperluan" id="keperluan" class="form-control"><br>
    
                <button type="submit" name="submit" class="btn btn-success" >kirim</button>
            </form>
        </div>
    </div>
</body>
</html>