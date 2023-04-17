<!-- [ Berikut ini adalah contoh studi kasus sederhana yang dapat diimplementasikan dalam bahasa PHP:

Seorang pengusaha ingin membuat program yang dapat menghitung jumlah total gaji karyawan bulanan di perusahaannya. Program tersebut harus dapat menghitung gaji pokok karyawan dan tambahan gaji berdasarkan jam kerja yang dilakukan oleh karyawan.

Kriteria gaji karyawan:

- Gaji pokok karyawan adalah Rp 5.000.000 per bulan.
- Karyawan akan mendapatkan tambahan gaji sebesar Rp 50.000 per jam kerja.
- Karyawan yang bekerja selama 8 jam atau lebih akan mendapatkan tambahan gaji sebesar Rp 500.000 per bulan.
Dari studi kasus di atas, kita dapat membuat program PHP dengan langkah-langkah berikut:

Deklarasikan variabel $gajiPokok dengan nilai 5000000 sebagai gaji pokok karyawan.
Deklarasikan variabel $jamKerja dengan nilai 160 sebagai total jam kerja karyawan dalam sebulan.
Hitung total gaji berdasarkan rumus:
- Jika jam kerja kurang dari 8 jam, maka total gaji = gaji pokok + (jam kerja x tambahan gaji per jam).
- Jika jam kerja 8 jam atau lebih, maka total gaji = gaji pokok + (jam kerja x tambahan gaji per jam) + tambahan gaji 8 jam.
- Tampilkan pesan dengan nilai gaji karyawan bulanan.
Contoh implementasi program PHP untuk studi kasus di atas:] -->

<?php
$gajiPokok = 5000000;
$jamKerja = 160;
$tambahanGajiPerJam = 50000;
$tambahanGaji8Jam = 500000;

if ($jamKerja < 8) {
    $totalGaji = $gajiPokok + ($jamKerja * $tambahanGajiPerJam);
} else {
    $totalGaji = $gajiPokok + ($jamKerja * $tambahanGajiPerJam) + $tambahanGaji8Jam;
}
echo "Setelah hasil di hitung maka : <br>";
echo "Total gaji karyawan bulanan adalah: Rp " . number_format($totalGaji, 0, ',', '.');
?>