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
                    <h1>Tugas Project 1</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Tugas Project</a></li>
                        <li class="breadcrumb-item"><a href="project1.php">Project 1</a></li>
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
                            <h3 class="card-title" id="tugas-praktikum"><strong>Kalkulator Body Mass Index</strong></h3>
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
                                include_once 'form_bmi.php';
                            ?>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th><th>Tanggal Periksa</th><th>Kode Pasien</th><th>Nama Pasien</th><th>Gender</th><th>Berat (kg)</th><th>Tinggi (cm)</th><th>Nilai BMI</th><th>Status BMI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once 'data_pasien.php';
                                            $nomor = 1;
                                            foreach($ar_pasien as $obj):
                                        ?>
                                        <tr>
                                            <td class="text-center"><?= $nomor++; ?></td>
                                            <td><?= $obj->tgl_periksa ?></td>
                                            <td><?= $obj->pasien->kode ?></td>
                                            <td><?= $obj->pasien->nama ?></td>
                                            <td class="text-center"><?= $obj->pasien->gender ?></td>
                                            <td class="text-center"><?= $obj->bmi->berat ?></td>
                                            <td class="text-center"><?= $obj->bmi->tinggi ?></td>
                                            <td class="text-center"><?= number_format($obj->bmi->nilaiBMI(),1) ?></td>
                                            <td><?= $obj->bmi->statusBMI() ?></td>
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