<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai - PHP</title>
    <!--STYLE CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--START HEADER-->
    <header class="border-bottom bg-light"><h5>Sistem Penilaian</h5></header>
    <!--END HEADER-->

    <!--START FORM-->
    <div class="card" style="border-style: none;">
        <div class="card-header bg-white"><h3>Form Nilai Siswa</h3></div>
        <div class="card-body col-12 text-end align-middle">
            <form class="form-horizontal" method="POST" action="nilai_siswa.php">
                <div class="form-group row mt-3">
                <label for="nama" class="col-sm-4 col-form-label"><strong>Nama Lengkap</strong></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
                    </div>
                </div>
                <div class="form-group row mt-3">
                <label for="matkul" class="col-sm-4 col-form-label"><strong>Mata Kuliah</strong></label>
                    <div class="col-sm-4">
                        <select class="form-select" name="matkul">
                            <option value="DDP" required>Dasar-Dasar Pemrograman</option>
                            <option value="BD1" required>Basis Data I</option>
                            <option value="WEB1" required>Pemrograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                <label for="uts" class="col-sm-4 col-form-label"><strong>Nilai UTS</strong></label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="uts" placeholder="Nilai UTS" min="0" max="100" name="nilai_uts" required>
                    </div>
                </div>
                <div class="form-group row mt-3">
                <label for="uas" class="col-sm-4 col-form-label"><strong>Nilai UAS</strong></label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="uas" placeholder="Nilai UAS" min="0" max="100" name="nilai_uas" required>
                    </div>
                    </div>
                <div class="form-group row mt-3">
                <label for="tugas" class="col-sm-4 col-form-label"><strong>Nilai Tugas/Praktikum</strong></label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="tugas" placeholder="Nilai Tugas" min="0" max="100" name="nilai_tugas" required>
                    </div>
                </div>
                <div class="form-group row mt-3 text-end col-5">
                    <div class=" col-sm-12">
                        <input type="submit" class="btn btn-primary" name="proses" value="Simpan"></input>
                    </div>
                </div>
            </form>
            <?php
            // $proses = $_GET['proses'];
            // $nama_siswa = $_GET['nama'];
            // $mata_kuliah = $_GET['matkul'];
            // $nilai_uts = $_GET['nilai_uts'];
            // $nilai_uas = $_GET['nilai_uas'];
            // $nilai_tugas = $_GET['nilai_tugas'];

            // echo 'Proses : '.$proses;
            // echo '<br/>Nama : '.$nama_siswa;
            // echo '<br/>Mata Kuliah : '.$mata_kuliah;
            // echo '<br/>Nilai UTS : '.$nilai_uts;
            // echo '<br/>Nilai UAS : '.$nilai_uas;
            // echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
            // ?>
        </div>
    </div>
    <!--END FORM-->

    <!--START FOOTER-->
    <footer class="border-top bg-light mt-3"><h5>Develop By @rojulman ©2017</h5></footer>
    <!--END FOOTER-->
</body>
</html>