<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="row justify-content-between">
        <div class="col-4">
            <img src="../foto/bck.png" class="foto">
            <h1 class="text-1">UKS</h1>
        </div>
    </div>
    <div class="rows d-flex justify-content-center ">
            <div class="col-7">
                <div class="boxs px-4 py-4">
                <img src="../foto/bck.png" class="img">
                    <h2 class="tes">Please create an account</h2>
                    <div class="kotak">
                    <form action="process.php" method="POST">
                        <label for="nama_lengkap" class="label">Nama lengkap</label><br>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="control" placeholder="Masukan Nama lengkap"><br><br>
                        
                        <label for="username" class="label">username</label><br>
                        <input type="text" id="username" name="username" class="control" placeholder="Masukan username"><br><br>

                        <label for="password" class="label">Konfirmasi Passowrd</label><br>
                        <input type="password" id="password" name="password" class="control" placeholder="Masukan Password"><br><br>
                        
                        <input type="hidden" name="roles" value="Siswa">

                        <p class="label">Already have an account? <a href="../login/index.php" class="label">Login</a></p>

                        <button type="submit" name="submit" class="tombol">Kirim</button><br><br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</html>