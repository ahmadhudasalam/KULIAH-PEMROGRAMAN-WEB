<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja - PHP</title>
    <!--STYLE CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--START CARD-->
    <div class="col-4" style="float: right;">
        <div class="card">
            <div class="card-header bg-primary text-white">Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">TV : 4.200.000</li>
                    <li class="list-group-item bg-light">Kulkas : 3.100.000</li>
                    <li class="list-group-item bg-light">Mesin Cuci : 3.800.000</li>
                </ul>
            </div>
            <div class="card-footer bg-primary text-white">Harga Dapat Berubah Setiap Saat</div>
        </div>
    </div>
    <!--END CARD-->

    <!--START FORM-->
    <div class="col-8">
        <div class="header">
            <header class="border-bottom"><h3>Belanja Online</h3></header>
        </div>
        <div class="col-7 align-middle">
            <form method="POST" action="form_belanja.php">
                <div class="form-group row text-end mt-3">
                    <label for="nama" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-4 text-end">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="Televisi" required> 
                            <label for="radio_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required> 
                            <label for="radio_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required> 
                            <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row text-end mt-3">
                    <label for="text1" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-4">
                        <input id="text1" name="jumlah" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row mt-3 text-end col-5 mt-3">
                    <div class=" col-sm-12">
                        <input type="submit" class="btn btn-success" name="proses" value="Kirim"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--END FORM-->
    <hr/>

<!--PHP-->
<?php
// MENGAMBIL DATA
$proses = $_POST['proses'];
$nama_customer = $_POST['nama'];
$produk_pilihan = $_POST['produk'];
$jumlah_beli = $_POST['jumlah'];

// MENGHITUNG TOTAL BELANJA MENGGUNAKAN IF ELSE
if ($produk_pilihan == "Televisi") {
    $total_belanja = $jumlah_beli * 4200000;
} elseif ($produk_pilihan == "Kulkas") {
    $total_belanja = $jumlah_beli * 3100000;
} elseif ($produk_pilihan == "Mesin Cuci" ) {
    $total_belanja = $jumlah_beli * 3800000;
} else {
    $total_belanja = 0;
}

// MENGHITUNG TOTAL BELANJA MENGGUNAKAN SWITCH
// $total_belanja = "";
// switch ($produk_pilihan) {
//     case 'Televisi':
//         $total_belanja = $jumlah_beli * 4200000;
//         break;
//     case 'Kulkas':
//         $total_belanja = $jumlah_beli * 3100000;
//         break;
//     case 'Mesin Cuci':
//         $total_belanja = $jumlah_beli * 3800000;
//         break;
    
//     default:
//         $total_belanja = 0;
//         break;
// }

// MENCETAK HASIL
echo 'Nama Customer : '.$nama_customer;
echo '<br/>Produk Pilihan : '.$produk_pilihan;
echo '<br/>Jumlah Beli : '.$jumlah_beli;
echo '<br/>Total Belanja : Rp. '.number_format($total_belanja,2,',','.');
?>
<!--END PHP-->
</body>
</html>
