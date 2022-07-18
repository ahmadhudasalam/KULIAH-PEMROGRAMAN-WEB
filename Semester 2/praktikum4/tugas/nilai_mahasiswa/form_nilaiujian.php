<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
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
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </nav>

    <h3 class="border-bottom" style="margin: 1em 1.5em">Form Nilai Ujian</h3>

    <div class="container mt-2 mb-2">
        <form class="border-bottom" method="POST" action="form_nilaiujian.php">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label text-end"><strong>NIM</strong></label> 
                <div class="col-4">
                    <input id="text" name="nim" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label text-end"><strong>Mata Kuliah</strong></label> 
                <div class="col-4">
                    <select id="select" name="matakuliah" class="custom-select" required="required">
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Statistik & Probabilitas">Statistik & Probabilitas</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="UI/UX">UI/UX</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label text-end"><strong>Nilai</strong></label> 
                <div class="col-4">
                    <input id="text1" name="nilai" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input name="submit" type="submit" class="btn btn-success" value="Simpan"></input>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <?php
        require_once "class_nilaimahasiswa.php";

        $submit = $_POST['submit'];

        $hasil = new NilaiMahasiswa($_POST['nim'], $_POST['matakuliah'], $_POST['nilai']);

        if(!empty($submit)) {
            echo 'NIM : '.$hasil->nim;
            echo '<br/>Nama Mata Kuliah : '.$hasil->matakuliah;
            echo '<br/>Nilai : '.$hasil->nilai;
            echo '<br/>Hasil Ujian : '.$hasil->grade();
            echo '<br/>Grade : '.$hasil->kelulusan();
        }
        ?>
    </div>

    <footer class="border-top">
        <strong>Lab Pemrograman Web Lanjutan</strong>
        <br/>Mahasiswa: Ahmad Huda Salam
        <br/>STT•NF • Kampus B
    </footer>
</div>
</body>
</html>