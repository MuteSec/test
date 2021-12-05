<?php

/* 内置函数 */
// 1.phpinfo() 返回php的所有环境和配置信息
// phpinfo();

// 2.header() 设置响应头
// header("content-type:text/plain;charset=utf-8"); //设置响应类型和字符集
// header("location:https://www.baidu.com"); // 设置地址，实现页面跳转
// header("HTTP/1.0 404 Page Not Found");

// 3.exit(),die() 终止脚本的执行
// echo "<h3>呵呵</h3>";
// exit("程序终止");
// die("程序终止");
// return;

// 4.isset(),empty()
// $a = 5;
// var_dump(isset($a)); // 判断变量是否已设置，并且非null
// var_dump(empty($a)); // 判断变量是否为空，它的值等于false(nill,0,false,"")

// 5.is_类型() 判断值的类型
// var_dump(is_string(1));
// var_dump(is_int(1.1));
// var_dump(is_float(1.1));
// var_dump(is_bool(1));
// var_dump(is_null(1));

// 6.sleep() 休眠
// sleep(3);
// echo "醒了";

// 7.数学：rand(),round(),ceil(),floor()
// echo rand();
// echo rand(0,9); // [0,9]
// echo round(3.1415926); // 四舍五入
// echo round(3.1415926,3);
// echo ceil(4.6); // 返回大于指定数字的最小整数
// echo floor(4.6); // 返回小于指定数字的最大整数

// 8.输出：echo，print(),print_r(),var_dump()
// echo (11); //只能输出一个值
// echo 11,22,33; // 可以输出多个值，以逗号隔开

// print(11);
// print 11;

// $nums=[1,2,3];
// print_r($nums); // 用来输出复杂类型的变量，如数组，对象等

// $name="tom";
// var_dump($name); // 输出变量的类型和值

?>