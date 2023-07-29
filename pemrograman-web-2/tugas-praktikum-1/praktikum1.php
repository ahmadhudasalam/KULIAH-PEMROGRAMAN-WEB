<?php
    $ti10 = [
        ['nim'=>'0110221243','nama'=>'Afifah Pertiwi','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221238','nama'=>'Ahmad Huda Salam','uts'=>45,'uas'=>50,'tugas'=>20],
        ['nim'=>'0110221244','nama'=>'Aulia Rohmatul Hasanah','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221233','nama'=>'Devandio Naifal Zuhair','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221237','nama'=>'Dwi Annisa Maharani','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221248','nama'=>'Faiz Dziaulhaq','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221236','nama'=>'Fakhirul Akmal','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221236','nama'=>'Fauzan Rizqi Ardiansyah','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221242','nama'=>'Fayyaza Naira Rifdah','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221234','nama'=>'Feni Azriani','uts'=>95,'uas'=>93,'tugas'=>96],
    ]
?>

<!DOCTYPE html>
<head>
    <title>Praktikum 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h3 class="text-center">Daftar Nilai Mahasiswa TI-10</h3>
    <table class="table table-dark table-hover" style="width: 95%; margin: auto;">
        <thead>
        <tr>
            <th class="text-center">No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th class="text-center">UTS</th>
            <th class="text-center">UAS</th>
            <th class="text-center">Tugas</th>
            <th class="text-center">Nilai Akhir</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $nomor = 1; //nomor urut
            foreach ($ti10 as $ns):
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3; //rumus nilai akhir ?>
            <tr>
                <td class="text-center"><?= $nomor++; //nomor + 1 ?></td>
                <td><?= $ns["nim"] ?></td>
                <td><?= $ns["nama"] ?></td>
                <td class="text-center"><?= $ns["uts"] ?></td>
                <td class="text-center"><?= $ns["uas"] ?></td>
                <td class="text-center"><?= $ns["tugas"] ?></td>
                <td class="text-center"><?= number_format($nilai_akhir,2,',','.'); //dua angka dibelakang koma ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <nav aria-label="Page navigation example" style="margin-top: 1em;">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">Previous</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="praktikum1-page2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="praktikum1-page2.php">Next</a></li>
        </ul>
    </nav>
</body>
</html>