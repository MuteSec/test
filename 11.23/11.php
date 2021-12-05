<pre>
<?php

/* 二维数组 */

$boys = ["tom","jack","mike"];
$girls = ["alice","lucy","rose"];
$wbs19071 = [
	$boys,
	$girls,
	["唐伯虎","秋香"],
];

#print_r($wbs19071);
// foreach($wbs19071 as $k => $v){
	// foreach($v as $key => $value){
		print_r($value);
		// echo "$value \t";
	// }
	// echo "<br/>";
// }

$arr=[["tom","jack","mike"],["alice","lucy","rose"]];
var_dump($arr);

// foreach($arr as $k => $v){
	// foreach($v as $key => $value){
		print_r($value);
		// echo "$value \t";
	// }
	// echo "<br/>";
// }

foreach($arr as $key => $value){
	foreach($value as $k => $v){
		echo "$v\t";
	}
	echo "<br/>";
}

?>
</pre>