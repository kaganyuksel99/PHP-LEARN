<?php 
session_start(); 

// $_SESSION['kullanici_adi'] = 'kagan'; 
// $_SESSION['parola'] = 'yüksel';  

// unset($_SESSION['parola']);  belirlenen sessionu kaldırma

echo $_SESSION['kullanici_adi']; 

session_destroy();  // sesssion sonlandırma
?>