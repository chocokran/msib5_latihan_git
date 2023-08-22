<?php
    $nama = "Ali Dongan Harahap";
    $jurusan = "Informatika";
    $kampus = "Universitas Singaperbangsa Karawang";
    $hobi = "Rebahan";
    $cita = "Full-stack developer"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Ali</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(222, 234, 245);
        }
        svg{
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,192L0,128L110.8,128L110.8,0L221.5,0L221.5,160L332.3,160L332.3,96L443.1,96L443.1,96L553.8,96L553.8,224L664.6,224L664.6,64L775.4,64L775.4,320L886.2,320L886.2,288L996.9,288L996.9,128L1107.7,128L1107.7,32L1218.5,32L1218.5,224L1329.2,224L1329.2,288L1440,288L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path></svg>
    <div class="container text-center">       
        <div class="row justify-content-center pt-4" id="#">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Biodata</h1>
                        <img src="https://avatars.githubusercontent.com/u/100120568?v=4" class="img-fluid rounded-circle w-50 mb-3">
                        <h3><?= $nama ?></h3>
                        <h5 class="text-muted"><?= $jurusan ?></h5>
                        <p class="fs-5">Seorang mahasiswa dari <?= $kampus ?> yang memiliki hobi <?= $hobi ?> dan memiliki impian menjadi <?= $cita ?>.</p>
                        <div class="py-3">
                            <a href="https://www.facebook.com/alidongan.harahap" class="text-secondary text-decoration-none fs-5 me-4">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://github.com/chocokran" class="text-secondary text-decoration-none fs-5 me-4">
                                <i class="bi bi-github"></i>
                            </a>
                            <a href="https://www.instagram.com/choco.kran_/" class="text-secondary text-decoration-none fs-5 me-4">
                            <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>