<?php

/*
    print_r() = Diziyi daha insancıl (sade) şekilde çıkartır.
    var_dump() = Diziyi programlamatik şekilde çıkartır.
    explode() = Belirli bir karakter parçalayıp bir dizi haline getirir. (PARÇALAR)
    implode() = Belirli bir karakter seçilir ve diziyi elemanlarını birleştirir. (BİRLEŞTİRİR.)
    count() = Dizi içerisidnek aç tane elemanı olduğunu bulmamızı sağlar.
    is_array() = içerisine girilen dizinin dizi olup olmadığı kontrol edilir.
    shuffle() = Dizi her listelendiğin karışık şekilde listelenir. ****
    array_combine() = iki diziyi birleştirir. İlk dizi anahtar, ikinci dizide elemanlar olur.
    array_count_values() = Dizide tekrarlanan elemanların kaç kez tekrarlandığınu 
bulmak için kullanılır.
    array_flip() = Anahtarla değerlerin yerini değiştiri.
    array_key_exists() = Dizi içerisinde belirlediğiniz anahtarın olup olmadığı kontrol edilir.
*/
$arr = [
    "ad" => "kağan",
    "soyad" => "yüksel", 
    "yas" => 22
];
//print_r($arr);

echo("<pre>");
var_dump($arr);
echo("</pre>");

$test = "kağan,yüksel,udemy";
$arr = explode(',', $test); 
//print_r($arr);
$string = implode('|', $arr);
echo $string; 
echo ("<br>");
echo count($arr);  
echo $string; 
echo ("<br>");

if (is_array($string)) {
    echo "Bu bir dizidir.";
}else {
    echo "Bu bir dizi değildir.";
}
echo ("<br>");

$arr =  [1,2,3,4,5,6,7,8,9,10];
shuffle($arr); 
print_r($arr);
echo ("<br>");

$keys = ["ad", "soyad"];
$values = ["kağan", "yüksel"]; 
echo ("<br>");

$arr = array_combine($keys, $values);
print_r($arr); 
echo ("<br>");

$arr = ["kağan", "yüksel", "udemy", "kağan", "yüksel", "kağan"];
$arr2 = array_count_values($arr);
print_r($arr2);
echo "<br>";
$arr = [
    "ad" => "kağan",
    "soyad" => "yüksel", 
    "yas" => 22
];
$arr2 = array_flip($arr);
print_r($arr2);
echo "<br>";
$arr = [
    'ad' => 'tayfun',
    'a' => [
        'b' => [
            'c' => [
                'd' => 'e',
                'e' => 'f'
            ]
        ]
    ]
];
/*
if (array_key_exists('asd', $arr)) {
    echo "Böyle bir anahtar var";           iç içe fonksiyonlarda işe yaramıyor. Kendi fonksiyonumuzu oluşturmalıyız.
}else {
    echo "Böyle bir anahtar yok.";
} */

function _array_key_exists($cur_key, $arr){
    foreach ($arr as $key => $val){
        if ($key == $cur_key){
            return true;
        }
        if (is_array($val)){
            return _array_key_exists($cur_key, $val);
        }
    }
    return false;
}

if (_array_key_exists('e', $arr)){
    echo 'c anahtarı var!';
} else {
    echo 'c anahtarı yok!';
}

?>