<?php
require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('silahkan login terlebih dahulu')
            window.location: '../login/index.php';
        </script>
    ";
}

$obat = query("SELECT * FROM data_obat")


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            padding:65px 125px;
        }
        table{
            width:1200px;
        }
    </style>
</head>
<body>
<?php require '../nav/navbar.php'?>
<div class="main">
    <h3>Data obat</h3><br>
    <a href="tambah_obat.php" class="btn btn-primary">tambah obat</a>
    <table >
        <tr>
            <th>no</th>
            <th>nama obat</th>
            <th>foto</th>
            <th>jenis</th>
            <th>stok</th>
            <th>deskripsi</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($obat as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_obat"] ?></td>
                <td class="foto"><img src="../foto/<?= $data["foto"] ?>" width="50px" alt=""></td>
                <td><?= $data["jenis"] ?></td>
                <td><?= $data["stok"] ?></td>
                <td><?= $data["deskripsi"] ?></td>
                <td>
                    <a href="edit_obat.php?id=<?= $data["id_obat"]; ?>" class="btn btn-primary">Edit</a>
                    <a href="hapus_obat.php?id=<?= $data["id_obat"]; ?>"class="btn btn-danger" onClick="return confirm('anda yakin ingin menghapus?')">hapus</a>
                </td>                
            </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>