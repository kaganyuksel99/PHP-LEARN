<?php
// setcookie()
// $_COOKIE

//setcookie("site", "udemy", time() + 86400); // site cookienin adı. udemy ise değeri. 10 ise 10 saniyelik bir cookie olduğudur. 
// 1 gün 84600 sndir. oluşturduğumuz cookie 1 gün kalacaktır. 

setcookie("site", "test", time() - 86400); // cookie silme kodu
//print_r($_COOKIE);
?>