<?php
// require_once "class_persegipanjang.php";
// $persegipanjang1 = new PersegiPanjang(4,2);
// $persegipanjang2 = new PersegiPanjang(8,14);
// echo "<br/>Luas Persegi Panjang I ".$persegipanjang1->getLuas();
// echo "<br/><br/>Keliling Persegi Panjang I ".$persegipanjang1->getKeliling();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas dan Keliling Persegi Panjang - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="card card-body">
        <form method="POST" action="data_persegipanjang.php">
            <div class="form-group row">
                <label for="panjang" class="col-4 col-form-label text-end"><strong>Panjang</strong></label> 
                <div class="col-4">
                    <input id="panjang" name="panjang" placeholder="Masukan Panjang" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-4 col-form-label text-end"><strong>Lebar</strong></label> 
                <div class="col-4">
                    <input id="lebar" name="lebar" placeholder="Masukan Lebar" type="number" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input name="submit" type="submit" class="btn btn-primary" value="Hitung Luas dan Keliling"></input>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <?php
        require_once "class_persegipanjang.php";
        $submit = $_POST['submit'];

        $hasil = new PersegiPanjang($_POST['panjang'],$_POST['lebar']);

        if(!empty($submit)) {
            echo '<br/>Luas : '.$hasil->getLuas();
            echo '<br/>Keliling : '.$hasil->getKeliling();
        }
        ?>
    </div>
</body>
</html>