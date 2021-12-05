<?php

include "course_dao.php";
include "class_dao.php";

$courses = selectAllCourses();
$classes = selectAllClasses();

?>
<html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<form action="regist_service.php" method="post">
	用户名:<input type="text" name="uname"></br>
	密码:<input type="password" name="upass"><br/>
	性别:<input type="radio" name="ugender" value="male" checked>男
		<input type="radio" name="ugender" value="female">女<br/>
	爱好:<input type="checkbox" name="ufavs[]" value="eat">吃饭
		<input type="checkbox" name="ufavs[]" value="sleep">睡觉
		<input type="checkbox" name="ufavs[]" value="doudou">打豆豆<br/>
	课程:<select name="ucourseid">
			<option value="0">--请选择课程--</option>
			<?php
			foreach($courses as $course){
			?>
			
				<option value='<?=$course["courseid"]?>'><?=$course["coursename"]?></option>
			<?php
			}
			?>
			
		</select><br/>
	班级:<select name="uclassid">
			<option value="0">--请选择班级--</option>
			<?php
			
			foreach($classes as $class){
				echo "<option value='{$class["classid"]}'>{$class["classname"]}</option>";
			}
			
			?>
			
		</select><br/>
	简介:<textarea name="udesc" cols="30" rows="10"></textarea>
	<input type="submit" value="注 册">
	</form>
</body>
</html>