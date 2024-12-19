<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>ch4-2-4.php</title>
</head>

<body>
    <?php
    // 指定變數值
    $name = "myName"; // 將字串 "myName" 賦值給變數 $name

    // 動態變數名稱
    $$name = "陳允東";  // 使用變數變數，將 "陳允東" 賦值給變數 $myName

    // 取出動態變數的值
    $username = $$name; // 將變數 $myName 的值賦值給 $username
    $username1 = ${$name}; // 使用變數變數語法，將變數 $myName 的值賦值給 $username1

    // 顯示變數內容
    echo "變數\$name = $name<br/>"; // 顯示變數 $name 的值
    echo "變數$$name = $myName<br/>"; // 顯示變數 $myName 的值
    echo "變數$$name = ${$name}<br/>"; // 顯示變數 $myName 的值，使用變數變數語法
    echo "變數\$username = $username<br/>"; // 顯示變數 $username 的值
    echo "變數\$username1 = $username1<br/>"; // 顯示變數 $username1 的值
    ?>
</body>

</html>