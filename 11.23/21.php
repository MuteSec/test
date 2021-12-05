<?php

	/* 查询操作 */

$conn=mysqli_connect("localhost","php","123456","php");

$sql="select deptno,dname,loc from dept where deptno>=30";

$res=mysqli_query($conn,$sql);

// var_dump($res);
// print_r($res); // 对于查询操作，如果成功返回mysqli_result Object对象，如果失败返回false

if($res){
	/* 每次获取一行，返回一个键值数组，列名作为key，列值作为value 
	当获取不到时，返回null
	*/
	// print_r(mysqli_fetch_assoc($res));
	// var_dump(mysqli_fetch_assoc($res));
	
	/* 循环获取 */
	while($row=mysqli_fetch_assoc($res)){
		// print_r($row);
		foreach($row as $key => $value){
			echo $key." : ".$value." , ";
		}
		echo "<br/>";
	}
	
	/* 获取结果集中的总行数 */
	echo mysqli_num_rows($res); // 可根据总行数判断是否找到匹配的数据
	
}else{
	echo mysqli_error($conn);
}

mysqli_close($conn);

?>