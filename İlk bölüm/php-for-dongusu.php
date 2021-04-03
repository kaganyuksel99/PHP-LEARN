<?php

/*
    for(DEĞER; KOŞUL; DEĞERİ ARTIR/AZALT){

    }
    */

    for ($i = 1; $i <= 10; $i++){
        echo $i . '<br>';
    }

    for($i = 10; $i > 0; $i--){
        echo $i . '<br>';
    }

    $arr = [
        'udemy',
        'prototurk',
        '93academy',
        'erbilen.net'
    ];

    for ($i = 0; $i <= (count($arr) - 1); $i++){
        echo $arr[$i] . '<br>';
    }

    for ($i = (count($arr) - 1); $i >= 0; $i--){
        echo $arr[$i] . '<br>';
    }

    for ($i = 1; $i <= 10; $i++)
        echo $i . '<br>';

    for ($i = 1; $i <= 10; $i++):
        if ($i == 3) continue; // 3 ' gelindiğinde es geç ve 4ten devam et'
        echo $i . '<br>';
        if ($i == 6) break;
    endfor;

?>
