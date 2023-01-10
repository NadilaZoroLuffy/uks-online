<?php
require 'function.php';
require '../nav/navsiswa.php';

$id = $_GET["id"];
$obat = query("SELECT * FROM data_obat WHERE id_obat = '$id'")[0];

if(isset($_POST["submit"])){
    if(ambilObat($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('permintaan anda berhasil dikirim, silahkan tunggu diverifikasi');
            window.location = 'obat.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('permintaan anda gagal dikirim, mohon ulangi pengambilan obat');
            window.location = 'obat.php';
        </script>
    ";
    }
}

    
date_default_timezone_set('Asia/Jakarta');

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
        <div class="box">
            <h3>Ambil obat</h3>
    
            <form action="" method="POST" enctype="multipart/form-data">

                <label for="nama_lengkap">nama lengkap</label><br>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br>
    
                <label for="kelas">kelas</label><br>
                <input type="text" name="kelas" id="kelas" class="form-control"><br>

                <label for="nama_obat">nama obat</label><br>
                <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?= $obat["nama_obat"]; ?>" readonly><br>
    
                <label for="jenis_obat">jenis obat</label><br>
                <input type="text" name="jenis_obat" id="jenis_obat" class="form-control" value="<?= $obat["jenis"]; ?>" readonly><br>

                <label for="jumlah_obat">jumlah obat</label><br>
                <input type="text" name="jumlah_obat" id="jumlah_obat" class="form-control"><br>

                <label for="waktu_pengambilan">waktu pengambilan</label><br>
                <input type="text" name="waktu_pengambilan" id="waktu_pengambilan" class="form-control" readonly value="<?php echo $date->format('d-m-Y : H:i:s'); // 21-01-2017 05:13:03 ?>"><br>

                <input type="hidden" name="status" id="status" value="proses" class="form-control"><br>

                <button type="submit" name="submit" class="btn btn-success" >kirim</button>
            </form>
        </div>
    </div>
</body>
</html>