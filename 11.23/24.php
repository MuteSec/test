<?php

/* Session会话 */
// 启动Session
session_start();

// 获取Session的id
// echo session_id();

// $_SESSION["username"]="tom";
// $_SESSION["age"]=18;
// $_SESSION["nums"]=[1,2,3];
// $_SESSION["user"]=["id"=>1001,"name"=>"alice","sex"=>"female"];

// 获取Session中的数据

// print_r($_SESSION["user"]["sex"]);

// 删除session中的数据
// unset($_SESSION["age"]);

// 清空session
session_destroy();

print_r($_SESSION);

// setcookie("PHPSESSID",null,time()-1,"/");

?>