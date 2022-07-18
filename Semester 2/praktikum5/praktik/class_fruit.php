<?php
// class Fruit{
//     public $name;
//     protected $color;
//     private $wight;
// }
// $mango = new Fruit();
// $mango->name = 'Mango'; //OK
// $mango->color = 'Yellow'; //ERROR
// $mango->weight = '300'; //ERROR
?>

<?php
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
// $mango->set_color('Yellow'); //ERROR
// $mango->set_weight('300'); //ERROR
?>

<?php
class Fruit {
    public $name;
    public $color;
    public function __construct($name,$color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Sub Class - Strawberry
// Strawberry is inherited from fruit
class Strawberry extends Fruit {
    public function message() {
        echo "Am i a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
$stawberry->intro();
?>