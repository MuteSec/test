<?php

/* 保存返回主键 
	添加列：alter table dept add id int primary key auto_increment;
*/

$conn = mysqli_connect("localhost","php","123456","php");

$sql = "insert into dept (deptno,dname,loc) values (50,'人才部','广州')";
// $sql = "delete from dept where loc='北京'";

$res = mysqli_query($conn,$sql);
// var_dump($res);
if($res){
	echo 'success';
	echo mysqli_insert_id($conn); // 获取返回的主键
}else{
	echo mysqli_error($conn);
}

mysqli_close($conn);

?>