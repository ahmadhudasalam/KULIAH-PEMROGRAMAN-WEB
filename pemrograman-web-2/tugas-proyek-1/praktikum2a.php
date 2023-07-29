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
                    <h1>Tugas Praktikum 2a</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Tugas Praktikum</a></li>
                        <li class="breadcrumb-item"><a href="praktikum2a.php">Praktikum 2a</a></li>
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
                            <h3 class="card-title" id="tugas-praktikum"><strong>Form Belanja Online</strong></h3>
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
                            <div class="container">
                                <div class="row">
                                    <div class="col-8">
                                        <form method="POST" action="praktikum2a.php">
                                            <div class="form-group row">
                                                <label for="nama" class="col-4 col-form-label">Customer</label>
                                                <div class="col-8">
                                                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Customer" required="required">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label class="col-4">Pilih Produk</label> 
                                                <div class="col-8">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="Televisi" required="required"> 
                                                        <label for="radio_0" class="custom-control-label">TV</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                                                        <label for="radio_1" class="custom-control-label">Kulkas</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                                                        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                                <div class="col-8">
                                                    <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="Jumlah" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                    <input name="proses" type="submit" class="btn btn-success" value="Kirim"></input>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">Daftar Harga</div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item bg-light">TV : 4.200.000</li>
                                                    <li class="list-group-item bg-light">Kulkas : 3.100.000</li>
                                                    <li class="list-group-item bg-light">Mesin Cuci : 3.800.000</li>
                                                    <li class="list-group-item bg-primary">Harga Dapat Berubah Setiap Saat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <?php
                                if ($_POST) {
                                    $proses = $_POST['proses'];
                                    $nama_customer = $_POST['nama'];
                                    $produk_pilihan = $_POST['produk'];
                                    $jumlah_beli = $_POST['jumlah'];

                                    if ($produk_pilihan == "Televisi") {
                                        $total_belanja = $jumlah_beli * 4200000;
                                    } elseif ($produk_pilihan == "Kulkas") {
                                        $total_belanja = $jumlah_beli * 3100000;
                                    } elseif ($produk_pilihan == "Mesin Cuci" ) {
                                        $total_belanja = $jumlah_beli * 3800000;
                                    } else {
                                        $total_belanja = 0;
                                    }

                                    echo 'Nama Customer : '.$nama_customer;
                                    echo '<br/>Produk Pilihan : '.$produk_pilihan;
                                    echo '<br/>Jumlah Beli : '.$jumlah_beli;
                                    echo '<br/>Total Belanja : Rp. '.number_format($total_belanja,2,',','.');
                                }
                            ?>
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