<?php

    /*
        Veri Türleri (Data Types)
            String "tayfun erbilen" 'tayfun erbilen'
            Integer 500, 200
            Float (Double) 5.5, 7.2
            Boolean (true, false)
            Array (dizi)
            Object (Nesne)
            NULL
        gettype()
    */

    $string = "tayfun erbilen";
    $int = 500;
    $float = 5.5;
    $bool = false;
    $array = array();
    $object = new stdClass;
    $null = NULL;
    echo gettype($string);

?>
