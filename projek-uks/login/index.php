<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="row justify-content-between">
        <div class="col-4">
            <h1 class="text-1"><img src="../foto/bck.png" width="150px">UKS</h1>
        </div>
    </div>
    <div class="rows d-flex justify-content-center ">
            <div class="col-7">
                <div class="boxs px-4 py-4">
                <img src="../foto/bck.png" class="img">
                    <h2 class="text-2">Welcome!</h2>
                    <h2 class="tes">Please login an account</h2>
                    <div class="kotak">
                    <form action="process.php" method="POST">
                        <label for="username" class="label">username</label><br>
                        <input type="text" name="username" id="username" class="control" placeholder="masukan Nama"><br><br>
                        
                        
                        <label for="password" class="label">passowrd</label><br>
                        <input type="password" name="password" id="password" class="control" placeholder="masukan password"><br><br>

                        <p class="label">Do You have an account? <a href="../register/index.php" class="label">Register</a></p>

                        <button type="submit" name="submit" class="tombol">Kirim</button><br><br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</html>