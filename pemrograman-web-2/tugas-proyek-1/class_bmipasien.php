<?php
    require_once 'class_pasien.php';
    require_once 'class_bmi.php';

    class BMIPasien{
        public $bmi;
        public $tgl_periksa;
        public $pasien;

        function __construct($bmi, $tgl_periksa, $pasien){
            $this->bmi = $bmi;
            $this->tgl_periksa = $tgl_periksa;
            $this->pasien = $pasien;
        }
    }
?>