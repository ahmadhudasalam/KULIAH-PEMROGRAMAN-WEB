<?php
require_once 'class_account.php';
class BankAccount extends Account {
    // tambahkan data baru customer
    public $costumer;

    function __construct($no, $saldo_awal, $cust) {
        // panggil constructor parent class
        parent::__construct($no, $saldo_awal);
        $this->customer = $cust;

        // tulis ulang method cetak
        function cetak() {
            parent::cetak();
            echo ', Customer : '.$this->customer;
        }

        function transfer($obj_account, $uang) {
            $obj_account->deposit($uang);
            $this->withdraw($uang);
        }
    }
}

$ac1->deposit(1000000); // Ahmad nabung 1.000.000
$ac1->cetak();
$ac3->withdraw(2500000); // Budi tarik uang 2.500.000
?>