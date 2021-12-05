<?php

/* 查询所有课程信息 
	@return 返回所有课程数组
*/
function selectAllCourses(){
	$sql = "select courseid,coursename from t_course";
	$conn = mysqli_connect("localhost","root","123456","php");
	$result = mysqli_query($conn,$sql);
	$courses = [];
	while($course = mysqli_fetch_assoc($result)){
		$courses[] = $course;
	}
	mysqli_close($conn);
	return $courses;
}

// print_r(selectAllCourses());
// $test = selectAllCourses();
// foreach($test as $name){
	// print_r($name["coursename"]);
// }
?>