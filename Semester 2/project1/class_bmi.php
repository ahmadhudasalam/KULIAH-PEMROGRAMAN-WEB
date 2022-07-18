<?php
    class BMI{
        public $berat;
        public $tinggi;

        function __construct($berat, $tinggi){
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }

        public function nilaiBMI(){
            return $this->berat / (pow(($this->tinggi / 100), 2));
            // $nilaiBMI = $this->berat / (($this->tinggi / 100) * ($this->tinggi / 100));
        }

        public function statusBMI(){
            $nilaiBMI = $this->nilaiBMI();
            if ($nilaiBMI < 18.5) return 'Kekurangan Berat badan';
            elseif ($nilaiBMI >= 18.5 && $nilaiBMI <= 23.9) return 'Normal (Ideal)';
            elseif ($nilaiBMI >= 24.0 && $nilaiBMI <= 26.9) return 'Kelebihan Berat Badan';
            elseif ($nilaiBMI >= 27.0 && $nilaiBMI <= 29.9) return 'Kegemukan (Obesitas 1)';
            elseif ($nilaiBMI >= 30.0) return 'Kegemukan (Obesitas 2)';
        }
    }
?>