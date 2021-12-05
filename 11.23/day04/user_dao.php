<?php

/* 添加用户 */

function insertUser($user){
	$conn = mysqli_connect("localhost","root","123456","php");
	
	$sql = "insert into t_user(uname,upass,ugender,ufavs,udesc,ucourseid,uclassid) value ('{$user["uname"]}',password('{$user["upass"]}'),'{$user["ugender"]}','{$user["ufavs"]}','{$user["udesc"]}',{$user["ucourseid"]},{$user["uclassid"]})";
	$res = mysqli_query($conn,$sql);
	// if($res){
		// echo "成功";
	// }else{
		// echo "失败";
	// }
	var_dump($res);
	
}

?>