<?php

// 选择结构
$age=25;
if($age>=60){
	echo '老年';
}else if($age>=30){
	echo '中年';
}else if($age>=16){
	echo '少年';
}else{
	echo '童年';
}

$day='星期六';
switch($day){
	case '星期一':
		echo '吃包子';
	case '星期二':
	case '星期三':
	case '星期四':
		echo '吃油条';
	case '星期五':
		echo '吃面条';
		break;
	default:
		echo '今天周末，不吃了！';
		break;
}

?>