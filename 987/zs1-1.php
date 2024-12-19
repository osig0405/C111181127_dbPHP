<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>zs1-1.php</title>
</head>
<body>
<?php
//建立MySQL的資料庫連接
echo"hello sc this is the first php program!!<br/>";
$link = @mysqli_connect(
            'localhost',  //MySQL主機名稱
            'root',       //使用者名稱
            '',      //密碼
            'myschool');  //預設使用的資料庫名稱
if( !$link ) {
    echo "MySQL資料庫連接錯誤!<br/>";
    exit();
}
else {
    echo "MySQ資料庫myschool連接成功!<br/>";
}
mysqli_close($link);  //關閉資料庫連接
?>
</body>  
</html>