<?php

$isimler = ["ramazan", "kağan", "yüksel",["ayşe", "fatma", "hayriye", "derya"], "serkan", "cüneyt"];

if (is_array($isimler)) {  // $isimler'in dizi olup olmadığı kontrol edilir.   echo "dizidir.";
}else {
  echo "dizi değildir";
}

echo "<pre>";
print_r($isimler);
echo "<br><br>";

foreach ($isimler as $icerik) {
  if(is_array($icerik)){
    foreach($icerik as $deger){
      echo $deger."<br>";
    }
  }else {
    echo $icerik;
  }
}

echo "<br><br>";
$isimlerr = ["ramazan", "kağan", "yüksel",["ayşe", "fatma", ["siyah", "beyaz", "mavi"],"hayriye", "derya"], "serkan", "cüneyt"];

foreach ($isimlerr as $ici) {
  if (is_array($ici)) {
    foreach ($ici as $yeni) {
      if (is_array($yeni)) {
        foreach ($yeni as $son) {
          echo $son."<br>";
        }
      }else {
        echo $yeni."<br>";
      }
    }
  }else {
    echo $ici."<br>";
  }
}
?>
