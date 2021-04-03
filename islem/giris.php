<?php
if (isset($_POST['submit'])) { //submit nameli değer var ise
    $kullanici_adi = $_POST['kullanici_adi']; 
    $sifre = $_POST['sifre'];

    if (!$kullanici_adi || !$sifre) {
        echo '<script>alert("Kullanıcı adınızı ve şifrenizi boş bırakmayınız")</script>';
    }elseif ($kullanici_adi != $uye['kullanici_adi']) {
        echo '<script>alert("Kullanıcı adınızı yanlış girdiniz. Tekrar deneyin")</script>';
    }elseif ($sifre != $uye['sifre']) {
        echo '<script>alert("Şifrenizi yanlış girdiniz. Tekrar deneyin")</script>';
    }else {
        
        $_SESSION['zaman'] = time() + 10; // 10 snlik bir oturum sessionu oluşturduk.
        $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
        //header 
        // yukarıda session oluşturduk. oluşturulan sessionda uyuşma oluyorsa aşağıda verilen adresi gider.
        header('Location:/udemy/islem');
    }
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
    <form action="" method="post">
    Kullanıcı adı: 
    <input type="text" name="kullanici_adi"> <br> 
    <hr> 
    Şifre: 
    <input type="password" name="sifre"> <br> 
    <hr> 
    <input type="hidden"  name="submit" value="1">
    <input type="submit" value="Giriş yap">
    </form>
</body>
</html>