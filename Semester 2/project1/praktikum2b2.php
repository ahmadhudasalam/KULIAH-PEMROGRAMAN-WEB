<?php
include_once 'view/header.php';
include_once 'view/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum 2</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php">Tugas Praktikum</a></li>
            <li class="breadcrumb-item"><a href="praktikum2b1.php">Praktikum 2b</a></li>
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
              <?php
                $proses= $_POST['proses'];
                $nama_siswa = $_POST['nama'];
                $mata_kuliah = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];

                /* MENENTUKAN LULUS ATAU TIDAK MENGGUNAKAN IF ELSE
                SISWA DINYATAKAN LULUS JIKA NILAI TOTAL dengan presentase 30% UTS, 35% UAS dan TUGAS 35% melebihi 55*/
                $_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35); 
                if ($_nilai > 55) {
                  $status = 'Lulus';
                } else {
                  $status = 'Tidak Lulus';
                }

                // MENENTUKAN GRADE NILAI MENGGUNAKAN SYNTAX IF ELSE MULTIKONDISI
                if ($_nilai <= 35) {
                  $grade = 'E';
                } elseif ($_nilai >= 35 && $_nilai <= 55 ) {
                  $grade = 'D';
                } elseif ($_nilai >= 56 && $_nilai <= 69 ) {
                  $grade = 'C';
                } elseif ($_nilai >= 70 && $_nilai <= 84 ) {
                  $grade = 'B';
                } elseif ($_nilai >= 85 && $_nilai <= 100 ) {
                  $grade = 'A';
                } else {
                  $grade = 'I';
                }

                // MENENTUKAN PREDIKAT NILAI MENGGUNAKAN SYNTAX SWITCH
                switch ($grade) {
                  case 'E':
                    $predikat = 'Sangat Kurang';
                    break;
                  case 'D':
                    $predikat = 'Kurang';
                    break;
                  case 'C':
                    $predikat = 'Cukup';
                    break;
                  case 'B':
                    $predikat = 'Memuaskan';
                    break;
                  case 'A':
                    $predikat = 'Sangat Memuaskan';
                    break;
                  default:
                    $predikat = 'Tidak Ada';
                    break;
                }

                if(!empty($proses)) {
                  echo 'Proses : '.$proses;
                  echo '<br/>Nama : '.$nama_siswa;
                  echo '<br/>Mata Kuliah : '.$mata_kuliah;
                  echo '<br/>Nilai UTS : '.$nilai_uts;
                  echo '<br/>Nilai UAS : '.$nilai_uas;
                  echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
                  echo '<br/>Nilai Akhir : '.number_format($_nilai,2);
                  echo '<br/>Status : '.$status;
                  echo '<br>Grade : '.$grade;
                  echo '<br/>Predikat : '.$predikat;
                }
              ?>
              
              <div class="text-center">
                <a class="nav-link" href="praktikum2b1.php">Ingin input nilai siswa lagi?</a>
              </div>
            </div><!-- /.card-body -->
            <div class="card-footer">
            </div><!-- /.card-footer-->
          </div><!-- /.card -->
        </div>
      </div>
    </div>
  </section><!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'view/footer.php';
?>