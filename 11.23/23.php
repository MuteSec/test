<?php

/* 写入cookie */
// setcookie("username","tom");
// setcookie("username","汤姆"); // 修改Cookie
// setcookie("age","28",time()+7*24*60*60,"/");

// setcookie("sex","male",time()+5*60,"/day01");

setcookie("age",null,time()-1,"/");

/* 读取cookie */
// print_r($_COOKIE["sex"]);

echo "success";


?>

<script>

/* 通过JavaScript读取Cookie */
// console.log(document.cookie);
console.log(decodeURIComponent(document.cookie));
</script>