<?php
// Static Member Class → ClassName::
// class Matematika
// {
//     public static $counter = 100;
//     public static function tambahkan($a , $b)
//     {
//         return $a + $b;
//     }
// }
// Matematika::$counter++;
// echo 'Counter Sekarang : '. Matematika::$counter;
// $x = Matematika::tambahkan(5,4);
// echo "<br/>";
// echo "<br/>5 + 4 = " . $x;



// Static Member Class → self::
// class Matematika
// {
//     public static $counter = 100;
//     public static function naikanCounter()
//     {
//         self::$counter++;
//     }
// }
// Matematika::naikanCounter();
// echo 'Counter Sekarang : '. Matematika::$counter;




// Konstanta Class → self::
// class Matematika
// {
//     const PHI = 3.14;
//     public static function luasLingkaran($jari)
//     {
//         $luas = self::PHI * pow($jari,2);
//         return $luas;
//     }
// }
// echo 'NILAI PHI '. Matematika::PHI ;
// $luasling = Matematika::luasLingkaran(8);
// echo '<br/>';
// echo 'Luas Lingkaran Jari2nya 8 = ' . $luasling;



// PHP :: Class Non Static
// class fruit
// {
//     // Properties
//     public $name;
//     public $color;

//     // Method
//     function set_name($name) {
//         $this->name = $name;
//     }
//     function get_name() {
//         return $this->name;
//     }
// }
// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');
// echo $apple->get_name();
// echo '<br/>';
// echo $banana->get_name();



// Member Class Variable → :: non static
// class NilaiSiswa
// {
//     public $nama;
//     public $nilai;
//     public $sekolah='TK Harapan Bunda';
// }
// $ns1 = new NilaiSiswa();
// $ns1->nama = 'Ahmad Huda Salam';
// $ns1->nilai = 30;
// echo $ns1->nama .' Sekolah di ' .$ns1->sekolah;



// Member Class Method → :: non static
// class NilaiSiswa {
//     public $nama;
//     public $nilai;
//     public $sekolah='TK Harapan Bunda';
//     public function getHasil()
//     {
//         If ($this->nilai > 55 ) return 'Lulus';
//         else return 'Tidak Lulus';
//     }
// }
// $ns1 = new NilaiSiswa();
// $ns1->nama = 'Ahmad Huda Salam';
// $ns1->nilai = 55;
// echo $ns1->nama .' Dinyatakan ' . $ns1->getHasil();



// Constructor Class
// class Fruit {
//     public $name;
//     public $color;

//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function get_name() {
//         return $this->name;
//     }
//     function get_color() {
//         return $this->color;
//     }
// }
// $apple = new Fruit("Apple", "Red");
// echo $apple->get_name();
// echo "<br/>";
// echo $apple->get_color();



class NilaiSiswa {
    public $nama;
    public $nilai;
    public $sekolah='TK Harapan Bunda';
    function __construct($nama, $nilai)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }
    public function getHasil()
    {
        if ($this->nilai > 55 ) return 'Lulus';
        else return 'Tidak Lulus';
    }
}
$ns1 = new NilaiSiswa('Ahmad',54);
$ns2 = new NilaiSiswa('Huda',56);
echo $ns1->nama .' : '. $ns1->getHasil();
echo "<br/>";
echo $ns2->nama .' : '. $ns2->getHasil();
?>