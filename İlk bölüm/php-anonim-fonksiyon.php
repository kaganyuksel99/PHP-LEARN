<?php
$test = function ($par){
  return 'test'. $par;
};

$test2 = function() use ($test)
{
  return "test2". $test("test 3 ");
};
echo $test2();
//echo $test("kağan");

$arr = [
  function (){
    return "1. fonksiyon";
  },
  function (){
    return "2. fonksiyon";
  },
  function (){
    return "3. fonksiyon";
  }
];
//echo $arr[rand(0,2)]();

$soyad = "yüksel";
function filtrele($isim)
{
  global $soyad;
  return $isim." "."". $soyad;
}
$arr = ["Kağan", "Rüzgar", "Nalan", "Ümit"];
$arr = array_map(function($isim) use($soyad){  // anonim fonksiyonda dışarıdaki bir değişkeni use($değişkenadı) şeklinde kullanabiliriz.
  return $isim." "."". $soyad;
}, $arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>
