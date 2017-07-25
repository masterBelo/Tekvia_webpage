<?php
session_start();
if(!empty($_SESSION['ide'])){
  echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=index.php'/>";
}
?>
