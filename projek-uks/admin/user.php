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

$user = query("SELECT * FROM user")


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
            width:1250px;
        }
    </style>
</head>
<body>
<?php require '../nav/navbar.php'?>
<div class="main">
    <h3>Data user</h3><br>
    <table>
        <tr>
            <th>no</th>
            <th>username</th>
            <th>nama lengkap</th>
            <th>password</th>
            <th>roles</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($user as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["username"] ?></td>
                <td><?= $data["nama_lengkap"] ?></td>
                <td><?= $data["password"] ?></td>
                <td><?= $data["roles"] ?></td>
                <td>
                    <a href="edit_user.php?id=<?= $data["id_user"]; ?>" class="btn btn-primary">Edit</a>
                    <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" class="btn btn-danger" onClick="return confirm('anda yakin ingin menghapus?')">hapus</a>
                </td>                
            </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>