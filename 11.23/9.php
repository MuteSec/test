<?php 

// $names = ["tom","jack","alice"];
// echo $names[0];
// print_r($names); //输出复杂类型变量，输出信息更易读

// print_r("数组长度: ".count($names));

$names[1]="mike";
// $names[count($names)]="admin";
$names[]="admin"; //省略索引时默认就是添加到数组末尾
// print_r($names);

// /* 循环输出 */
// 方式1：使用for
// for($i=0;$i<count($names);$i++){
	// print_r($names[$i]);
// }

// 方式2：使用foreach
// foreach($names as $name){
	// print_r($name);
	
// }
// foreach($names as $key => $value){
	// print_r("$key:$value"."<br/>");
	
// }

$nums=[];
for($i=0;$i<100;$i++){
	if($i%3==0){
		$nums[]=$i;
		#echo $i;
	}
	print_r($nums);
}

?>