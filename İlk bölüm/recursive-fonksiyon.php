<?php
function  say($sayi)
{
    echo $sayi;
    if ($sayi <10) {
        say($sayi + 1);
    } 
}
//say(1);

$kategoriler = [
    [
        "id" =>1 ,
        "parent" =>0, 
        "ad" => "dersler"
    ],
    [
        "id" =>2 ,
        "parent" =>0, 
        "ad" => "güncel"
    ],
    [
        "id" =>3 ,
        "parent" =>0, 
        "ad" => "blog"
    ],
    [
        "id" =>4 ,
        "parent" =>1, // parent 1 olmasının sebebi hangi kategorinin altına geleceklse o numara verilir. 
        "ad" => "php dersleri"
    ],
    [
        "id" =>5 ,
        "parent" =>1, 
        "ad" => "css dersleri"
    ],
    [
        "id" =>6 ,
        "parent" =>4,
        "ad" => "fonksiyonlar"
    ],
    [
        "id" =>7 ,
        "parent" =>4, // 
        "ad" => "değişken kullanımı"
    ],
    [
        "id" =>8 ,
        "parent" =>6, // 
        "ad" => "recursive fonksiyonlar"
    ]
    ];
echo "<pre>";
print_r($kategoriler); 
echo "</pre>";

function kategoriListele($kategoriler, $parent = 0) // ilk listelenler ana kategoriler olsun.
{
    $html = ''; 
    $html.= "<ul>";
    foreach ($kategoriler as $kategori) {
        if ($kategori['parent'] == $parent) {
            $html.= "<li>".$kategori['ad'];
            $html.= "<pre>"; 
            $html.= kategoriListele($kategoriler, $kategori["id"]);
            $html.= "</pre>";
            $html.= "</li>";
        }
        
    }
    $html.="<ul>";
    return $html;
}
//echo kategoriListele($kategoriler); 

$arr = [
    "ad" => "kağan", 
    "soyad" => "yüksel", 
    "sporlar" => [
        "yüzme" => "evet",
        "koşma" => "evet", 
        "savunma_sporlari" => [
            "jeetkundo" => "evet", 
            "judo" => "hayır"
        ]
    ]
];

function dizide_bul($dizi, $anahtar)
{
    foreach ($dizi as $key) 
    {
        if ($key == $anahtar) {
            return $val;
        }
    }
    return false;
}
echo dizide_bul($arr, "soyad");
?>