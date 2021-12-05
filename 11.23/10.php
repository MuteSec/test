<?php

/* 在php中，除了可以定义索引数组还可以定义键值数组 */

$names=[
	"a1" => "tom",
	"a2" => "jack",
	"a3" => "alice",
];
$names["a4"]="mike";
// print_r($names);
// print_r($names["a1"]);
/* foreach($names as $key => $value){
	print_r("$value"."<br/>");
} */

/* $nums=[
	[
	"a1" => "tom",
	"a2" => "jack",
	],
	[
	"a3" => "alice",
	"a4" => "teacher",
	],
];

foreach($nums as $k=>$v){
	foreach($v as $key => $value){
		print_r($value);
	}
} */

// 值传递和引用传递
// $names2 = $names; //按值传递
// $names2 = &$names; //按引用传递
// $names["a1"] = "admin";
// print_r($names);
// print_r($names2);

// $nums=[];
// if($nums){
	// echo "数组中有元素";
// }else{
	// echo "数组为空，没有元素";
// }



?>