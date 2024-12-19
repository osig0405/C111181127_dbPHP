<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>index.php</title>
</head>
<body>
<?php
session_start();
if ( $_SESSION["login_session"] != true)
    header("Location: login.php");
echo "歡迎使用者慶入網站!<br/>";
?>
</body>  
</html>