<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu"];
    array_unshift($ar_buah, 'rambutan');

    foreach ($ar_buah as $buah) {
      echo $buah;
      echo "<br />";
    }
  ?>

</body>
</html>