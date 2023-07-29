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
                            <form class="form-horizontal" method="POST" action="praktikum2b2.php">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-4 col-form-label"><strong>Nama Lengkap</strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="select" class="col-sm-4 col-form-label">Select</label> 
                                    <div class="col-sm-4">
                                        <select id="select" name="matkul" class="custom-select">
                                            <option value="DDP" required>Dasar-Dasar Pemrograman</option>
                                            <option value="BD1" required>Basis Data I</option>
                                            <option value="WEB1" required>Pemrograman Web</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="uts" class="col-sm-4 col-form-label"><strong>Nilai UTS</strong></label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="uts" placeholder="Nilai UTS" min="0" max="100" name="nilai_uts" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="uas" class="col-sm-4 col-form-label"><strong>Nilai UAS</strong></label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="uas" placeholder="Nilai UAS" min="0" max="100" name="nilai_uas" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tugas" class="col-sm-4 col-form-label"><strong>Nilai Tugas/Praktikum</strong></label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="tugas" placeholder="Nilai Tugas" min="0" max="100" name="nilai_tugas" required>
                                    </div>
                                </div>
                                <div class="form-group row offset-4 col-8">
                                    <div class=" col-sm-12">
                                        <input type="submit" class="btn btn-primary" name="proses" value="Simpan"></input>
                                    </div>
                                </div>
                            </form>
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