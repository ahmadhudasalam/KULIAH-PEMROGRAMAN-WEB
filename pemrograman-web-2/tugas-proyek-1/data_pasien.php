<?php
    require_once 'class_pasien.php';
    require_once 'class_bmi.php';
    require_once 'class_bmipasien.php';

    $pasien1 = new Pasien('Ahmad', 'P001', 'L');
    $bmi1 = new BMI(69.8, 169);
    $bmi1->nilaiBMI();
    $bmi1->statusBMI();

    $pasien2 = new Pasien('Rina', 'P002', 'P');
    $bmi2 = new BMI(55.3, 165);
    $bmi2->nilaiBMI();
    $bmi2->statusBMI();

    $pasien3 = new Pasien('Lutfi', 'P003', 'L');
    $bmi3 = new BMI(45.2, 171);
    $bmi3->nilaiBMI();
    $bmi3->statusBMI();

    $bmipasien1 = new BMIPasien($bmi1, '2022-01-10', $pasien1);
    $bmipasien2 = new BMIPasien($bmi2, '2022-01-10', $pasien2);
    $bmipasien3 = new BMIPasien($bmi3, '2022-01-11', $pasien3);

    $ar_pasien = [$bmipasien1, $bmipasien2, $bmipasien3];
?>