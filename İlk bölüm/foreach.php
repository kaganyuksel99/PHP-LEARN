<?php
/*
foreach : diziler için döngü işlemi başlatır.
foreach (dizi değişkeni as anahtar atanacak değişken => eleman atacak değişken) {
  // code...
}
*/
$sayilar = [1,2,3,4,5,6,7,8,9,10];

foreach ($sayilar as $sayi) {
  echo $sayi."<br>";
}
$uyedetay =[
  "ad" => "kağan",
  "soyad" => "yüksel",
  "yaş" => 22
];
foreach ($uyedetay as $key => $value) {
  echo $key.":".$value."<br>";
}
echo "<br>";
$renkler = ["mavi", "siyah", "kırmızı", "sarı", "lacivert", "mor"];


foreach($renkler as $renk){
  echo $renk. "<br>";
}
?>
