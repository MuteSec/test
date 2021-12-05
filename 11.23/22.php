<?php

/* 事务操作 
	transaction
	转账：一个事务，由两个sql操作组成，如张三给李四转账
	update 张三
	update 李四
*/

/* 必须使用InnoDB引擎才能进行事务操作 */

$conn = mysqli_connect("localhost","root","123456","php");

// 开启事务

mysqli_query($conn,"begin");
$flag=true; // 用于标识程序执行是否正常，true表示正常

$dnames = ["a11","b11","cc"];
foreach($dnames as $dname){
	$sql = "insert into dept(deptno,dname) values (".rand(100,999).",'$dname')";
	mysqli_query($conn,$sql);
	
	if(mysqli_errno($conn)!=0){
		$flag=false;
	}
}

if($flag){
	// 提交事务
	mysqli_query($conn,"commit");
	echo 'commit';
}else{
	// 回滚事务
	mysqli_query($conn,"rollback");
	echo 'rollback';
}



mysqli_close($conn);

?>