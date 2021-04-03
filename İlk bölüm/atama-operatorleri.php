<?php

    /*
        Atama Operatörleri
            = değer atama
            += artırarak değer atama
            -= azaltarak değer atama
            /= bölerek değer atama
            *= çarparak değer atama
            %= modunu alarak değer atama
            . birleştirme operatörü
            .= birleştirerek değer atama
    */

    $a = 5;
    // $a += 5; // $a = $a + 5;
    // $a -= 5; // $a = $a - 5;
    // $a /= 5; // $a = $a / 5;
    //$a *= 5; // $a = $a * 5;
    $a %= 5; // $a = $a % 5;

    $ad = "Tayfun";
    $soyad = "Erbilen";

    //echo "Tayfun" . "Erbilen" . 24 . $ad . "tayfun" . $soyad;
    
    $ad .= " " . $soyad; // $ad = $ad . $soyad;
    echo $ad;

?>