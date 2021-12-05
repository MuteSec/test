<?php

/* 查询所有班级信息 
	@return 返回所有班级数组
*/
function selectAllClasses(){
	$sql = "select classid,classname from t_class";
	$conn = mysqli_connect("localhost","root","123456","php");
	$result = mysqli_query($conn,$sql);
	$classes = [];
	while($class = mysqli_fetch_assoc($result)){
		$classes[] = $class;
	}
	mysqli_close($conn);
	return $classes;
}

// print_r(selectAllClasses());
?>