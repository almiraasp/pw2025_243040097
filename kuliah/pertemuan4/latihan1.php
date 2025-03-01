<?php

//PENGULANGAN / LOOP / LOOPING
//while
//komponen while
//1. nilai awal (inisialisasi)
//2. kondisi terminasi (kapan harus berhenti)
//3. increment / deckerment

$i = 5;
while ($i >= 1) {
    echo "Hello World! $i x <br>";
    $i = $i - 1;
}

echo "<hr>";

//FOR
//for(nilai_awal; kondisi; inc) {
//aksi 
//}

$j = 1;
for ($j; $j <= 10; $j++) {
    echo "Hello World $j x <br>";
}
