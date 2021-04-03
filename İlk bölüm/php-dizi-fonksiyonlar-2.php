<?php

/*
    array_map() : Dizi içerisinde her elemanın değerini alır bir manipilayson içerisinde geri döndürür.
    array_filter()
    array_merge() : İki dizi birleştirmek için kullanılırç
    array_rand() : Rastgele içerisinden değer seçmek için kullanlır.
    array_reverse() : Diziyi testen yazdırmak için kullanırız.
    array_search() : Dizide değer aramak için kullanılır. Eğer değer varsa değerin anahtarını bize geri döndürür.
    in_array() : Değerin olup olmadığını kontrol ediyoruz. Ayrıca iç içe dizilerde içteki dizinin dizi olup olmadığı kontrol edilir.
    array_shift() : Dizinin ilk elemanını siler. 
    array_pop() : Dizinin son elemanını siler.
    array_slice() : Dizide iistenilen bölümdeki elemanları listeler
    array_sum() : Dizinin değerlerinin toplamı
    array_product() : Dizinin değerlerinin çarpımı
    array_unique() : Dizide tekrarlanan değerleri siler.
*/

function filtrele($val){
    return $val . ' -';
}

$arr = [1,2,3,4,5];
$arr2 = array_map('filtrele', $arr);
$arr2 = array_map(function($val){
    return $val . ' -';
}, $arr);
//print_r($arr2);

$arr = [1,2,3,4,5];
$arr2 = array_filter($arr, function($item){
    return $item > 2 && $item < 5;
});
$arr2 = array_map(function($val){
    if ($val > 2 && $val < 5){
        return $val;
    }
}, $arr);
//print_r($arr2);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr = array_merge($arr1, $arr2);
//print_r($arr);

$arr = [
    'ad' => 'kağan',
    'soyad' => 'yüksel',
    'yas' => 24,
    'site' => 'dijinom.com'
];
$random = array_rand($arr, 2);  // Burada random şekilde 2 adet dizi anahtarları çekilir.
$values = array_map(function($key) use($arr){   // array_map kullanılarak fonksiyon alınarak dizinin elemanlarını yazdırdık.
    return $arr[$key];  // use($arr) ile dışarıdaki diziyi fonksiyonumuza dahil ettik.
}, $random); // $random dizisinin kullanıldığı belirtildi.

print_r($values);
echo "<br>";
$arr = [1,2,3,4,5]; 
print_r($arr); 
echo "<br>";
$arr2 = array_reverse($arr);
print_r($arr2);
echo "<br>";

$arr = [
    "ad" => "kağan",
    "soyad" => "yüksel", 
    "a" => [
        "b" => [
            "c" => "d"
        ]
    ]
];
$test = array_search("d", $arr);
echo $test; 

function _array_search($cur, $arr)  // $cur kendimizin verdiği değişken isim
{
    foreach ($arr as $key => $val) {
        if ($val == $cur) {
            return true;
        }
        if (is_array($val)) { // iç içe dizilerde içeriye girebilmek için kullandık. Eğer diziyse yukarıdaki fonkisyonu çalıştır.
            return _array_search($cur, $val);
        }
    }
    return false;
}
$test = _array_search("d", $arr);
//echo $test; 
echo "<br>";

$arr = [1,2,3,4];
if (in_array('3', $arr)) {
    echo "3 değeri var";
}else {
    echo "3 değeri yok";
}
echo "<br>";
$arr = [1,2,3,4]; 
$ilk_eleman = array_shift($arr);  // Dizinin ilk elemanını siler. 
print_r($arr); 
echo $ilk_eleman; 
echo "<br>";

$arr = [1,2,3,4,5]; 
$arr2 = array_slice($arr,2); // -2 son 2 elemanı yazıdırır.
print_r($arr2); 
echo "<br>"; 

?>