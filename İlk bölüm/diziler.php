<?php
$kimlik = array("Kağan", "Yüksel", "Öğrenci", 22);
echo "<pre>";
print_r($kimlik);
echo "</pre>";

echo $kimlik[1];
// echo "$kimlik["anahtar adı"]";

$kimlik2 = ["ad" =>"kağan", "soyad" => "yüksel", "meslek" => "öğrenci", "yaş" => 21]; //*** ikinci dizi oluşturma yolu. GÜZEL
echo "<pre>";
print_r($kimlik2);
echo "</pre>";

// iç içe dizi oluşturma
$kategoriler = ["siteler" => ["e-ticaret" => ["sahibinden", "n11", "hepsiburada", "gittidiyor"],"eğitim" => ["udemy", "btk", "prototürk"]]];
echo "<pre>";
print_r($kategoriler);
echo "</pre>";
echo $kategoriler["siteler"]["e-ticaret"][2];
echo "<br>";
echo $kategoriler["siteler"]["eğitim"][2];
echo "<br><br>";

// ** SAABİT DEĞİŞKENLERDE DİZİLERİN KULLANIMI

define("uye", ["ad" =>"kağan", "soyad" => "yüksel","meslek" => "öğrenci", "yas" => 21, "sporlar" => ["futbol", "basketbol"]]);
// define("uye", array()); olarakta kullanılabilir.
echo "<pre>";
print_r(uye);
echo "</pre>";

echo uye;
?>
