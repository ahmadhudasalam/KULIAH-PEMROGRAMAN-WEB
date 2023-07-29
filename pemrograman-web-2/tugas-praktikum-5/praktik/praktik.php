<?php
// Class Diagram - Visibility
// class Dispenser{
//     protected $volume;
//     protected $hargaSegelas;
//     private $volumeGelas;
//     public $namaMinuman;

//     public isi($vol){
//         $this->volume = $vol;
//     }
// }



// Access Modifier :: member class variabel
// class Fruit{
//     public $name;
//     protected $color;
//     private $wight;
// }
// $mango = new Fruit();
// $mango->name = 'Mango'; //OK
// $mango->color = 'Yellow'; //ERROR
// $mango->weight = '300'; //ERROR



// Access Modifier :: member class fungsi
// class Fruit{
//     public $name;
//     protected $color;
//     private $wight;

//     function set_name($n) { // a public function (deafult)
//         $this->name = $n;
//     }

//     function set_color($n) { // a protected function
//         $this->color = $n;
//     }

//     function set_weight($n) { // a private function
//         $this->weight = $n;
//     }
// }
// $mango = new Fruit();
// $mango->set_name('Mango'); //OK
// $mango->set_color('Yyellow'); //ERROR
// $mango->set_weight('300'); //ERROR




// Class Account (1) $ (2)
class Account {
    public $nomor;
    private $saldo;

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
$ac1 = new Account("020",4000);
$ac1->deposit(200);
$ac1->cetak();
$ac2 = new Account("045",2000);
$ac2->deposit(40);
$ac2->cetak();




// class Fruit {
//     public $name;
//     public $color;
//     public function __construct($name,$color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro() {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }



// Sub Class - Strawberry
// Strawberry is inherited from fruit
// class Strawberry extends Fruit {
//     public function message() {
//         echo "Am i a fruit or a berry? ";
//     }
// }
// $strawberry = new Strawberry("Strawberry", "Red");
// $strawberry->message();
// $stawberry->intro();




// Inheritance → :: extends
// require_once 'class_account.php';
// class BankAccount extends Account {
//     // tambahkan data baru customer
//     public $costumer;

//     function __construct($no, $saldo_awal, $cust) {
//         // panggil constructor parent class
//         parent::__construct($no, $saldo_awal);
//         $this->customer = $cust;

//         // tulis ukang method cetak
//         function cetak() {
//             parent::cetak();
//             echo ', Customer : '.$this->customer;
//         }

//         function transfer($obj_account, $uang) {
//             $obj_account->deposit($uang);
//             $this->withdraw($uang);
//         }
//     }
// }



// trait ToolsWeb{
//     public function cetakJudul($str){
//         echo "<h2>$str</h2>";
//     }

//     public function formatCetakUang($uang){
//         echo number_format($uang,0,",",".");
//     }
// }
// class Kasir {
//     use ToolsWeb;
//     public function cetak($customer,$uangbayar){
//         $this->cetakjudul("Pelanggan ".$customer);
//         $this->cetakFormatUang($uangbayar);
//     }
// }
// $kasir = new Kasir();
// $_customer = "Danira Lusi";
// $_uangbayar = 500000;
// $kasir->cetak($_customer,$uangbayar);



// Package -- Namespace
// tobe handle by framework on bootstrap file
// include_once 'keu\models\Account.php';
// use keu\models\Account;
// $ac1 = new Account('A001',5000);
// $ac1->cetak();




?>