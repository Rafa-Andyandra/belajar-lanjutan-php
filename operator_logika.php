<?php
//operator logika and, or & not
//yaitu dan, atau & bukan

$benar = true;
$salah = false;

$hasilDan = $benar && $salah; //hasilnya 0 atau kosong yaitu false(true jika kedua nya benar)
$hasilAtau = $benar|| $salah; //hasilnya 1 yaitu true (salah satu ada yang benar)
$hasilbukan = !benar; //hasilnya 1 yaitu benar

echo "hasil dan :" . $hasildan . "<br/>";
echo "hasil atau :" . $hasilatau . "<br/>";
echo "hasil bukan :" . $hasilbukan . "<br/>";
?>