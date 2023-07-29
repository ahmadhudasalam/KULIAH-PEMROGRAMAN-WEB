<?php
    function kelulusan($_nilai) {
        if ($_nilai > 55 ){
            return 'LULUS';
        } else {
            return 'TIDAK LULUS';
    }
}
?>

<?php
// letakan di paling atas file
    require_once 'libfungsi.php';

        // kode lainnya logik program anda
        // $_nilai = total nilai

    $hasil_ujian = kelulusan($_nilai)
    echo 'DINYATAKAN ' . $hasil_ujian;
?>

<?php
    function kelulusan($_nilai) {
        // isi fungsi kelulusan
        $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35); 
            if ($nilai_akhir > 55) {
            $status = 'Lulus';
            } else {
            $status = 'Tidak Lulus';
            }
    }

    function grade($_nilai) {
        // isi fungsi grade
        if ($nilai_akhir <= 35) {
            $grade = 'E';
        } elseif ($nilai_akhir >= 35 && $nilai_akhir <= 55 ) {
            $grade = 'D';
        } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69 ) {
            $grade = 'C';
        } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84 ) {
            $grade = 'B';
        } elseif ($nilai_akhir >= 85 && $nilai_akhir <= 100 ) {
            $grade = 'A';
        } else {
            $grade = 'I';
        }        
    }

    function predikat($_grade) { // argumen nya E,D,C,B,A
        // isi fungsi predikat
        switch ($grade) {
            case 'E':
                $predikat = 'Sangat Kurang';
                break;
            case 'D':
                $predikat = 'Kurang';
                break;
            case 'C':
                $predikat = 'Cukup';
                break;
            case 'B':
                $predikat = 'Memuaskan';
                break;
            case 'A':
                $predikat = 'Sangat Memuaskan';
                break;
            default:
                $predikat = 'Tidak Ada';
                break;
        }
    }
?>