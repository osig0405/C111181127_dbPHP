<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login.php</title>
</head>
<?php
session_start();
$username = ""; $password = "";
if( isset($_POST["Username"]) )
    $username = $_POST["Username"];
if( isset($_POST["Password"]) )
    $password = $_POST["Password"];
    if ($password != "" && $password != ""){
        $link = mysqli_connect("localhost","root","","myschool")
            or die("無法開啟MySQL資料庫連接!<br/>");
    $sql = "SELECT * FROM students WHERE password='";
    $sql.= $password."' AND username='".$username."'";
    $result = mysqli_query($link, $sql);
    $total_records = mysqli_num_rows($result);
    if( $total_records > 0 ){
        $_SESSION["login_session"] = true;
        header("Location: index.php");
    }  else{
        echo "<center><font color='red'>";
        echo "使用者名稱或密碼錯誤!<br/>";
        echo "</font>";
        $_SESSION["login_session"] = false;
    }
    mysqli_close($link);
}
?>
<form action="login.php" method= "post">
<table align="center" bgcolor="#FFCC99">
    <tr><td><font size="2">使用者名稱:</font></td>
    <td><input type="text" name="Username" size="15" maxlength="10"/>
</td></tr>
<tr><td><font size="2">使用者密碼:</font></td>
    <td><input type="password" name="Password" size="15" maxlength="10"/>
</td></tr>
<tr><td colspan="2" align="center">
    <input type="submit" value="登入網站"/>
</td></tr>
</from>
</body>  
</html>