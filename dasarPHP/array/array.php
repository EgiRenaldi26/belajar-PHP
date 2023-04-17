<?php

$buku = ["judul" , "author" , "terbit"];

echo $buku[0]. "<br>";
echo $buku[1]. "<br>";
echo $buku[2]. "<br>";

echo "<hr>";


$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}

?>