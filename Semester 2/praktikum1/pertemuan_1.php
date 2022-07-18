<?php
  $nama = 'huda';
  $umur = 13;
  $berat = 45;

  echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;

  // Variable sistem
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // Variable konstan
  define('makanan', 'sushi');
  echo '<h1 style="color: blue">'.makanan.'</h1>';
  echo makanan;
?>