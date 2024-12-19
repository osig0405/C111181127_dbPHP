<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>sql1-1.php</title>
</head>
<?php
if ( isset($_POST["Query"]) ) {
    $sql = stripslashes($_POST["sql"]);
    echo "SQL指令:<b> $sql </b><br/>";
    $link = @mysqli_connect("localhost", "root", "")
            or die("無法開啟MySQL資料庫連接!<br/>");
    mysqli_select_db($link, "myschool");
    $result = @mysqli_query($link,$sql);
    if( mysqli_errno($link) != 0 ){
        echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
        echo "錯誤訊息: ".mysqli_errno($link)."<br/>";
    }
    else{
        echo "<br/><table border=1>";
        echo "<tr>";
        while ( $meta = mysqli_fetch_field($result) )
            echo "<td>".$meta->name."</td>";
        echo "</tr>";
        $total_fields = mysqli_num_fields($result);
        while ($rows = mysqli_fetch_array($result, MYSQL_NUM)) {
            echo "<tr>";
            for ($i = 0; $i < $total_fields; $i++ )
                echo "</td>".$rows[$i]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        $total_records = mysqli_num_rows($result);
        echo "紀錄總數: $total_records 筆<br/><br/>";
        mysqli_free_result($result);
    }
    mysqli_close($link);
}
else
    $sql = "SELECT * FROM students";
?>
<from method="post" action="sql1-1.php">
<textarea name="Sql" cols="50"><?php echo $sql ?></textarea>
<input type="submit" name="Query" value="查詢">
</from>
</body>  
</html>