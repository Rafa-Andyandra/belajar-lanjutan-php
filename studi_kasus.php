<?php
$umur = 23;

if ($umur < 10) {
    echo "kau sudah dewasa";
} else {
    echo "kamu masi kecil";
}

//studi kasus

$panjang = 22;
$lebar = 0.4;
$luas = $panjang * $lebar;
echo "luas persegi panjang adalah" . $luas . "<br/>";

//latihan

//buatkan code yang mwnghitung luas segitiga, dengan nilai alas = 11 dan tinggi = 7
$alas = 11;
$tinggi = 7;
$luas = $alas * $tinggi;
echo "luas segitiga adalah" . $luas . "<br/>";

//buatkan code program login dengan username = admin dan password xYe3ivmp2
$username = "admin";
$password = "xYe3ivmp2";
if (username == "admin" && $password == "xYe3ivmp2"){
    echo "login berhasil";
}else{
    echo "login gagal";
}
?>