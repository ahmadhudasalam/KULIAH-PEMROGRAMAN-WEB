<!--ARRAY PHP-->
<?php
    $ti10 = [
        ['nim'=>'0110221230','nama'=>'Ganesha Rianni Hans','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221239','nama'=>'Irfan Rian Fahmi','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221247','nama'=>'Muhammad Faris','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221232','nama'=>'Muhammad Firdaus','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221240','nama'=>'Muhammad Raihan','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221246','nama'=>'Muhammad Rijal Jiddan','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221235','nama'=>'Reyhan Aria Rahman','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221250','nama'=>'Rizkyatunnisa','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221241','nama'=>'Sandy Palendra','uts'=>95,'uas'=>93,'tugas'=>96],
        ['nim'=>'0110221249','nama'=>'Virgin Zahra Kuswandi','uts'=>95,'uas'=>93,'tugas'=>96],
    ]
?>

<!--HTML-->
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
            $nomor = 11; //nomor urut
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
        </tbody>
    </table>

    <nav aria-label="Page navigation example" style="margin-top: 1em;">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="praktikum1.php">Previous</a></li>
            <li class="page-item"><a class="page-link" href="praktikum1.php">1</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</body>
</html>