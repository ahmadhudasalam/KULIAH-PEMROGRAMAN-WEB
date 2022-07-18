<?php
class Account {
    public $nomor;
    protected $saldo;

    function __construct($no,$saldo)
    {
        $this->nomor = $no;
        $this->saldo = $saldo;
    }
    public function deposit($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }
    public function withdraw($uang)
    {
        $this->saldo = $this->saldo - $uang;
    }
    public function cetak() {
        echo 'Nomor '.$this->nomor.
        ',sadonya : '.$this->saldo;
    }
}
$ac1 = new Account("C001", 6000000);
$ac2 = new Account("C002", 5350000);
$ac2 = new Account("C003", 2500000);
?>