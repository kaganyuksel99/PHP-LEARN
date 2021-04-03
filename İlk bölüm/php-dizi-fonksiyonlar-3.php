<?php

/*
    array_values() : Bir dizideki değerleri yeni oluşturulan diziye aktarıyor.
    array_push() : Dizinin sonuna yeni bir eleman eklemek için kullanılır.
    array_unshift() : Dizinin başına yeni eleman eklemek için kullanılır.
    array_keys() : Dizinin anahtarlarını listelemek için kullanılır.
    current() : Dizinin ilk elemanını bulmamıza yarıyor.
    end() : Dizinin son elemanını bulmamıza yarıyor.
    next() : Dizide sonraki elemanı bulmak için kullanılır.
    prev() : Dizide önceki elemanı bulmak için kullanılır.
    reset() : Sıfırlar 
    extract() : **** dizideki anahtarları değişken olarak alınmasını sağlar. echo $ad;
    asort() : küçükten büyüğe - a'dan z'ye sıralar (elemanları)
    arsort() : büyükten küçüğe - z'den a'ya sıralar (elemanları)
    ksort() : küçükten büyüğe - a'dan z'ye sıralar (anahtarlar)
    krsort() : büyükten küçüğe - z'den a'ya sıralar (anahtarlar)
*/

$arr = [
    'ad' => 'kağan',
    'soyad' => 'yüksel'
];

$arr2 = array_values($arr);
$arr = ['kağan','yüksel','kağan','yüksel','udemy'];
//print_r($arr);
$arr2 = array_unique($arr); // array_unique kullanarak tekrarlananları siliyoruz.
print_r(array_values($arr2));    // **** array_unique ile silim işlemi yapıldığında anahtar numaraları karışık oluyor. ekrana yazdırırken array_values kullanıldığında sıralama doğru oluyor.

echo "<br>";
$arr3 = ["ad", "soyad"];
array_push($arr3, "eposta");  // Dizinin sonuna eleman ekleme
$arr3 = ["yeni değer"];
print_r($arr3); 

echo "<br>"; 
$arr = ["kağan", "yüksel"]; 
array_unshift($arr, "dijinom"); 
print_r($arr);  

echo "<br>"; 

echo "<pre>";
$arr = [
    "ad" => "kağan",
    "soyad" => "yüksel", 
    "a" => [
        "b" => "c",
        "d" => [
            "e" => "f"
        ]
    ] 
];

$keys = array_keys($arr); 

function _array_keys($arr)
{
    static $keys = []; // static olarak tanımlandığında sadece a'yı almayacak.
    foreach ($arr as $key => $val) { //static yazılmadığında sadece içerideki a anahtarını aldı
        array_push($keys, $key); 
        if (is_array($val)){
            return _array_keys($val);
        }
    }
    return $keys;
}
$keys = _array_keys($arr);
//print_r($keys); 
$arr = ["kağan", "yüksel", "udemy", "tekiradağ", "asd"]; 
// echo current($arr); 
// echo next($arr);
// echo next($arr);
// echo end($arr);  

$arr = [
    "ad" => "kağan", 
    "soyad" => "yüksel"
];
extract($arr);
// echo $ad ; 

$arr = [1,5,2,9];
// asort($arr);
// print_r($arr);

?>
