<?php
$matriks = array(
    array(4, 9, 11),
    array(9, 0.2, 1),
    array(5, 10, 3)
);

echo $matriks[2][1];

"<br/>";

$matriks1 = array (
    array(8, 3, 0),
    array(11, 5, 2)
);

$barisBaru = array(7, 3, 1);
array_push($matriks1, $barisBaru);

echo array_push($matriks, $barisBaru);

$buah = array("Apel", "Kelengkeng", "Jambu");
$buah_str = serialize($buah);
$buah_kembali = unserialize($buah_str);
?>