
<?php
session_start();  
echo "啟用交談期<br/>";
if ( !isset($_SESSION["page_counter"]) ) {
   $_SESSION["page_counter"] = 1; 
} else { 
   $_SESSION["page_counter"]++;
}
$value = $_SESSION["page_counter"]; 
echo "使用者Session ID:" . session_id() ."<br/>";
echo "進入網頁次數: $value<br/>";
if ( $value >= 5 ) {  
   
   unset($_SESSION["page_counter"]);
   if ( !isset($_SESSION["page_counter"]) ) {
      echo "Session變數page_counter不存在!<br/>";
      session_destroy();  
      echo "關閉交談期<br/>";
   }
}
?>
