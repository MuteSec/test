<?php

/* 数组相关的函数 */
//1.count()
$names=["tom","jack","alice"];
// echo count($names);

//2.list()
// $a = $names[0];
// $b = $names[1];
// $c = $names[2];
// list($a,,$c)=$names;
// echo $a,$c;

//3.in_array()
// var_dump (in_array("tom",$names));

//4.array_search()
// var_dump(array_search("jack",$names))

//5.implode()
// var_dump(implode("#",$names));

//6.explode()
// print_r(explode(",","hello,world,welcome,to,php"));

//7.unset()
// unset($names[1]);// 删除$names中索引为1的元素
unset($names[array_search("jack",$names)]);
var_dump($names);
// 注意：删除数组中元素以后，数组中元素的索引时不连续的，无法使用for进行循环
// 可以重置数组索引，将不连续的索引再重新排序，使其连续

//8.array_values()
// $names = array_values($names);
// print_r($names);

?>