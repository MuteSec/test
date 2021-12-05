<?php

/* 正则表达式函数 */

// 1.preg_match() 判断字符是否匹配正则表达式
// echo preg_match("/^hello$/","hello"); // 匹配返回1，不匹配返回0

// echo preg_match("/^\d{11}$/",13888888888);

// 2.preg_replace() 替换
// echo preg_replace("/\d{4}$/","****","13888888888");

// 去掉左侧空格
// echo "[" .preg_replace("/^\s+/","","  hello  ") . "]";
// echo "[" .preg_replace("/\s+$/","","  hello  ") . "]";
// echo "[" .preg_replace("/^\s+|\s+$/","","  hello  ") . "]";

// echo trim("")

?> 