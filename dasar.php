<?php
// Variable
// $1nama; Contoh Salah (Karena diawali angka)
// $#nama; Contoh Salah (Ada simbol ditengah)
// nama; Contoh Salah (Tidak ada simbol $)
$nama = "Rizki";
$usia = 16;
echo "Nama saya $nama <br>";
echo "Usia saya $usia tahun";

// Tipe data (Integer, float, string)
// (Boolean, array)
$Namalengkap = "Rizki Giant 90";
$umur = 16; // integer
$nilai = 75.50; // Float
$jomblo = TRUE; // boolean (TRUE/FALSE)
// Array string
$namarpl1 = array("Alya", "Davit", "Eben");

echo "Nama lengkap : $Namalengkap <br>";
echo "Umur : $umur <br>";
echo "Nilai: $nilai <br>";
echo "Jomblo : $jomblo <br>";
echo "<hr>";
echo "Array 0 : $namarpl1[0] <br>"; // Alya
echo "Array 2 : $namarpl1[2] <br>"; // Eben

// Aritmatika (+ - / * %)
$angka1 = 10;
$angka2 = 5;
echo "<hr>";
echo "Tambah :" .$tambah = $angka1 + $angka2 . "<br>";
echo "Kurang :" .$kurang = $angka1 - $angka2 . "<br>";
echo "Bagi :" .$bagi = $angka1 / $angka2 . "<br>";
echo "Kali :" .$kali = $angka1 * $angka2 . "<br>";
echo "Sisa bagi :" .$sisabagi = $angka1 % $angka2 . "<br>";

?>