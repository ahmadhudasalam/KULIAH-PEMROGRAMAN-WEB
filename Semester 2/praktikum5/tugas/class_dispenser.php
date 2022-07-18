<?php
class Dispenser{
    public $volumeGalon;
    public $volumeGelas;
    public $ambil;
    public $harga;

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
      echo '<br/>Total yang harus dibayar : '.$bayar;

    }
}


    $beli = new Dispenser(19, 250, 15, 2000);
    echo '<h4>Volume Galon: '.$beli->volumeGalon.' L</h4>';
    echo '<h4>Volume Gelas: '.$beli->volumeGelas.' ml</h4>';
    echo '<h4>Harga: '.$beli->harga.' Rupiah</h4>';
    echo '<br/><br/><br/><strong>Ahmad membeli '.$beli->ambil.' Gelas untuk buka puasa dengan teman-temannya</strong>';
    echo $beli->bayar().'Rupiah';
    echo $beli->sisaAir().' ml';

?>
