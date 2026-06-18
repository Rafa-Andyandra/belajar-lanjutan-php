<?php
$siswa = array ("nama" => " anita", "usia" => " 19", "kelas" => " XII", "jurusan" => " XRPL");

echo "nama" . $siswa["nama"] . "<br/>";
echo "usia" . $siswa["usia"] . " tahun <br/>";
echo "kelas" . $siswa["kelas"] . "<br/>";
echo "jurusan" . $siswa["jurusan"] . "<br/>";

$buah = array("Apel", "Kesemek", "Sirsak", "Anggur");

foreach ($buah as $item) {
    echo "buah: " . $item . "<br/>";
}
?>