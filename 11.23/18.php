<?php

/* 在函数内不能直接访问函数外的全局变量 */

$num=5; // 全局变量
function f1(){
	global $num; // 通过glabal引用全局变量
	$num=8; // 修改全局变量
	// echo $num;
}

// f1();
// echo $num;

/* 函数内的静态变量：只在函数第一次调用时初始化 */

// $count=1;
function f2($name){
	// $count=1; // 局部变量
	static $count=1; // 静态变量
	// global $count;
	echo "$count : $name"."<br/>";
	$count++;
}
f2("tom");
f2("jack");


/* 动态调用函数：根据外部传入的函数名来决定要调用的函数 */
function hello($name){
	return "hello...$name";
}

function world($name){
	return "world...$name";
}

// $method="hello";
// $method="world";
// $name="tom";
// echo $method($name);

?>