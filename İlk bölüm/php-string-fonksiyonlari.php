<?php

/*
    strlen() : Toplam karakter sayısını verir
    strstr() : Samanlı iğne mantığı diyebiliriz. İlk olarak aranacak yazı beliritli. 
Ardından içerisinde aranacak değer belirtilir.
    strpos() : Aaranan kelive sözcük kaçıncı sırada olduğunu belirtir.
    ucwords() : Her kelimenin baş harfini büyültür. 
    ucfirst(): Sadece cümlenin ilk harfini büyültür. 
    strtolower() : Büyük yazılan karanterleri küçük yapar. 
    strtoupper() : Küçük yazılan karanterleri büyük yapar. 
    trim(): Sağdaki ve soldaki boşlukları siler. silinmesi gerekn ifade yazıldığında da onu siler.
     ltrim() : sol boşluk ve istenilen karakterler silinir 
     rtrim() : sağ boşluk ve istenilen karakterler silinir
    substr() : Karakteri bölmemizi sağlıyor.
    str_replace() : Değer değiştirme
    str_repeat() : Belirtilen karakteri tekrar etmemizi sağlar
*/

$str = 'tayfun erbilen';

//echo strlen($str);
//echo strlen('tayfunerbilen');
//echo strpos('tayfun erbilen', 'n');
//$str = strtoupper($str);
//echo strtolower($str);

$str2 = "-tayfun-erbilen-";
//echo rtrim($str2, '-');
//echo substr($str, 0, -4); Kaçıncı karaterden başlanacağı ve sonrasında kaç karater gösterileceği

$str3 = 'tayfun erbilen, güner erbilen'; 
echo str_replace("erbilen", "talipoğlu", $str);

$str3 = str_replace(
    ["tayfun","erbilen","güner"],  // İkinci dizi değiştirilecek değerlerdir.
    ["ahmet", "talipoğlu", "hakan"],
    $str3
);
// echo str_repeat("*", 10);
for ($i = 1; $i <= 10; $i++){
    $repeatCount = ($i <= 5 ? $i : (10 - $i));
    echo str_repeat('-*0', $repeatCount) . '<br>';
}