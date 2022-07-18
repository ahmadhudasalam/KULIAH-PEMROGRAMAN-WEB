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
          <h1>Tugas Praktikum 4</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php">Tugas Praktikum</a></li>
            <li class="breadcrumb-item"><a href="praktikum4b.php">Praktikum 4</a></li>
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
              <form method="POST" action="praktikum4b.php">
                <div class="form-group row">
                  <label for="panjang" class="col-4 col-form-label text-end"><strong>Panjang</strong></label> 
                  <div class="col-8">
                    <input id="panjang" name="panjang" placeholder="Masukan Panjang" type="number" class="form-control" required="required">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lebar" class="col-4 col-form-label text-end"><strong>Lebar</strong></label> 
                  <div class="col-8">
                    <input id="lebar" name="lebar" placeholder="Masukan Lebar" type="number" class="form-control" required="required">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <input name="submit" type="submit" class="btn btn-primary" value="Hitung Luas dan Keliling"></input>
                  </div>
                </div>
              </form>
            </div><!-- /.card-body -->
            <div class="card-footer">
              <?php
                require_once "praktikum4a.php";
                if ($_POST) {
                  $submit = $_POST['submit'];

                  $hasil = new PersegiPanjang($_POST['panjang'],$_POST['lebar']);

                  if(!empty($submit)) {
                    echo '<br/>Luas : '.$hasil->getLuas();
                    echo '<br/>Keliling : '.$hasil->getKeliling();
                  }
                }
              ?>
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