<?php
include_once 'view/header.php';
include_once 'view/sidebar.php';

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
  ['nim'=>'0110221230','nama'=>'Ganesha Rianni Hans','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221239','nama'=>'Irfan Rian Fahmi','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221247','nama'=>'Muhammad Faris','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221232','nama'=>'Muhammad Firdaus','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221240','nama'=>'Muhammad Raihan','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221246','nama'=>'Muhammad Rijal Jiddan','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221235','nama'=>'Reyhan Aria Rahman','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221250','nama'=>'Rizkyatunnisa','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221241','nama'=>'Sandy Palendra','uts'=>95,'uas'=>93,'tugas'=>96],
  ['nim'=>'0110221249','nama'=>'Virgin Zahra Kuswandi','uts'=>95,'uas'=>93,'tugas'=>96]
]
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum 1</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php">Tugas Praktikum</a></li>
            <li class="breadcrumb-item"><a href="praktikum1.php">Praktikum 1</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" id="tugas-praktikum"><strong>Form Nilai Siswa</strong></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="table-dark">
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
                  </tbody>
                </table>
              </div>
            </div><!-- /.card-body -->
            <div class="card-footer">
                            
            </div><!-- /.card-footer-->
          </div><!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'view/footer.php';
?>