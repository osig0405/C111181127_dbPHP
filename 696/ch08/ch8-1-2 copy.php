<?php
$ip = $_SERVER["REMOTE_ADDR"];

print 'Ip Address' . ''. $ip .'';
?>

<table border="1">
   <tr>
      <td>1</td>
      <td>2</td>
   </tr>

   <?php
   foreach($_SERVER as $key => $value) {
      echo "<tr><td>" . $key . "</td>";
      echo "<td>" . $value . "</td></tr>";
   }
   ?>
</table>