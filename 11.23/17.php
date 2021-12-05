<?php

/* 自定义函数 */

// function f1($name){
	// echo "hello $name";
	// return $name;
// }

// $res = f1("tom");
// echo $res;

/* 参数默认值 */

// function f2($id,$name="admin"){ // 有默认值的参数要放在参数列表的后面
	// echo "$id $name";
// }

// f2(1001,"test");

/* 不定长参数 */

// function f3($a,$b,...$args){ //不定长参数只能放在参数列表的最后
	// print_r($args);
	// echo $a."<br/>";
	// echo $b."<br/>";
	// $sum=0;
	// foreach($args as $key => $value){
		// $sum+=$value;
		echo $value;
	// }
	// return $sum; 
// }
// echo f3(1,2,3,4,5);

/* 引用参数 
	在函数形参前添加&，表示引用参数
	在函数内对引用参数的修改，在函数外可以获取到
	引用参数既可以传入值，也可以返回值
*/
function f4($a,&$b){
	$a++;
	$b++;
	return $a+$b;
}
$x=2;
$y=5;
echo f4($x,$y)."</br>";
echo "$x $y";


?>