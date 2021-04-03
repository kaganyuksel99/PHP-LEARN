<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $baslangic = 1;
    while ($baslangic <= 1000) {


      echo "Döngü çalışma Numarası". $baslangic. "<br>";

      if ($baslangic==5) {
      break;
      }
      $baslangic++;

    }

$sayi = 0;
while ($sayi <= 50) {
  $sayi++;
  if (($sayi >10) and ($sayi <=20)) {
    continue;
  }
echo $sayi."<br>";
}
    ?>
  </body>
</html>
