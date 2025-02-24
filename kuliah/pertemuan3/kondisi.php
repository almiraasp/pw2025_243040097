<?php
    $x = 31;
    echo "x = $x <br>";

    //Menggunakan statement IF-ELSE
    if ($x %2 == 0) {
        echo "$x adalah bilangan genap";
    }else {
        echo "$x adalah bilangan ganjil";
    }

    echo "<br><br>";

    //Menggunakan statement IF-ELSEIF-ELSE
    $tahun = "2019";
    if ($tahun == "2014") {
        echo "Sekarang adalah tahun 2014";
    }elseif ($tahun == "2017") {
        echo "Sekarang adalah tahun 2017";
    }elseif ($tahun == "2018") {
        echo "Sekarang adalah tahun 2018";
    }else {
        echo "Sekarang adalah tahun 2019"
    }

?>