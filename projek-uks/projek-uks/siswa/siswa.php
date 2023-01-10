<?php
require '../nav/navsiswa.php';
require 'function.php';

$produk = query("SELECT * FROM data_obat");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            padding:65px 125px;
        }
    
        .slide{
            padding-top: 50px;
        }
    </style>
</head>
<body>
<section class="slide">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../foto/776881.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../foto/megumi.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../foto/megumi.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br><br><br><br>

<section class="obat">
    <div class="container">
        <div class="row">
        <?php foreach($produk as $data) : ?>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center bg-secondary">
                <img src="../foto/<?= $data['foto'] ?>" class="img-fluid rounded-start" width="500px" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $data['nama_obat'] ?></h5>
                  <p class="card-text">Stok: <?= $data['stok'] ?></p>
                  <p class="card-text"><small class="text-muted"><?= $data['deskripsi'] ?></small></p>
                  <a href="ambilObat.php?id=<?= $data["id_obat"]; ?>" class="btn btn-success">Ambil</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>

</body>
</html>