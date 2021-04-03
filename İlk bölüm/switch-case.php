<?php
$a = "Ramazan";

switch ($a) {          //parantez içine değişken yazılır
  case "Ramazan":
    echo "ilk adınız ramazandır.";
    break;
  case '6':
    echo "a 6'ya eşittir.";
    break;

  default:
    echo "hiçbir doğrulama bulunamadı.";
    break;
}
?>
