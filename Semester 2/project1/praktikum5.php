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
          <h1>Tugas Praktikum 5</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php">Tugas Praktikum</a></li>
            <li class="breadcrumb-item"><a href="praktikum5.php">Praktikum 5</a></li>
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
              <h3 class="card-title" id="tugas-praktikum"><strong>Class Dispenser</strong></h3>
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
                class Dispenser{
                  public $volumeGalon;
                  public $volumeGelas;
                  public $ambil;
                  public $sisaAir;

                  public function __construct($volumeGalon, $volumeGelas, $ambil, $harga){
                    $this->volumeGalon = $volumeGalon;
                    $this->volumeGelas = $volumeGelas;
                    $this->ambil = $ambil;
                    $this->harga = $harga;
                  }

                  public function sisaAir(){
                    $sisaAir = 19000 - (250 * $this->ambil);
                    echo '<br/>*Sisa air di Galon : '.$sisaAir;
                  }

                  public function bayar(){
                    $bayar = $this->ambil * 2000;
                    echo '<br/>Total yang harus dibayar : Rp. '.$bayar;

                  }
                }


                $beli = new Dispenser(19, 250, 15, 2000);
                echo '<h4>Volume Galon: '.$beli->volumeGalon.' L</h4>';
                echo '<h4>Volume Gelas: '.$beli->volumeGelas.' ml</h4>';
                echo '<h4>Harga: '.$beli->harga.' Rupiah</h4>';
                echo '<br/><br/><br/><strong>Ahmad membeli '.$beli->ambil.' Gelas untuk buka puasa dengan teman-temannya</strong>';
                echo $beli->bayar();
                echo $beli->sisaAir().' ml';
              ?>
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