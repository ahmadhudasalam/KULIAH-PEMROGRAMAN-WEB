<?php
require_once "class_mahasiswa.php";

$mhs1 = new Mahasiswa ("02011", "Faiz Fikri");
$mhs1->prodi = "TI";
$mhs1->thn_angkatan = 2012;
$mhs1->ipk = 3.8;

$mhs2 = new Mahasiswa ("02012", "Alissa Khairunnisa");
$mhs2->prodi = "TI";
$mhs2->thn_angkatan = 2012;
$mhs2->ipk = 3.9;

$mhs3 = new Mahasiswa ("01011", "Rosalie Naurah");
$mhs3->prodi = "SI";
$mhs3->thn_angkatan = 2010;
$mhs3->ipk = 3.46;

$mhs4 = new Mahasiswa ("01012", "Defghi Muhammad");
$mhs4->prodi = "SI";
$mhs4->thn_angkatan = 2010;
$mhs4->ipk  =3.2;

$arr_mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Review PHP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PHP5 OOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                        </form>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <table class="table table-striped table-bordered mt-3 mb-3">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Thn Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $counter = 1;
            foreach ($arr_mahasiswa as $mhs){
                echo '<tr><td>'.$counter.'</td>'.
                '<td>'.$mhs->nim.'</td>'.
                '<td>'.$mhs->nama.'</td>'.
                '<td>'.$mhs->prodi.'</td>'.
                '<td>'.$mhs->thn_angkatan.'</td>'.
                '<td>'.$mhs->ipk.'</td>'.
                '<td>'.$mhs->predikat_ipk().'</td>';
                $counter++;
            }
        ?>
        </tbody>
    </table>

    <footer class="border-top">
        <strong>Lab Pemrograman Web Lanjutan</strong>
        <br/>Mahasiswa: Ahmad Huda Salam
        <br/>STT•NF • Kampus B
    </footer>
</div>
</body>
</html>