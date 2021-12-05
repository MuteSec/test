<?php

/* 日期函数 */

// 1. time() 返回1970.1.1至今的秒数
// echo time();

// 2. date() 对日期进行格式化
// date_default_timezone_set("Asin/Shanghai");
echo date("Y-m-d H:i:s"); // 默认为当前的日期时间
// echo date("Y-m-d H:i:s",time()-7*24*60*60);

/* 设置时区，两种方式 
	1.临时设置页面时区，只对当前页面有效
	使用date_default_timezone_set()
*/

// 3. mktime() 返回指定日期时间的秒数
// $time = mktime(12,30,25,2,14,2019);
// echo date("Y-m-d H:i:s",$time);
//2019-02-14 12:30:25

?>