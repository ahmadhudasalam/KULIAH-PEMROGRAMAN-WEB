<?php
// Membuat Fungsi
// function perkenalan(){
//     echo "Perkenalkan Nama Saya : Ahmad FF";
// }
// perkenalan();


// // Fungsi dengan Parameter
// function perkenalan($nama){
//     echo "Nama Saya ".$nama;
// }
// perkenalan("Ahmad FF");


// Parameter Deafult
function perkenalan($nama = "Ahmad FF"){
    echo "Nama : ".$nama;
}
perkenalan("Udin");
echo "<br/>";


// Fungsi Return
function luaspersegi($sisi){
    $rumus = pow($sisi,2);
    return $rumus;
}
echo "Luasnya : ".luaspersegi(9);
echo "<br/>";


// Fungsi Hitung Umur
function hitungumur($tahun_lahir,$tahun_sekarang){
    $umur = $tahun_sekarang - $tahun_sekarang;
}
echo "Umur Saya ".hitungumur(2002,2022)."tahun";


//Membuat Fungsi
function hitungluas($jari) {
    $luas_lingkaran = M_PI * pow($jari,2);
    return $luas_lingkaran;
}
echo number_format(hitungluas(7),2,',','.');
echo "<br/>Luas Lingkaran : ".number_format(hitungluas(14),2,',','.');
echo "<br/>Luas Lingkaran : ".number_format(hitungluas(21),2,',','.');


?>