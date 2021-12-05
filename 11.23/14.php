<?php

/* 字符串函数 */
//1.strlen()
// echo strlen("hello");
// echo strlen("你好hello"); // 11 (utf8_decode编码中每个汉字占3个字节)

// 2.mb_strlen() 按字符处理
// echo mb_strlen("你好hello"); // 7，按字符处理

/* 如果要对中文这一类多字节文本进行处理，需要启用多字节字符串处理模块 */

// 3. mb_substr() 截取
// echo mb_substr("你好hello",2,4);

// 4. mb_strpos() 子串出现的位置
// echo mb_strpos("你好hello","e")

// 5. mb_strtoupper() 转换为大写，mb_strtolower() 转换为小写
// echo mb_strtoupper("hello"); //转换为大写
// echo mb_strtolower("HELLO");//转换为小写

// 6. str_replace()
// echo str_replace("e","xyz","helo");

// 7. trim() 去除首尾空格
echo mb_strlen(trim("  hello  "));

?>