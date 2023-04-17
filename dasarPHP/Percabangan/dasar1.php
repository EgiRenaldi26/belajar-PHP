<?php

// IF ELSEIF ELSE
$nilai = 85;


if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "B";
} else {
    $grade = "C";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";


//penggunan variable tidak hanya diatas saja , melainkan bisa di dalam kurung kurawal
?>