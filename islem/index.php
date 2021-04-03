<?php
session_start();
//session_destroy();  önceden kalan session değerleri varsa hepsini siliyoruz.
// print_r($_SESSION);
ob_start(); 
require 'ayarlar.php';

if (isset($_SESSION['zaman']) && time() > $_SESSION['zaman']){ //oturum açılıdığındaki zaman ve üzerinden geçen zaman oluşturulan sesionı geçerse sistemi sonlandırır.
    session_destroy();
    header('Location:oturum_sonlandi.php');
}else {
    $_SESSION['zaman'] = time() + 10;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_SESSION['kullanici_adi'])) {
        //oturum açmışım 
        include 'admin.php';
    }else {
        //oturum açmamışım
        include 'giris.php';
    }
    ?>
</body>
</html>