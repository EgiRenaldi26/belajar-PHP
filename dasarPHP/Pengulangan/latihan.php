<?php 
//pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array 

//for ( inisialisasi , kondisi terminasi ,  increment decrement)
for ( $i = 0; $i < 5; $i ++) {
    echo "Ini Menggunakan For <br>";
}

//while 
$i = 0; //nilai awal adalah 0

while( $i < 5) {  //apakah 0 lebih kecil dari 5? jika iya, maka lakukan print hello world

    echo "ini Menggunakan While <br>";

$i ++;
}


//do.. while
$i = 0;
do {

    echo "Ini Menggunakan do.. while";

$i ++;
} while ( $i < 5  );


?> 

