<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>zs2-3.php</title>
</head>
<body>
<?php
require_once("myschool_open.inc");
//執行SQL查詢
$result = mysqli_query($link, $sql);
echo "<table border=1><tr>";
    //顯示欄位資訊
while( $meta = mysqli_fetch_field($result) )
    echo "<td>".$meta->name."</td>";
echo "</tr>";
$total_fields = mysqli_num_fields($result);
while ($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    for ( $i = 0; $i <= $total_fields-1; $i++ )
        echo "<td>" . $row[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);//釋放占用記憶體
require_once("myschool_close.inc");
?>
</body>  
</html>