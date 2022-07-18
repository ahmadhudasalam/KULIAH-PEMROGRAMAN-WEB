<?php
    //Membuat Fungsi
    function hitungluas($jari) {
        $luas_lingkaran = M_PI * pow($jari,2);
        return $luas_lingkaran;
    }

    //Memanggil Fungsi
    echo number_format(hitungluas(7),2,',','.');
    echo '<br/><br/>'.number_format(hitungluas(7),2,',','.');
    echo '<br/><br/>'.number_format(hitungluas(21),2,',','.');
?>