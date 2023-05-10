<?php
function informasi($matkul, $materi="Review UTS"){
    echo "Helo,";
    echo "Saya Sedang Belajar". $matkul."<br/>";
    echo "Saat ini saya belajar menggunakan function". $materi."<br/>";
}
//memanggil fungsi yang sudah dibuat
informasi ("Pemrograman Berbasis Web","Function di PHP");

echo "<hr/>";

$matkul = "Basis Data";
$materi = "Instalasi DBMS";
//memanggil lagi 
informasi ($matkul);
?>