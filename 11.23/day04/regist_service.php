<?php

// print_r($_POST);
require "user_dao.php";
/* 获取用户信息 */

$user = [];
$user["uname"] = $_POST["uname"];
$user["upass"] = $_POST["upass"];
$user["ugender"] = $_POST["ugender"];
$user["ufavs"] = implode(",",$_POST["ufavs"]);
$user["udesc"] = $_POST["udesc"];
$user["ucourseid"] = $_POST["ucourseid"];
$user["uclassid"] = $_POST["uclassid"];

insertUser($user);
// print_r($user);

?>