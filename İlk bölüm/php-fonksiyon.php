<?php

    function test()
    {
        return "test";
    }

    $a = test();
    //echo $a;

    function topla($sayi1 = 2, $sayi2 = 10)
    {
        return ($sayi1 + $sayi2);
    }

    $toplam = topla(29,2);
    //echo $toplam;

    $ad = "kağan";
    function adsoyad($soyad)
    {
      //global $ad; dışarıdaki değişkeni kullanabilme yolu 1
      return $GLOBALS['ad']." ". $soyad;
    }
    //echo adsoyad("Yüksel");

    $yazi = "kağan yüksel kağan yüksel";
    //echo substr($yazi,0, 10); //yazı kısaltma yaptık. 0. satırdan 10. satıra kadar olan bölümü aldık ve yazdıkdık.

    function kisalt($str, $limit = 10)
    {
      $karaktersayisi = strlen($str);
      if ($karaktersayisi>$limit) {
        $str = substr($str,0, $limit). "..";
      }
      return $str;
    }
    echo kisalt($yazi, 5);
?>
