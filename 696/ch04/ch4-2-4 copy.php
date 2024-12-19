<?php
$name = "myName"; // 將字串 "myName" 賦值給變數 $name
$$name = "ChengYuDao";  // 使用變數變數，將 "ChengYuDao" 賦值給變數 $myName

$username = $$name; // 將變數 $myName 的值賦值給 $username
$username1 = ${$name}; // 使用變數變數語法，將變數 $myName 的值賦值給 $username1

