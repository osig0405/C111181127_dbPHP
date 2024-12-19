<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>zs1-2.php</title>
</head>
<body>
<?php
//建立MySQL的資料庫連接
$link = mysqli_connect("localhost","root","","myschool")
        or die("無法開啟MySQL資料庫連接!<br/>");
echo "資料庫myschool開啟成功!<br/>";
echo "主機資訊: ".mysqli_get_host_info($link)."<br/>";
echo "伺服器資訊: ".mysqli_get_server_info($link);
echo "<br/>伺服器版本: ".mysqli_get_server_version($link) . "<br/>";
echo "通訊協定版本: ".mysqli_get_proto_info($link);
echo "<br/>客戶端含市庫資訊: " . mysqli_get_client_info() . "<br/>";
echo "克復端含市庫版本: " . mysqli_get_client_version();
mysqli_close($link);  //關閉資料庫連接
?>
</body>  
</html>