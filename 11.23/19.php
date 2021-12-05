<?php

/* 访问mysql */

// 1.获取连接
$conn = mysqli_connect("localhost","php","123456","php"); // 参数：地址和端口，用户名，密码，数据库名
// print_r($conn); // 如果成功返回object
// var_dump($conn); // 如果失败返回false
echo mysqli_connect_error(); // 获取连接的错误信息
// echo mysqli_connect_errno($conn); // 获取连接的错误码
// if($conn){
	// echo "成功";
// }


// if(mysqli_connect_error()){
	// echo mysqli_connect_errno();
	// exit();
// }


/* 执行sql语句(增，删，改) */

// $sql="insert into dept(d1eptno,dname,loc) values (50,'市场部','南京')";

// $sql = "update dept set dname='开发部',loc='上海' where deptno=50";

// $sql = "delete from dept where deptno=50";

// $result = mysqli_query($conn,$sql); 


// var_dump($result); // 如果你执行成功返回true，执行失败返回false

// if($result){
	// echo "success";
// }else{
	// echo "error";
	// echo "<br/>";
	// echo mysqli_error($conn); // 获取执行时的错误信息
// }

// 3.关闭连接

mysqli_close($conn);

?>