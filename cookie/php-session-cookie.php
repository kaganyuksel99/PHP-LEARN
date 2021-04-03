<?php
session_start();
// $_SESSION['uye'] = [
//     "kullanici_adi" => "kağan", 
//     "sifre" => "59"
// ]; 

// print_r($_SESSION);
// setcookie('uye[id]',1, time() + 86400); 
// setcookie('uye[kullanici_adi]', 'kağan', time() + 86400); 
// setcookie('uye[sifre]', '123', time()+ 86400); 
print_r($_COOKIE);
?>