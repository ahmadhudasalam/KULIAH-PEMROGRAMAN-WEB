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
          <h1></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
              <h3 class="card-title"><strong>Tugas Praktikum</strong></h3>
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
                <strong>Kumpulan Tugas Tugas Praktikum Mandiri Pemrograman Web 2</strong>
                <br/>Source Code : <a href="https://github.com/ahmadhudasalam/Praktikum-web-2">Github</a>
                <ol class="list-group">
                  <li class="list-group-item">Praktikum 1 : Membuat array <a href="praktikum1.php">Data Nilai Siswa</a></li>
                  <li class="list-group-item">Praktikum 2 : Membuat <a href="praktikum2a.php">Form Belanja Online</a> menggunakan request post dan <a href="praktikum2b1.php">Form Nilai</a> menggunakan control logika</li>
                  <li class="list-group-item">Praktikum 3 : Membuat <a href="praktikum3/index.html">Template Web</a> menggunakan template admin</li>
                  <li class="list-group-item">Praktikum 4 : Membuat <a href="praktikum4b.php">Class Persegi Panjang</a></li>
                  <li class="list-group-item">Praktikum 5 : Membuat <a href="praktikum5.php">Class Dispenser</a></li>
              </ol>
              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" id="a"><strong>Tugas Project</strong></h3>

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
                <strong>Kumpulan Tugas Tugas Project Pemrograman Web 2</strong>
                <br/>Source Code : <a href="https://github.com/ahmadhudasalam/Praktikum-web-2">Github</a>
                <ol class="list-group">
                  <li class="list-group-item">Praktikum 1 : Implementasi OOP membuat <a href="project1.php">Kalkulator Sehat Menghitung BMI</a>
                  <p>Standar BMI disini tidak mengikuti yang ada di file tugas proyek, Melainkan mengikuti standar di <a href="https://hellosehat.com/">Helosehat</a></p>
                </li>
              </ol>
              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
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