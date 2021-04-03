<?php
session_start();
ob_start();
require 'ayarlar.php';

if (isset($_SESSION['zaman']) && time() > $_SESSION['zaman']){
    session_destroy();
    header('Location:oturum_sonlandi.php');
} else {
    $_SESSION['zaman'] = time() + 10;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

    if (isset($_SESSION['kullanici_adi'])){
        include 'admin.php';  //oturum açmışım
    } else {
        include 'giris.php'; //oturum açmamışım 
    }

?>

</body>
</html>