<?php

function f1($name){
	static $count=1;
	// $count=1;
	echo "$count:$name";
	$count++;
}
// f1("tom");
// f1("jack");
// f1("alice");

function f2($a,&$b){
	$a++;
	$b++;
	return $a+$b;
}
// $a=1;
// $b=2;
// $c=&$b;
// $b=3;
// echo f2($a,$c);
// echo $b;

$conn = mysqli_connect("localhost","root","123456","php");
$sql = "select deptno,dname,loc from dept";
$res = mysqli_query($conn,$sql);
// print_r(mysqli_fetch_assoc($res));
if($res){
	while($row=mysqli_fetch_assoc($res)){
		foreach($row as $key => $value){
			echo "$value\t";
		}
		echo "<br/>";
	}
	echo mysqli_num_rows($res);
}else{
	echo mysqli_error($conn);
}
mysqli_close($conn);

?>