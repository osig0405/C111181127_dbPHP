<!DOCTYPE html> <!-- HTML5 文檔類型聲明 -->
<html> <!-- HTML 根元素開始 -->

<head> <!-- 頭部區域開始 -->
    <meta charset="utf-8" /> <!-- 設置字符編碼為 UTF-8 -->
    <title>ch2-1.php</title> <!-- 設置頁面標題 -->
</head> <!-- 頭部區域結束 -->

<body> <!-- 主體區域開始 -->
    <?php // PHP 代碼區塊開始
    $begin = 12; // 設置起始值為 12
    $end = 18; // 設置結束值為 18
    for ($i = $begin; $i <= $end; $i += 3) { // 使用 for 循環，從 $begin 到 $end，每次遞增 3
        ?> <!-- PHP 代碼區塊結束，開始輸出 HTML -->
        <p style="font-size:<?php echo $i; ?>pt"> <!-- 創建段落元素，設置字體大小為 $i 點 -->
            我的第一個PHP程式 <!-- 輸出文本 -->
            <?php // PHP 代碼區塊開始
            print "</p>"; // 輸出段落結束標籤
    } ?> <!-- PHP 代碼區塊結束，循環結束 -->
</body> <!-- 主體區域結束 -->

</html> <!-- HTML 根元素結束 -->